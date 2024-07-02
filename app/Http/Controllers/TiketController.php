<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tikets = Tiket::all(); 
        return view('tiket.index', compact('tikets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tiket.create');
        
    }

    public function registrasi()
    {
        return view('tiket.registrasi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_pembeli' => 'required|string',
            'kategori_tiket' => 'required|string',
            'jumlah' => 'required|integer',
            'tanggal' => 'required|string',
        ]);

        // Simpan data ke dalam database
        $tiket = new Tiket();
        $tiket->nama_pembeli = $request->nama_pembeli;
        $tiket->kategori_tiket = $request->kategori_tiket;
        $tiket->jumlah = $request->jumlah;
        $tiket->tanggal = $request->tanggal;
        $tiket->save();

        // Redirect atau response sesuai kebutuhan aplikasi
        return redirect()->route('tikets.index')->with('success', 'Tiket berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tiket = Tiket::findOrFail($id);
        return view('tiket.show', compact('tiket'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tiket = Tiket::findOrFail($id);
        return view('tiket.edit', compact('tiket'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_pembeli' => 'required|string|max:100',
            'kategori_tiket' => 'required|string',
            'jumlah' => 'required|integer',
            'tanggal' => 'required|string',
        ]);

        $tiket = Tiket::findOrFail($id);
        $tiket->update($request->all());

        return redirect()->route('tiket.index')->with('success', 'Tiket berhasil diupdate.');
 }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tiket = Tiket::findOrFail($id);
        $tiket->delete();
        return redirect()->route('tiket.index');

    }
}
