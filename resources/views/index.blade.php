@extends('layout.app')

@section('title', 'FoodZone - Cita Rasa Tak Terlupakan')

@section('content')
<div id="foodCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?q=80&w=1200&h=500&auto=format&fit=crop" class="d-block w-100 hero-img" alt="Drink">
            <div class="carousel-caption">
                <h1 class="display-4 fw-bold">Selamat Datang di {{ $brandName }}</h1>
                <p class="lead">Rasakan sensasi kuliner terbaik dengan bahan-bahan pilihan.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=1200&h=500&auto=format&fit=crop" class="d-block w-100 hero-img" alt="Food">
            <div class="carousel-caption">
                <h1 class="display-4 fw-bold">Menu Spesial Setiap Hari</h1>
                <p class="lead">Promo menarik untuk makan siang bersama teman dan keluarga.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#foodCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#foodCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<div class="container my-5 text-center" id="home">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h2 class="fw-bold mb-3">Tentang {{ $brandName }}</h2>
            <p class="text-muted">{{ $description }}</p>
        </div>
    </div>
</div>

<div class="container my-5" id="menu">
    <h3 class="text-center fw-bold mb-4">Menu Terpopuler</h3>
    <div class="row g-4">
        @foreach($menus as $item)
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm">
                <img src="{{ $item['img'] }}" class="card-img-top" alt="{{ $item['nama'] }}">
                <div class="card-body">
                    <h5 class="card-title fw-bold">{{ $item['nama'] }}</h5>
                    <p class="card-text text-secondary small">{{ $item['desc'] }}</p>
                    <p class="text-warning fw-bold">Rp {{ number_format($item['harga'], 0, ',', '.') }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection