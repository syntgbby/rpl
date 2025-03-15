<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
	<div id="kt_app_toolbar" class="app-toolbar py-6">
		<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex align-items-start">
			<div class="d-flex flex-column flex-row-fluid">
				<div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-4 gap-lg-10 pt-6 pb-18 py-lg-13">
					<div class="page-title d-flex align-items-center me-3">
						<img alt="Logo" src="<?= base_url('assets/img/logo.png') ?>" class="h-60px me-5" />
						<h1 class="page-heading d-flex text-white fw-bolder fs-2 flex-column justify-content-center my-0">Formulir Daftar Riwayat Hidup 
						<span class="page-desc text-white opacity-50 fs-6 fw-bold pt-4 text-truncate" style="max-width: 450px;">RPL Tipe A Program Studi Manajemen Informatika
							Direktorat: Gedung Sentra Kramat Blok A Jl. Kramat Raya No. 7-9, Jakarta, Phone: (021) 3190-5498, Fax (021) 3190-5499. Website:  www.plj.ac
						</span>
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
                    <div class="container">
                        <div class="row mb-3 d-flex align-items-center">
                            <label class="col-4 col-sm-3 col-md-2 col-form-label fw-bold">Nama<small style="color:red">*</small></label>
                            <div class="col-1">:</div>
                            <div class="col-7 col-sm-6 col-md-5">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3 d-flex align-items-center">
                            <label class="col-4 col-sm-3 col-md-2 col-form-label fw-bold">Tempat dan Tanggal Lahir<small style="color:red">*</small></label>
                            <div class="col-1">:</div>
                            <div class="col-7 col-sm-6 col-md-5">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3 d-flex align-items-center">
                            <label class="col-4 col-sm-3 col-md-2 col-form-label fw-bold">Jenis Kelamin<small style="color:red">*</small></label>
                            <div class="col-1">:</div>
                            <div class="col-7 col-sm-6 col-md-5">
                                <select class="form-select" aria-label="Select example">
                                    <option>Open this select</option>
                                    <option value="1">Laki-laki</option>
                                    <option value="2">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3 d-flex align-items-center">
                            <label class="col-4 col-sm-3 col-md-2 col-form-label fw-bold">Pekerjaan<small style="color:red">*</small></label>
                            <div class="col-1">:</div>
                            <div class="col-7 col-sm-6 col-md-5">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3 d-flex align-items-center">
                            <label class="col-4 col-sm-3 col-md-2 col-form-label fw-bold">Alamat Pekerjaan<small style="color:red">*</small></label>
                            <div class="col-1">:</div>
                            <div class="col-7 col-sm-6 col-md-5">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3 d-flex align-items-center">
                            <label class="col-4 col-sm-3 col-md-2 col-form-label fw-bold">Alamat Rumah<small style="color:red">*</small></label>
                            <div class="col-1">:</div>
                            <div class="col-7 col-sm-6 col-md-5">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3 d-flex align-items-center">
                            <label class="col-4 col-sm-3 col-md-2 col-form-label fw-bold">Telp/Hp<small style="color:red">*</small></label>
                            <div class="col-1">:</div>
                            <div class="col-7 col-sm-6 col-md-5">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <!-- START RIWAYAT PENDIDIKAN -->
                        <h2 class="my-10 text-center">========== Riwayat Pendidikan ==========</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered border-gray-800">
                            <thead class="">
								<tr>
									<th class="text-center align-middle" rowspan="2" style="width: 50px;">No</th>
									<th class="text-center align-middle" rowspan="2">Nama Sekolah</th>
									<th class="text-center align-middle" rowspan="2">Tahun Lulus</th>
									<th class="text-center align-middle" rowspan="2">Jurusan/Program Studi</th>
                                </tr>
							</thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    <td><input type="text" class="text-center form-control form-control-transparent" placeholder=""/></td>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    <td><input type="text" class="text-center form-control form-control-transparent" placeholder=""/></td>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    <td><input type="text" class="text-center form-control form-control-transparent" placeholder=""/></td>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        <p><small style="color:red">*</small>Hanya diisi pendidikan menengah dan pendidikan tinggi</p>
                        <!-- END RIWAYAT PENDIDIKAN -->
                        
                        <!-- START PELATIHAN PROFESIONAL -->
                        <h2 class="my-10 text-center">========== Pelatihan Profesional ==========</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered border-gray-800">
                            <thead class="">
                            <tr>
                                <th class="text-center align-middle" rowspan="2" style="width: 150px;">Tahun</th>
                                <th class="text-center align-middle" rowspan="2">Jenis Pelatihan <br> Dalam/Luar Negeri</th>
                                <th class="text-center align-middle" rowspan="2">Penyelenggara</th>
                                <th class="text-center align-middle" rowspan="2">Waktu</th>
                            </tr>
							</thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    <td><input type="text" class="text-center form-control form-control-transparent" placeholder=""/></td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    <td><input type="text" class="text-center form-control form-control-transparent" placeholder=""/></td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    <td><input type="text" class="text-center form-control form-control-transparent" placeholder=""/></td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        <!-- END PELATIHAN PROFESIONAL -->

                        <!-- START Konferensi/Lokakarya/Seminar/Simposium -->
                        <h2 class="my-10 text-center">========== Konferensi/Lokakarya/Seminar/Simposium ==========</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered border-gray-800">
                            <thead class="">
                            <tr>
                                <th class="text-center align-middle" rowspan="2" style="width: 150px;">Tahun</th>
                                <th class="text-center align-middle" rowspan="2">Judul Kegiatan</th>
                                <th class="text-center align-middle" rowspan="2">Penyelenggara</th>
                                <th class="text-center align-middle" rowspan="2">Panitia/Peserta/Pembicara</th>
                            </tr>
							</thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    <td><input type="text" class="text-center form-control form-control-transparent" placeholder=""/></td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    <td><input type="text" class="text-center form-control form-control-transparent" placeholder=""/></td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    <td><input type="text" class="text-center form-control form-control-transparent" placeholder=""/></td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        <!-- END PKonferensi/Lokakarya/Seminar/Simposium -->

                        <!-- START Penghargaan/Piagam -->
                        <h2 class="my-10 text-center">========== Penghargaan/Piagam ==========</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered border-gray-800">
                            <thead class="">
                            <tr>
                                <th class="text-center align-middle" rowspan="2" style="width: 150px;">Tahun</th>
                                <th class="text-center align-middle" rowspan="2">Bentuk Penghargaan</th>
                                <th class="text-center align-middle" rowspan="2">Penyelenggara</th>
                            </tr>
							</thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        <!-- END Penghargaan/Piagam -->

                        <!-- START Organisasi Profesi/Ilmiah -->
                        <h2 class="my-10 text-center">========== Organisasi Profesi/Ilmiah ==========</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered border-gray-800">
                            <thead class="">
                            <tr>
                                <th class="text-center align-middle" rowspan="2" style="width: 150px;">Tahun</th>
                                <th class="text-center align-middle" rowspan="2">Bentuk Penghargaan</th>
                                <th class="text-center align-middle" rowspan="2">Jabatan/Jenjang Anggota</th>
                            </tr>
							</thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        <!-- END Organisasi Profesi/Ilmiah -->

                        <!-- START Riwayat Pekerjaan -->
                        <h2 class="my-10 text-center">========== Riwayat Pekerjaan ==========</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered border-gray-800">
                            <thead class="">
                            <tr>
                                <th class="text-center align-middle" rowspan="2">Nama/Alamat/Telepon Perusahaan</th>
                                <th class="text-center" colspan="2" >Periode Kerja</th>
                                <th class="text-center align-middle" rowspan="2">Jabatan/Posisi2</th>
                                <th class="text-center align-middle" rowspan="2">Uraian <br>Pekerjaan/Tugas</th>
                            </tr>
                            <tr>
                                <th class="text-center"style="width: 150px;">Mulai</th>
                                <th class="text-center"style="width: 150px;">Akhir</th>
                            </tr>
							</thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    <td class="text-center">
										<div class="d-flex justify-content-center">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
												<label class="form-check-label" for="flexCheckDefault"></label>
											</div>
										</div>
									</td>
									<td class="text-center">
										<div class="d-flex justify-content-center">
											<div class="form-check form-check-custom form-check-danger form-check-solid">
												<input class="form-check-input" type="checkbox" value="">
												<label class="form-check-label" for="flexCheckDefault"></label>
											</div>
										</div>
									</td>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    <td class="text-center">
										<div class="d-flex justify-content-center">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
												<label class="form-check-label" for="flexCheckDefault"></label>
											</div>
										</div>
									</td>
									<td class="text-center">
										<div class="d-flex justify-content-center">
											<div class="form-check form-check-custom form-check-danger form-check-solid">
												<input class="form-check-input" type="checkbox" value="">
												<label class="form-check-label" for="flexCheckDefault"></label>
											</div>
										</div>
									</td>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    <td class="text-center">
										<div class="d-flex justify-content-center">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
												<label class="form-check-label" for="flexCheckDefault"></label>
											</div>
										</div>
									</td>
									<td class="text-center">
										<div class="d-flex justify-content-center">
											<div class="form-check form-check-custom form-check-danger form-check-solid">
												<input class="form-check-input" type="checkbox" value="">
												<label class="form-check-label" for="flexCheckDefault"></label>
											</div>
										</div>
									</td>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    <td><input type="text" class="form-control form-control-transparent" placeholder=""/></td>
                                    
                                </tr>
                                
                            </tbody>
                            </table>
                        </div>
                        <p><small style="color:red">*</small>Apabila berpindah posisi/jabatan dalam pengalaman pekerjaan tersebut maka posisi/jabatan tersebut harus dituliskan dalam tabel meskipun perubahan posisi/jabatan tersebut masih dalam perusahaan yang sama</p>
                        <!-- END Riwayat Pekerjaan -->
                    </div>
                    <div class="">
						<button type="button" id="kt_docs_sweetalert_basic" class="btn btn-primary">Simpan</button>
						<button type="button" id="kt_docs_sweetalert_basic" class="btn btn-danger">Batal</button>
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

<?= $this->endSection(''); ?>