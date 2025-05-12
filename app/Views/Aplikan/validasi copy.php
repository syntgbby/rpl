<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
    <div id="kt_app_toolbar" class="app-toolbar py-6">
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex align-items-start">
            <div class="d-flex flex-column flex-row-fluid">
                <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-4 gap-lg-10 pt-6 pb-18 py-lg-13">
                    <div class="page-title d-flex align-items-center me-3">
                        <img alt="Logo" src="<?= base_url('assets/media/svg/misc/layer.svg') ?>" class="h-60px me-5" />
                        <h1 class="page-heading d-flex text-white fw-bolder fs-2 flex-column justify-content-center my-0">
                            Detail Aplikan
                            <span class="page-desc text-white opacity-50 fs-6 fw-bold pt-4">Data Tidak Dapat Diubah</span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="app-container container-xxl">
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <div class="d-flex flex-column flex-column-fluid">
                <div id="kt_app_content" class="app-content">
                    <div class="card">
                        <div class="card-body">
                            <!-- Data Aplikan Readonly -->
                            <div class="mb-3">
                                <label class="form-label fw-bold">Nama Lengkap</label>
                                <div><?= esc($aplikan['nama_lengkap']) ?></div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Pendidikan Terakhir</label>
                                <div><?= esc($aplikan['pendidikan_terakhir']) ?></div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Alamat</label>
                                <div><?= esc($aplikan['alamat']) ?></div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Tanggal Lahir</label>
                                <div><?= esc($aplikan['tanggal_lahir']) ?></div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Kota</label>
                                <div><?= esc($aplikan['kota']) ?></div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Provinsi</label>
                                <div><?= esc($aplikan['provinsi']) ?></div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Kode Pos</label>
                                <div><?= esc($aplikan['kode_pos']) ?></div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">No HP</label>
                                <div><?= esc($aplikan['hp']) ?></div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Email</label>
                                <div><?= esc($aplikan['email']) ?></div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Jenis Kelamin</label>
                                <div><?= $aplikan['jenis_kelamin'] === 'L' ? 'Laki-laki' : 'Perempuan'; ?></div>
                            </div>
                            <!-- END Data Aplikan Readonly -->
                            <!-- Data Pelatihan -->
                            <?php if (!empty($pelatihan)) : ?>
                                <h5 class="card-title mt-5">Riwayat Pelatihan</h5>
                                <?php foreach ($pelatihan as $p) : ?>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Nama Pelatihan</label>
                                        <div><?= esc($p['nama_pelatihan']) ?></div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Penyelenggara</label>
                                        <div><?= esc($p['penyelenggara']) ?></div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Peran</label>
                                        <div><?= esc($p['peran']) ?></div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Durasi (Hari)</label>
                                        <div><?= esc($p['durasi_hari']) ?></div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Nomor Sertifikat</label>
                                        <div><?= esc($p['nomor_sertifikat']) ?></div>
                                    </div>
                                    <hr>
                                <?php endforeach; ?>
                            <?php endif; ?>

                            <!-- Data Jabatan -->
                            <?php if (!empty($jabatan)) : ?>
                                <h5 class="card-title mt-5">Riwayat Jabatan</h5>
                                <?php foreach ($jabatan as $j) : ?>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Posisi</label>
                                        <div><?= esc($j['posisi']) ?></div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Lama Waktu (Bulan)</label>
                                        <div><?= esc($j['lama_bulan']) ?></div>
                                    </div>
                                    <hr>
                                <?php endforeach; ?>
                            <?php endif; ?>

                            <!-- Data Pengalaman Lain -->
                            <?php if (!empty($pengalaman)) : ?>
                                <h5 class="card-title mt-5">Pengalaman Relevan Lainnya</h5>
                                <?php foreach ($pengalaman as $exp) : ?>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Deskripsi</label>
                                        <div><?= esc($exp['uraian']) ?></div>
                                    </div>
                                    <hr>
                                <?php endforeach; ?>
                            <?php endif; ?>

                            <!-- Select Tahun Kurikulum -->
                            <h5 class="card-title mt-5">Data Kurikulum</h5>
                            <div class="row g-3 align-items-center mb-5">
                                <div class="col-md-6">
                                    <select class="form-select" id="tahunSelect">
                                        <option value="" selected disabled>Pilih Tahun Kurikulum</option>
                                        <option value="2022-2023">Tahun 2022-2023</option>
                                        <option value="2023-2024">Tahun 2023-2024</option>
                                        <option value="2024-2025">Tahun 2024-2025</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-primary" id="cariBtn">Cari</button>
                                </div>
                            </div>

                            <!-- Tabel RPL -->
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
                                            <th style="width: 15%; text-align: center;">
                                                <label class="form-check form-check-custom form-check-solid" style="display: inline-flex; align-items: center; gap: 5px;">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                    Ya
                                                </label>
                                            </th>
                                            <th style="width: 15%; text-align: center;">
                                                <label class="form-check form-check-custom form-check-solid" style="display: inline-flex; align-items: center; gap: 5px;">
                                                    <input class="form-check-input" type="checkbox" value="0" />
                                                    Tidak
                                                </label>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="tabelRplBody">
                                        <!-- Data dinamis akan dimasukkan di sini -->
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="text-end my-3">
                                        <button class="btn btn-secondary" id="simpanBtn">Hapus</button>
                                        <button class="btn btn-primary" id="simpanBtn">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>