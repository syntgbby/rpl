<?= $this->extend('Layout/template') ?>

<?= $this->section('content') ?>

<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">
<!--begin::Content-->
<div id="kt_app_content" class="app-content">
<!--begin::Row-->
<div class="row gx-5 gx-xl-12">
<!--begin::Col-->
<div class="col-xxl-12 mb-5 mb-xl-12">
<!--begin::Chart widget 28-->
<div class="card card-flush h-xl-200">
<!--begin::Header-->
<div class="card-header py-7">
<!--begin::Statistics-->
<div class="m-0">

<!--begin::Timeline-->
<div class="timeline">

<!-- Timeline: Pendaftaran -->
<div class="timeline-item">
<div class="timeline-line"></div>
<div class="timeline-icon">
<i class="ki-outline ki-user fs-2 text-primary"></i>
</div>
<div class="timeline-content">
<span class="fw-bold text-gray-800">Pendaftaran</span>
<p class="text-gray-600">Data calon mahasiswa telah berhasil didaftarkan.</p>
</div>
</div>

<!-- Timeline: Assign Asesor -->
<div class="timeline-item">
<div class="timeline-line"></div>
<div class="timeline-icon">
<i class="ki-outline ki-people fs-2 text-info"></i>
</div>
<div class="timeline-content">
<span class="fw-bold text-gray-800">Assign Asesor</span>
<p class="text-gray-600">Asesor telah ditugaskan untuk melakukan verifikasi dan validasi.</p>
</div>
</div>

<!-- Timeline: Approve RPL -->
<div class="timeline-item">
<div class="timeline-line"></div>
<div class="timeline-icon">
<i class="ki-outline ki-check-circle fs-2 text-success"></i>
</div>
<div class="timeline-content">
<span class="fw-bold text-gray-800">Approve RPL</span>
<p class="text-gray-600">Pengakuan pembelajaran lampau (RPL) telah disetujui oleh asesor.</p>
</div>
</div>

<!-- Timeline: Penerimaan Mahasiswa -->
<div class="timeline-item">
<div class="timeline-line"></div>
<div class="timeline-icon">
<i class="ki-outline ki-certificate fs-2 text-success"></i>    </div>
<div class="timeline-content">
<span class="fw-bold text-gray-800">Penerimaan Mahasiswa</span>
<span class="badge badge-light-success ms-2">Diterima</span>
<p class="text-gray-600">Calon mahasiswa resmi diterima sebagai mahasiswa aktif.</p>
</div>
</div>
</div>
<!--end::Timeline-->
<!--end::Body-->
</div>
<!--end::Timeline Widget-->

<!--end::Row-->
</div>
<!--end::Content-->
</div>
<!--end::Content wrapper-->
<!--begin::Modal-->
<div class="modal fade" id="detailPendaftaranModal" tabindex="-1" aria-labelledby="detailPendaftaranLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-md">
<div class="modal-content">
<!--begin::Header-->
<div class="modal-header">
<h5 class="modal-title" id="detailPendaftaranLabel">Detail Status Pendaftaran</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
</div>
<!--end::Header-->
<!--begin::Footer-->
<div class="modal-footer">
<button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
</div>
<!--end::Footer-->
</div>
</div>
</div>
<!--end::Modal-->

<?= $this->endSection() ?>