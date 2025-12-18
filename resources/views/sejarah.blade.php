<x-layouts.homepage title="Sejarah - SMKN 43 Jakarta">

    {{-- =========================================
         1. CSS INLINE (STYLE DESIGN)
         ========================================= --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap');

        /* RESET & GLOBAL */
        body, html {
            margin: 0; padding: 0;
            background-color: #050505;
            color: #fff;
            font-family: 'Montserrat', sans-serif;
            overflow-x: hidden;
        }

        /* BACKGROUND KHUSUS SEJARAH (Nuansa Klasik/Emas) */
        body {
            background: 
                /* Overlay Gelap */
                linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)),
                /* Gambar Background */
                url('https://images.unsplash.com/photo-1541339907198-e08756dedf3f?q=80&w=2070'); 
            
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }

        /* NAVBAR */
        .navbar-tesla {
            position: fixed; top: 0; width: 100%; z-index: 1000;
            background: rgba(0,0,0,0.8); backdrop-filter: blur(10px);
            padding: 1rem 2rem; border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        .navbar-brand { font-weight: 800; letter-spacing: 2px; color: #fff !important; text-transform: uppercase; }
        .nav-link { color: #ccc !important; font-weight: 500; font-size: 0.95rem; margin: 0 10px; transition: 0.3s; }
        .nav-link:hover, .nav-link.active { color: #fff !important; text-shadow: 0 0 10px rgba(255,255,255,0.5); }
        .btn-nav-menu { border: 1px solid #fff; color: #fff; padding: 5px 20px; border-radius: 4px; text-decoration: none; transition: 0.3s; background: transparent; }
        .btn-nav-menu:hover { background: #fff; color: #000; }

        /* CONTAINER WRAPPER */
        .page-wrapper {
            padding-top: 130px;
            padding-bottom: 80px;
            min-height: 100vh;
        }

        /* HEADER PAGE */
        .page-header { text-align: center; margin-bottom: 40px; }
        .page-title {
            font-size: 3rem; font-weight: 700;
            letter-spacing: -1px; margin-bottom: 10px;
            background: linear-gradient(to right, #fff, #bbb);
            -webkit-background-clip: text; -webkit-text-fill-color: transparent;
            text-shadow: 0 5px 15px rgba(0,0,0,0.5);
        }
        .page-subtitle { color: #ccc; letter-spacing: 2px; text-transform: uppercase; font-size: 0.9rem; font-weight: 600; }

        /* GLASS CARD */
        .glass-card {
            background: rgba(0, 0, 0, 0.4); 
            backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 3rem;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            height: 100%;
        }

        /* ICON BACKGROUND */
        .bg-icon {
            position: absolute; bottom: -20px; right: -20px; font-size: 10rem;
            color: rgba(255, 255, 255, 0.03); transform: rotate(-15deg);
            pointer-events: none;
        }

        /* TYPOGRAPHY CONTENT */
        .card-title-tech {
            font-size: 1.8rem; font-weight: 700; color: #fff; margin-bottom: 1.5rem;
            border-left: 4px solid #f1c40f; /* Warna Emas */
            padding-left: 15px; line-height: 1;
        }

        .text-justify-custom {
            text-align: justify; color: #e0e0e0; line-height: 1.8; font-size: 1.05rem; font-weight: 300;
        }

        .highlight { color: #fff; font-weight: 600; border-bottom: 1px solid rgba(255,255,255,0.3); }

        /* LIST CUSTOM */
        .mission-list { list-style: none; padding: 0; margin: 0; }
        .mission-list li {
            position: relative; padding-left: 30px; margin-bottom: 15px; color: #e0e0e0; font-weight: 300;
        }
        .mission-list li::before {
            content: '>';
            position: absolute; left: 0; top: 0; color: #f1c40f; font-weight: bold; font-family: monospace;
        }

        /* ANIMATION */
        .fade-in { animation: fadeInUp 0.8s ease-out forwards; opacity: 0; transform: translateY(20px); }
        @keyframes fadeInUp { to { opacity: 1; transform: translateY(0); } }
        .d-1 { animation-delay: 0.1s; } .d-2 { animation-delay: 0.2s; }
    </style>

    {{-- =========================================
         2. HTML CONTENT
         ========================================= --}}

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg navbar-tesla">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">SMKN 43</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" style="filter: invert(1);">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="/biodata">Biodata</a></li>
                    <li class="nav-item"><a class="nav-link active" href="/sejarah">Sejarah</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Kontak</a></li>
                </ul>
            </div>
            <a href="/login" class="btn-nav-menu">Portal Siswa</a>
        </div>
    </nav>

    <div class="page-wrapper container">
        
        {{-- HEADER --}}
        <div class="page-header">
            <div class="page-subtitle">Perjalanan & Tujuan</div>
            <h1 class="page-title">ARSIP SEKOLAH</h1>
        </div>

        {{-- SEJARAH --}}
        <div class="row justify-content-center mb-5 fade-in d-1">
            <div class="col-lg-12">
                <div class="glass-card">
                    <i class="bi bi-clock-history bg-icon"></i>
                    
                    <h2 class="card-title-tech">Jejak Langkah</h2>
                    
                    <div class="text-justify-custom">
                        <p>
                            Pada <span class="highlight">Tahun 1976</span> di Wilayah Kebayoran Lama Jakarta Selatan merupakan wilayah yang belum memiliki lembaga pendidikan formal tingkat menengah kejuruan (SMEA). 
                            Atas dasar kebutuhan tersebut, <span class="highlight">Ibu Dra. RR. Siti Sofinah, Bapak Drs. M Yusuf, dan Bapak Drs. Soleh Saabah</span> berupaya mendirikan SMEA.
                        </p>
                        <p>
                            Awalnya dikenal sebagai <strong>SMEA 12 Kelas Jauh (Filial)</strong> yang menginduk pada SMEA Negeri 12 Cilandak. 
                            Dengan kegigihan para pendiri, status sekolah kemudian meningkat berdasarkan SK Menteri Pendidikan No. 022/0/1981, 
                            resmi menjadi sekolah negeri mandiri dengan nama <strong>SMEA Negeri 25 Jakarta</strong> pada tanggal 1 Juli 1981.
                        </p>
                        <p>
                            Seiring perubahan nomenklatur pendidikan nasional pada tahun 1997, nama sekolah berubah menjadi 
                            <span class="highlight">SMK Negeri 43 Jakarta</span> hingga saat ini, yang berlokasi di Jl. Cipulir 1, Kebayoran Lama.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- VISI & MISI --}}
        <div class="row g-4">
            
            {{-- VISI --}}
            <div class="col-lg-6 fade-in d-2">
                <div class="glass-card">
                    <i class="bi bi-eye bg-icon"></i>
                    <h2 class="card-title-tech">Visi Sekolah</h2>
                    
                    <p class="text-justify-custom" style="font-size: 1.2rem; line-height: 1.6;">
                        "Menghasilkan lulusan yang <span class="highlight" style="color: #f1c40f;">Berintegritas</span>, 
                        <span class="highlight" style="color: #f1c40f;">Profesional</span>, 
                        <span class="highlight" style="color: #f1c40f;">Berjiwa Wirausaha</span> 
                        serta berwawasan global yang dilandasi IMTAQ dan IPTEK."
                    </p>
                </div>
            </div>

            {{-- MISI --}}
            <div class="col-lg-6 fade-in d-2">
                <div class="glass-card">
                    <i class="bi bi-rocket-takeoff bg-icon"></i>
                    <h2 class="card-title-tech">Misi Sekolah</h2>
                    
                    <ul class="mission-list text-justify-custom">
                        <li>Mengembangkan potensi peserta didik berperilaku sesuai norma dan etika.</li>
                        <li>Meningkatkan kompetensi peserta didik agar kompeten, unggul, dan bertanggung jawab.</li>
                        <li>Mengembangkan potensi peserta didik menjadi wirausahawan kreatif & inovatif.</li>
                        <li>Mengembangkan kemampuan komunikasi interaktif didukung teknologi IT.</li>
                        <li>Mengembangkan potensi peserta didik berwawasan lingkungan & kearifan lokal.</li>
                    </ul>
                </div>
            </div>

        </div>

    </div>

</x-layouts.homepage>