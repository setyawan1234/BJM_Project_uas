@extends('layout.main')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card">
            <div class="card-header">
                Detail Pegawai
            </div>
            <div class="card-body">
                
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Id: </b>{{$users->id}}</li>
                    <li class="list-group-item"><b>Foto: </b><img src="{{ asset('storage/'.$users ->foto) }}" alt="" height="150px" width="150px" class="rounded"style="object-fit: cover"></li>
                    <li class="list-group-item"><b>Nama: </b>{{$users->nama}}</li>
                    <li class="list-group-item"><b>Email: </b>{{$users->email}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="/datapegawai">Kembali</a>
        </div>
    </div>
</div>
@endsection
