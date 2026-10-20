@extends('layouts.app')

@section('title', 'Daftar Produk - DH Sport')

@section('content')

    {{-- Page Header --}}
    <div class="page-header" style="background: linear-gradient(135deg, rgba(10,10,10,0.80) 0%, rgba(26,26,46,0.75) 100%), url('{{ asset('assets/images/banner.jpg') }}') center center / cover no-repeat;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <p class="page-header-eyebrow">Koleksi Terbaru 2026</p>
                    <h1>Koleksi <span>Sepatu</span><br>DH Sport</h1>
                    <p>Produk original bergaransi resmi, pengiriman ke seluruh Indonesia.</p>
                </div>
                <div class="col-md-5 mt-4 mt-md-0">
                    <div class="header-stats">
                        <div class="stat-item">
                            <span class="stat-number">{{ $shoes->count() }}</span>
                            <span class="stat-label">Produk</span>
                        </div>
                        <div class="stat-divider"></div>
                        <div class="stat-item">
                            <span class="stat-number">{{ $brandCount }}</span>
                            <span class="stat-label">Brand</span>
                        </div>
                        <div class="stat-divider"></div>
                        <div class="stat-item">
                            <span class="stat-number">{{ $sportCount }}</span>
                            <span class="stat-label">Kategori</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Product Grid --}}
    <div class="container pb-5">
        <p class="section-label">Semua Produk</p>
        <div class="row g-4">
            @foreach($shoes as $shoe)
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card h-100">
                        <img src="{{ asset('assets/images/' . $shoe->image) }}"
                             class="card-img-top"
                             alt="{{ $shoe->name }}"
                             onerror="this.src='https://placehold.co/400x300/F7F7F5/888888?text={{ urlencode($shoe->name) }}'">
                        <div class="card-body d-flex flex-column">
                            <span class="badge-sport mb-2">{{ $shoe->sport_type }}</span>
                            <p class="mb-0" style="font-size:0.92rem; font-weight:600; color:#111;">{{ $shoe->name }}</p>
                            <p class="mb-3" style="font-size:0.82rem; color:#888; margin-top:3px;">{{ $shoe->brand }}</p>
                            <p class="price-tag mt-auto mb-3">Rp {{ number_format($shoe->price, 0, ',', '.') }}</p>
                            <a href="{{ route('shoes.show', $shoe->id) }}" class="btn btn-detail w-100 text-center">
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
