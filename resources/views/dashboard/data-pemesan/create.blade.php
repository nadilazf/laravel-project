@extends('layouts.app')
@section('title', 'Tambah Data Pembeli')

@section('title-header', 'Tambah Data Pembeli')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('data-pemesan.index') }}">Data Pembeli</a></li>
    <li class="breadcrumb-item active">Tambah Data Pembeli</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-transparent border-0 text-dark">
                    <h5 class="mb-0">Formulir Data Pembeli</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('data-pemesan.store') }}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group mb-3">
                                    <label for="nama_pemesan">Nama Pembeli</label>
                                    <input type="text" class="form-control @error('nama_pemesan') is-invalid @enderror" id="nama_pemesan"
                                        placeholder="Input Nama Pembeli" value="{{ old('nama_pemesan') }}" name="nama_pemesan">

                                    @error('nama_pemesan')
                                        <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mb-3">
                                    <label for="jumlah_pesanan">Jumlah Pesanan</label>
                                    <input type="number" class="form-control @error('jumlah_pesanan') is-invalid @enderror"
                                        id="jumlah_pesanan" placeholder="Input Jumlah Pesanan" value="{{ old('jumlah_pesanan') }}"
                                        name="jumlah_pesanan">

                                    @error('jumlah_pesanan')
                                        <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group mb-3">
                                    <label for="total_harga">Total Harga</label>
                                    <input type="number" class="form-control @error('total_harga') is-invalid @enderror" id="total_harga"
                                        placeholder="Input Total Harga" value="{{ old('total_harga') }}" name="total_harga">

                                    @error('total_harga')
                                        <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mb-3">
                                    <label for="alamat_pemesan">Alamat Pembeli</label>
                                    <input type="text" class="form-control @error('alamat_pemesan') is-invalid @enderror"
                                        id="alamat_pemesan" placeholder="Input Alamat Pembeli" value="{{ old('alamat_pemesan') }}"
                                        name="alamat_pemesan">

                                    @error('alamat_pemesan')
                                        <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <label for="telp">No Telepon</label>
                                <input type="text" class="form-control @error('telp') is-invalid @enderror"
                                    id="telp" placeholder="Input No Telepon" value="{{ old('telp') }}" name="telp">

                                @error('telp')
                                    <div class="d-block invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-sm btn-primary">Tambah</button>
                                <a href="{{route('data-pemesan.index')}}" class="btn btn-sm btn-secondary">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
