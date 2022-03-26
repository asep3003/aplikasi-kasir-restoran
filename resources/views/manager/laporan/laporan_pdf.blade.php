<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan PDF</title>
</head>
<body>
    <h4>Pencetak : {{ $employe }}</h4>
    <table border="1" cellpadding="2" cellspacing="0">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Pelanggan</th>
				<th>Nama Menu</th>
				<th>Jumlah</th>
				<th>Total Harga</th>
				<th>Nama Pegawai</th>
				<th>Tanggal</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($laporan as $p)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{ $p->nama_pelanggan }}</td>
				<td>{{ $p->nama_menu }}</td>
				<td>{{ $p->jumlah }}</td>
				<td>Rp {{ number_format($p->total_harga,0,',','.') }}</td>
				<td>{{ $p->nama_pegawai }}</td>
                <td>{{ $p->created_at->format('d-m-Y') }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>