@extends('layouts.main')

@section('container')

<div class="col-lg-6 mb-5">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Entri Surat Panggilan</h1>
    </div>
    <form method="post" action="{{ route('suratpanggil-backend.store') }}">
        @csrf

        <div class="mb-2">
            <label for="id_pegawai" class="form-label">Nama Pegawai</label>
            <select class="form-control @error('id') is-invalid @enderror" name="id_pegawai">
                @foreach ($pegawais as $item)
                    @if (old('id') == $item->id)
                        <option value="{{ $item->id }}" selected > {{ $item->namapeg }} </option>
                    @else
                        <option value="{{ $item->id }}">{{ $item->namapeg }}</option>
                    @endif
                @endforeach
            </select>
            @error('id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="no_surat" class="form-label">No Surat Usulan</label>
            <input type="text" class="form-control @error('no_surat') is-invalid @enderror" name="no_surat"
                value="{{ old('no_surat') }}">
            @error('no_surat')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="tgl_panggilan" class="form-label">Tanggal Panggilan</label>
            <input type="date" class="form-control @error('tgl_panggilan') is-invalid @enderror" name="tgl_panggilan"
                value="{{ old('tgl_panggilan') }}">
            @error('tgl_panggilan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="jam" class="form-label">jam</label>
            <input type="text" class="form-control @error('jam') is-invalid @enderror" name="jam"
                value="{{ old('jam') }}">
            @error('jam')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="tempat_panggil" class="form-label">Tempat Panggilan</label>
            <input type="text" class="form-control @error('tempat_panggil') is-invalid @enderror" name="tempat_panggil"
                value="{{ old('tempat_panggil') }}">
            @error('tempat_panggil')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="tgl_jbtan" class="form-label">Tanggal Jabatan</label>
            <input type="date" class="form-control @error('tgl_jbtan') is-invalid @enderror" name="tgl_jbtan"
                value="{{ old('tgl_jbtan') }}">
            @error('tgl_jbtan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="ket_panggil" class="form-label">Keterrangan Panggilan</label>
            <input type="text" class="form-control @error('ket_panggil') is-invalid @enderror" name="ket_panggil"
                value="{{ old('ket_panggil') }}">
            @error('ket_panggil')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="nama_pemeriksa" class="form-label">Nama Pemeriksa</label>
            <input type="text" class="form-control @error('nama_pemeriksa') is-invalid @enderror" name="nama_pemeriksa"
                value="{{ old('nama_pemeriksa') }}">
            @error('nama_pemeriksa')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

       

        <button type="submit" class="btn btn-danger btn-buy-now">Submit</button>
    </form>
</div>
@endsection
