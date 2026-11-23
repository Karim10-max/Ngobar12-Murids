
@extends('rayons.layout')

@section('content')
<div class="card mt-5">
    <h2 class="card-header">Daftar Rayon</h2>
    <div class="card-body">
        @session('success')
            <div class="alert alert-success">{{ $value }}</div>
        @endsession

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-success" href="{{ route('rayons.create') }}">NEW</a>
        </div>

        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th width="80px">No</th>
                    <th>Rayon</th>
                    <th width="200px">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($rayons as $Rayon)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $Rayon->nama_rayon }}</td>
                        <td>
                            <form action="{{ route('rayons.destroy', $Rayon) }}" method="POST">
                                <a class="btn btn-info btn-sm" href="{{ route('rayons.show', $Rayon) }}">Show</a>
                                <a class="btn btn-primary btn-sm" href="{{ route('rayons.edit', $Rayon) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">Data Rayon tidak tersedia</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{ $rayons->links() }}
    </div>
</div>
@endsection
