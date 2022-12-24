@extends('layoutuser.main')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Rincian Biaya</h1>
        <p class="mb-4">Anda dapat menghitung Rincian Biaya</p>

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
              <form method="post" action=/laporanUser/cetak id="myForm" enctype="multipart/form-data">

            </form>
            <form action="rincian-filter" method="GET">
              <label for="nama">Seraching Data</label>
              <div class="input-group mb-3 w-25">
                  <input type="date" class="form-control" placeholder="tanggal" name="tanggal"
                      value="{{ $date ?? '' }}" onchange="submit()">
              </div>
              <div class="row">
                <div class="col">
              <a href="/laporanUser" class="btn mb-3 btn-primary btn-icon-split btn-sm">Cetak Laporan</a>
              <a href="/rincianbiaya/create" class="btn mb-3 btn-primary btn-icon-split btn-sm">Tambah Rincian Biaya</a>
                <div style="float: right">
                  <a href="/rincianbiaya" class="btn mb-3 btn-primary btn-icon-split btn-sm">Reset Filter</a>
                </div>
              </div>
            <div class="table-responsive">
          </div>
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>

                    <th>Id Rincian</th>
                    <th>Tanggal</th>
                    <th>Service</th>
                    <th>Sparepart</th>
                    <th>Biaya Service</th>
                    <th>Harga Sparepart</th>
                    <th>Total Biaya</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach ($rincianbiaya as $rinciannya)
                  <tr>

                    <td>{{$loop -> iteration}}</td>
                    <td>{{$rinciannya->tanggal}}</td>
                    <td>{{$rinciannya->service->nama}}</td>
                    <td>{{$rinciannya->sparepart->nama}}</td>
                    <td>{{$rinciannya->biayaService}}</td>
                    <td>{{$rinciannya->sparepart->harga}}</td>
                    <td>{{$rinciannya->biaya}}</td>
                    <td>
                      <a class="btn btn-info" href="/rincianbiaya/{{$rinciannya->id}}"><i class="bi bi-eye"></i></a>
                      <a class="btn btn-primary" href="/rincianbiaya/{{$rinciannya->id}}/edit"><i class="bi bi-pencil-square"></i></a>
                      <form action="/rincianbiaya/{{$rinciannya->id}}" method="POST" class="d-inline">@csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button></form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              {!!@$rincianbiaya->links()!!}
            </div>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
</div>
</div>
@endsection
