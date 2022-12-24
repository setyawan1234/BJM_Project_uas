@extends('layout.main')
@section('content')
<div class="container mt-3">
    <div class="row justify-content-center align-items-center">
        <div class="card">
            <div class="card-header">Tambah Data Penyakit
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
                <form method="post" action="/datapenyakit" id="myForm" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="kd_penyakit">Kode Kerusakan</label>
                        <input type="text" name="kd_penyakit" class="form-control" id="kd_penyakit" aria-describedby="kd_penyakit">
                    </div>
                    <div class="form-group">
                        <label for="penyakit">Nama Kerusakan</label>
                        <input type="text" name="penyakit" class="form-control" id="penyakit" aria-describedby="penyakit">
                    </div>  
                    <div class="form-group">
                        <label for="penyakit">Definisi Kerusakan</label>
                        <input type="text" name="definisi" class="form-control" id="definisi" aria-describedby="definisi">
                    </div>
                    <div class="form-group">
                        <label for="penyakit">Solusi</label>
                        <input type="text" name="solusi" class="form-control" id="solusi" aria-describedby="solusi">
                    </div>
                    <br>                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection