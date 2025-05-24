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
															<div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-400px min-h-sm-100 h-100" style="background-size: 100% 100%;background-image:url('assets/media/stock/600x600/img-33.jpg')"></div>
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
																		<!--begin::Title-->
																		<div class="flex-shrink-0 me-5">
																			<span class="text-gray-500 fs-7 fw-bold me-2 d-block lh-1 pb-1">Featured</span>
																			<span class="text-gray-800 fs-1 fw-bold">9 Degree</span>
																		</div>
																		<!--end::Title-->
																		<span class="badge badge-light-primary flex-shrink-0 align-self-center py-3 px-4 fs-7">In Process</span>
																	</div>
																	<!--end::Heading-->
																	<!--begin::Items-->
																	<div class="d-flex align-items-center flex-wrap d-grid gap-2">
																		<!--begin::Item-->
																		<div class="d-flex align-items-center me-5 me-xl-13">
																			<!--begin::Symbol-->
																			<div class="symbol symbol-30px symbol-circle me-3">
																				<img src="assets/media/avatars/300-3.jpg" class="" alt="" />
																			</div>
																			<!--end::Symbol-->
																			<!--begin::Info-->
																			<div class="m-0">
																				<span class="fw-semibold text-gray-500 d-block fs-8">Manager</span>
																				<a href="pages/user-profile/overview.html" class="fw-bold text-gray-800 text-hover-primary fs-7">Robert Fox</a>
																			</div>
																			<!--end::Info-->
																		</div>
																		<!--end::Item-->
																		<!--begin::Item-->
																		<div class="d-flex align-items-center">
																			<!--begin::Symbol-->
																			<div class="symbol symbol-30px symbol-circle me-3">
																				<span class="symbol-label bg-success">
																					<i class="ki-outline ki-abstract-41 fs-5 text-white"></i>
																				</span>
																			</div>
																			<!--end::Symbol-->
																			<!--begin::Info-->
																			<div class="m-0">
																				<span class="fw-semibold text-gray-500 d-block fs-8">Budget</span>
																				<span class="fw-bold text-gray-800 fs-7">$64.800</span>
																			</div>
																			<!--end::Info-->
																		</div>
																		<!--end::Item-->
																	</div>
																	<!--end::Items-->
																</div>
																<!--end::Header-->
																<!--begin::Body-->
																<div class="mb-6">
																	<!--begin::Text-->
																	<span class="fw-semibold text-gray-600 fs-6 mb-8 d-block">Flat cartoony illustrations with vivid unblended colors and asymmetrical beautiful purple hair lady</span>
																	<!--end::Text-->
																	<!--begin::Stats-->
																	<div class="d-flex">
																		<!--begin::Stat-->
																		<div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3">
																			<!--begin::Date-->
																			<span class="fs-6 text-gray-700 fw-bold">Feb 6, 2021</span>
																			<!--end::Date-->
																			<!--begin::Label-->
																			<div class="fw-semibold text-gray-500">Due Date</div>
																			<!--end::Label-->
																		</div>
																		<!--end::Stat-->
																		<!--begin::Stat-->
																		<div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 mb-3">
																			<!--begin::Number-->
																			<span class="fs-6 text-gray-700 fw-bold">$
																			<span class="ms-n1" data-kt-countup="true" data-kt-countup-value="284,900.00">0</span></span>
																			<!--end::Number-->
																			<!--begin::Label-->
																			<div class="fw-semibold text-gray-500">Budget</div>
																			<!--end::Label-->
																		</div>
																		<!--end::Stat-->
																	</div>
																	<!--end::Stats-->
																</div>
																<!--end::Body-->
																<!--begin::Footer-->
																<div class="d-flex flex-stack mt-auto bd-highlight">
																	<!--begin::Users group-->
																	<div class="symbol-group symbol-hover flex-nowrap">
																		<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
																			<img alt="Pic" src="assets/media/avatars/300-2.jpg" />
																		</div>
																		<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
																			<img alt="Pic" src="assets/media/avatars/300-3.jpg" />
																		</div>
																		<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
																			<span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
																		</div>
																	</div>
																	<!--end::Users group-->
																	<!--begin::Actions-->
																	<a href="apps/projects/project.html" class="d-flex align-items-center text-primary opacity-75-hover fs-6 fw-semibold">View Project 
																	<i class="ki-outline ki-exit-right-corner fs-4 ms-1"></i></a>
																	<!--end::Actions-->
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
																<span class="fs-2qx fw-bold">Upgrade Your Plan</span>
															</div>
															<!--end::Title-->
															<!--begin::Text-->
															<span class="fw-semibold text-white fs-6 mb-8 d-block opacity-75">Flat cartoony and illustrations with vivid unblended purple hair lady</span>
															<!--end::Text-->
															<!--begin::Items-->
															<div class="d-flex align-items-center flex-wrap d-grid gap-2 mb-10 mb-xl-20">
																<!--begin::Item-->
																<div class="d-flex align-items-center me-5 me-xl-13">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-30px symbol-circle me-3">
																		<span class="symbol-label" style="background: #35C7FF">
																			<i class="ki-outline ki-abstract-41 fs-5 text-white"></i>
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Info-->
																	<div class="text-white">
																		<span class="fw-semibold d-block fs-8 opacity-75">Projects</span>
																		<span class="fw-bold fs-7">Up to 500</span>
																	</div>
																	<!--end::Info-->
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="d-flex align-items-center">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-30px symbol-circle me-3">
																		<span class="symbol-label" style="background: #35C7FF">
																			<i class="ki-outline ki-abstract-26 fs-5 text-white"></i>
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Info-->
																	<div class="text-white">
																		<span class="fw-semibold opacity-75 d-block fs-8">Tasks</span>
																		<span class="fw-bold fs-7">Unlimited</span>
																	</div>
																	<!--end::Info-->
																</div>
																<!--end::Item-->
															</div>
															<!--end::Items-->
															<!--begin::Action-->
															<div class="d-flex flex-column flex-sm-row d-grid gap-2">
																<a href="#" class="btn btn-success flex-shrink-0 me-lg-2" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade Plan</a>
																<a href="#" class="btn btn-primary flex-shrink-0" style="background: rgba(255, 255, 255, 0.2)" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Read Guides</a>
															</div>
															<!--end::Action-->
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
