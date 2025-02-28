<?= $this->extend('Layout/template') ?>

<?= $this->section('content') ?>
<!--begin::Wrapper container-->
            <div class="app-container container-xxl">
                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <!--begin::Content wrapper-->
                    <div class="d-flex flex-column flex-column-fluid">
                        <!--begin::Content-->
                        <div id="kt_app_content" class="app-content">
                       
                            <!--begin::Basic info-->
                            <div class="card mb-5 mb-xl-10">
                                <!--begin::Card header-->
                                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                                    <!--begin::Card title-->
                                    <div class="card-title m-0">
                                        <h3 class="fw-bold m-0">Profile Details</h3>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--begin::Card header-->
                                <!--begin::Content-->
                                <div id="kt_account_settings_profile_details" class="collapse show">
                                    <!--begin::Form-->
                                    <form action="<?= base_url('profile/update') ?>" method="post" enctype="multipart/form-data">                                        <!--begin::Card body-->
                                        <div class="card-body border-top p-9">
                                            <!--begin::Input group-->
                                            <div class="row mb-6">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label fw-semibold fs-6">Avatar</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8">
                                                    <!--begin::Image input-->
                                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/pict/blank.svg')">
                                                        <!--begin::Preview existing avatar-->
                                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url(assets/media/pict/300-1.jpg)"></div>
                                                        <!--end::Preview existing avatar-->
                                                        <!--begin::Label-->
                                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change pict">
                                                            <i class="ki-outline ki-pencil fs-7"></i>
                                                            <!--begin::Inputs-->
                                                            <input type="file" name="pict" accept=".png, .jpg, .jpeg" />
                                                            <input type="hidden" name="pict" />
                                                            <!--end::Inputs-->
                                                        </label>
                                                        <!--end::Label-->
                                                        <!--begin::Cancel-->
                                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel pict">
                                                            <i class="ki-outline ki-cross fs-2"></i>
                                                        </span>
                                                        <!--end::Cancel-->
                                                        <!--begin::Remove-->
                                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove pict">
                                                            <i class="ki-outline ki-cross fs-2"></i>
                                                        </span>
                                                        <!--end::Remove-->
                                                    </div>
                                                    <!--end::Image input-->
                                                    <!--begin::Hint-->
                                                    <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                                    <!--end::Hint-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="row mb-6">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Full Name</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8">
                                                    <!--begin::Row-->
                                                    <div class="row">
                                                        <!--begin::Col-->
                                                        <div class="col-lg-12 fv-row">
                                                        <input type="text" name="name" class="form-control" value="<?= isset($get['name']) ? esc($get['name']) : '' ?>" required>
                                                        <!--end::Col-->
                                                     
                                                    </div>
                                                    <!--end::Row-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="row mb-6">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Tempat Tanggal Lahir </label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8 fv-row">
                                                <input type="text" name="tempat_lahir" class="form-control" value="<?= isset($get['tempat_lahir']) ? esc($get['tempat_lahir']) : '' ?>">                                           
                                            </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="row mb-6">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                                    <span class="required">No telepon</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Phone number must be active">
                                                        <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                                    </span>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8 fv-row">
                                                <input type="text" name="telepon" class="form-control" value="<?= isset($get['telepon']) ? esc($get['telepon']) : '' ?>">                                                 </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="row mb-6">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label fw-semibold fs-6">Jenis Kelamin </label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8 fv-row">
                                                <input type="text" name="jenis_kelamin" class="form-control" value="<?= isset($get['jenis_kelamin']) ? esc($get['jenis_kelamin']) : '' ?>">                                                 </div>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->
                                             <!--begin::Input group-->
                                             <div class="row mb-6">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label fw-semibold fs-6">Agama </label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8 fv-row">
                                                <input type="text" name="agama" class="form-control" value="<?= isset($get['agama']) ? esc($get['agama']) : '' ?>">                                                 </div>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->
                                        <!--end::Card body-->
                                        <!--begin::Actions-->
                                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                                            <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                            <a href="<?= base_url('myprofile') ?>"></a>  
                                        </div>
                                        <!--end::Actions-->
                                      </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Basic info-->
                            <!--begin::Sign-in Method-->
                            <div class="card mb-5 mb-xl-10">
                            
                                <!--begin::Content-->
                                <div id="kt_account_settings_signin_method" class="collapse show">
                                    <!--begin::Card body-->
                                    <div class="card-body border-top p-9">
                                        <!--begin::Email Address-->
                                        <div class="d-flex flex-wrap align-items-center">
                                            <!--begin::Label-->
                                            <div id="kt_signin_email">
                                                <div class="fs-6 fw-bold mb-1">Email Address</div>
                                                <div class="fw-semibold text-gray-600">support@keenthemes.com</div>
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Edit-->
                                            <div id="kt_signin_email_edit" class="flex-row-fluid d-none">
                                                <!--begin::Form-->
                                                <form id="kt_signin_change_email" class="form" novalidate="novalidate">
                                                    <div class="row mb-6">
                                                        <div class="col-lg-6 mb-4 mb-lg-0">
                                                            <div class="fv-row mb-0">
                                                                <label for="emailaddress" class="form-label fs-6 fw-bold mb-3">Enter New Email Address</label>
                                                                <input type="email" class="form-control form-control-lg form-control-solid" id="emailaddress" placeholder="Email Address" name="emailaddress" value="support@keenthemes.com" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="fv-row mb-0">
                                                                <label for="confirmemailpassword" class="form-label fs-6 fw-bold mb-3">Confirm Password</label>
                                                                <input type="password" class="form-control form-control-lg form-control-solid" name="confirmemailpassword" id="confirmemailpassword" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <button id="kt_signin_submit" type="button" class="btn btn-primary me-2 px-6">Update Email</button>
                                                        <button id="kt_signin_cancel" type="button" class="btn btn-color-gray-500 btn-active-light-primary px-6">Cancel</button>
                                                    </div>
                                                </form>
                                                <!--end::Form-->
                                            </div>
                                            <!--end::Edit-->
                                            <!--begin::Action-->
                                            <div id="kt_signin_email_button" class="ms-auto">
                                                <button class="btn btn-light btn-active-light-primary">Change Email</button>
                                            </div>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Email Address-->
                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed my-6"></div>
                                        <!--end::Separator-->
                                        <!--begin::Password-->
                                        <div class="d-flex flex-wrap align-items-center mb-10">
                                            <!--begin::Label-->
                                            <div id="kt_signin_password">
                                                <div class="fs-6 fw-bold mb-1">Password</div>
                                                <div class="fw-semibold text-gray-600">************</div>
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Edit-->
                                            <div id="kt_signin_password_edit" class="flex-row-fluid d-none">
                                                <!--begin::Form-->
                                                <form id="kt_signin_change_password" class="form" novalidate="novalidate">
                                                    <div class="row mb-1">
                                                        <div class="col-lg-4">
                                                            <div class="fv-row mb-0">
                                                                <label for="currentpassword" class="form-label fs-6 fw-bold mb-3">Current Password</label>
                                                                <input type="password" class="form-control form-control-lg form-control-solid" name="currentpassword" id="currentpassword" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="fv-row mb-0">
                                                                <label for="newpassword" class="form-label fs-6 fw-bold mb-3">New Password</label>
                                                                <input type="password" class="form-control form-control-lg form-control-solid" name="newpassword" id="newpassword" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="fv-row mb-0">
                                                                <label for="confirmpassword" class="form-label fs-6 fw-bold mb-3">Confirm New Password</label>
                                                                <input type="password" class="form-control form-control-lg form-control-solid" name="confirmpassword" id="confirmpassword" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-text mb-5">Password must be at least 8 character and contain symbols</div>
                                                    <div class="d-flex">
                                                        <button id="kt_password_submit" type="button" class="btn btn-primary me-2 px-6">Update Password</button>
                                                        <button id="kt_password_cancel" type="button" class="btn btn-color-gray-500 btn-active-light-primary px-6">Cancel</button>
                                                    </div>
                                                </form>
                                                <!--end::Form-->
                                            </div>
                                            <!--end::Edit-->
                                            <!--begin::Action-->
                                            <div id="kt_signin_password_button" class="ms-auto">
                                                <button class="btn btn-light btn-active-light-primary">Reset Password</button>
                                            </div>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Password-->
                <!--end:::Main-->
            </div>
            <!--end::Wrapper container-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::App-->

<?= $this->endSection() ?>