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
        <div class="card shadow mb-4">
          <div class="card-body">
            
              
            <form method="post" action="/laporan/cetak" id="myForm" enctype="multipart/form-data">                 
              
          </form>
            <form action="pembelian-filter" method="GET">
            <label for="nama">Seraching Data</label>
            <div class="input-group mb-3 w-25">
                <input type="date" class="form-control" placeholder="tanggal" name="tanggal"
                    value="{{ $date ?? '' }}" onchange="submit()">
            </div>
        </form>
        <div class="row">
          <div class="col">
            <a href="/laporan" class="btn mb-3 btn-primary btn-icon-split btn-sm">Cetak Laporan</a>
              <a href="/pembelian/create" class="btn mb-3 btn-primary btn-icon-split btn-sm">Tambah Data Pembelian</a>
          </div>
          <div class="col">
            <div style="float: right">
              <a href="/pembelian" class="btn mb-3 btn-primary btn-icon-split btn-sm">Reset Filter</a>
            </div>
          </div>
        </div>
            
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Id Pembelian</th>
                    <th>Nama Pegawai</th>
                    <th>Nama Sparepart</th>
                    <th>Harga Sparepart</th>
                    <th>Tanggal</th>
                    <th>Jumlah Pembelian</th>
                    <th>Total</th>
                    <th>Action</th>

                  </tr>
                </thead>
                <tbody>
                  
                  @foreach ($pembelian as $pembeliannya)
                  <tr>
                    <td>{{$loop -> iteration}}</td>
                    <td>{{$pembeliannya->user->nama}}</td>
                    <td>{{$pembeliannya->sparepart->nama}}</td>
                    <td>Rp.{{$pembeliannya->sparepart->harga}}</td>
                    <td>{{$pembeliannya->tanggal}}</td>
                    <td>{{$pembeliannya->jumlah}}</td>
                    <td>Rp.{{$pembeliannya->total_harga}}</td>
                    <td>
                      <a class="btn btn-info" href="/pembelian/{{$pembeliannya->id}}"><i class="bi bi-eye"></i></a>
                      <a class="btn btn-primary" href="/pembelian/{{$pembeliannya->id}}/edit"><i class="bi bi-pencil-square"></i></a>
                      <form action="/pembelian/{{$pembeliannya->id}}" method="POST" class="d-inline">@csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button></form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              {{-- {!!@$pembelian->links()!!} --}}
            </div>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
</div>
</div>       
@endsection