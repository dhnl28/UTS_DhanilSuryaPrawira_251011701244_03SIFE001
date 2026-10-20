@extends('layouts.app')

@section('title', $shoe->name . ' - DH Sport')

@section('extra-css')
    .product-image-wrap {
        border-radius: 12px;
        overflow: hidden;
        border: 1px solid var(--clr-border);
        background-color: var(--clr-surface);
    }
    .info-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 12px 0;
        border-bottom: 1px solid var(--clr-border);
        font-size: 0.875rem;
    }
    .info-row:last-child { border-bottom: none; }
    .info-row .info-label {
        color: var(--clr-muted);
        font-weight: 500;
    }
    .info-row .info-value {
        color: var(--clr-primary);
        font-weight: 600;
        text-align: right;
    }
    .product-price {
        font-size: 1.65rem;
        font-weight: 800;
        color: var(--clr-primary);
        letter-spacing: -0.5px;
    }
    .product-name {
        font-size: 1.6rem;
        font-weight: 800;
        letter-spacing: -0.4px;
        color: var(--clr-primary);
        line-height: 1.2;
    }
    .product-brand-label {
        font-size: 0.9rem;
        color: var(--clr-muted);
        font-weight: 500;
    }
    .breadcrumb {
        background: none;
        padding: 0;
        margin: 0;
        font-size: 0.8rem;
    }
    .breadcrumb-item a {
        color: var(--clr-muted);
        text-decoration: none;
    }
    .breadcrumb-item a:hover { color: var(--clr-primary); }
    .breadcrumb-item.active { color: var(--clr-primary); }
    .breadcrumb-item + .breadcrumb-item::before { color: var(--clr-border); }
    .info-divider {
        border: none;
        border-top: 1px solid var(--clr-border);
        margin: 20px 0;
    }
@endsection

@section('content')
    <div class="container" style="padding-top: 40px; padding-bottom: 72px;">

        {{-- Breadcrumb --}}
        <nav aria-label="breadcrumb" class="mb-5">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('shoes.index') }}">Produk</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">{{ $shoe->name }}</li>
            </ol>
        </nav>

        <div class="row g-5 align-items-start">

            {{-- Gambar --}}
            <div class="col-md-5">
                <div class="product-image-wrap">
                    <img src="{{ asset('assets/images/' . $shoe->image) }}"
                         class="img-fluid d-block"
                         alt="{{ $shoe->name }}"
                         style="width: 100%; height: 420px; object-fit: cover;"
                         onerror="this.src='https://placehold.co/500x420/F7F7F5/888888?text={{ urlencode($shoe->name) }}'">
                </div>
            </div>

            {{-- Detail --}}
            <div class="col-md-7">
                <span class="badge-sport mb-3">{{ $shoe->sport_type }}</span>
                <h1 class="product-name mt-2 mb-1">{{ $shoe->name }}</h1>
                <p class="product-brand-label mb-4">{{ $shoe->brand }}</p>

                <p class="product-price mb-4">Rp {{ number_format($shoe->price, 0, ',', '.') }}</p>

                @if($shoe->description)
                <p style="font-size: 0.925rem; color: #555; line-height: 1.7; margin-bottom: 24px;">{{ $shoe->description }}</p>
                @endif

                <hr class="info-divider">

                <div>
                    <div class="info-row">
                        <span class="info-label">Brand</span>
                        <span class="info-value">{{ $shoe->brand }}</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Tipe Olahraga</span>
                        <span class="info-value">{{ $shoe->sport_type }}</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Ukuran Tersedia</span>
                        <span class="info-value">{{ $shoe->size_range }}</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Harga</span>
                        <span class="info-value">Rp {{ number_format($shoe->price, 0, ',', '.') }}</span>
                    </div>
                </div>

                <hr class="info-divider">

                <a href="{{ route('shoes.index') }}" class="btn-outline-back">
                    &larr; Kembali
                </a>
            </div>
        </div>
    </div>
@endsection
