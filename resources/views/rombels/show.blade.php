@extends('layout')

@section('content')
<div class="card mt-5">
    <h2 class="card-header">Detail Rombel</h2>
    <div class="card-body">
        <dl class="row">
            <dt class="col-sm-3">Rombel</dt>
            <dd class="col-sm-9">{{ $rombel->nama_rombel }}</dd>
        </dl>
        <a href="{{ route('rombels.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection
