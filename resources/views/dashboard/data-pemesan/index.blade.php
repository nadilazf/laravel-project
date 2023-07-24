@extends('layouts.app')
@section('title', 'Data Pesanan ')

@section('title-header', 'Data Pesanan')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Data Pesanan</li>
@endsection

@section('action_btn')
    <a href="{{route('data-pemesan.create')}}" class="btn btn-default">Tambah Data Pesanan</a>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-transparent border-0 text-dark">
                    <h2 class="card-title h3">Data Pesanan</h2>
                    <div class="table-responsive">
                        <table class="table table-flush table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pembeli</th>
                                    <th>Jumlah Pembeli</th>
                                    <th>total harga</th>
                                    <th>Alamat Pembeli</th>
                                    <th>No Telepon</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($pesanans as $pesanan)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pesanan->nama_pemesan }}</td>
                                        <td>{{ $pesanan->jumlah_pesanan }}</td>
                                        <td>{{ $pesanan->total_harga }}</td>
                                        <td>{{ $pesanan->alamat_pemesan }}</td>
                                        <td>{{ $pesanan->telp }}</td>
                                        <td class="d-flex jutify-content-center">
                                            <a href="{{route('data-pemesan.edit', $pesanan->id)}}" class="btn btn-sm btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                            <form id="delete-form-{{ $pesanan->id }}" action="{{ route('data-pemesan.destroy', $pesanan->id) }}" class="d-none" method="post">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <button onclick="deleteForm('{{$pesanan->id}}')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">Tidak ada data</td>
                                    </tr>
                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="4">
                                        {{ $pesanans->links() }}
                                    </th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function deleteForm(id){
            Swal.fire({
                title: 'Hapus data',
                text: "Anda akan menghapus data!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Batal!'
                }).then((result) => {
                if (result.isConfirmed) {
                    $(`#delete-form-${id}`).submit()
                }
            })
        }
    </script>
@endsection
