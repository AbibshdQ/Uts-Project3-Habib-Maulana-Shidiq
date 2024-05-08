@extends('layouts.main')

@section('container')

<div class="col-lg-6 mb-5">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit absensi</h1>
    </div>
    <form method="post" action="/absensi-backend/{{$absensis->id}}">
        @method( 'put' )
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
            <label for="tgl_absen" class="form-label">Tanggal Absensi</label>
            <input type="date" class="form-control @error('tgl_absen') is-invalid @enderror" name="tgl_absen"
                value="{{$absensis->tgl_absen, old('tgl_absen') }}">
            @error('tgl_absen')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="stat_absen" class="form-label">Status Absen</label>
            <select class="form-control @error('stat_absen') is-invalid @enderror" name="stat_absen">
                <option value="Hadir" selected>Hadir</option>
                <option value="sakit">Sakit</option>
                <option value="Izin">Izin</option>
            </select>
            @error('stat_absen')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="waktu_tb" class="form-label">Waktu Terlambat</label>
            <input class="form-control @error('waktu_tb') is-invalid @enderror" name="waktu_tb" 
                 value="{{ $absensis->waktu_tb, old('waktu_tb') }}">
            @error('waktu_tb')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

      

        <button type="submit" class="btn btn-danger btn-buy-now">Submit</button>
    </form>
</div>
@endsection
