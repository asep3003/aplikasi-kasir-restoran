<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Struk Pembayaran</title>
</head>
<body>
    <center>
        <h1>Cafe Bisa Ngopi</h1>
        <p>{{ $transaksis->nama_pegawai }} | {{ $transaksis->created_at->format('d-m-Y') }}</p>
        <table>
            <tr>
                <td>ID Transaksi</td>
                <td>:</td>
                <td>{{ $transaksis->id }}</td>
            </tr>
            <tr>
                <td>Nama Pelanggan</td>
                <td>:</td>
                <td>{{ $transaksis->nama_pelanggan }}</td>
            </tr>
            <tr>
                <td>Nama Menu</td>
                <td>:</td>
                <td>{{ $transaksis->nama_menu }}</td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>:</td>
                <td>{{ $transaksis->jumlah }}</td>
            </tr>
            <tr>
                <td>Total Harga</td>
                <td>:</td>
                <td>Rp {{ number_format($transaksis->total_harga,0,',','.') }}</td>
            </tr>
        </table>
    </center>
</body>
</html>