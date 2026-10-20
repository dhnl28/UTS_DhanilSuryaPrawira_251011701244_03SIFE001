<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'DH Sport')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('Bootstrap/css/bootstrap.min.css') }}">
    <style>
        :root {
            --clr-bg:       #FFFFFF;
            --clr-surface:  #F7F7F5;
            --clr-primary:  #111111;
            --clr-accent:   #0066FF;
            --clr-text:     #111111;
            --clr-muted:    #888888;
            --clr-border:   #E8E8E8;
        }

        *, *::before, *::after { box-sizing: border-box; }

        html, body { height: 100%; }

        body {
            background-color: var(--clr-bg);
            font-family: 'Inter', sans-serif;
            color: var(--clr-text);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            -webkit-font-smoothing: antialiased;
        }

        main { flex: 1; }

        /* ── Navbar ── */
        .navbar {
            background-color: #fff !important;
            border-bottom: 1px solid var(--clr-border);
            padding-top: 0;
            padding-bottom: 0;
            height: 72px;
        }
        .navbar-brand {
            font-weight: 800;
            font-size: 1.1rem;
            letter-spacing: -0.3px;
            color: var(--clr-primary) !important;
        }
        .navbar-brand span {
            color: var(--clr-accent);
        }
        .nav-link {
            color: var(--clr-muted) !important;
            font-size: 0.875rem;
            font-weight: 500;
            padding: 0.25rem 0 !important;
            transition: color 0.15s;
        }
        .nav-link:hover { color: var(--clr-primary) !important; }
        .nav-link.active {
            color: var(--clr-primary) !important;
            border-bottom: 2px solid var(--clr-primary);
        }
        .navbar-toggler {
            border: 1px solid var(--clr-border);
            border-radius: 6px;
        }
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(17,17,17,0.75)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        /* ── Page header / Hero banner ── */
        .page-header {
            padding: 96px 0 88px;
            border-bottom: none;
            margin-bottom: 56px;
            position: relative;
            overflow: hidden;
        }
        .page-header::before {
            content: '';
            position: absolute;
            top: -120px;
            right: -120px;
            width: 480px;
            height: 480px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(0,102,255,0.15) 0%, transparent 70%);
            pointer-events: none;
        }
        .page-header::after {
            content: '';
            position: absolute;
            bottom: -80px;
            left: -80px;
            width: 320px;
            height: 320px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(0,102,255,0.08) 0%, transparent 70%);
            pointer-events: none;
        }
        .page-header-eyebrow {
            font-size: 0.72rem;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: var(--clr-accent);
            margin-bottom: 14px;
            opacity: 0.9;
        }
        .page-header h1 {
            font-size: clamp(2.2rem, 5vw, 3.2rem);
            font-weight: 800;
            letter-spacing: -1px;
            color: #ffffff;
            margin-bottom: 14px;
            line-height: 1.1;
        }
        .page-header h1 span {
            color: var(--clr-accent);
        }
        .page-header > .container > .row > div > p {
            font-size: 0.95rem;
            color: rgba(255,255,255,0.5);
            margin: 0;
        }
        .header-stats {
            display: flex;
            align-items: center;
            gap: 0;
            background-color: rgba(255,255,255,0.06);
            border: 1px solid rgba(255,255,255,0.12);
            border-radius: 14px;
            padding: 28px 24px;
            backdrop-filter: blur(10px);
        }
        .stat-item {
            flex: 1;
            text-align: center;
            display: flex;
            flex-direction: column;
            gap: 4px;
        }
        .stat-number {
            font-size: 2rem;
            font-weight: 800;
            color: #ffffff;
            letter-spacing: -1px;
            line-height: 1;
        }
        .stat-label {
            font-size: 0.72rem;
            font-weight: 500;
            color: rgba(255,255,255,0.45);
            text-transform: uppercase;
            letter-spacing: 0.8px;
        }
        .stat-divider {
            width: 1px;
            height: 40px;
            background-color: rgba(255,255,255,0.12);
        }

        /* ── Cards ── */
        .card {
            border: 1px solid var(--clr-border);
            border-radius: 12px;
            overflow: hidden;
            background-color: #fff;
            transition: box-shadow 0.2s ease, border-color 0.2s ease;
        }
        .card:hover {
            box-shadow: 0 8px 24px rgba(0,0,0,0.07);
            border-color: #ccc;
        }
        .card-img-top {
            height: 200px;
            object-fit: cover;
            background-color: var(--clr-surface);
        }
        .card-body {
            padding: 1.1rem 1.15rem;
        }

        /* ── Badge ── */
        .badge-sport {
            display: inline-block;
            background-color: var(--clr-surface);
            color: var(--clr-muted);
            font-size: 0.7rem;
            font-weight: 600;
            padding: 3px 9px;
            border-radius: 4px;
            border: 1px solid var(--clr-border);
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        /* ── Price ── */
        .price-tag {
            color: var(--clr-primary);
            font-weight: 700;
            font-size: 1.05rem;
            letter-spacing: -0.2px;
        }

        /* ── Buttons ── */
        .btn-detail {
            background-color: var(--clr-primary);
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 9px 18px;
            font-size: 0.85rem;
            font-weight: 600;
            transition: background-color 0.15s;
            letter-spacing: 0.1px;
            text-decoration: none;
            display: inline-block;
        }
        .btn-detail:hover {
            background-color: #333;
            color: #fff;
        }
        .btn-outline-back {
            background-color: transparent;
            color: var(--clr-primary);
            border: 1px solid var(--clr-border);
            border-radius: 8px;
            padding: 9px 18px;
            font-size: 0.85rem;
            font-weight: 500;
            transition: border-color 0.15s, background-color 0.15s;
            text-decoration: none;
            display: inline-block;
        }
        .btn-outline-back:hover {
            border-color: #aaa;
            background-color: var(--clr-surface);
            color: var(--clr-primary);
        }

        /* ── Section label ── */
        .section-label {
            font-size: 0.75rem;
            font-weight: 600;
            letter-spacing: 0.8px;
            text-transform: uppercase;
            color: var(--clr-muted);
            margin-bottom: 24px;
        }

        /* ── Footer ── */
        .footer {
            background-color: var(--clr-bg);
            border-top: 1px solid var(--clr-border);
            color: var(--clr-muted);
            padding: 24px 0;
            font-size: 0.8rem;
            margin-top: auto;
        }
        .footer strong {
            color: var(--clr-primary);
            font-weight: 600;
        }

        @yield('extra-css')
    </style>
</head>
<body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('shoes.index') }}">
                DH<span>Sport</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-3">
                    <li class="nav-item d-flex align-items-center">
                        <a class="nav-link {{ request()->routeIs('shoes.index') ? 'active' : '' }}"
                           href="{{ route('shoes.index') }}">
                            Produk
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="footer text-center">
        <div class="container">
            <p class="mb-1"><strong>DH Sport</strong></p>
            <p class="mb-0">UTS Rekayasa Web 2026 &nbsp;&middot;&nbsp; NIM: 251011701244 &nbsp;&middot;&nbsp; Dosen: Afif Efendi</p>
        </div>
    </footer>

    <script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
