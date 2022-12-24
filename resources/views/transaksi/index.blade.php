@extends('layout.main')

@section('content')                      
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Transksi</h1>
        <p class="mb-4">Berikut merupakan data Transksi BJM Service Mobil</p>

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
              <a href="/transaksi/create" class="btn mb-3 btn-primary btn-icon-split btn-sm">Tambah Data Transksi</a>
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Id Transksi</th>
                    <th>Customer</th>
                    <th>Service</th>
                    <th>Sparepart</th>
                    <th>Biaya</th>
                    <th>Action</th>

                  </tr>
                </thead>
                <tbody>
                  
                  @foreach ($transaksi as $transaksinya)
                  <tr>
                    <td>{{$loop -> iteration}}</td>
                    <td>{{$transaksinya->customer->nama}}</td>
                    <td>{{$transaksinya->service->nama}}</td>
                    <td>{{$transaksinya->sparepart->nama}}</td>
                    <td>{{$transaksinya->biaya}}</td>
                    <td>
                      <a class="btn btn-info" href="/transaksi/{{$transaksinya->id}}"><i class="bi bi-eye"></i></a>
                      <a class="btn btn-primary" href="/transaksi/{{$transaksinya->id}}/edit"><i class="bi bi-pencil-square"></i></a>
                      <form action="/transaksi/{{$transaksinya->id}}" method="POST" class="d-inline">@csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button></form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              {!!@$transaksi->links()!!}
            </div>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
</div>
</div>       
@endsection