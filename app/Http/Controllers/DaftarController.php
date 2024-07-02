<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Daftar;

class DaftarController extends Controller
{
    public function index()
    {
        $daftars = Daftar::all();
        return view('daftar.index', compact('daftars'));
    }

    public function tampilan()
    {
        return view('daftar.tampilan');
    }
    public function create()
    {
        return view('daftar.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:daftars',
            'nomor' => 'required|string|max:20',
        ]);

        Daftar::create($request->all());

        return redirect()->route('daftar.index')
                         ->with('success', 'Pendaftaran berhasil ditambahkan.');
    }

    public function show(Daftar $daftar)
    {
        return view('daftar.show', compact('daftar'));
    }

    public function edit(Daftar $daftar)
    {
        return view('daftar.edit', compact('daftar'));
    }

    public function update(Request $request, Daftar $daftar)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:daftars,email,' . $daftar->id,
            'nomor' => 'required|string|max:20',
        ]);

        $daftar->update($request->all());

        return redirect()->route('daftar.index')
                         ->with('success', 'Pendaftaran berhasil diperbarui.');
    }

    public function destroy(Daftar $daftar)
    {
        $daftar->delete();

        return redirect()->route('daftar.index')
                         ->with('success', 'Pendaftaran berhasil dihapus.');
    }
}
