@extends('layoutuser.main')
@section('content')
<div class="container mt-3">
    <div class="row justify-content-center align-items-center">
        <div class="card">
            <div class="card-header">Servis Panggilan
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
                <form method="post" action="servispanggilan" id="myForm" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group">
                        <label for="nope">Nomor HP</label>
                        <input type="text" name="nope" class="form-control" id="nope" aria-describedby="nope">
                    </div>
                    <div class="form-group">
                        <label for="lokasi">Lokasi</label>
                        <input type="text" name="lokasi" class="form-control" id="lokasi" aria-describedby="lokasi">
                    </div>  
                    <br>  
                    <button type="submit" class="btn btn-primary">Submit</button>                  
                    </br>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection