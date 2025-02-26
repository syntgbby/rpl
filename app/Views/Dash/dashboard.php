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
						
						<div class="row gx-5 gx-xl-10">
							
							<div class="col-xxl-4 mb-5 mb-xl-10">
								<div class="card card-flush h-xl-100">
									<div class="card-header py-7">
										<div class="m-0">
											<div class="d-flex align-items-center mb-2">
												<span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">2,579</span>
												<span class="badge badge-light-success fs-base">
												<i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>2.2%</span>
											</div>
											
											<span class="fs-6 fw-semibold text-gray-500">Domain External Links</span>
											
										</div>
									</div>
									
									<div class="card-body d-flex align-items-end ps-4 pe-0 pb-4">
										<div id="kt_charts_widget_28" class="h-300px w-100 min-h-auto"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="kt_app_footer" class="app-footer d-flex flex-column flex-md-row align-items-center flex-center flex-md-stack py-2 py-lg-4">
					<div class="text-gray-900 order-2 order-md-1">
						<span class="text-muted fw-semibold me-1">2025&copy;</span>
						<a href="" target="_blank" class="text-gray-800 text-hover-primary">RPL</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<?= $this->endSection(''); ?>