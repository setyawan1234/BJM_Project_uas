<!DOCTYPE html>
<html>
<head>
	<title>Laporan Transaksi</title>
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
		<h5>Laporan Transaksi</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>Id Transaksi</th>
                    <th>Customer</th>
                    <th>Service</th>
                    <th>Sparepart</th>
                    <th>Biaya</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($transaksi as $transaksi)
                  <tr>
                    <td>{{$loop -> iteration}}</td>
                    <td>{{$transaksi->customer->nama}}</td>
                    <td>{{$transaksi->service->nama}}</td>
                    <td>{{$transaksi->sparepart->nama}}</td>
                    <td>{{$transaksi->biaya}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>