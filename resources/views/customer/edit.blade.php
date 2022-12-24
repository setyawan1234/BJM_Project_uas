@extends('layout.main')
@section('content')
<div class="container mt-3">
    <div class="row justify-content-center align-items-center">
        <div class="card">
            <div class="card-header">
                Edit Data Customer
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
                <form method="post" action="/datacustomer/{{$data_customers->id}}" id="myForm"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')  
                <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control" id="image" value="{{$data_customers->image}}"
                            aria-describedby="image">
                    </div>
                <div class="form-group">
                         <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="{{$data_customers->nama}}"
                            aria-describedby="nama">
                    </div>
                <div class="form-group">
                         <label for="alamat">Nama</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" value="{{$data_customers->alamat}}"
                            aria-describedby="alamat">
                    </div>
                <div class="form-group">
                         <label for="harga">No Telepon</label>
                        <input type="text" name="notelp" class="form-control" id="notelp" value="{{$data_customers->notelp}}"
                            aria-describedby="notelp">
                    </div> 

                    
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
@endsection