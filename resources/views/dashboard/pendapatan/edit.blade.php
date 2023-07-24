@extends('layouts.app')
@section('title', 'Ubah Pendapatan')

@section('title-header', 'Ubah Pendapatan')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('pengeluaran.index') }}">Pendapatan</a></li>
    <li class="breadcrumb-item active">Ubah Pendapatan</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-transparent border-0 text-dark">
                    <h5 class="mb-0">Formulir Ubah Pendapatan</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('pendapatan.update', $pendapatan->id) }}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group mb-3">
                                    <label for="bulan">Bulan</label>
                                    <input type="date " class="form-control @error('bulan') is-invalid @enderror" id="bulan"
                                        placeholder="Input Bulan" value="{{ $pendapatan->bulan }}" name="bulan">

                                    @error('bulan')
                                        <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mb-3">
                                    <label for="pendapatan">Pendapatan</label>
                                    <input type="number" class="form-control @error('pendapatan') is-invalid @enderror"
                                        id="pendapatan" placeholder="Input Pendapatan" value="{{ $pendapatan->pendapatan }}" name="pendapatan">

                                    @error('pendapatan')
                                        <div class="d-block invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-sm btn-primary">Ubah</button>
                                <a href="{{ route('pendapatan.index') }}" class="btn btn-sm btn-secondary">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
