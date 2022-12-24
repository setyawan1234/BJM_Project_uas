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
                    <li class="list-group-item"><b>NO                   : </b>{{$indikatorbobots->id}}</li>
                    <li class="list-group-item"><b>Nama Indikator        : </b>{{$indikatorbobots->nama_indikator}}</li>
                    <li class="list-group-item"><b>Nilai Bobot        : </b>{{$indikatorbobots->nilai_bobot}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="/indikatorbobot">Kembali</a>
        </div>
    </div>
</div>
@endsection