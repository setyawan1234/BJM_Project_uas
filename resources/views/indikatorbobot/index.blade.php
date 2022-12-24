@extends('layout.main')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Nilai Bobot</h1>
        <p class="mb-4">Berikut merupakan data nilai bobot</p>

        @if (Session::has('berhasil'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <strong>Success,</strong>
                {{ Session::get('berhasil') }}
            </div>
        @endif
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <a href="/indikatorbobot/create" class="btn mb-3 btn-primary btn-icon-split btn-sm">Tambah Data Bobot</a>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama Indikator</th>
                                <th>Nilai Bobot</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($indikatorbobots as $bobot)
                                <tr>
                                    <td>{{ $bobot->id }}</td>
                                    <td>{{ $bobot->nama_indikator }}</td>
                                    <td>{{ $bobot->nilai_bobot }}</td>
                                    <td>
                                        <a class="btn btn-info" href="/indikatorbobot/{{ $bobot->id }}"><i class="bi bi-eye"></i></a>
                                        <a class="btn btn-primary" href="/indikatorbobot/{{ $bobot->id }}/edit"><i class="bi bi-pencil-square"></i></a>
                                        <form action="/indikatorbobot/{{ $bobot->id }}" method="POST" class="d-inline">@csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! @$indikatorbobots->links() !!}
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    </div>
    </div>
@endsection
