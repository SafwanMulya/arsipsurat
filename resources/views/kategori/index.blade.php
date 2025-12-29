<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Data Sekolah</div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kategori</th>
                                    <th>Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kategoris as $kategori)
                                    <tr>
                                        <td>{{ $loop->iteration + ($kategoris->currentPage() - 1) * $kategoris->perPage() }}</td>
                                        <td>{{ $kategori->nama_kategori }}</td>
                                        <td>{{ $kategori->deskripsi }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $kategoris->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route('home.index') }}">Kembali</a>
</body>
</html>
