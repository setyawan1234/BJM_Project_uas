@extends('layout.main')
@section('content')
<div class="container mt-3">
    <div class="row justify-content-center align-items-center">
        <div class="card">
            <div class="card-header">
                Edit Data Gejala
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
                <form method="post" action="/datagejala/{{$gejalas->id}}" id="myForm"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')  
                <div class="form-group">
                         <label for="nama">Kode Gejala</label>
                        <input type="text" name="kd_gejala" class="form-control" id="kd_gejala" value="{{$gejalas->kd_gejala}}"
                            aria-describedby="kd_gejala">
                    </div>
                <div class="form-group">
                         <label for="harga">Gejala</label>
                         <input type="text" name="gejala" class="form-control" id="gejala" value="{{$gejalas->gejala}}"
                         aria-describedby="gejala">
                 </div>
                 
         <button type="submit" class="btn btn-primary">Submit</button>
         </form>
     </div>
 </div>
</div>
</div>
@endsection