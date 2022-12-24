@extends('layout.main')

@section('content')                      
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Pembelian</h1>
        <p class="mb-4">Berikut merupakan data Pembelian BJM Bengkel Mobil</p>

      @if(Session::has('berhasil'))
          <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>Success,</strong>
              {{ Session::get('berhasil') }}
          </div>
      @endif
        <!-- DataTales Example -->
          </div>
        <div class="content">
            <div class="card card-info card-outline">
                <h1>Ini halama cetak pembelian</h1>
            </div>
        </div>
      <!-- /.container-fluid -->
      
@endsection