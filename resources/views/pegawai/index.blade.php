@extends('layouts.main')
@section('container')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Pegawai</h1>
        <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p>


        <div class="my-2"></div>
        <a href="{{ route('pegawai-backend.create') }}" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-600">
                <i class="fas fa-plus-square"></i>
            </span>
            <span class="text">Add</span>
        </a>

        <!-- DataTales Example -->
        <div class="card shadow mb-4 mt-3">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Pegawai</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pegawai</th>
                                <th>Jenis Kelamin</th>
                                <th>Tgl Lahir</th>
                                <th>Tempat Lahir</th>
                                <th>Alamat</th>
                                <th>Status Pegawai</th>
                                <th>Tgl Masuk</th>
                                <th>KET</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pegawais as $pegawai)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $pegawai->namapeg }}</td>
                                    <td>{{ $pegawai->j_kel }}</td>
                                    <td>{{ $pegawai->tgl_lahir }}</td>
                                    <td>{{ $pegawai->tmpt_lahir }}</td>
                                    <td>{{ $pegawai->alamat }}</td>
                                    <td>{{ $pegawai->stat_peg }}</td>
                                    <td>{{ $pegawai->tgl_masuk }}</td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center">
                                            <a href="{{ route('pegawai-backend.edit', $pegawai->id) }}"
                                                class="btn btn-warning btn-circle">
                                                <i class="fas fa-exclamation-triangle"></i>
                                            </a>
                                            <form action="{{ route('pegawai-backend.destroy', $pegawai->id) }}"
                                                method="POST" class="ml-1">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-circle"
                                                    onclick="return confirm('Are you sure you want to delete this item?');">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
