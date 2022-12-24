@extends('layoutuser.main')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card">
            <div class="card-header">
                Detail Rincian Biaya
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Tanggal : </b>{{$rincianbiaya->tanggal}}</li>
                    <li class="list-group-item"><b>Id Rincian Biaya        : </b>{{$rincianbiaya->id}}</li>
                    <li class="list-group-item"><b>Sparepart : </b>{{$rincianbiaya->sparepart->nama}}</li>
                    <li class="list-group-item"><b>Service : </b>{{$rincianbiaya->service->nama}}</li>
                    <li class="list-group-item"><b>Biaya : </b>{{$rincianbiaya->biaya}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="/rincianbiaya">Kembali</a>
        </div>
    </div>
</div>
@endsection
