@extends('layout.main')
@section('content')
<div class="container mt-3">
    <div class="row justify-content-center align-items-center">
        <div class="card">
            <div class="card-header">Tambah Data Gejala
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
                <form method="post" action="/datagejala" id="myForm" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="kd_gejala">Kode Gejala</label>
                        <input type="text" name="kd_gejala" class="form-control" id="kd_gejala" aria-describedby="kd_gejala">
                    </div>
                    <div class="form-group">
                        <label for="gejala">Gejala</label>
                        <input type="text" name="gejala" class="form-control" id="gejala" aria-describedby="gejala">
                    </div>  
                    <br>                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection