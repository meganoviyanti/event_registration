<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Pendaftaran;

class RegistrationController extends Controller
{
    //pendaftaran
    public function index()
{
    $pendaftarans = Pendaftaran::all();
    return view('registration.index', compact('pendaftarans'));
}
    
    //register
    public function create()
    {
        return view('registration.create'); 
        
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:registrations',
            'phone' => 'required|string|max:20',
        ]);

        // Simpan data pendaftaran
        $registration = Registration::create($request->only(['name', 'email', 'phone']));

        // Arahkan ke halaman transaksi
        return redirect()->route('transaction.show');

        //pendaftaran
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'telepon' => 'required',
        ]);
    
        $pendaftaran = new Pendaftaran();
        $pendaftaran->nama = $request->nama;
        $pendaftaran->email = $request->email;
        $pendaftaran->telepon = $request->telepon;
        $pendaftaran->save();
    
        return redirect()->route('registration.index')->with('success', 'Data pendaftaran berhasil ditambahkan!');
    }

    public function transaction()
    {
        return view('registration.transaction');
    }

    public function processTransaction(Request $request)
    {
        // Proses transaksi pembayaran tiket di sini

        // Arahkan ke halaman sukses atau tampilan pesan sukses
        return redirect()->route('registration.success');
    }
 public function success()
    {
        return view('registration.success');
    }
//pendaftaran
public function edit($id)
{
    $pendaftaran = Registration::where('id', $id)->firstOrFail();
    return view('registration.edit', compact('pendaftaran'));
}


    public function update(Request $request, Pendaftaran $pendaftaran)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|string|email|max:100|unique:pendaftarans,email,'.$pendaftaran->id,
            'telepon' => 'required|string|max:15',
        ]);

        $pendaftaran->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'telepon' => $request->telepon,
        ]);

        return redirect()->route('registration.index')
            ->with('success', 'Pendaftaran berhasil diperbarui.');
    }

    public function destroy(Pendaftaran $pendaftaran)
    {
        $pendaftaran->delete();

        return redirect()->route('registration.index')
            ->with('success', 'Pendaftaran berhasil dihapus.');
    }
}
