@extends('layouts.main')
@section('container')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Surat Usul</h1>
        <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p>


        <div class="my-2"></div>
        <a href="{{ route('suratusul-backend.create') }}" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-600">
                <i class="fas fa-plus-square"></i>
            </span>
            <span class="text">Add</span>
        </a>

        <!-- DataTales Example -->
        <div class="card shadow mb-4 mt-3">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Surat Usulan</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Peg</th>
                                <th>No Surat</th>
                                <th>Tgl Usulan</th>
                                <th>Pengusul</th>
                                <th>Alasan Usulan</th>
                                <th>Jabatan Lama</th>
                                <th>Jabatan Baru</th>
                                <th>Status Usulan</th>
                                <th>KET</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($surat_usuls as $surat_usul)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $surat_usul->pegawais->namapeg }}</td>
                                    <td>{{ $surat_usul->no_surat }}</td>
                                    <td>{{ $surat_usul->tgl_usulan }}</td>
                                    <td>{{ $surat_usul->pengusul }}</td>
                                    <td>{{ $surat_usul->alasan_usul }}</td>
                                    <td>{{ $surat_usul->jabatan_lama }}</td>
                                    <td>{{ $surat_usul->jabatan_baru }}</td>
                                    <td>{{ $surat_usul->status_usulan }}</td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center">
                                            <a href="{{ route('suratusul-backend.edit', $surat_usul->id) }}"
                                                class="btn btn-warning btn-circle">
                                                <i class="fas fa-exclamation-triangle"></i>
                                            </a>
                                            <form action="{{ route('suratusul-backend.destroy', $surat_usul->id) }}"
                                                method="POST" class="ml-1">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-circle">
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
