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
							<!--begin::Heading-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Title-->
								<span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">2,579</span>
								<!--end::Title-->
								<!--begin::Label-->
								<span class="badge badge-light-success fs-base">
								<i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>2.2%</span>
								<!--end::Label-->
							</div>
							<!--end::Heading-->
							<!--begin::Timeline Widget-->
<div class="card card-flush">
    <!--begin::Header-->
    <div class="card-header">
        <h3 class="card-title">Timeline Kegiatan</h3>
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body">
        <!--begin::Timeline-->
        <div class="timeline">
            <!--begin::Timeline item-->
            <div class="timeline-item">
                <div class="timeline-line"></div>
                <div class="timeline-icon">
                    <i class="ki-outline ki-calendar fs-2 text-primary"></i>
                </div>
                <div class="timeline-content">
                    <span class="fw-bold text-gray-800">10 Mei 2025</span>
                    <p class="text-gray-600">Pembukaan pendaftaran mahasiswa baru.</p>
                </div>
            </div>
            <!--end::Timeline item-->

            <!--begin::Timeline item-->
            <div class="timeline-item">
                <div class="timeline-line"></div>
                <div class="timeline-icon">
                    <i class="ki-outline ki-document fs-2 text-success"></i>
                </div>
                <div class="timeline-content">
                    <span class="fw-bold text-gray-800">15 Juni 2025</span>
                    <p class="text-gray-600">Penutupan gelombang pertama.</p>
                </div>
            </div>
            <!--end::Timeline item-->

            <!--begin::Timeline item-->
            <div class="timeline-item">
                <div class="timeline-line"></div>
                <div class="timeline-icon">
                    <i class="ki-outline ki-check-circle fs-2 text-warning"></i>
                </div>
                <div class="timeline-content">
                    <span class="fw-bold text-gray-800">20 Juni 2025</span>
                    <p class="text-gray-600">Pengumuman hasil seleksi gelombang pertama.</p>
                </div>
            </div>
            <!--end::Timeline item-->
        </div>
        <!--end::Timeline-->
    </div>
    <!--end::Body-->
</div>
<!--end::Timeline Widget-->

		<!--end::Row-->
	</div>
	<!--end::Content-->
</div>
<!--end::Content wrapper-->

<?= $this->endSection() ?>