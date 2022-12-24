@extends('layoutuser.main')
@section('content')
<div class="container mt-3">
    <div class="row justify-content-center align-items-center">
        <div class="card">
            <div class="card-header">
                Edit Data Pembelian
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
                <form method="POST" action="/rincianbiaya/{{$rincianbiaya->id}}" id="myForm"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                    <div class="form-group">
                        <label for="nama">Sparepart</label>
                        <select name="sparepart_id" class="form-control" id="sparepart_id">
                            @foreach ($data_spareparts as $data_spareparts)
                            <option value="{{$data_spareparts->id}}" {{$rincianbiaya->sparepart_id == $data_spareparts->id ? 'selected' : ''}}>{{$data_spareparts->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                <div class="form-group">
                        <label for="nama">Service</label>
                        <select name="service_id" class="form-control" id="service_id">
                            @foreach ($service as $service)
                            <option value="{{$service->id}}" {{$rincianbiaya->service_id == $service->id ? 'selected' : ''}}>{{$service->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                        <label for="tanggal_join">Tanggal </label>
                        <input type="date" name="tanggal" class="form-control" id="tanggal" ariadescribedby="tanggal">
                    </div><br>
                    </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
