@extends('murids.layout')
@section('content')
<div class="card mt-5">
<h2 class="card-header">Daftar Murid</h2>
<div class="card-body">
  @session('success')
    <div class="alert alert-success" role="alert"> {{ $value }}</div>
  @endsession

  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a class="btn btn-success btn-sm" href="{{ route('murids.create')}}"><i class="fa fa-plus"></i> New </a>
  </div>

  <table class="table table-bordered table-striped mt-4">
      <thead>
          <tr>
              <th width="80px">no</th>
        <th>Nis</th>
        <th>Nama</th>
        <th>Rombel</th>
        <th>Rayon</th>
        <th>Alamat</th>
        <th>No Telp</th>
        <th>Jk</th>
        <tr>
      <thead>


      <body>
        @forelse ($murids as $murid)
      
        </tr>
            <td>{{ ++$i }}</td>
            <td>{{ $murid->nis }}</td>
            <td>{{ $murid->nama }}</td>
            <td>{{ $murid->rombel }}</td>
            <td>{{ $murid->rayon }}</td>
            <td>{{ $murid->alamat }}</td>
            <td>{{ $murid->no_tlp }}</td>
            <td>{{ $murid->jk }}</td>
            <td>
              <form action="{{route('murids.destroy' ,$murid->id)}}" method="POST">

                <a class="btn btn-info btn-sm" href="{{ route('murids.show' ,$murid->id)}}">Show</a>
                 <i class="fa-solid fa-edit"></i>
                <a class="btn btn-primary btn-sm" href="{{ route('murids.edit' ,$murid->id)}}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
              </form>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="9" class="text-center">Data tidak ditemukan</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection