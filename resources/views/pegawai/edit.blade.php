@extends('layouts.main')

@section('container')

<div class="col-lg-6 mb-5">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Pegawai</h1>
    </div>
    <form method="post" action="/pegawai-backend/{{$pegawais->id}}">
        @method('PUT')
        @csrf

        <div class="mb-2">
            <label for="namapeg" class="form-label">Nama Pegawai</label>
            <input type="text" class="form-control @error('namapeg') is-invalid @enderror" name="namapeg"
                value="{{ $pegawais->namapeg, old('namapeg') }}">
            @error('namapeg')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="j_kel" class="form-label">Jenis Kelamin</label>
            <select class="form-control form-control-user @error('j_kel') is-invalid @enderror" name="j_kel">
                
                <option value="Laki Laki" selected>Laki Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            @error('j_kel')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        {{-- <div class="form-group mb-2">
            <label>Jenis Kelamin</label>
            @php
                $jenis_kelamins = ['Laki-Laki', 'Perempuan'];
            @endphp
            <select class="form-control form-control-user col-3" name="jenis_kelamin">
                @foreach ($jenis_kelamins as $jenis_kelamin)
                    <option value="{{ $jenis_kelamin }}" @selected($pegawais->jenis_kelamin == $jenis_kelamin)>{{ $jenis_kelamin }}</option>
                @endforeach
            </select>
        </div> --}}

        <div class="mb-2">
            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir"
                value="{{ $pegawais->tgl_lahir, old('tgl_lahir') }}">
            @error('tgl_lahir')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="tmpt_lahir" class="form-label">Tempat Lahir</label>
            <textarea class="form-control @error('tmpt_lahir') is-invalid @enderror" name="tmpt_lahir">{{$pegawais->tmpt_lahir,  old('tmpt_lahir') }}</textarea>
            @error('tmpt_lahir')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat">{{ $pegawais->alamat, old('alamat') }}</textarea>
            @error('alamat')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        
        {{-- <div class="mb-2">
            <label for="stat_peg" class="form-label">Status Pegawai</label>
            <textarea class="form-control @error('stat_peg') is-invalid @enderror" name="stat_peg">{{ $pegawais->stat_peg, old('stat_peg') }}</textarea>
            @error('stat_peg')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div> --}}

        <div class="mb-2">
            <label for="stat_peg" class="form-label">Status Pegawai</label>
            <select class="form-control form-control-user @error('stat_peg') is-invalid @enderror" name="stat_peg">
                <option value="Aktif" selected>Aktif</option>
                <option value="Pensiun">Pensiun</option>
            </select>
            @error('stat_peg')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>        

        <div class="mb-2">
            <label for="tgl_masuk" class="form-label">Tanggal Masuk</label>
            <input type="date" class="form-control @error('tgl_masuk') is-invalid @enderror" name="tgl_masuk"
                value="{{$pegawais->tgl_masuk, old('tgl_masuk') }}">
            @error('tgl_masuk')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-danger btn-buy-now">Submit</button>
    </form>
</div>
@endsection
