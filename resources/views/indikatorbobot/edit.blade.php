@extends('layout.main')
@section('content')
<div class="container mt-3">
    <div class="row justify-content-center align-items-center">
        <div class="card">
            <div class="card-header">
                Edit Nilai Bobot
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
                <form method="post" action="/indikatorbobot/{{$indikatorbobots->id}}" id="myForm"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')  
                <div class="form-group">
                         <label for="nama_indikator">Nama Indikator</label>
                        <input type="text" name="nama_indikator" class="form-control" id="nama_indikator" value="{{$indikatorbobots->nama_indikator}}"
                            aria-describedby="nama_indikator">
                    </div>
                <div class="form-group">
                         <label for="nilai_bobot">Nilai Bobot</label>
                        <input type="text" name="nilai_bobot" class="form-control" id="nilai_bobot" value="{{$indikatorbobots->nilai_bobot}}"
                            aria-describedby="nilai_bobot">
                    </div>
                    
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
@endsection