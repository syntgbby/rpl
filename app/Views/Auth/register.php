<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?= base_url() ?>" />
    <title>RPL - Admin by RPL</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="id" />
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="RPL - Admin by RPL" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="<?= base_url('assets/plugins/global/plugins.bundle.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/css/style.bundle.css') ?>" rel="stylesheet" type="text/css" />
    <script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="<?= base_url('assets/plugins/global/plugins.bundle.js') ?>"></script>
    <script src="<?= base_url('assets/js/scripts.bundle.js') ?>"></script>
</head>
<body id="kt_body" class="app-blank">
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <div class="d-flex flex-column flex-md-row flex-column-fluid">
            <div class="d-flex flex-column flex-md-row-fluid w-md-50">
                <div class="d-flex flex-center flex-column flex-md-row-fluid">
                    <div class="w-md-500px">
                        <form class="form w-100" novalidate="novalidate" id="kt_sign_up_form">
                            <div class="text-center mb-11">
                                <h1 class="text-gray-900 fw-bolder mb-3">Sign Up</h1>
                            </div>
                            <?= csrf_field() ?>
                            
                            <div class="fv-row mb-5">
                                <input type="text" placeholder="Name" name="name" id="name" autocomplete="off" class="form-control bg-transparent" required />
                            </div>

                            <div class="fv-row mb-5">
                                <input type="text" placeholder="Email" name="email" id="email" autocomplete="off" class="form-control bg-transparent" required />
                            </div>

                            <div class="fv-row mb-3">
                                <input type="password" placeholder="Password" name="password" id="password" autocomplete="off" class="form-control bg-transparent" required />
                            </div>

                            <div class="fv-row mb-10">
                                <input type="confirm_password" placeholder="Confirm Password" name="confirm_password" id="confirm_password" autocomplete="off" class="form-control bg-transparent" required />
                            </div>

                            <div class="fv-row mb-10">
                                <select name="question" data-placeholder="Select Question" id="question" class="form-control bg-transparent form-select form-select-lg" autocomplete="off" required>
                                    <option value="" disabled selected>Select a question</option>
                                    <option value="a">What is your favorite color?</option>
                                    <option value="b">What is your favorite food?</option>
                                    <option value="c">What is your favorite animal?</option>
                                </select>
                            </div>

                            <div class="fv-row mb-10">
                                <input type="text" placeholder="Answer" name="answer" id="answer" autocomplete="off" class="form-control bg-transparent" required />
                            </div>

                            <div class="d-grid mb-10">
                                <button type="submit" id="kt_sign_up_submit" class="btn btn-primary" name="register">
                                    <span class="indicator-label">Sign Up</span>
                                    <span class="indicator-progress">Please wait... 
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>

                            <div class="text-gray-500 text-center fw-semibold fs-6">Already a Member? 
                            <a href="<?= base_url('') ?>" class="link-primary">Sign in</a></div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2" style="background-image: url(<?= base_url('assets/media/misc/auth-bg.png') ?>)">
                <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
                    <img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-5 mb-lg-10" src="<?= base_url('assets/media/misc/auth-screens.png') ?>" alt="" />
                    <h1 class="d-none d-lg-block text-white fs-2qx fw-bolder text-center">Fast, Efficient and Productive</h1>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url('assets/js/bundle.js') ?>"></script>
    <script src="<?= base_url('assets/js/scripts.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="text/javascript">
        $('#question').select2();
        $('#kt_sign_in_form').submit(function(e) {
            e.preventDefault();

            var email = $('#email').val();
            var password = $('#password').val();

            if (!email || !password) {
                Swal.fire({
                    title: 'Error',
                    text: 'Please fill in both fields.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
                return;
            }

            var formData = {
                email: email,
                password: password
            };

            // $.ajax({
            //     url: '<?= base_url('login') ?>', 
            //     type: 'POST',
            //     data: formData,
            //     success: function(response) {
            //         var data = JSON.parse(response);
            //         if (data.status === 'success') {
            //             Swal.fire({
            //                 title: 'Success',
            //                 text: data.message,
            //                 icon: 'success',
            //                 confirmButtonText: 'OK',
            //                 showConfirmButton: true,
            //                 timer: 1500
            //             }).then(function() {
            //                 window.location.href = '<?= base_url('dashboard') ?>';  // Redirect to dashboard
            //             });
            //         } else {
            //             Swal.fire({
            //                 title: 'Error',
            //                 text: data.message,
            //                 icon: 'error',
            //                 confirmButtonText: 'Try Again'
            //             });
            //         }
            //     },
            //     error: function(xhr, status, error) {
            //         Swal.fire({
            //             title: 'Error',
            //             text: 'There was an error with the login request. Please try again.',
            //             icon: 'error',
            //             confirmButtonText: 'OK'
            //         });
            //     }
            // });
        });
    </script>
</body>
</html>
