<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tabel Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        {{-- <div class="mt-3">
            <h1 class="text-center">Tabel Pendaftaran</h1>
        </div> --}}
        <div class="card mt-3">
            <div class="card-header bg-primary text-white">
                Silahkan Lakukan Pendaftaran Sebelum Membeli Tiket, Klik Tambah Data Untuk Pendaftaran.
            </div>
            <div class="card-body">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Tambah Data
                </button>
                <table class="table table-bordered table-striped table-hover text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>Nomor Telepon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($daftars as $index => $daftar)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $daftar->nama }}</td>
                            <td>{{ $daftar->email }}</td>
                            <td>{{ $daftar->nomor }}</td>
                            <td class="action-buttons">
                              <a href="{{ route('daftar.edit', $daftar->id) }}" class="btn btn-danger">Edit</a>
                              <form action="{{ route('daftar.destroy', $daftar->id) }}" method="post" style="display: inline;">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" onclick="return confirm('Hapus data ini ?')" class="btn btn-primary">Delete</button>
                              </form>
                          </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Tambah Data Pendaftaran</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('daftar.store') }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="Masukan Email">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Nomor Telepon</label>
                                        <input type="text" class="form-control" name="nomor" placeholder="Masukan No.Tlp">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" style="display: inline;">Kembali</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- akhir Modal -->
            </div>
        </div>
        <div class="text-end mt-3">
            <form action="{{ route('tiket.index') }}" method="get">
                <button type="submit" class="btn btn-primary">Beli Tiket Sekarang</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
