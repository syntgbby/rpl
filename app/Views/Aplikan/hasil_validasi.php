<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
    <div id="kt_app_toolbar" class="app-toolbar py-6">
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex align-items-start">
            <div class="d-flex flex-column flex-row-fluid">
                <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-4 gap-lg-10 pt-6 pb-18 py-lg-13">
                    <div class="page-title d-flex align-items-center me-3">
                        <img alt="Logo" src="<?= base_url('assets/media/svg/misc/layer.svg') ?>" class="h-60px me-5" />
                        <h1 class="page-heading d-flex text-white fw-bolder fs-2 flex-column justify-content-center my-0">RPL - Assessment
                            <span class="page-desc text-white opacity-50 fs-6 fw-bold pt-4">Calon Mahasiswa RPL</span>
                        </h1>
                    </div>
                    <!--begin::Items-->
                    <div class="d-flex gap-4 gap-lg-13">
                        <!--begin::Item-->
                        <div class="d-flex flex-column">
                            <!--begin::Number-->
                            <span class="text-white fw-bold fs-3 mb-1">50</span>
                            <!--end::Number-->

                            <!--begin::Section-->
                            <div class="text-white opacity-50 fw-bold">Calon</div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="d-flex flex-column">
                            <!--begin::Number-->
                            <span class="text-white fw-bold fs-3 mb-1">40</span>
                            <!--end::Number-->

                            <!--begin::Section-->
                            <div class="text-white opacity-50 fw-bold">Proses</div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="d-flex flex-column">
                            <!--begin::Number-->
                            <span class="text-white fw-bold fs-3 mb-1">100</span>
                            <!--end::Number-->

                            <!--begin::Section-->
                            <div class="text-white opacity-50 fw-bold">Sukses</div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Items-->
                </div>
            </div>
        </div>
    </div>
    <div class="app-container container-xxl">
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <div class="d-flex flex-column flex-column-fluid">
                <div id="kt_app_content" class="app-content">
                    <div class="card">
                        <!--begin::Card header-->
                        <div class="card-header border-0 pt-6">
                            <div class="table-responsive">
                                <table class="table table-striped gy-7 gs-7">
                                    <thead>
                                        <tr class="fw-semibold fs-6 text-gray-800 border-bottom-2 border-gray-200">
                                            <th class="min-w-50px">No</th>
                                            <th class="min-w-300px">Validasi</th>
                                            <th class="min-w-250px">NIM</th>
                                            <th class="min-w-400px">Nama Lengkap</th>
                                            <th class="min-w-300px">Pendidikan Terakhir</th>
                                            <th class="min-w-300px">Jenis Kelamin</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($master_aplikan as $a): ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td>
                                                    <?= $a['validasi'] === '0' ? 'Diterima' : 'Ditolak'; ?>
                                                </td>
                                                <td><?= $a['nim']; ?></td>
                                                <td><?= $a['nama_lengkap']; ?></td>
                                                <td><?= $a['pendidikan_terakhir']; ?></td>
                                                <td>
                                                    <?= $a['jenis_kelamin'] === 'L' ? 'Laki-laki' : 'Perempuan'; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>