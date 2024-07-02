@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #8fe3f85a;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center; 
    }

    th {
        background-color: #f0f0f0;
    }

    td {
        background-color: #ffffff; 
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center; 
    }

    th {
        background-color: #f0f0f0;
    }

    .btn {
        padding: 8px 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .btn-edit {
        background-color: #007bff;
        color: white;
        font-size: 14px; 
    }

    .btn-delete {
        background-color: #dc3545;
        color: white;
    }

    
</style>

<div class="container mx-auto py-3">
    <div class="flex flex-col border shadow-sm rounded-md p-10">
        <div class="card-body">
            <a href="{{ route('tiket.create') }}" class="btn btn-danger btn-sm">Tambah Tiket</a>
        </div>
        <br>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pembeli</th>
                    <th>Kategori Tiket</th>
                    <th>Jumlah Tiket</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tikets as $index => $tiket)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $tiket->nama_pembeli }}</td>
                    <td>{{ $tiket->kategori_tiket }}</td>
                    <td>{{ $tiket->jumlah }} Tiket</td>
                    <td>{{ $tiket->tanggal }}</td>
                    <td class="action-buttons">
                        <a href="{{ route('tiket.edit', $tiket->id) }}" class="btn btn-edit">Edit</a>
                        <form action="{{ route('tiket.destroy', $tiket->id) }}" method="post" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Hapus data ini ?')" class="btn btn-delete">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
