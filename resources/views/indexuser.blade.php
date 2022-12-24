@extends('layoutuser.main')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">Dashboard User</h1>
      </div>
                @if(Session::has('berhasil'))
              <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong>Success,</strong>
                  {{ Session::get('berhasil') }}
              </div>
               @endif
      {{-- <div class="row">
              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Customer</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$jumlah_customer}} Orang</div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  
              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Sparepart</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$jumlah_sparepart}} Part</div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  
              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Pegawai</div>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$jumlah_pegawai}} Orang</div>
  
                          </div>
                          
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Service</div>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$jumlah_servis}} Service</div>
  
                          </div>
                          
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div> --}}
  
              <!-- Pending Requests Card Example
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
            <!-- Approach -->
      <div class="card shadow mb-2">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Welcome Message !!</h6>
          </div>
              <div class="card-body">
                    <p>Selamat Datang <b class="text-uppercase ">{{ Auth::user()->nama }}, </b></p>
              </div>
          </div>
          <div class="card-header py-2">
            <p class="mb-4">Berikut merupakan List Harga Service BJM Service Mobil</p>
        </div>
      </div>


      
      <div class="card shadow mb-3">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="">
              <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Nama</th>
                  <th>Biaya</th>
                  

                </tr>
              </thead>
              <tbody>
                @foreach ($service as $servicenya)
                <tr>
                  <td>{{$loop -> iteration}}</td>
                  <td>{{$servicenya->nama}}</td>
                  <td><a>Rp. </a>{{$servicenya->biaya}}<a>,-</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {!!@$service->links()!!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection