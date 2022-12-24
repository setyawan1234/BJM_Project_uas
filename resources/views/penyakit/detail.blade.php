@extends('layout.main')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card">
            <div class="card-header">
                Detail Service
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>NO                   : </b>{{$penyakits->id}}</li>
                    <li class="list-group-item"><b>Kode Kerusakan        : </b>{{$penyakits->kd_penyakit}}</li>
                    <li class="list-group-item"><b>Nama Kerusakan        : </b>{{$penyakits->penyakit}}</li>
                    <li class="list-group-item"><b>Definisi Kerusakan    : </b>{{$penyakits->definisi}}</li>
                    <li class="list-group-item"><b>Solusi               : </b>{{$penyakits->solusi}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="/datapenyakit">Kembali</a>
        </div>
    </div>
</div>
@endsection