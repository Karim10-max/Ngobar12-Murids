@extends('murids.layout')
@section('content')
@section('Navbar')

<div class="card mt-5">
  <h2 class="card-header">Add New Murid</h2>
  <div class="card-body">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="{{ route('murids.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
    </div>
    <form action="{{ route('murids.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="inputNis" class="form-label"><strong>Nis:</strong></label>
            <input
                type="number"
                name="nis"
                class="form-control @error('nis') is-invalid @enderror"
                id="inputNis"
                placeholder="Nis"
            @error('nis')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

         <div class="mb-3">
            <label for="inputNama" class="form-label"><strong>Name:</strong></label>
            <input
                type="text"
                name="nama"
                class="form-control @error('nama') is-invalid @enderror"
                id="inputNama"
                placeholder="Name">
            @error('nama')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

         <div class="mb-3">
            <label for="inputRombel" class="form-label"><strong>Rombel:</strong></label>
            <select
                name="rombel"
                class="form-control @error('rombel') is-invalid @enderror"
                id="inputRombel">
                <option value="">-- Pilih Rombel --</option>
                @forelse ($rombels as $rombel)
                    <option value="{{ $rombel->nama_rombel }}"
                        {{ old('rombel') == $rombel->nama_rombel ? 'selected' : '' }}>
                        {{ $rombel->nama_rombel }}
                    </option>
                @empty
                    <option value="">Tidak ada rombel tersedia</option>
                @endforelse
            </select>
        </div>

            <div class="mb-3">
                <label for="inputRayon" class="form-label"><strong>Rayon:</strong></label>
                <select
                    name="rayon"
                    class="form-control @error('rayon') is-invalid @enderror"
                    id="inputRayon">
                    <option value="">-- Pilih Rayon --</option>
                @forelse ($rayons as $rayon)
                    <option value="{{ $rayon->nama_rayon }}"
                        {{ old('rayon') == $rayon->nama_rayon ? 'selected' : '' }}>
                        {{ $rayon->nama_rayon }}
                    </option>
                @empty
                    <option value="">Tidak ada rayon tersedia</option>
                @endforelse
                </select>
            </div>

             <div class="mb-3">
                <label for="inputNoTelp" class="form-label"><strong>No Telp:</strong></label>
                <input
                    type="number"
                    name="no_tlp"
                    class="form-control @error('no_tlp') is-invalid @enderror"
                    id="inputNoTelp"
                    placeholder="No Telp"
                @error('no_tlp')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

             <div class="mb-3">
                <label for="inputAlamat" class="form-label"><strong>Alamat:</strong></label>
                <input
                    type="text"
                    name="alamat"
                    class="form-control @error('alamat') is-invalid @enderror"
                    id="inputAlamat"
                    placeholder="Alamat">
                @error('alamat')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            
           <div class="mb-3">
    <label for="inputJk" class="form-label"><strong>Jenis Kelamin:</strong></label>
    <select
        name="jk"
        class="form-control @error('jk') is-invalid @enderror"
        id="inputJk">
        
        <option value="">-- Pilih Jenis Kelamin --</option>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
        
       
    </select>
    @error('jk')
        <div class="form-text text-danger">{{ $message }}</div>
    @enderror
</div>
        <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
    </form>
  </div>
</div>
@endsection