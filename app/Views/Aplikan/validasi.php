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
                            <!-- Data Aplikan -->
                            <div class="data-aplikan">
                                <div class="mb-3"><label class="form-label fw-bold">NIM</label>
                                    <div class="nim"><?= $data_aplikan['nim'] ?></div>
                                </div>
                                <div class="mb-3"><label class="form-label fw-bold">Nama Lengkap</label>
                                    <div><?= $data_aplikan['nama_lengkap']; ?></div>
                                </div>
                                <div class="mb-3"><label class="form-label fw-bold">Alamat</label>
                                    <div><?= $data_aplikan['alamat'] ?></div>
                                </div>
                                <div class="mb-3"><label class="form-label fw-bold">Tanggal Lahir</label>
                                    <div><?= $data_aplikan['tanggal_lahir'] ?></div>
                                </div>
                                <div class="mb-3"><label class="form-label fw-bold">Kode Pos</label>
                                    <div><?= $data_aplikan['kodepos'] ?></div>
                                </div>
                                <div class="mb-3"><label class="form-label fw-bold">email</label>
                                    <div><?= $data_aplikan['email'] ?></div>
                                </div>
                                <div class="mb-3"><label class="form-label fw-bold">Pendidikan Terakhir</label>
                                    <div><?= $data_aplikan['pendidikan_terakhir'] ?></div>
                                </div>
                                <div class="mb-3"><label class="form-label fw-bold">Kota</label>
                                    <div><?= $data_aplikan['kota'] ?></div>
                                </div>
                                <div class="mb-3"><label class="form-label fw-bold">Provinsi</label>
                                    <div><?= $data_aplikan['provinsi'] ?></div>
                                </div>
                                <div class="mb-3"><label class="form-label fw-bold">No Hp</label>
                                    <div><?= $data_aplikan['no_hp'] ?></div>
                                </div>
                                <div class="mb-3"><label class="form-label fw-bold">Jenis Kelamin</label>
                                    <div><?= $data_aplikan['jenis_kelamin'] === 'L' ? 'Laki-laki' : 'Perempuan'; ?></div>
                                </div>
                                <div class="mb-3"><label class="form-label fw-bold">Pelatihan</label>
                                    <div><?= $data_aplikan['id_pelatihan'] ?></div>
                                </div>

                                <p>=====================</p>
                                <h5 class="card-title">Pengalaman Kerja</h5>
                                <p>=====================</p>

                                <div class="mb-3"><label class="form-label fw-bold">Nama Perusahaan</label>
                                    <div><?= $data_pengalaman_kerja['nama_perusahaan'] ?></div>
                                </div>
                                <div class="mb-3"><label class="form-label fw-bold">Alamat</label>
                                    <div><?= $data_pengalaman_kerja['alamat'] ?></div>
                                </div>
                                <div class="mb-3"><label class="form-label fw-bold">Kota</label>
                                    <div><?= $data_pengalaman_kerja['kota'] ?></div>
                                </div>
                                <div class="mb-3"><label class="form-label fw-bold">Kode Pos</label>
                                    <div><?= $data_pengalaman_kerja['kodepos'] ?></div>
                                </div>
                                <div class="mb-3"><label class="form-label fw-bold">Lama Kerja</label>
                                    <div><?= $data_pengalaman_kerja['lama_kerja'] ?></div>
                                </div>
                                <div class="mb-3"><label class="form-label fw-bold">Provinsi</label>
                                    <div><?= $data_pengalaman_kerja['provinsi'] ?></div>
                                </div>
                                <div class="mb-3"><label class="form-label fw-bold">Negara</label>
                                    <div><?= $data_pengalaman_kerja['negara'] ?></div>
                                </div>
                                <div class="mb-3"><label class="form-label fw-bold">No HP</label>
                                    <div><?= $data_pengalaman_kerja['no_hp'] ?></div>
                                </div>
                                <div class="mb-3"><label class="form-label fw-bold">Sejak</label>
                                    <div><?= $data_pengalaman_kerja['sejak'] ?></div>
                                </div>
                                <div class="mb-3"><label class="form-label fw-bold">Sampai</label>
                                    <div><?= $data_pengalaman_kerja['sampai'] ?></div>
                                </div>

                                <p>=====================</p>
                                <h5 class="card-title">Pihak Pekerjaan</h5>
                                <p>=====================</p>

                                <div class="mb-3"><label class="form-label fw-bold">Nama Perusahaan</label>
                                    <div><?= $data_pihak_kerja['nama_pihak_rekomendasi'] ?></div>
                                </div>
                                <div class="mb-3"><label class="form-label fw-bold">No HP</label>
                                    <div><?= $data_pihak_kerja['no_hp'] ?></div>
                                </div>

                                <p>=====================</p>
                                <h5 class="card-title">Posisi Pekerjaan</h5>
                                <p>=====================</p>

                                <div class="mb-3"><label class="form-label fw-bold">Posisi</label>
                                    <div><?= $data_posisi_kerja['nama_posisi'] ?></div>
                                </div>
                                <div class="mb-3"><label class="form-label fw-bold">Lama Waktu</label>
                                    <div><?= $data_posisi_kerja['lama_waktu'] ?></div>
                                </div>

                                <p>=====================</p>
                                <h5 class="card-title">Pengalaman Relevan</h5>
                                <p>=====================</p>

                                <div class="mb-3"><label class="form-label fw-bold">Uraian Pengalaman</label>
                                    <div><?= $data_pengalaman_lain['uraian_pengalaman'] ?></div>
                                </div>
                                <div class="mb-3"><label class="form-label fw-bold">Tipe Bukti</label>
                                    <div><?= $data_pengalaman_lain['tipe_bukti'] ?></div>
                                </div>
                                <div class="mb-3"><label class="form-label fw-bold">Dokumen Pendukung</label>
                                    <div><?= $data_aplikan['id_dokumen_pendukung'] ?></div>
                                </div>

                                <!-- Tahun Kurikulum -->
                                <div class="mb-3"><label class="form-label fw-bold">Data Kurikulum</label>
                                    <div><?= $data_kurikulum['id_tahun_kurikulum'] ?></div>
                                </div>
                            </div>

                            <!-- Tabel RPL -->
                            <div class="table-responsive mt-4" id="tabelRplContainer">
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
                                                    <input class="form-check-input" id="yesALL" type="checkbox" value="1" />
                                                    Ya
                                                </label>
                                            </th>
                                            <th style="width: 15%; text-align: center;">
                                                <label class="form-check form-check-custom form-check-solid" style="display: inline-flex; align-items: center; gap: 5px;">
                                                    <input class="form-check-input" id="noALL" type="checkbox" value="0" />
                                                    Tidak
                                                </label>
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody id="tabelRplBody">
                                        <?php foreach ($data_matakuliah as $index => $d) : ?>
                                            <tr class="dt-row">
                                                <td><?= $index + 1; ?></td>
                                                <td class="kode-matkul"><?= $d['kode_matkul']; ?></td>
                                                <td><?= $d['nama_matakuliah']; ?></td>
                                                <td>
                                                    <input class="form-check-input yes-check" type="checkbox" name="" value="1">
                                                </td>
                                                <td>
                                                    <input class="form-check-input no-check" type="checkbox" name="" value="0">
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>

                                </table>
                                <div class="row">
                                    <div class="text-end my-3">
                                        <button class="btn btn-primary" id="submitBtn">Submit</button>
                                        <button class="btn btn-secondary" id="kembaliBtn">Kembali</button>
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

<!-- Script AJAX dan Checkbox -->
<script>

</script>

<?= $this->endSection(); ?>