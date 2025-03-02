<?= $this->extend('Layout/template') ?>

<?= $this->section('content') ?>

<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">
<!--begin::Content-->
<div id="kt_app_content" class="app-content">
<!--begin::Contacts App- Add New Contact-->
<div class="row g-7">

<!--begin::Content-->
<div class="col-xl-12">
<!--begin::Contacts-->
<div class="card card-flush h-lg-100" id="kt_contacts_main">
<!--begin::Card header-->
<div class="card-header pt-7" id="kt_chat_contacts_header">
<!--begin::Card title-->
<div class="card-title">
<i class="ki-outline ki-badge fs-1 me-2"></i>
<h2>Formulir Pendaftaran RPL</h2>
</div>
<!--end::Card title-->
</div>
<!--end::Card header-->
<!--begin::Card body-->
<div class="card-body pt-5">
<!--begin::Form-->
<form id="kt_ecommerce_settings_general_form" class="form" action="#">
<!--begin::Input group-->
<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class="fs-6 fw-semibold form-label mt-3">
        <span class="required">Nama Lengkap</span>
        <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's name.">
            <i class="ki-outline ki-information fs-7"></i>
        </span>
    </label>
    <!--end::Label-->
    <!--begin::Input-->
    <input type="text" class="form-control form-control-solid" name="name" value="" />
    <!--end::Input-->
</div>
<!--end::Input group-->
<!--begin::Input group-->
<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class="fs-6 fw-semibold form-label mt-3">
        <span>Alamat : </span>
        <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's company name (optional).">
            <i class="ki-outline ki-information fs-7"></i>
        </span>
    </label>
    <!--end::Label-->
    <!--begin::Input-->
    <input type="text" class="form-control form-control-solid" name="alamat" value="" />
    <!--end::Input-->
</div>
<!--end::Input group-->
    <!--begin::Input group-->
    <div class="fv-row mb-7">
    <!--begin::Label-->
    <label class="fs-6 fw-semibold form-label mt-3">
        <span>Tanggal Lahir : </span>
        <span class="ms-1" data-bs-toggle="tooltip" title="Enter the your birth.">
            <i class="ki-outline ki-information fs-7"></i>
        </span>
    </label>
    <!--end::Label-->
    <!--begin::Input-->
    <input type="text" class="form-control form-control-solid" name="tanggal_lahir" value="" />
    <!--end::Input-->
</div>
<!--end::Input group-->
<!--begin::Row-->
<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
    <!--begin::Col-->
    <div class="col">
        <!--begin::Input group-->
        <div class="fv-row mb-7">
            <!--begin::Label-->
            <label class="fs-6 fw-semibold form-label mt-3">
                <span class="required">Email</span>
                <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's email.">
                    <i class="ki-outline ki-information fs-7"></i>
                </span>
            </label>
            <!--end::Label-->
            <!--begin::Input-->
            <input type="email" class="form-control form-control-solid" name="email" value="" />
            <!--end::Input-->
        </div>
        <!--end::Input group-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col">
        <!--begin::Input group-->
        <div class="fv-row mb-7">
            <!--begin::Label-->
            <label class="fs-6 fw-semibold form-label mt-3">
                <span>Phone</span>
                <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's phone number (optional).">
                    <i class="ki-outline ki-information fs-7"></i>
                </span>
            </label>
            <!--end::Label-->
            <!--begin::Input-->
            <input type="text" class="form-control form-control-solid" name="phone" value="" />
            <!--end::Input-->
        </div>
        <!--end::Input group-->
    </div>
    <!--end::Col-->
</div>
<!--end::Row-->
<!--begin::Row-->
<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
    <!--begin::Col-->
    <div class="col">
        <!--begin::Input group-->
        <div class="fv-row mb-7">
            <!--begin::Label-->
            <label class="fs-6 fw-semibold form-label mt-3">
                <span>Provinsi </span>
                <span class="ms-1" data-bs-toggle="tooltip" title="Enter the provinsi of residence (optional).">
                    <i class="ki-outline ki-information fs-7"></i>
                </span>
            </label>
            <!--end::Label-->
            <!--begin::Input-->
            <input type="text" class="form-control form-control-solid" name="provinsi" value="" />
            <!--end::Input-->
        </div>
        <!--end::Input group-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col">
        <!--begin::Input group-->
        <div class="fv-row mb-7">
            <!--begin::Label-->
            <label class="fs-6 fw-semibold form-label mt-3">
                <span>Kota</span>
                <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's phone number (optional).">
                    <i class="ki-outline ki-information fs-7"></i>
                </span>
            </label>
            <!--end::Label-->
            <!--begin::Input-->
            <input type="text" class="form-control form-control-solid" name="kota" value="" />
            <!--end::Input-->
        </div>
        <!--end::Input group-->
    </div>
    <!--end::Col-->
</div>
<!--end::Row-->
<!--begin::Input group-->
<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class="fs-6 fw-semibold form-label mt-3">
        <span class="required">Jenis Kelamin</span>
        <span class="ms-1" data-bs-toggle="tooltip" title="Pilih jenis kelamin">
            <i class="ki-outline ki-information fs-7"></i>
        </span>
    </label>
    <!--end::Label-->
    <!--begin::Input-->
    <div class="d-flex gap-3">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki" id="jenis_kelamin_laki">
            <label class="form-check-label text-black" for="jenis_kelamin_laki">
                Laki-laki
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan" id="jenis_kelamin_perempuan">
            <label class="form-check-label text-black" for="jenis_kelamin_perempuan">
                Perempuan
            </label>
        </div>
    </div>
    <!--end::Input-->
</div>
<!--begin::Input group-->
<div class="fv-row mb-7">
    <!--begin::Label-->
    <label class="fs-6 fw-semibold form-label mt-3">
        <span>Pendidikan Terakhir</span>
        <span class="ms-1" data-bs-toggle="tooltip" title="Enter any additional notes about the contact (optional).">
            <i class="ki-outline ki-information fs-7"></i>
        </span>
    </label>
    <!--end::Label-->
    <!--begin::Input-->
    <textarea class="form-control form-control-solid" name="notes"></textarea>
    <!--end::Input-->
</div>
<!--end::Input group-->
<!--begin::Separator-->
<div class="separator mb-6"></div>
<!--end::Separator-->
<!--begin::Action buttons-->
<div class="d-flex justify-content-end">
    <!--begin::Button-->
    <button type="reset" data-kt-contacts-type="cancel" class="btn btn-light me-3">Cancel</button>
    <!--end::Button-->
    <!--begin::Button-->
    <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary">
        <span class="indicator-label">Save</span>
        <span class="indicator-progress">Please wait... 
        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
    </button>
    <!--end::Button-->
</div>
<!--end::Action buttons-->
</form>
<!--end::Form-->
</div>
<!--end::Card body-->
</div>
<!--end::Contacts-->
</div>
<!--end::Content-->
</div>
<!--end::Contacts App- Add New Contact-->
</div>
<!--end::Content-->
</div>
<!--end::Content wrapper-->

<?= $this->endSection() ?>