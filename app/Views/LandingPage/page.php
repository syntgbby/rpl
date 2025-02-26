<!DOCTYPE html>
<html lang="id">
<!--begin::Head-->
<head>
    <base href="<?= base_url() ?>" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPL - Program RPL</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="<?= base_url('assets/plugins/global/plugins.bundle.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/css/style.bundle.css') ?>" rel="stylesheet" type="text/css" />
    <script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/plugins/global/plugins.bundle.js') ?>"></script>
    <script src="<?= base_url('assets/js/scripts.bundle.js') ?>"></script>
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.5.1/dist/sweetalert2.min.css">
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.5.1/dist/sweetalert2.all.min.js"></script>
</head>
<!--end::Head-->
<body id="kt_app_body" class="app-default">

    <!--begin::Header-->
    <header class="bg-primary text-white py-5">
        <div class="container text-center">
            <div class="row">
                <div class="col-12">
                    <h1>Selamat Datang di Program RPL</h1>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-md-10">
                    <!-- <nav>
                        <ul class="nav justify-content-center mt-4">
                            <li class="nav-item"><a class="nav-link text-white" href="#alur-rpl">Alur RPL</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="#gelombang">Gelombang Pendaftaran</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="#persyaratan">Persyaratan RPL</a></li>
                        </ul>
                    </nav> -->
                </div>
                <div class="col-md-2">
                    <nav>
                        <ul class="nav justify-content-center mt-4">
                            <li class="nav-item"><a class="nav-link text-white" href="<?= base_url('login') ?>">Login</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!--end::Header-->

    <!--begin::Content-->
    <div class="container mt-5">
        <!-- Alur RPL -->
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="text-primary">Alur RPL</h2>
                    <p>Berikut adalah alur untuk mengikuti program RPL:</p>
                    <ol>
                        <li>Daftar dan lengkapi formulir pendaftaran.</li>
                        <li>Ikuti asesmen untuk evaluasi kompetensi.</li>
                        <li>Tunggu hasil asesmen dan keputusan dari pihak program.</li>
                        <li>Jika diterima, selesaikan administrasi dan mulai belajar.</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- Gelombang Pendaftaran dan Prodi -->
        <div class="row mb-5">
                <div class="col-12">
                    <h2 class="text-primary">Gelombang Pendaftaran & Prodi yang Tersedia</h2>
                    <p>Berikut adalah informasi mengenai gelombang pendaftaran yang dibuka dan program studi yang tersedia:</p>
                    
                    <h3>Gelombang Pendaftaran:</h3>
                    <ul class="list-unstyled">
                        <li>Gelombang 1: Januari - Maret</li>
                        <li>Gelombang 2: April - Juni</li>
                        <li>Gelombang 3: Juli - September</li>
                    </ul>

                    <h3>Program Studi yang Tersedia:</h3>
                    <ul class="list-unstyled">
                        <li>Teknik Informatika</li>
                        <li>Manajemen Informatika</li>
                        <li>Rekayasa Perangkat Lunak</li>
                        <li>Desain Komunikasi Visual</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Persyaratan RPL -->
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="text-primary">Persyaratan RPL</h2>
                    <p>Untuk mengikuti program RPL, peserta harus memenuhi persyaratan berikut:</p>
                    <ul>
                        <li>Memiliki ijazah atau sertifikat yang relevan dengan bidang yang akan diambil.</li>
                        <li>Berpengalaman kerja di bidang terkait minimal 2 tahun.</li>
                        <li>Menyerahkan portofolio proyek atau pengalaman kerja yang relevan.</li>
                        <li>Melakukan asesmen awal untuk mengevaluasi kompetensi yang dimiliki.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--end::Content-->

    <!--begin::Footer-->
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; <?= date('Y') ?> Program RPL. Semua hak dilindungi undang-undang.</p>
    </footer>
    <!--end::Footer-->
</body>
</html>
