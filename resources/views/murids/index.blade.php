@extends('murids.layout')
@section('content')

<div class="card mt-5">
<h2 class="card-header">Daftar Murid</h2>
<div class="card-body">

  {{-- pemberitahuan apabila data berhasil di input --}}
  @session('success')
    <div class="alert alert-success">{{ $value }}</div>
  @endsession


  {{-- tombol tambah data create --}}
  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a class="btn btn-success" href="{{ route('murids.create') }}"> <i class="fa fa-plus"></i> NEW </a>
  </div>

  
  <table class="table table-bordered table-striped mt-4">
    <thead>
      <tr>
        <th width="80px">No</th>
        <th>Nis</th>
        <th>Nama</th>
        <th>Rombel</th>
        <th>Rayon</th>
        <th>Alamat</th>
        <th>No Telp</th>
        <th>Jk</th>
        <th width="100px">Action</th>
      </tr>
    </thead>
    
    <tbody>
      @forelse ($murids as $murid)
      <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $murid->nis }}</td>
        <td>{{ $murid->nama }}</td>
        <td>{{ $murid->rombel }}</td>
        <td>{{ $murid->rayon }}</td>
        <td>{{ $murid->alamat }}</td>
        <td>{{ $murid->no_tlp }}</td>
        <td>{{ $murid->jk }}</td>
        <td>
          <form action="{{ route('murids.destroy',$murid->id) }}" method="POST">
            <a class="btn btn-info btn-sm" href="{{ route('murids.show',$murid->id) }}">
              <i class="fa-solid fa-list"></i> Show
            </a>

            <a class="btn btn-primary btn-sm" href="{{ route('murids.edit',$murid->id) }}">
              <i class="fa-solid fa-pen-to-square"></i> Edit
            </a>
              
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </td>
      </tr>
      @empty
      <tr>
        <td colspan="9" class="text-center">Data Murid tidak tersedia</td>
      </tr> 
      @endforelse
    </tbody>
  </table>
</div>
@endsection
