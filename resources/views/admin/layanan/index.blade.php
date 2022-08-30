@extends('admin.layouts.main')

@section('container')
<div class="card container-fluid">
  <div class="card-body">
    @if(session('success'))
    <div class="alert alert-success container container-fluid" role="alert">
      {{ session('success') }}
    </div>
    @endif
    <div class="d-inline">
      <div class="d-flex justify-content-center ">
        @cannot('admin')
        <a href="/admin/layanan/create" class="btn btn-success mb-2"><i data-feather="file-plus"></i></a>
        @endcannot
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped table-bordered" id="myTable">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Usaha</th>
            <th>Nama</th>
            <th>harga</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($layanans as $layanan)
          <tr>
            <td>{{ $loop->iteration }}</td>
            @if($layanan->nama_toko)
            <td name="nama_toko">{!! $layanan->nama_toko !!}</td>
            @else
            <td>
              <p class="text-danger text-bold text-capitalize h5">Not Found</p>
            </td>
            @endif
            @if($layanan->nama)
            <td name="nama">{!! $layanan->nama !!}</td>
            @else
            <td>
              <p class="text-danger text-bold text-capitalize h5">Not Found</p>
            </td>
            @endif
            @if($layanan->harga)
            <td>{!! $layanan->harga !!}</td>
            @else
            <td>
              <p class="text-danger text-bold text-capitalize h5">Not Found</p>
            </td>
            @endif
            <td>
              @can('admin')
              <a href="/admin/layanan/{{ $layanan->id }}/edit" class="btn btn-warning"><i data-feather="edit"></i></a>
              @cannot('admin')
              <form action="/admin/layanan/{{ $layanan->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button href="/admin/layanan/{{ $layanan->id }}" class="btn btn-danger" type="submit" onclick="return confirm('Are you sure?')"><i data-feather="trash"></i></button>
              </form>
              @endcannot
              @endcan
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
