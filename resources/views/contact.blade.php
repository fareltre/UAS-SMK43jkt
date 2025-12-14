<x-layouts.homepage title="Kontak Sekolah">

    <style>
        .contact-card {
            border-radius: 16px;
            padding: 25px;
            background: white;
            transition: all 0.3s ease;
            text-align: center;
        }

        .contact-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .contact-icon {
            font-size: 2.8rem;
            margin-bottom: 10px;
            color: #0d6efd;
        }
    </style>

    <div class="container py-5">
        <h2 class="mb-3 text-center fw-bold text-white">Kontak Sekolah</h2>

        <div class="row g-4 justify-content-center">

            {{-- Alamat --}}
            <div class="col-md-6 col-lg-3">
                <div class="card shadow contact-card">
                    <i class="bi bi-geo-alt-fill contact-icon"></i>
                    <h5 class="fw-bold">Alamat</h5>
                    <p class="mb-0">Jl. Cipulir I No. 114 RT. 001/004, Kebayoran Lama, Jakarta Selatan 12230</p>
                </div>
            </div>

            {{-- Telepon --}}
            <div class="col-md-6 col-lg-3">
                <div class="card shadow contact-card">
                    <i class="bi bi-telephone-fill contact-icon"></i>
                    <h5 class="fw-bold">Telepon</h5>
                    <p class="mb-0">021-72575323</p>
                </div>
            </div>

            {{-- Email --}}
            <div class="col-md-6 col-lg-3">
                <div class="card shadow contact-card">
                    <i class="bi bi-envelope-fill contact-icon"></i>
                    <h5 class="fw-bold">Email</h5>
                    <p class="mb-0">info@smkn43jkt.sch.id</p>
                </div>
            </div>

            {{-- Website --}}
            <div class="col-md-6 col-lg-3">
                <div class="card shadow contact-card">
                    <i class="bi bi-globe2 contact-icon"></i>
                    <h5 class="fw-bold">Website</h5>
                    <a href="https://www.smkn43jkt.sch.id/" target="_blank">
                        www.smkn43jkt.sch.id
                    </a>
                </div>
            </div>

        </div>
        {{-- Google Maps --}}
            <div class="mt-5">
                <h3 class="text-center fw-bold mb-3 text-white">Lokasi Sekolah</h3>

                <div class="map-container shadow rounded" style="overflow:hidden; height:400px;">
                    <iframe 
                        width="100%" 
                        height="100%" 
                        frameborder="0" 
                        style="border:0;"
                        allowfullscreen
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.208332328101!2d106.7753875!3d-6.2362476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f0de7526c481%3A0xfbdc385c13edef63!2sState%20Vocational%20High%20School%2043%20Jakarta!5e0!3m2!1sen!2sid!4v1765159348315!5m2!1sen!2sid">
                    </iframe>
                </div>
            </div>

    </div>

</x-layouts.homepage>
