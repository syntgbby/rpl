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
				<!--begin::Card Widget-->
				<div class="card card-flush h-xl-200">
					<!--begin::Header-->
					<div class="card-header py-7">
						<!--begin::Title-->
						<h3 class="card-title">Manajemen Informatika</h3>
						<!--end::Title-->
					</div>
					<!--end::Header-->
					
					<!--begin::Body-->
					<div class="card-body d-flex flex-column align-items-start ps-4 pe-4 pb-4">
						<!--begin::Content-->
						<p class="mb-4">This is the content of the card. Provide relevant information here.</p>
						<!--end::Content-->
						
						<!--begin::Button-->
						<a href="/form-pendaftaran" class="btn btn-primary">Daftar Sekarang</a>
						<!--end::Button-->
					</div>
					<!--end::Body-->
				</div>
				<!--end::Card Widget-->
			</div>
			<!--end::Col-->

		</div>
		<!--end::Row-->
	</div>
	<!--end::Content-->
</div>
<!--end::Content wrapper-->

<?= $this->endSection() ?>