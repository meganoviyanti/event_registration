<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function create(Request $request)
    {
        $tiket_id = $request->query('tiket_id');
        $tiket = Tiket::find($tiket_id);
        return view('transaksi.create', compact('tiket'));
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
        // Validasi dan simpan tiket
        $tiket = new Tiket();
        $tiket->nama_pembeli = $request->nama_pembeli;
        $tiket->kategori_tiket = $request->kategori_tiket;
        $tiket->jumlah = $request->jumlah;
        $tiket->tanggal = $request->tanggal;
        $tiket->save();

        // Redirect ke form transaksi dengan membawa data tiket
        return redirect()->route('transaksi.create', ['tiket_id' => $tiket->id]);
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
        $tiket->update([
            'nama_pembeli' => $request->nama_pembeli,
            'kategori_tiket' => $request->kategori_tiket,
            'jumlah' => $request->jumlah,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('tiket.index')->with('success', 'Tiket berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tiket = Tiket::findOrFail($id);
        $tiket->delete();
        return redirect()->route('tiket.index')->with('success', 'Tiket berhasil dihapus.');
    }
}
