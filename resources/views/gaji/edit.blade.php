@extends('layouts.main')

@section('container')

<div class="col-lg-6 mb-5">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit gaji</h1>
    </div>
    <form method="post" action="/gaji-backend/{{$gajis->id}}">
        @method( 'put' )
        @csrf

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

        <div class="mb-2">
            <label for="besaran" class="form-label">Besaran Gaji</label>
            <input type="text" class="form-control @error('besaran') is-invalid @enderror" name="besaran"
                value="{{$gajis->besaran, old('besaran') }}">
            @error('besaran')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
       
        <div class="mb-2">
            <label for="bonus" class="form-label">Bonus</label>
            <input type="text" class="form-control @error('bonus') is-invalid @enderror" name="bonus"
                value="{{$gajis->bonus, old('bonus') }}">
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
