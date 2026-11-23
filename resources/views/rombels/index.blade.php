@extends('rombels.layout')

@section('content')
<div class="card mt-5">
    <h2 class="card-header">Daftar Rombel</h2>
    <div class="card-body">
        @session('success')
            <div class="alert alert-success">{{ $value }}</div>
        @endsession

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-success" href="{{ route('rombels.create') }}">NEW</a>
        </div>

        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th width="80px">No</th>
                    <th>Rombel</th>
                    <th width="200px">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($rombels as $rombel)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $rombel->nama_rombel }}</td>
                        <td>
                            <form action="{{ route('rombels.destroy', $rombel) }}" method="POST">
                                <a class="btn btn-info btn-sm" href="{{ route('rombels.show', $rombel) }}">Show</a>
                                <a class="btn btn-primary btn-sm" href="{{ route('rombels.edit', $rombel) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">Data Rombel tidak tersedia</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{ $rombels->links() }}
    </div>
</div>
@endsection
