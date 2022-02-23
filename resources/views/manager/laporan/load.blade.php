@foreach ($transaksis as $transaksi)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $transaksi->nama_pelanggan }}</td>
        <td>{{ $transaksi->nama_menu }}</td>
        <td>{{ $transaksi->jumlah }}</td>
        <td>Rp {{ number_format($transaksi->total_harga,0,',','.') }}</td>
        <td>{{ $transaksi->nama_pegawai }}</td>
        <td>{{ $transaksi->created_at->format('d-m-Y') }}</td>
    </tr>        
@endforeach