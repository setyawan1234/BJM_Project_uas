<!DOCTYPE html>
<html>
<head>
	<title>Laporan Service Panggilan</title>
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
		<h5>Laporan Service Panggilan</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>Id Service Panggilan</th>
                    <th>Nomor HP</th>
                    <th>Lokasi</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($servispanggilan as $serviceku)
                  <tr>
                    <td>{{$loop -> iteration}}</td>
                    <td>0{{$serviceku->nope}}</td>
                    <td>{{$serviceku->lokasi}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>