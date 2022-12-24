<!DOCTYPE html>
<html>
<head>
	<title>Laporan Rincian Biaya</title>
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
		<h5>Laporan Rincian Biaya</h4>
	</center>

	<table class='table table-bordered'>
		<thead>
			<tr>

                <th>Id Rincian</th>
                <th>Tanggal</th>
                <th>Service</th>
                <th>Sparepart</th>
                <th>Biaya Service</th>
                <th>Harga Sparepart</th>
                <th>Total Biaya</th>
			</tr>
		</thead>
		<tbody>
        @foreach ($rincianbiaya as $rinciannya)
            <tr>

                <td>{{$loop -> iteration}}</td>
                <td>{{$rinciannya->tanggal}}</td>
                <td>{{$rinciannya->service->nama}}</td>
                <td>{{$rinciannya->sparepart->nama}}</td>
                <td>{{$rinciannya->biayaService}}</td>
                <td>{{$rinciannya->sparepart->harga}}</td>
                <td>{{$rinciannya->biaya}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
    <center>
		<h20>Harga diatas adalah harga estimasi, dapat berubah kapanpun</h20>
	</center>

</body>
</html>
