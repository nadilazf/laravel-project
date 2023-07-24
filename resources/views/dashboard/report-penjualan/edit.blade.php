@extends('layouts.app')
@section('title', 'Ubah Data Report Penjualan')

@section('title-header', 'Ubah Data Report Penjualan')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('report-penjualan.index') }}">Report Penjualan</a></li>
    <li class="breadcrumb-item active">Ubah Data Report Penjualan</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-transparent border-0 text-dark">
                    <h5 class="mb-0">Formulir Ubah Report Penjualan</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('report-penjualan.update', $report->id) }}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group mb-3">
                                    <label for="bulan">Bulan</label>
                                    <input type="date" class="form-control @error('bulan') is-invalid @enderror" id="bulan"
                                        placeholder="Input Bulan" value="{{ $report->bulan }}" name="bulan">

                                    @error('bulan')
                                        <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mb-3">
                                    <label for="nama_barang">Nama Barang</label>
                                    <input type="text" class="form-control @error('nama_barang') is-invalid @enderror"
                                        id="nama_barang" placeholder="Input Nama Barang" value="{{ $report->nama_barang }}"
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
                                    <label for="quantity">Quantity</label>
                                    <input type="number" class="form-control @error('quantity') is-invalid @enderror"
                                    id="quantity" placeholder="Input Quantity" value="{{ $report->quantity }}"
                                    name="quantity">

                                    @error('quantity')
                                    <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mb-3">
                                    <label for="harga_barang">Harga Barang</label>
                                    <input type="number" class="form-control @error('harga_barang') is-invalid @enderror"
                                    id="harga_barang" placeholder="Input Harga Barang" value="{{ $report->harga_barang }}"
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
                                    <label for="total_profit">Total Profit</label>
                                    <input type="number" class="form-control @error('total_profit') is-invalid @enderror"
                                    id="total_profit" placeholder="Input Total Profit" value="{{ $report->total_profit }}"
                                    name="total_profit">

                                    @error('total_profit')
                                    <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-sm btn-primary">Ubah</button>
                                <a href="{{ route('report-penjualan.index') }}" class="btn btn-sm btn-secondary">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
