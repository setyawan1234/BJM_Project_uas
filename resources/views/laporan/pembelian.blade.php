<!DOCTYPE html>
<html>
<head>
	<title>Laporan Pembelian</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Pembelian</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>Id Pembelian</th>
				<th>Nama Pegawai</th>
                <th>Nama Sparepart</th>
				<th>Harga Sparepart</th>
				<th>tanggal</th>
                <th>Jumlah Pembelian</th>
				<th>Total</th>

			</tr>
		</thead>
		<tbody>
			@foreach ($pembelian as $pembelian)
            <tr>
                <td>{{$loop -> iteration}}</td>
                <td>{{$pembelian->sparepart->nama}}</td>
                <td>{{$pembelian->jumlah}}</td>
				<td>{{$pembelian->sparepart->harga}}</td>
				<td>{{$pembelian->created_at->format('d/m/Y')}}</td>
				<td>{{$pembelian->jumlah}}</td>
				<td>{{$pembelian->total_harga}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>