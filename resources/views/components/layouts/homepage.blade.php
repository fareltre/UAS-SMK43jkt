<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Homepage Sekolah' }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: url('{{ asset('school-bg.jpg') }}') center/cover no-repeat fixed;
            background-attachment: fixed;
        }

        /* Overlay gelap di seluruh halaman agar teks tidak hilang */
        body::before {
            content: "";
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.55);
            z-index: -1;
        }
        .hero {
            position: relative;
            
            min-height: 55vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            padding-bottom: 10px;
        }

        .hero > * {
            position: relative;
            z-index: 2;
        }

        .typing {
            margin-top: 40px;
            font-size: 2rem;
            font-weight: 700;
            border-right: 3px solid white;
            white-space: nowrap;
            overflow: hidden;
            width: 0;
            display: inline-block;
            animation: typing 4s steps(52) forwards, blink .8s infinite;
        }

        @keyframes typing {
            from { width: 0; }
            to { width: 52ch; }
        }

        @keyframes blink {
            0%, 100% { border-color: transparent; }
            50% { border-color: white; }
        }

        .hero-logo {
            width: 160px;
            filter: drop-shadow(0 0 5px black);
            margin-bottom: 15px;
        }

    </style>
</head>

<body>

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">SMK Negeri 43 Jakarta</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="/biodata">Biodata</a></li>
                    <li class="nav-item"><a class="nav-link" href="/sejarah">Sejarah</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Kontak</a></li>
                </ul>

                <a href="/login" class="btn btn-light btn-sm">Login</a>
            </div>
        </div>
    </nav>

    {{-- HERO --}}
    <section class="hero">
        <img src="{{ asset('logo-sekolah.png') }}" class="hero-logo" alt="Logo Sekolah">
        <div class="typing">Selamat Datang di Website Resmi SMK Negeri 43 Jakarta</div>
    </section>

    {{-- KONTEN --}}
    <main class="bg-transparent mt-n5">
        {{ $slot }}
    </main>

    <footer class="bg-primary text-light text-center py-3 mt-5">
        <small>© {{ date('Y') }} SMK Negeri 43 Jakarta — Semua Hak Dilindungi</small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
