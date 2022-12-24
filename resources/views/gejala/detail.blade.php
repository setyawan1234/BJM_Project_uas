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
                    <li class="list-group-item"><b>NO        : </b>{{$gejalas->id}}</li>
                    <li class="list-group-item"><b>KD Gejala : </b>{{$gejalas->kd_gejala}}</li>
                    <li class="list-group-item"><b>Gejala : </b>{{$gejalas->gejala}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="/datagejala">Kembali</a>
        </div>
    </div>
</div>
@endsection