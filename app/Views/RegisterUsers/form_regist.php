<?= $this->extend('Layout/template') ?>

<?= $this->section('content') ?>

<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content">
        <!--begin::Stepper-->
        <div class="stepper stepper-links d-flex flex-column" id="kt_stepper">
            <!--begin::Nav-->
            <div class="stepper-nav justify-content-center py-5">
                <div class="stepper-item current" data-kt-stepper-element="nav">
                    <h3 class="stepper-title">Step 1: Identitas Diri</h3>
                </div>
                <div class="stepper-item" data-kt-stepper-element="nav">
                    <h3 class="stepper-title">Step 2: Pelatihan Kerja</h3>
                </div>
                <div class="stepper-item" data-kt-stepper-element="nav">
                    <h3 class="stepper-title">Step 3: Pengalaman Kerja</h3>
                </div>
            </div>
            <!--end::Nav-->

            <!--begin::Form-->
            <form id="kt_ecommerce_settings_general_form" class="form" action="#" method="POST">
                <!--begin::Step 1 (KEPT AS IT IS)-->
                <div class="stepper-content current p-5" data-kt-stepper-element="content">
                    <div class="card-body pt-5">
                        <h2 class="mb-5">Step 1: Identitas Diri</h2>

                        <div class="row">
                            <div class="col">
                                <label class="fs-6 fw-semibold form-label mt-3">
                                    <span class="required">Nama Lengkap</span>
                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the your full name.">
                                        <i class="ki-outline ki-information fs-7"></i>
                                    </span>
                                </label>
                                <input type="text" class="form-control form-control-solid" name="name"  id="name" />
                            </div>
                            <div class="col">
                                <label class="fs-6 fw-semibold form-label mt-3">Email</label>
                                <input type="email" class="form-control form-control-solid" name="email" id="email" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label class="fs-6 fw-semibold form-label mt-3">Tanggal Lahir</label>
                                <input type="date" class="form-control form-control-solid" name="tanggal_lahir" id="tanggal_lahir" />
                            </div>
                            <div class="col">
                                <label class="fs-6 fw-semibold form-label mt-3">
                                    <span class="required">Jenis Kelamin</span>
                                    <span class="ms-1" data-bs-toggle="tooltip" title="Pilih jenis kelamin">
                                        <i class="ki-outline ki-information fs-7"></i>
                                    </span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div class="d-flex gap-3 mt-5">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="laki-laki" id="jenis_kelamin_laki">
                                        <label class="form-check-label text-black" for="jenis_kelamin_laki">
                                            Laki-laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="perempuan" id="jenis_kelamin_perempuan">
                                        <label class="form-check-label text-black" for="jenis_kelamin_perempuan">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="fv-row mb-7 mt-3">
                            <label class="fs-6 fw-semibold form-label mt-3">Alamat</label>
                            <textarea class="form-control form-control-solid" name="alamat" id="alamat"></textarea>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label class="fs-6 fw-semibold form-label mt-3">Provinsi</label>
                                <input type="text" class="form-control form-control-solid" name="provinsi" id="provinsi" />
                            </div>
                            <div class="col">
                                <label class="fs-6 fw-semibold form-label mt-3">Kota</label>
                                <input type="text" class="form-control form-control-solid" name="kota" id="kota" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label class="fs-6 fw-semibold form-label mt-3">Pendidikan Terakhir</label>
                                <select class="form-select form-select-solid" name="riwayat_pendidikan" id="riwayat_pendidikan">
                                    <option value="SMA">SMA/SMK</option>
                                    <option value="D3">D3</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                </select>
                            </div>
                            <div class="col">
                                <label class="fs-6 fw-semibold form-label mt-3">Tempat Pendidikan</label>
                                <input type="text" class="form-control form-control-solid" name="tempat_pendidikan" id="tempat_pendidikan" />
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-5">
                            <button type="button" class="btn btn-primary" data-kt-stepper-action="next">Next</button>
                        </div>
                    </div>
                </div>
                <!--end::Step 1-->

                <!--begin::Step 2-->
                <div class="stepper-content" data-kt-stepper-element="content">
                    <h2 class="mb-5">Step 2: Pelatihan</h2>

                    <div class="fv-row mb-7">
                        <label class="form-label mt-3">Nama Perusahaan</label>
                        <input type="text" class="form-control form-control-solid" name="nama_perusahaan" required />
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="form-label mt-3">Tahun Mulai</label>
                            <input type="number" class="form-control form-control-solid" name="tahun_mulai" required />
                        </div>
                        <div class="col">
                            <label class="form-label mt-3">Tahun Selesai</label>
                            <input type="number" class="form-control form-control-solid" name="tahun_selesai" required />
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mt-5">
                        <button type="button" class="btn btn-light" data-kt-stepper-action="previous">Back</button>
                        <button type="button" class="btn btn-primary" data-kt-stepper-action="next">Next</button>
                    </div>
                </div>
                <!--end::Step 2-->

                <!--begin::Step 3 - Pengalaman Kerja-->
                <div class="stepper-content" data-kt-stepper-element="content">
                    <div class="card-body pt-5">
                        <h2 class="mb-5">Step 3: Pengalaman Kerja</h2>

                        <div class="fv-row mb-7">
                            <label class="fs-6 fw-semibold form-label mt-3">Nama Perusahaan / lembaga : </label>
                            <input type="text" class="form-control form-control-solid" name="nama_perusahaan" />
                        </div>

                        <div class="fv-row mb-7 mt-3">
                            <label class="fs-6 fw-semibold form-label mt-3">Alamat</label>
                            <textarea class="form-control form-control-solid" name="alamat"></textarea>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="fs-6 fw-semibold form-label mt-3">Provinsi</label>
                                <input type="text" class="form-control form-control-solid" name="provinsi" />
                            </div>
                            <div class="col">
                                <label class="fs-6 fw-semibold form-label mt-3">Kota</label>
                                <input type="text" class="form-control form-control-solid" name="kota" />
                            </div>
                            <div class="col">
                                <label class="fs-6 fw-semibold form-label mt-3">Negara </label>
                                <input type="text" class="form-control form-control-solid" name="negara" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="fs-6 fw-semibold form-label mt-3">Kode Pos</label>
                                <input type="text" class="form-control form-control-solid" name="kode_pos" />
                            </div>
                            <div class="col">
                                <label class="fs-6 fw-semibold form-label mt-3">Phone Hp</label>
                                <input type="text" class="form-control form-control-solid" name="hp" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="fs-6 fw-semibold form-label mt-3">Lama kerja</label>
                                <input type="text" class="form-control form-control-solid" name="provinsi" />
                            </div>
                            <div class="col">
                                <label class="fs-6 fw-semibold form-label mt-3">Sejak</label>
                                <input type="date" class="form-control form-control-solid" name="kota" />
                            </div>
                            <div class="col">
                                <label class="fs-6 fw-semibold form-label mt-3">Sampai </label>
                                <input type="date" class="form-control form-control-solid" name="negara" />
                            </div>
                        </div>
                        <hr>
                        <h4 class="mb-5">Pihak perusahaan yang dapat dihubungi untuk dimintai rekomendasi</h4>
                        <div class="row">
                            <div class="col">
                                <label class="fs-6 fw-semibold form-label mt-3">Nama </label>
                                <input type="text" class="form-control form-control-solid" name="nama" />
                            </div>
                            <div class="col">
                                <label class="fs-6 fw-semibold form-label mt-3">Hp</label>
                                <input type="text" class="form-control form-control-solid" name="hp" />
                            </div>
                        </div>
                        <hr>
                        <h4 class="mb-5">Posisi jabatan (Posisi terakhir diperusahaan)</h4>
                        <div class="row">
                            <div class="col-5">
                                <label class="fs-6 fw-semibold form-label mt-3"><span>1.</span> Posisi</label>
                                <input type="text" class="form-control form-control-solid" name="posisi[]" />
                            </div>
                            <div class="col-5">
                                <label class="fs-6 fw-semibold form-label mt-3">Lama Waktu (Bulan)</label>
                                <input type="number" class="form-control form-control-solid" name="lamawaktu[]" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-5">
                                <label class="fs-6 fw-semibold form-label mt-3"><span>2.</span> Posisi</label>
                                <input type="text" class="form-control form-control-solid" name="posisi[]" />
                            </div>
                            <div class="col-5">
                                <label class="fs-6 fw-semibold form-label mt-3">Lama Waktu (Bulan)</label>
                                <input type="number" class="form-control form-control-solid" name="lamawaktu[]" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-5">
                                <label class="fs-6 fw-semibold form-label mt-3"><span>3.</span> Posisi</label>
                                <input type="text" class="form-control form-control-solid" name="posisi[]" />
                            </div>
                            <div class="col-5">
                                <label class="fs-6 fw-semibold form-label mt-3">Lama Waktu (Bulan)</label>
                                <input type="number" class="form-control form-control-solid" name="lamawaktu[]" />
                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-5">
                                <h4 class="mb-5">Pengalaman Lain yang Relevan</h4>
                            </div>
                            <div class="col-5">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal" id="addPK"><i class="fa-solid fa-user-plus"></i></button>
                            </div>
                        </div>

                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_pk">
                            <thead>
                                <tr class="text-center text-muted fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-15px">No</th>
                                    <th class="min-w-75px">Uraian Pengalaman</th>
                                    <th class="min-w-100px">Tipe Bukti</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 fw-semibold" id="table-body">
                                <!-- <tr id="no-data">
                                    <td colspan="3" class="text-center">No data added</td>
                                </tr> -->
                            </tbody>
                        </table>


                        <div class="d-flex justify-content-between mt-5">
                            <button type="button" class="btn btn-light" data-kt-stepper-action="previous">Back</button>
                            <button type="submit" class="btn btn-success" name="savefrm" id="savefrm">Submit</button>
                        </div>

                        <!--end::Step 3-->


            </form>
            <!--end::Form-->
        </div>
        <!--end::Stepper-->
    </div>
</div>

<!--begin::Custom JS-->
<script>
    $(document).ready(function() {
        $('#kt_table_pk').DataTable();

        $('#addPK').click(function() {
            $('#modaltitle').html('Pengalaman Kerja');
            $('#modalbody').load("<?= base_url('view-add-pk') ?>");
            $('#modal').modal('show');
        });

        $('#savefrm').on('click', function(e) {
        e.preventDefault();
        var name = $('#name').val();
        var email = $('#email').val();
        var tanggal_lahir = $('#tanggal_lahir').val();
        var jenis_kelamin = $('#jenis_kelamin').val();
        var alamat = $('#alamat').val();
        var provinsi = $('#provinsi').val();
        var kota = $('kota').val();
        var kota = $('riwayat_pendidikan').val();
        var kota = $('tempat_pendidikan').val();

        // Cek apakah semua field sudah diisi
        if (name == "" || email == "" || tanggal_lahir == "" || jenis_kelamin == "" || alamat == "" || provinsi == "" || kota == "" || riwayat_pendidikan == "" || tempat_pendidikan == "") {
            toastr.error('All fields must be filled!');
            return;  // Jangan lanjutkan eksekusi
        }

        // Menyembunyikan indikator dan menampilkan spinner
        $('.indicator-label').hide();
        $('.indicator-progress').show();

        // Menonaktifkan tombol Save untuk mencegah klik ganda
        $('#savefrm').prop('disabled', true);

        var formData = {
            menu_cd: menu_cd,
            title: title,
            url: url,
            parent_menucd: parent_menucd,
            icon: icon,
            order_seq: order_seq,
            status: status
        };

        var actionUrl = '<?= base_url('add-master-menu') ?>'; // Ganti dengan URL yang sesuai

        // Kirim request AJAX
        $.ajax({
            url: actionUrl,
            type: 'POST',
            data: formData,
            success: function(response) {
                if (response.status === 'success') {
                    toastr.success(response.message);
                    location.reload();  // Reload halaman setelah berhasil
                } else {
                    toastr.error(response.message);
                }
            },
            error: function(xhr, status, error) {
                toastr.error('An error occurred while sending the request.');
            },
            complete: function() {
                // Mengembalikan status tombol setelah selesai
                $('#savefrm').prop('disabled', false);
                $('.indicator-label').show();
                $('.indicator-progress').hide();
            }
        });
    });
    });

    document.addEventListener("DOMContentLoaded", function() {
        var stepper = new KTStepper(document.querySelector("#kt_stepper"));

        document.querySelectorAll("[data-kt-stepper-action='next']").forEach(button => {
            button.addEventListener("click", function() {
                stepper.goNext();
            });
        });

        document.querySelectorAll("[data-kt-stepper-action='previous']").forEach(button => {
            button.addEventListener("click", function() {
                stepper.goPrevious();
            });
        });
    });
</script>
<!--end::Custom JS-->

<?= $this->endSection() ?>