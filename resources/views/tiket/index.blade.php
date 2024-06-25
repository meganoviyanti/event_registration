@extends('layouts.app')

@section('content')
<style>
    body {
        /* background-image: url('https://wallpaperaccess.com/full/5234615.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        width: 100%;
        height: 100vh;  */
        background-color: #8fe3f85a;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center; /* Align text center for all table cells */
    }

    th {
        background-color: #f0f0f0;
    }

    /* Common button style */
    .btn {
        padding: 8px 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    /* Edit button style */
    .btn-edit {
        background-color: #007bff;
        color: white;
        font-size: 14px; /* Example: Adjust font size as needed */
    }

    /* Delete button style */
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
                    <th>Nama Tiket</th>
                    <th>Kategori Tiket</th>
                    <th>Jumlah Tiket</th>
                    <th>Kapasitas</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tikets as $index => $tiket)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $tiket->nama_tiket }}</td>
                    <td>{{ $tiket->kategori_tiket }}</td>
                    <td>{{ $tiket->jumlah }} Tiket</td>
                    <td>{{ $tiket->kapasitas }}</td>
                    <td>
                        <div class="flex gap-x-2 items-center justify-center">
                            <x-link-button url="tiket.edit" :params="$tiket->id" title="Edit" type="primary"
                                class="btn btn-edit" />
                        </div>
                    </td>
                    <td>
                        <form action="{{ route('tiket.destroy', $tiket->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Hapus data ini ?')"
                                class="btn btn-delete">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
