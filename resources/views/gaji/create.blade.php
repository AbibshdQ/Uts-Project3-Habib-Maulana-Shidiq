@extends('layouts.main')

@section('container')

<div class="col-lg-6 mb-5">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Entri Gaji</h1>
    </div>
    <form method="post" action="{{ route('gaji-backend.store') }}">
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
            <label for="jabatan_id" class="form-label">Nama Jabatan</label>
            <select class="form-control @error('id') is-invalid @enderror" name="jabatan_id">
                @foreach ($jabatans as $item)
                    @if (old('id') == $item->id)
                        <option value="{{ $item->id }}" selected > {{ $item->nama_jab }} </option>
                    @else
                        <option value="{{ $item->id }}">{{ $item->nama_jab }}</option>
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
            <label for="riwayat_idjab" class="form-label">Nama Golongan</label>
            <select class="form-control @error('id') is-invalid @enderror" name="riwayat_idjab">
                @foreach ($pegawais as $item)
                    @if (old('id') == $item->id)
                        <option value="{{ $item->id }}" selected > {{ $item->golongan_jab }} </option>
                    @else
                        <option value="{{ $item->id }}">{{ $item->golongan_jab }}</option>
                    @endif
                @endforeach
            </select>
            @error('id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div> --}}

        <div class="mb-2">
            <label for="besaran" class="form-label">Besaran Gaji</label>
            <input type="text" class="form-control @error('besaran') is-invalid @enderror" name="besaran"
                value="{{ old('besaran') }}">
            @error('besaran')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
       
        <div class="mb-2">
            <label for="bonus" class="form-label">Bonus</label>
            <input type="text" class="form-control @error('bonus') is-invalid @enderror" name="bonus"
                value="{{ old('bonus') }}">
            @error('bonus')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

       

        <button type="submit" class="btn btn-danger btn-buy-now">Submit</button>
    </form>
</div>
@endsection
