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
                <a href="/datagejala/create" class="btn mb-3 btn-primary btn-icon-split btn-sm">Tambah Data Gejala</a>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Kode Gejala</th>
                                <th>Gejala</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($gejalas as $gejala)
                                <tr>
                                    <td>{{ $gejala->id }}</td>
                                    <td>{{ $gejala->kd_gejala }}</td>
                                    <td>{{ $gejala->gejala }}</td>
                                    <td>
                                        <a class="btn btn-info" href="/datagejala/{{ $gejala->id }}"><i
                                                class="bi bi-eye"></i></a>
                                        <a class="btn btn-primary" href="/datagejala/{{ $gejala->id }}/edit"><i
                                                class="bi bi-pencil-square"></i></a>
                                        <form action="/datagejala/{{ $gejala->id }}" method="POST" class="d-inline">@csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i
                                                    class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! @$gejalas->links() !!}
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    </div>
    </div>
@endsection
