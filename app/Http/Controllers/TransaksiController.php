<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksis = Transaksi::all();
        return view('transaksi.index', compact('transaksis'));
    }
    public function create()
    {
        return view('transaksi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'ticket_quantity' => 'required|integer|min=1',
            'total_price' => 'required|numeric'
        ]);

        Transaksi::create($request->all());

        return redirect()->route('transaksi.create')->with('success', 'Transaksi created successfully.');
    }
}
