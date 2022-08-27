@extends('admin.layouts.main')

@section('container')
<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="card text-bg-primary col-2 me-lg-2 m-25">
        <div class="card-header"><i class="mdi mdi-map-marker-multiple"></i> Peta</div>
        <div class="card-body">
          <h5 class="card-title"><a href="#" class="text-bold text-decoration-none text-white">Peta</a></h5>
          <p class="card-text">Total data : {{ App\Models\Peta::count() }}</p>
        </div>
      </div>
      <div class="card text-bg-dark col-2 me-lg-2 m-25">
        <div class="card-header"><i class="mdi mdi-store-24-hour"></i> Toko</div>
        <div class="card-body">
          <h5 class="card-title"><a href="#" class="text-bold text-decoration-none text-white">Toko</a></h5>
          <p class="card-text">Total data : {{ App\Models\Toko::count() }}</p>
        </div>
      </div>
      <div class="card text-bg-success col-2 me-lg-2 m-25">
        <div class="card-header"><i class="mdi mdi-store"></i> Layanan</div>
        <div class="card-body">
          <h5 class="card-title"><a href="#" class="text-bold text-decoration-none text-white">Layanan</a></h5>
          <p class="card-text">Total data : {{ App\Models\Layanan::count() }}</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
