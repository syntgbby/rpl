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
            <!--begin::Card-->
            <div class="card card-flush">
                <<!--begin::Body-->
            <div class="card-body">
                <div class="row g-0"><!-- g-0 supaya tak ada jarak di tepi gambar -->
                <!-- Kolom Peta (full-width) -->
    <div class="col-12">
        <img src="assets/media/gambarlp3i/petalp3i.jpeg"
                alt="Peta LP3I"
                class="img-fluid w-100 rounded"
                style="object-fit: cover; max-height: 450px;" />
    </div>

    </div>
    </div>
    <!--end::Body-->

            </div>
            <!--end::Card-->
    </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    </div>
    <!--end::Content-->
    </div>
    <!--end::Content wrapper-->

    <?= $this->endSection() ?>
