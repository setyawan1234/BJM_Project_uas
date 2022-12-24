@extends('layout.main')
@section('content')
<div class="container mt-3">
    <div class="row justify-content-center align-items-center">
        <div class="card">
            <div class="card-header">Tambah Data Pembelian
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
                <form method="post" action="/pembelian" id="myForm" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Pegawai</label>
                        <select name="user_id" class="form-control" id="user_id">
                            @foreach ($users as $user)
                            @if($user->level == 'Admin')
                            <option value="{{$user->id}}">{{$user->nama}}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama">Sparepart</label>
                        <select name="sparepart_id" class="form-control" id="sparepart_id">
                            @foreach ($data_spareparts as $data_spareparts)
                            <option value="{{$data_spareparts->id}}">{{$data_spareparts->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah Pembelian</label>
                        <input type="text" name="jumlah" class="form-control" id="jumlah" aria-describedby="jumlah">
                    </div> 
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" id="tanggal" ariadescribedby="tanggal">
                    </div>
                    <br>                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection