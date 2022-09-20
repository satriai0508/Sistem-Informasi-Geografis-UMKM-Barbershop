@extends('admin.layouts.main')

@section('container')
    <div class="card">
        <div class="card-body">
            <form class="form-group" method="post" action="/admin/layanan/{{ $layanans->id }}">
            @method('put')
                @csrf
                <div class="card-body">
                    <h4 class="card-title d-flex justify-content-center">Edit Data</h4>
                    @cannot('admin')
                    <div class="form-group row mb-2">
                        <label for="nama_toko" class="col-sm-3 text-end control-label col-form-label">Nama Usaha</label>
                        <div class="col-md-6">
                            <input type="text" 
                                class="form-control form-control-plaintext @error('nama_toko') is-invalid @enderror"
                                id="nama_toko" name="nama_toko" placeholder="Enter Models" required
                                value="{{ old('nama_toko', auth()->user()->name) }}" readonly />
                            @error('nama_toko')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    @endcannot
                    @can('admin')
                    <div class="form-group row mb-2">
                        <label for="nama_toko" class="col-sm-3 text-end control-label col-form-label">Nama Usaha</label>
                        <div class="col-md-6">
                            <input type="text" 
                                class="form-control form-control-plaintext @error('nama_toko') is-invalid @enderror"
                                id="nama_toko" name="nama_toko" placeholder="Enter Models" required
                                value="{{ old('nama_toko', $layanans->nama_toko) }}" readonly />
                            @error('nama_toko')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    @endcan
                    <div class="form-group row mb-2">
                        <label for="nama" class="col-sm-3 text-end control-label col-form-label">Daftar Layanan</label>
                        <div class="col-md-6">
                            <input type="text" 
                                class="form-control form-control-plaintext @error('nama') is-invalid @enderror"
                                id="nama" name="nama" placeholder="Enter Models" required
                                value="{{ old('nama', $layanans->nama) }}" autofocus />
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label for="harga" class="col-sm-3 text-end control-label col-form-label">Harga (Rp)</label>
                        <div class="col-md-6">  
                            <input type="text"
                                class="form-control form-control-plaintext @error('harga') is-invalid @enderror"
                                id="harga" name="harga" placeholder="Enter Prices (RP)" required
                                value="{{ old('harga', $layanans->harga) }}" />
                            @error('harga')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="card-body mb-lg-2">
                <div class="card-body d-flex justify-content-center mt-2">
                    <a href="{{ url()->previous() }}" class="btn btn-info me-1"><i data-feather="arrow-left"></i></a>
                    <button type="submit" class="btn btn-success">
                    <i data-feather="file-plus"></i>
                    </button>
                </div>
                </div>
            </form>
        </div>
    </div>
@endsection
