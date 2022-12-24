@extends('layout.main')
@section('content')
    <div class="container mt-3">
        <div class="row justify-content-center align-items-center">
            <div class="card">
                <div class="card-header">
                    Edit Data Kerusakan
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="/datapenyakit/{{ $penyakits->id }}" id="myForm"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama">Kode Kerusakan</label>
                            <input type="text" name="kd_penyakit" class="form-control" id="kd_penyakit"
                                value="{{ $penyakits->kd_penyakit }}" aria-describedby="kd_penyakit">
                        </div>
                        <div class="form-group">
                            <label for="harga">Nama Kerusakan</label>
                            <input type="text" name="penyakit" class="form-control" id="penyakit"
                                value="{{ $penyakits->penyakit }}" aria-describedby="penyakit">
                        </div>
                        <div class="form-group">
                            <label for="harga">Definisi Kerusakan</label>
                            <input type="text" name="definisi" class="form-control" id="definisi"
                                value="{{ $penyakits->definisi }}" aria-describedby="definisi">
                        </div>
                        <div class="form-group">
                            <label for="harga">Solusi</label>
                            <input type="text" name="solusi" class="form-control" id="solusi"
                                value="{{ $penyakits->solusi }}" aria-describedby="solusi">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
