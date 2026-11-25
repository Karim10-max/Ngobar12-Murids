@extends('layout')
@section('content')

<div class="card mt-5">
    <h2 class="card-header">Edit Rayon</h2>
    <div class="card-body">
        <form action="{{ route('rayons.update', $rayon) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_rayon" class="form-label"><strong>Rayon    :</strong></label>
                <input type="text" id="nama_rayon" name="nama_rayon"
                    value="{{ old('nama_rayon', $rayon->nama_rayon) }}"
                    class="form-control @error('nama_rayon') is-invalid @enderror">
                @error('nama_rayon')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Perbarui</button>
            <a href="{{ route('rayons.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
