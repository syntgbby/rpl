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
							<!--begin::Description-->
							<span class="fs-6 fw-semibold text-gray-500">Domain External Links</span>
							<!--end::Description-->
						</div>
						<!--end::Statistics-->
					</div>
					<!--end::Header-->
					
					<!--begin::Body-->
					<div class="card-body d-flex align-items-end ps-4 pe-0 pb-4">
						<!--begin::Chart-->
						<div id="kt_charts_widget_28" class="h-300px w-100 min-h-auto"></div>
						<!--end::Chart-->
					</div>
					<!--end::Body-->
				</div>
				<!--end::Chart widget 28-->
			</div>
			<!--end::Col-->
		</div>
		<!--end::Row-->
	</div>
	<!--end::Content-->
</div>
<!--end::Content wrapper-->

<?= $this->endSection() ?>