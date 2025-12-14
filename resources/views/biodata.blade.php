<x-layouts.homepage title="Biodata Sekolah">

    <style>
        /* Efek hover card */
        .bio-card {
            transition: all 0.3s ease;
            border-radius: 14px;
        }

        .bio-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
    </style>

    <div class="container py-2">
        <h2 class="text-center mb-4 fw-bold text-white">Biodata Sekolah</h2>

        <div class="row g-4">

            {{-- Nama Sekolah --}}
            <div class="col-md-6 col-lg-4">
                <div class="card shadow bio-card p-3">
                    <h5 class="fw-semibold">Nama Sekolah</h5>
                    <p class="mb-0">SMK Negeri 43 Jakarta</p>
                </div>
            </div>

            {{-- Alamat --}}
            <div class="col-md-6 col-lg-4">
                <div class="card shadow bio-card p-3">
                    <h5 class="fw-semibold">Alamat</h5>
                    <p class="mb-0"> Jl. Cipulir I No. 114 RT. 001/004, Kebayoran Lama, Jakarta Selatan 12230.</p>
                </div>
            </div>

            {{-- Akreditasi --}}
            <div class="col-md-6 col-lg-4">
                <div class="card shadow bio-card p-3">
                    <h5 class="fw-semibold">Akreditasi</h5>
                    <p class="mb-0">A</p>
                </div>
            </div>

            {{-- Kepala Sekolah --}}
            <div class="col-md-6 col-lg-4">
                <div class="card shadow bio-card p-3">
                    <h5 class="fw-semibold">Kepala Sekolah</h5>
                    <p class="mb-0">Widya Milza, S. Pd.</p>
                </div>
            </div>

            <!-- {{-- Gedung Sekolah --}}
            <div class="col-md-6 col-lg-4">
                <div class="card shadow bio-card p-3">
                    <h5 class="fw-semibold">Gedung Sekolah 1</h5>
                    <p class="mb-0">
                        Gedung Mantarena, berlokasi di Jalan Mantarena No. 10.
                    </p>
                </div>
            </div> -->

            <!-- <div class="col-md-6 col-lg-4">
                <div class="card shadow bio-card p-3">
                    <h5 class="fw-semibold">Gedung Sekolah 2</h5>
                    <p class="mb-0">
                        Gedung Kartini, berlokasi di Jalan Kartini No. 1.
                    </p>
                </div>
            </div> -->

        </div>

    </div>

</x-layouts.homepage>
