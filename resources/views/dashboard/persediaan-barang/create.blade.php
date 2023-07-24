@extends('layouts.app')
@section('title', 'Tambah Persediaan Barang')

@section('title-header', 'Tambah Persediaan Barang')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('persediaan-barang.index') }}">Persediaan Barang</a></li>
    <li class="breadcrumb-item active">Tambah Persediaan Barang</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-transparent border-0 text-dark">
                    <h5 class="mb-0">Formulir Persediaan Barang</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('persediaan-barang.store') }}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group mb-3">
                                    <label for="kode_barang">Kode Barang</label>
                                    <input type="number" class="form-control @error('kode_barang') is-invalid @enderror" id="kode_barang"
                                        placeholder="Input Kode Barang" value="{{ old('kode_barang') }}" name="kode_barang">

                                    @error('kode_barang')
                                        <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mb-3">
                                    <label for="nama_barang">Nama Barang</label>
                                    <input type="text" class="form-control @error('nama_barang') is-invalid @enderror"
                                        id="nama_barang" placeholder="Input Nama Barang" value="{{ old('nama_barang') }}"
                                        name="nama_barang">

                                    @error('nama_barang')
                                        <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group mb-3">
                                    <label for="jenis_barang">Jenis Barang</label>
                                    <input type="text" class="form-control @error('jenis_barang') is-invalid @enderror" id="jenis_barang"
                                        placeholder="Input Jenis Barang" value="{{ old('jenis_barang') }}" name="jenis_barang">

                                    @error('jenis_barang')
                                    <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mb-3">
                                    <label for="harga_barang">Harga Barang</label>
                                    <input type="number" class="form-control @error('harga_barang') is-invalid @enderror"
                                        id="harga_barang" placeholder="Input Harga Barang" value="{{ old('harga_barang') }}"
                                        name="harga_barang">

                                    @error('harga_barang')
                                        <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group mb-3">
                                    <label for="quantity">Quantity</label>
                                    <input type="number" class="form-control @error('quantity') is-invalid @enderror"
                                        id="quantity" placeholder="Input Quantity"  value="{{ old('quantity') }}" name="quantity">

                                    @error('quantity')
                                        <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mb-3">
                                    <label for="tujuan_barang">Tujuan Barang</label>
                                    <input type="text" class="form-control @error('tujuan_barang') is-invalid @enderror"
                                        id="tujuan_barang" placeholder="Input Tujuan Barang"  value="{{ old('tujuan_barang') }}" name="tujuan_barang">

                                    @error('tujuan_barang')
                                        <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                            <div class="row">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-sm btn-primary">Tambah</button>
                                    <a href="{{route('persediaan-barang.index')}}" class="btn btn-sm btn-secondary">Kembali</a>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
