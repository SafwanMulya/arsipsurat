<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 12px;
            margin-top: 15px;
        }
        th, td {
            border: 1px solid black;
            padding: 6px;
        }
        h2 {
            text-align: center;
            margin-top: 20px;
        }
        .title {
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            margin-top: 30px;
        }
    </style>
</head>
<body>

    <h2>Laporan Surat Masuk & Surat Keluar</h2>
    <hr>

    <p>Tanggal Cetak : {{ now()->format('d M Y') }}</p>

    {{-- Tabel Surat Masuk --}}
    <div class="title">Laporan Surat Masuk</div>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Nomor Surat</th>
                <th>Asal Surat</th>
                <th>Kategori</th>
                <th>Tanggal Masuk</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($suratMasuk as $m)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $m->judul }}</td>
                <td>{{ $m->nomor_surat }}</td>
                <td>{{ $m->asal_surat }}</td>
                <td>{{ $m->kategori->nama_kategori }}</td>
                <td>{{ $m->tanggal_surat }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{-- Tabel Surat Keluar --}}
    <div class="title">Laporan Surat Keluar</div>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Nomor Surat</th>
                <th>Tujuan Surat</th>
                <th>Kategori</th>
                <th>Tanggal Keluar</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($suratKeluar as $k)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $k->judul }}</td>
                <td>{{ $k->nomor_surat }}</td>
                <td>{{ $k->tujuan_surat }}</td>
                <td>{{ $k->kategori->nama_kategori }}</td>
                <td>{{ $k->tanggal_surat }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

</body>
</html>
