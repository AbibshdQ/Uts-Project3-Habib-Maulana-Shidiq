@extends('layouts.main')

@section('container')

<div class="col-lg-6 mb-5">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Surat Usulan</h1>
    </div>
    <form method="post" action="/suratusul-backend/{{ $surat_usuls->id }}">
        @method('put')
        @csrf

{{-- <form method="post" action="/jabatan-backend/{{ $jabatans->id }}">
    @method('put')
    @csrf --}}

        <div class="mb-2">
            <label for="no_surat" class="form-label">No Surat Usulan</label>
            <input type="text" class="form-control @error('no_surat') is-invalid @enderror" name="no_surat"
                value="{{ $surat_usuls->no_surat, old('no_surat') }}">
            @error('no_surat')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        
        <div class="mb-2">
            <label for="tgl_usulan" class="form-label">Tanggal Usulan</label>
            <input type="date" class="form-control @error('tgl_usulan') is-invalid @enderror" name="tgl_usulan"
                value="{{$surat_usuls->tgl_usulan, old('tgl_usulan') }}">
            @error('tgl_usulan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="pengusul" class="form-label">Pengusul</label>
            <input type="text" class="form-control @error('pengusul') is-invalid @enderror" name="pengusul"
                value="{{$surat_usuls->pengusul, old('pengusul') }}">
            @error('pengusul')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="alasan_usul" class="form-label">Alasan Usulan</label>
            <input type="text" class="form-control @error('alasan_usul') is-invalid @enderror" name="alasan_usul"
                value="{{ $surat_usuls->alasan_usul,old('alasan_usul') }}">
            @error('alasan_usul')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="jabatan_lama" class="form-label">Jabatan Lama</label>
            <input type="text" class="form-control @error('jabatan_lama') is-invalid @enderror" name="jabatan_lama"
                value="{{$surat_usuls->jabatan_lama, old('jabatan_lama') }}">
            @error('jabatan_lama')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="jabatan_baru" class="form-label">Jabatan Baru</label>
            <input type="text" class="form-control @error('jabatan_baru') is-invalid @enderror" name="jabatan_baru"
                value="{{$surat_usuls->jabatan_baru, old('jabatan_baru') }}">
            @error('jabatan_baru')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="status_usulan" class="form-label">Status suratusul</label>
            <select class="form-control form-control-user @error('status_usulan') is-invalid @enderror" name="status_usulan">
                <option value="Aktif" selected>Aktif</option>
                <option value="Pensiu">Pensiun</option>
            </select>
            @error('status_usulan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div> 

        

        <button type="submit" class="btn btn-danger btn-buy-now">Submit</button>
    </form>
</div>
@endsection
