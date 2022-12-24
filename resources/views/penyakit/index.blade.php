@extends('layout.main')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Gejala</h1>
        <p class="mb-4">Berikut merupakan data gejala kerusakan</p>

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
                <a href="/datapenyakit/create" class="btn mb-3 btn-primary btn-icon-split btn-sm">Tambah Data Kerusakan</a>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Kode Kerusakan</th>
                                <th>Nama Kerusakan</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($penyakits as $penyakit)
                                <tr>
                                    <td>{{ $penyakit->id }}</td>
                                    <td>{{ $penyakit->kd_penyakit }}</td>
                                    <td>{{ $penyakit->penyakit }}</td>
                                    <td>
                                        <a class="btn btn-info" href="/datapenyakit/{{ $penyakit->id }}"><i
                                                class="bi bi-eye"></i></a>
                                        <a class="btn btn-primary" href="/datapenyakit/{{ $penyakit->id }}/edit"><i
                                                class="bi bi-pencil-square"></i></a>
                                        <form action="/datapenyakit/{{ $penyakit->id }}" method="POST" class="d-inline">@csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i
                                                    class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! @$penyakits->links() !!}
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    </div>
    </div>
@endsection
