@extends('layout.main')
@section('content')
<div class="container mt-3">
    <div class="row justify-content-center align-items-center">
        <div class="card">
            <div class="card-header">Tambah Data Rule Diagnosa
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
                <form method="post" action="/rulediagnosa" id="myForm" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="nama">Pilih Kode Penyakit</label>
                        <select name="penyakits_id" class="form-control" id="penyakits_id">
                            @foreach ($penyakits as $penyakit)
                            <option value="{{$penyakit->id}}">{{$penyakit->kd_penyakit}} | {{$penyakit->penyakit}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama">Pilih Bobot</label>
                        <select name="indikatorbobots_id" class="form-control" id="indikatorbobots_id">
                            @foreach ($indikatorbobots as $bobot)
                            <option value="{{$bobot->id}}">{{$bobot->nama_indikator}} | {{$bobot->nilai_bobot}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama">Pilih Gejala</label>
                        <select name="gejalas_id" class="form-control" id="gejalas_id">
                            @foreach ($gejalas as $gejala)
                            <option value="{{$gejala->id}}">{{$gejala->kd_gejala}} | {{$gejala->gejala}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <br>                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection