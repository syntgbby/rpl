<?= $this->extend('Layout/template') ?>

<?= $this->section('content') ?>

<!-- Content Wrapper -->
<div class="d-flex flex-column flex-column-fluid">
<!-- Content -->
<div id="kt_app_content" class="app-content">
<!-- Row utama -->
<div class="row gx-5">
<!-- Kolom kiri: Foto + info user -->
<div class="col-md-3 mb-5">
<div class="card card-flush h-100 text-center">
<div class="card-body d-flex flex-column align-items-center justify-content-center py-10">
<div class="symbol symbol-100px symbol-circle mb-5">
<img src="assets/media/avatars/300-6.jpg" alt="Emma Smith" />
</div>
<a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bold mb-1">Selamat Datang</a>
<div class="badge badge-lg badge-light-primary d-inline">User Aplikan</div>
</div>
</div>
</div>

<!-- Kolom kanan: timeline status dan detail pendaftaran sejajar -->
<div class="col-md-9">
<div class="row gx-5">
<!-- Status Pendaftaran -->
<div class="col-md-6 mb-5">
<div class="card card-flush h-100">
<div class="card-header py-5">
<h3 class="card-title">Status Pendaftaran</h3>
</div>
<div class="card-body">
<div class="timeline">
<div class="timeline-item">
<div class="timeline-line"></div>
<div class="timeline-icon">
<i class="ki-outline ki-user fs-2 text-primary"></i>
</div>
<div class="timeline-content">
<span class="fw-bold text-gray-800">Pendaftaran Id</span>
<p class="text-gray-600">Status Pendaftaran</p>
</div>
</div>
<div class="timeline-item">
<div class="timeline-line"></div>
<div class="timeline-icon">
<i class="ki-outline ki-calendar fs-2 text-primary"></i>
</div>
<div class="timeline-content">
<span class="fw-bold text-gray-800">Status</span>
<p class="text-gray-600">Status Pendaftaran</p>
</div>
</div>
<div class="timeline-item">
<div class="timeline-line"></div>
<div class="timeline-icon">
<i class="ki-outline ki-document fs-2 text-success"></i>
</div>
<div class="timeline-content">
<span class="fw-bold text-gray-800">Keterangan</span>
<p class="text-gray-600">Status Pendaftaran</p>
</div>
</div>
<div class="timeline-item">
<div class="timeline-line"></div>
<div class="timeline-icon">
<i class="ki-outline ki-check-circle fs-2 text-warning"></i>
</div>
<div class="timeline-content">
<span class="fw-bold text-gray-800">Waktu</span>
<p class="text-gray-600">Pengumuman hasil seleksi gelombang pertama.</p>
<button type="button" class="btn btn-sm btn-light-warning mt-2" data-bs-toggle="modal" data-bs-target="#detailPendaftaranModal">
Lihat Detail
</button>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- Detail Pendaftaran -->
<div class="col-md-6 mb-5">
<div class="card card-flush h-100">
<div class="card-header py-5">
<h3 class="card-title">Detail Pendaftaran</h3>
</div>
<div class="card-body">
<div class="timeline">
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
<div class="timeline-item">
<div class="timeline-line"></div>
<div class="timeline-icon">
<i class="ki-outline ki-certificate fs-2 text-success"></i>
</div>
<div class="timeline-content">
<span class="fw-bold text-gray-800">Penerimaan Mahasiswa</span>
<span class="badge badge-light-success ms-2">Diterima</span>
<p class="text-gray-600">Calon mahasiswa resmi diterima sebagai mahasiswa aktif.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div> <!-- end inner row -->
</div> <!-- end col-md-9 -->
</div> <!-- end main row -->
<!--begin::Row-->
<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
<!--begin::Col-->
<div class="col-xxl-6">
<!--begin::Card widget 18-->
<div class="card card-flush h-md-100">
<!--begin::Body-->
<div class="card-body py-9">
<!--begin::Row-->
<div class="row gx-9 h-100">
<!--begin::Col-->
<div class="col-sm-6 mb-10 mb-sm-0">
<!--begin::Image-->
<div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-400px min-h-sm-100 h-100" style="background-size: 100% 100%;background-image:url('assets/media/stock/600x600/rpl1.jpg')"></div>
<!--end::Image-->
</div>
<!--end::Col-->
<!--begin::Col-->
<div class="col-sm-6">
<!--begin::Wrapper-->
<div class="d-flex flex-column h-100">
	<!--begin::Header-->
	<div class="mb-7">
		<!--begin::Headin-->
		<div class="d-flex flex-stack mb-6">
			<span class="badge badge-light-primary flex-shrink-0 align-self-center py-3 px-4 fs-7">Terdaftar</span>
		</div>
		<!--end::Heading-->
		<!--begin::Items-->
		<div class="d-flex align-items-center flex-wrap d-grid gap-2">
			<!--begin::Item-->
			<div class="d-flex align-items-center me-5 me-xl-13">
			</div>
			<!--end::Item-->
			<!--begin::Item-->
			<div class="d-flex align-items-center">
			</div>
			<!--end::Item-->
		</div>
		<!--end::Items-->
	</div>
	<!--end::Header-->
	<!--begin::Body-->
	<div class="mb-6">
		<!--begin::Text-->
<p class="fw-semibold text-gray-600 fs-6 mb-8" style="text-align: justify;">
RPL (Recognition of Prior Learning) plays an important role in promoting equal opportunities and inclusivity in human resource development. By recognizing experience and learning gained outside formal education pathways, RPL provides wider access for individuals from diverse backgrounds to enhance their competencies, continue their education, and contribute more effectively in the workforce.
</p>
<!--end::Text-->

		<!--begin::Stats-->
		<div class="d-flex">
			<!--begin::Stat-->
			<div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3">
				
				
			</div>
			<!--end::Stat-->
		</div>
		<!--end::Stats-->
	</div>
	<!--end::Body-->
	<!--begin::Footer-->
	<div class="d-flex flex-stack mt-auto bd-highlight">		
	</div>
	<!--end::Footer-->
</div>
<!--end::Wrapper-->
</div>
<!--end::Col-->
</div>
<!--end::Row-->
</div>
<!--end::Body-->
</div>
<!--end::Card widget 18-->
</div>
<!--end::Col-->
<!--begin::Col-->
<div class="col-xxl-6">
<!--begin::Engage widget 8-->
<div class="card border-0 h-md-100" data-bs-theme="light" style="background: linear-gradient(112.14deg, #00D2FF 0%, #3A7BD5 100%)">
<!--begin::Body-->
<div class="card-body">
<!--begin::Row-->
<div class="row align-items-center h-100">
<!--begin::Col-->
<div class="col-7 ps-xl-13">
<!--begin::Title-->
<div class="text-white mb-6 pt-6">
	<span class="fs-4 fw-semibold me-2 d-block lh-1 pb-2 opacity-75">Get best offer</span>
	<span class="fs-2qx fw-bold">Upgrade Your Plan &</span>
		<span class="fs-2qx fw-bold">Upgrade Your Job</span>
</div>
<!--end::Title-->
<!--begin::Text-->
<span class="fw-semibold text-white fs-6 mb-8 d-block opacity-75">When we dare to step out of our comfort zone and strive to improve ourselves, a career is no longer just a goal but a journey filled with proud achievements</span>
<!--end::Text-->
<!--begin::Items-->
<div class="d-flex align-items-center flex-wrap d-grid gap-2 mb-10 mb-xl-20">
	<!--begin::Item-->
	<div class="d-flex align-items-center me-5 me-xl-13">
	</div>
	<!--end::Item-->
	<!--begin::Item-->
	<div class="d-flex align-items-center">
	</div>
	<!--end::Item-->
</div>
<!--end::Items-->
</div>
<!--end::Col-->
<!--begin::Col-->
<div class="col-5 pt-10">
<!--begin::Illustration-->
<div class="bgi-no-repeat bgi-size-contain bgi-position-x-end h-225px" style="background-image:url('assets/media/svg/illustrations/easy/5.svg"></div>
<!--end::Illustration-->
</div>
<!--end::Col-->
</div>
<!--end::Row-->
</div>
<!--end::Body-->
</div>
<!--end::Engage widget 8-->
</div>
<!--end::Col-->
</div>
<!--end::Row-->
</div> <!-- end content -->
</div> <!-- end content wrapper -->

<?= $this->endSection() ?>
