@extends('layout.main')
@section('content')                     
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Rule Diagnosa</h1>
        <p class="mb-4">Berikut merupakan data rule diagnosa</p>

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
              <a href="/diagnosa/create" class="btn mb-3 btn-primary btn-icon-split btn-sm">Tambah Rule Diganosa</a>
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>NO</th>
                    <th>Penyakit</th>
                    <th>Bobot</th>
                    <th>Gejala</th>

                  </tr>
                </thead>
                <tbody>
                  
                  @foreach ($rulediagnosas as $diagnosa)
                  <tr>
                    <td>{{$diagnosa ->id}}</td>
                    <td>{{$diagnosa->penyakit->kd_penyakit}} <p> -- </p> {{$diagnosa->penyakit->penyakit}}</td>
                    <td>{{$diagnosa->indikatorbobot->nilai_bobot}}</td>
                    <td>{{$diagnosa->gejala->kd_gejala}} <p> -- </p> {{$diagnosa->gejala->gejala}} </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              {!! @$rulediagnosas->links() !!}
            </div>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
</div>
</div>       
@endsection