@extends('admin.layouts.main')

@section('container')
<div class="card container-fluid">
    <div class="card-body">
    @if(session('success'))
    <div class="alert alert-success container container-fluid" role="alert">
    {{ session('success') }}
    </div>
    @endif

    </div>
</div>
@endsection
