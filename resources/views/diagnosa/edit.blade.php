@extends('layout.main')
@section('content')
    <div class="container mt-3">
        <div class="row justify-content-center align-items-center">
            <div class="card">
                <div class="card-header">
                    Edit Rule Diganosa
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
                    <form method="post" action="/rulediagnosa/{{ $rulediagnosas->id }}" id="myForm"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <div class="form-group">
                                <label for="nama">Pilih Kode Penyakit</label>
                                <select name="penyakits_id" class="form-control" id="penyakits_id">
                                    @foreach ($penyakits as $penyakit)
                                        <option value="{{ $penyakit->id }}"
                                            {{ $rulediagnosas->penyakits_id == $penyakit->id ? 'selected' : '' }}>
                                            {{ $penyakit->kd_gejala }} | {{$penyakit->penyakit}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="nama">Nilai Bobot</label>
                                <select name="indikatorbobots_id" class="form-control" id="indikatorbobots_id">
                                    @foreach ($indikatorbobots as $bobot)
                                        <option value="{{ $bobot->id }}"
                                            {{ $rulediagnosas->indikatorbobots_id == $bobot->id ? 'selected' : '' }}>
                                            {{ $bobot->nama_indikator }} | {{$bobot->nilai_bobot}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="nama">Pilih Gejala</label>
                                <select name="gejalas_id" class="form-control" id="gejalas_id">
                                    @foreach ($gejalas as $gejala)
                                        <option value="{{ $gejala->id }}"
                                            {{ $rulediagnosas->gejalas_id == $gejala->id ? 'selected' : '' }}>
                                            {{ $gejala->kd_gejala }} | {{$gejala->gejala}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
