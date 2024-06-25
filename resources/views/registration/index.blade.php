<!DOCTYPE html>
<html>
<head>
    <title>Data Pendaftaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 20px;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 100%;
            max-width: 800px;
            margin: auto;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .back-button {
            display: block;
            width: 100px;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            text-align: center;
            border-radius: 4px;
            text-decoration: none;
            margin: 20px auto;
        }

        .back-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Data Pendaftaran</h1>

    <a href="{{ route('registration.create') }}" class="back-button">Tambah Pendaftaran</a>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pendaftarans as $pendaftaran)
                <tr>
                    <td>{{ $pendaftaran->id }}</td>
                    <td>{{ $pendaftaran->nama }}</td>
                    <td>{{ $pendaftaran->email }}</td>
                    <td>{{ $pendaftaran->telepon }}</td>
                    <td>
                        <a href="{{ route('registration.edit', $pendaftaran->id) }}">Edit</a>
                        <form action="{{ route('registration.destroy', $pendaftaran->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
