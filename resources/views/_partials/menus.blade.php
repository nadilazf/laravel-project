@php
    $routeActive = Route::currentRouteName();
@endphp

<li class="nav-item">
    <a class="nav-link {{ $routeActive == 'home' ? 'active' : '' }}" href="{{ route('home') }}">
        <i class="ni ni-tv-2 text-primary"></i>
        <span class="nav-link-text">Dashboard</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link {{ $routeActive == 'users.index' ? 'active' : '' }}" href="{{ route('users.index') }}">
        <i class="fas fa-users text-warning"></i>
        <span class="nav-link-text">Users</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link {{ $routeActive == 'profile' ? 'active' : '' }}" href="{{ route('profile') }}">
        <i class="fas fa-user-tie text-success"></i>
        <span class="nav-link-text">Profile</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link {{ $routeActive == 'persediaan-barang.index' ? 'active' : '' }}" href="{{ route('persediaan-barang.index') }}">
        <i class="fas fa-box-open"></i>
        <span class="nav-link-text">Persediaan Barang</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link {{ $routeActive == 'data-pemesan.index' ? 'active' : '' }}" href="{{ route('data-pemesan.index') }}">
        <i class="fas fa-clipboard"></i>
        <span class="nav-link-text">Data Pesanan</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link {{ $routeActive == 'report-penjualan.index' ? 'active' : '' }}" href="{{ route('report-penjualan.index') }}">
        <i class="fas fa-calculator"></i>
        <span class="nav-link-text">Report Penjualan</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link {{ $routeActive == 'pendapatan.index' ? 'active' : '' }}" href="{{ route('pendapatan.index') }}">
        <i class="fas fa-sort-amount-down-alt"></i>
        <span class="nav-link-text">Pendapatan</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link {{ $routeActive == 'pengeluaran.index' ? 'active' : '' }}" href="{{ route('pengeluaran.index') }}">
        <i class="fas fa-sort-amount-up-alt"></i>
        <span class="nav-link-text">Pengeluaran</span>
    </a>
</li>
