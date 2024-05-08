@extends('layouts.main')

@section('container')
    <div class="col-lg-6 mb-5">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Edit Jabatan</h1>
        </div>
        <form method="post" action="/jabatan-backend/{{ $jabatans->id }}">
            @method('put')
            @csrf

            <div class="mb-2">
                <label for="nama_jab" class="form-label">Jabatan</label>
                <input type="text" class="form-control @error('nama_jab') is-invalid @enderror" name="nama_jab"
                    value="{{ $jabatans->nama_jab, old('nama_jab') }}">
                @error('nama_jab')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-2">
                <label for="awal_jab" class="form-label">Akhir Jabatan</label>
                <input type="date" class="form-control @error('awal_jab') is-invalid @enderror" name="awal_jab"
                    value="{{ $jabatans->awal_jab, old('awal_jab') }}">
                @error('awal_jab')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-2">
                <label for="akhir_jab" class="form-label">Akhir Jabatan</label>
                <input type="date" class="form-control @error('akhir_jab') is-invalid @enderror" name="akhir_jab"
                    value="{{ $jabatans->akhir_jab, old('akhir_jab') }}">
                @error('akhir_jab')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

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

            {{-- <div class="mb-2">
            <label for="lama_jab" class="form-label">Lama Jabatan</label>
            <input type="text" class="form-control @error('lama_jab') is-invalid @enderror" name="lama_jab"
                value="{{$jabatans->lama_jab, old('lama_jab') }}">
            @error('lama_jab')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div> --}}

            <button type="submit" class="btn btn-danger btn-buy-now">Submit</button>
        </form>
    </div>
@endsection
