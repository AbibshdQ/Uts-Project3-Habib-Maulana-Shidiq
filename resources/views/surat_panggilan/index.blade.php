@extends('layouts.main')
@section('container')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Surat Panggilan</h1>
        <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p>


        <div class="my-2"></div>
        <a href="{{ route('suratpanggil-backend.create') }}" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-600">
                <i class="fas fa-plus-square"></i>
            </span>
            <span class="text">Add</span>
        </a>

        <!-- DataTales Example -->
        <div class="card shadow mb-4 mt-3">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data surat_panggilan</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Peg</th>
                                <th>No Surat</th>
                                <th>Tgl Panggilan</th>
                                <th>Jam</th>
                                <th>Tempat Panggilan</th>
                                <th>Tgl jabatan</th>
                                <th>Ket Panggilan</th>
                                <th>Nama Pemeriksa</th>
                                <th>KET</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($surat_panggilans as $surat_panggilan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $surat_panggilan->pegawais->namapeg }}</td> <!-- Tampilkan nama pegawai -->
                                    <td>{{ $surat_panggilan->no_surat }}</td>
                                    <td>{{ $surat_panggilan->tgl_panggilan }}</td>
                                    <td>{{ $surat_panggilan->jam }}</td>
                                    <td>{{ $surat_panggilan->tempat_panggil }}</td>
                                    <td>{{ $surat_panggilan->tgl_jbtan }}</td>
                                    <td>{{ $surat_panggilan->ket_panggil }}</td>
                                    <td>{{ $surat_panggilan->nama_pemeriksa }}</td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center">
                                            <a href="{{ route('suratpanggil-backend.edit', $surat_panggilan->id) }}"
                                                class="btn btn-warning btn-circle">
                                                <i class="fas fa-exclamation-triangle"></i>
                                            </a>
                                            <form action="{{ route('suratpanggil-backend.destroy', $surat_panggilan->id) }}"
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
