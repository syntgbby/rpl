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
							<span class="page-desc text-white opacity-50 fs-6 fw-bold pt-4">RPL</span>
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
					<div class="col-lg-6 col-xxl-4">
						<!--begin::Card-->
						<div class="card h-100">
							<!--begin::Card body-->
							<div class="card-body p-9">
								<!--begin::Heading-->
								<div class="fs-2hx fw-bold">237</div>
								<div class="fs-4 fw-semibold text-gray-500 mb-7">Calon Mahasiswa RPL</div>
								<!--end::Heading-->

								<!--begin::Wrapper-->
								<div class="d-flex flex-wrap">
									<!--begin::Labels-->
									<div class="d-flex flex-column justify-content-center flex-row-fluid pe-11 mb-5">
										<!--begin::Label-->
										<div class="d-flex fs-6 fw-semibold align-items-center mb-3">
											<div class="bullet bg-primary me-3"></div>
											<div class="text-gray-500">Active</div>
											<div class="ms-auto fw-bold text-gray-700">30</div>
										</div>
										<!--end::Label-->

										<!--begin::Label-->
										<div class="d-flex fs-6 fw-semibold align-items-center mb-3">
											<div class="bullet bg-success me-3"></div>
											<div class="text-gray-500">Completed</div>
											<div class="ms-auto fw-bold text-gray-700">45</div>
										</div>
										<!--end::Label-->

										<!--begin::Label-->
										<div class="d-flex fs-6 fw-semibold align-items-center">
											<div class="bullet bg-gray-300 me-3"></div>
											<div class="text-gray-500">Pending</div>
											<div class="ms-auto fw-bold text-gray-700">25</div>
										</div>
										<!--end::Label-->
									</div>
									<!--end::Labels-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

				<?= $this->endSection(''); ?>