@extends('layout')
@section('content')

<div class="card mt-5">
    <h2 class="card-header">Edit Rombel</h2>
    <div class="card-body">
        <form action="{{ route('rombels.update', $rombel) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_rombel" class="form-label"><strong>Rombel:</strong></label>
                <input type="text" id="nama_rombel" name="nama_rombel"
                    value="{{ old('nama_rombel', $rombel->nama_rombel) }}"
                    class="form-control @error('nama_rombel') is-invalid @enderror">
                @error('nama_rombel')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Perbarui</button>
            <a href="{{ route('rombels.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
