<x-layouts.homepage title="Sejarah Sekolah">

    <style>
        .history-card, .visi-misi-card {
            border-radius: 16px;
            padding: 25px;
            background: white;
            transition: all 0.3s ease;
        }

        .history-card:hover,
        .visi-misi-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .history-title, .visi-misi-title {
            font-weight: 700;
            font-size: 1.7rem;
        }

        .history-text, .visi-misi-text {
            text-align: justify;
            line-height: 1.7;
            font-size: 1.05rem;
        }

        ul.misi-list li {
            margin-bottom: 8px;
            line-height: 1.7;
        }
    </style>

    <div class="container py-5">
        {{-- Card Sejarah --}}
        <div class="row justify-content-center mb-3">
            <div class="col-lg-10">
                <div class="card shadow history-card">

                    <h2 class="history-title mb-4 text-center">
                        Sejarah SMK Negeri 43 Jakarta
                    </h2>

                    <p class="history-text">
                        Pada <strong>Tahun 1976 di Wilayah Kebayoran Lama Jakarta Selatan</strong> merupakan Wilayah yang belum
                        memiliki jenis Lembaga pendidikan Formal seperti SMEA sebagai Tempat untuk memperoleh
                        pendidikan tingkat menengah yang menjurus pada Pendidikan Ekonomi atau Kejuruan.

                        Atas dasar kebutuhan tersebut diatas pada tahun 1976  atas Prakarsa dan inisiatif
                        <strong>Ibu Dra. RR. Siti Sofinah, Bapak Drs. M Yusuf dan Drs. Bapak Soleh Saabah</strong> berupaya untuk memperoleh izin
                        pengoperasian Sekolah Menengah Ekonomi Atas (SMEA) yang diberikan nama <strong>SMA 12 Kelas</strong> jauh yang menginduk pada
                        <strong>SMEA Negeri 12</strong> yang beralamat di <strong>Jalan Melati Cilandak Jakarta Selatan</strong> yang bangunannya berada di Cipulir I yang diperuntukan untuk Sekolah SD.
                    </p>

                    <p class="history-text mt-3">
                        Dengan kegigihan <strong>Ibu Dra. RR. Siti Sofinah dan Kawan-kawan</strong> kemudian mengalami perkembangan berdasarkan <strong>SK Menteri Pendidikan
                        dan Kebudayaan Republik Indonesia No. 022/0/1981 tentang Penunggalan Sekolah</strong> dari <strong>SMEA 12 Filial</strong> terhitung mulai tanggal 1 Juli 1981
                        menjadi sekolah Negeri dengan nama <strong>SMEA Negeri 25 Jakarta</strong>.

                        Berdasarkan Keputusan <strong>Menteri Pendidikan Dan Kebudayaan Republik Indonesia No. 036/0/1997 tentang Perubahan Nomenklatur SMKTA Menjadi SMK Serta Organisasi Dan Tata Kerja SMK,
                        SMEA Negeri 25 Jakarta, Jalan Cipulir 1 Kecamatan Kebayoran Lama Kotamadya Jakarta Selatan Keputusan Kelembagaan 0220/0/1981 14-07-81 Sekolah</strong> Hasil Perubahan Menjadi 
                        <strong>SMK Negeri 43 Jakarta Kantor 212472 Kecamatan Kebayoran Lama Kota Administrasi Jakarta Selatan</strong>.
                    </p>

                </div>
            </div>
        </div>

        {{-- Card Visi & Misi --}}
        <div class="row justify-content-center g-4">

            {{-- Card Visi --}}
            <div class="col-lg-5">
                <div class="card shadow visi-misi-card h-100">
                    <h2 class="visi-misi-title mb-3 text-center">Visi SMKN 43 Jakarta</h2>

                    <p class="visi-misi-text">
                        Menghasilkan lulusan berintegritas, profesional, berjiwa wirausaha serta berwawasan global dilandasi IMTAQ dan IPTEK.
                    </p>
                </div>
            </div>

            {{-- Card Misi --}}
            <div class="col-lg-5">
                <div class="card shadow visi-misi-card h-100">
                    <h2 class="visi-misi-title mb-3 text-center">Misi SMKN 43 Jakarta</h2>

                    <ul class="misi-list">
                        <li>Mengembangkan potensi peserta didik berperilaku sesuai norma dan etika yang diterapkan di sekolah, dunia industri dan dunia kerja melalui projek penguatan profil pelajar pancasila.</li>
                        <li>Meningkatkan kompetensi peserta didik sesuai SNP dan LSP agar kompeten, unggul, dan bertanggung jawab.</li>
                        <li>Mengembangkan potensi peserta didik secara optimal untuk menjadi wirausahawan yang kreatif dan inovatif.</li>
                        <li>Mengembangkan kemampuan komunikasi peserta didik yang interaktif didukung kemampuan IT sesuai dengan tuntutan global.</li>
                        <li>Mengembangkan potensi peserta didik berwawasan lingkungan dan kearifan lokal.</li>
                    </ul>
                </div>
            </div>

        </div>

    </div>

</x-layouts.homepage>
