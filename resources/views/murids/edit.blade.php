@extends('murids.layout')
@section('content')

<div class="card mt-5">
    <h2 class="card-header">Edit Product</h2>
    <div class="card-body">

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="{{ route('murids.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
    </div>

    <form action="{{ route('murids.update',$murid->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="inputNis" class="form-label"><strong>Nis:</strong></label>
            <input
                type="text"
                name="nis"
                class="form-control @error('nis') is-invalid @enderror"
                id="inputNis"
                placeholder="Nis">
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
            <input
                type="text"
                name="rombel"
                class="form-control @error('rombel') is-invalid @enderror"
                id="inputRombel"
                placeholder="Rombel">
            @error('rombel')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        
            <div class="mb-3">
                <label for="inputRayon" class="form-label"><strong>Rayon:</strong></label>
                <input
                    type="text"
                    name="rayon"
                    class="form-control @error('rayon') is-invalid @enderror"
                    id="inputRayon"
                    placeholder="Rayon">
                @error('rayon')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
             <div class="mb-3">
                <label for="inputNoTelp" class="form-label"><strong>No Telp:</strong></label>
                <input
                    type="text"
                    name="no_tlp"
                    class="form-control @error('no_tlp') is-invalid @enderror"
                    id="inputNoTelp"
                    placeholder="No Telp">
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