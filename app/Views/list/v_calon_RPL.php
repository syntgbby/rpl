<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="pagetitle">
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Validasi Calon RPL</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<!-- Keterangan -->
<div class="row">
    <div class="col-md-6">
        <div class="card recent-sales overflow-auto">
            <div class="card-body">
                <h5 class="card-title">Keterangan <span>| Validasi</span></h5>
                <div class="">
                    <ul style="font-size: 14px;">
                        <li>Silahkan pilih kurikulum</li>
                        <li>Pilih calon mahasiswa RPL</li>
                        <li>Tentukan .....</li>
                        <li>Selesai</li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- End Keterangan -->
    <div class="col-md-6">
        <div class="card recent-sales overflow-auto">
            <div class="card-body">
                <h5 class="card-title">Calon Mahasiswa RPL<span> | Status</span></h5>
                <div class="">
                    <ul style="font-size: 14px;">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- End Keterangan -->

    <!-- <div class="col-md-6">
            <div class="card recent-sales overflow-auto">
                <div class="card-body">
                    <h5 class="card-title">Data Kurikulum</h5>
                    <form class="row">
                        <div class="col">
                            <select class="form-select mb-4" aria-label="Default select example">
                                <option selected>Tahun 2025-2026</option>
                                <option value="1">Tahun 2020-2021</option>
                                <option value="2">Tahun 2021-2022</option>
                                <option value="3">Tahun 2022-2023</option>
                                <option value="3">Tahun 2023-2024</option>
                                <option value="3">Tahun 2024-2025</option>
                                <option value="3">Tahun 2025-2026</option>
                            </select>
                        </div>
                        <div class="mt-12">
                            <button type="submit" class="btn btn-primary">Cari</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> -->
    <!-- End Keterangan -->
</div>

<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Calon mahasiswa RPL</h5>
            <!-- Default Tabs -->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab">Home</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="validasi-tab" data-bs-toggle="tab" data-bs-target="#validasi" type="button" role="tab">Validasi</button>
                </li>
            </ul>

            <!-- Tab Content -->
            <div class="tab-content pt-2" id="myTabContent">
                <!-- Tab HOME -->
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Alamat</th>
                                            <th>Age</th>
                                            <th>Lama Kerja</th>
                                            <th>Posisi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Brandon Jacob</td>
                                            <td>Jakarta</td>
                                            <td>28</td>
                                            <td>5</td>
                                            <td>Designer</td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-warning editBtn"
                                                    data-nama="Brandon Jacob"
                                                    data-alamat="Jakarta"
                                                    data-umur="28"
                                                    data-lama="5"
                                                    data-posisi="Designer">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>James</td>
                                            <td>Jakarta</td>
                                            <td>28</td>
                                            <td>6</td>
                                            <td>Admin</td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-warning editBtn"
                                                    data-nama="James"
                                                    data-alamat="Jakarta"
                                                    data-umur="28"
                                                    data-lama="6"
                                                    data-posisi="Admin">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Yamal</td>
                                            <td>Bekasi</td>
                                            <td>18</td>
                                            <td>3</td>
                                            <td>Teknisi</td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-warning editBtn"
                                                    data-nama="Yamal"
                                                    data-alamat="Bekasi"
                                                    data-umur="18"
                                                    data-lama="3"
                                                    data-posisi="Teknisi">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tab VALIDASI -->
                <div class="tab-pane fade" id="validasi" role="tabpanel" aria-labelledby="validasi-tab">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Nama : <span id="namaPeserta">Brandon Jacob</span></h6>
                            <p>Alamat : <span id="alamatPeserta">Jakarta</span></p>
                            <p>Umur : <span id="umurPeserta">28</span></p>
                            <p>Lama Kerja : <span id="lamaKerjaPeserta">5</span></p>
                            <p>Posisi : <span id="posisiPeserta">Designer</span></p>

                            <!-- Select Tahun -->
                            <h5 class="card-title">Data Kurikulum</h5>
                            <form class="row g-3">
                                <div class="col-md-6">
                                    <select class="form-select" id="tahunSelect">
                                        <option value="" selected disabled>Pilih Tahun Kurikulum</option>
                                        <option value="2020">Tahun 2020-2021</option>
                                        <option value="2021">Tahun 2021-2022</option>
                                        <option value="2022">Tahun 2022-2023</option>
                                        <option value="2023">Tahun 2023-2024</option>
                                        <option value="2024">Tahun 2024-2025</option>
                                        <option value="2025">Tahun 2025-2026</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-primary" id="cariBtn">Cari</button>
                                </div>
                        

                            <!-- Tabel RPL (disembunyikan dulu) -->
                            <div class="table-responsive mt-4" id="tabelRplContainer" style="display: none;">
                                <table class="table table-bordered text-center">
                                    <thead style="background-color: #b3e0ff; text-align: center; vertical-align: middle;">
                                        <tr>
                                            <th rowspan="2" style="width: 10%;">No</th>
                                            <th rowspan="2" style="width: 20%;">Kode Mata Kuliah</th>
                                            <th rowspan="2" style="width: 40%;">Nama Mata Kuliah</th>
                                            <th colspan="2" style="width: 30%;">Mengajukan RPL</th>
                                        </tr>
                                        <tr>
                                            <th style="width: 15%;">Ya</th>
                                            <th style="width: 15%;">Tidak</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>02BBMIK01</td>
                                            <td>Bahasa Inggris I</td>
                                            <td><input type="checkbox" class="rpl-ya" data-id="1"></td>
                                            <td><input type="checkbox" class="rpl-tidak" data-id="1"></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>04KBMIK01</td>
                                            <td>Desain Web</td>
                                            <td><input type="checkbox" class="rpl-ya" data-id="2"></td>
                                            <td><input type="checkbox" class="rpl-tidak" data-id="2"></td>
                                        </tr>
                                        <!-- Tambahkan baris lain sesuai kebutuhan -->
                                    </tbody>
                                </table>
                                <div class="text-end mt-3">
                                    <button class="btn btn-success" id="simpanBtn">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(''); ?>