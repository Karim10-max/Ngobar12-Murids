@extends('murids.layout')

@section('content')
<div class="card mt-5">
    <h2 class="card-header">Detail Murid</h2>
    <div class="card-body">
        <dl class="row">
            <dt class="col-sm-3">Murid</dt>
            <dd class="col-sm-9">{{ $murid->nama_murid }}</dd>
        </dl>
        <a href="{{ route('murids.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection
