@extends('layout')

@section('content')
<div class="card mt-5">
    <h2 class="card-header">Detail Rayon</h2>
    <div class="card-body">
        <dl class="row">
            <dt class="col-sm-3">Rayon</dt>
            <dd class="col-sm-9">{{ $rayon->nama_rayon }}</dd>
        </dl>
        <a href="{{ route('rayons.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection
