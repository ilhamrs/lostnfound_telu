<!DOCTYPE html>
<html lang="en">
<!-- START: Head-->

<!-- Mirrored from html.designstream.co.in/pick/html/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Jul 2020 02:12:38 GMT -->

<head>
    <meta charset="UTF-8">
    <title>Login - Lost N Found TelU</title>
    <link rel="shortcut icon" href="" />
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- START: Template CSS-->
    <link rel="stylesheet" href="<?= base_url('dist/vendors/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('dist/vendors/simple-line-icons/css/simple-line-icons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('dist/vendors/toastr/toastr.min.css') ?>">

    <!-- START: Custom CSS-->
    <link rel="stylesheet" href="<?= base_url('dist/css/main.css') ?>">
    <!-- END: Custom CSS-->
</head>
<!-- END Head-->

<!-- START: Body-->

<body id="main-container" class="default">
    <!-- START: Main Content-->
    <div class="container">
        <div class="row vh-100 justify-content-between align-items-center">
            <div class="col-12">
                <form action="<?php echo base_url(); ?>Login/Auth_Login" method="POST" class="row row-eq-height lockscreen  mt-5 mb-5">
                    <div class="lock-image col-12 col-sm-5" style="background-image: <?php echo base_url() ?> url('dist/images/portfolio13.jpg');"></div>
                    <div class="login-form col-12 col-sm-7">
                        <h4>SSO Login</h4>
                        <div class="form-group mb-3">
                            <label for="usermail">Username SSO</label>
                            <input class="form-control" type="text" name="username" required="" placeholder="Masukkan username">
                        </div>

                        <div class="form-group mb-3">
                            <label for="password">Password</label>
                            <input class="form-control" type="password" required="" name="password" placeholder="Masukkan Password">
                        </div>

                        <div class="form-group mb-3">
                            <?php if (isset($error)) {
                                echo "<div class='error label text-danger'>$error</div>";
                            } ?>
                        </div>


                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary btn-block mb-2" id="tombol_login">LOGIN</button>
                        </div>


                    </div>
                </form>
            </div>

        </div>
    </div>
    <!-- END: Content-->

    <!-- START: Template JS-->
    <script src="<?php echo base_url('dist/vendors/jquery/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?php echo base_url('dist/vendors/jquery-ui/jquery-ui.min.js') ?>"></script>
    <script src="<?php echo base_url('dist/vendors/moment/moment.js') ?>"></script>
    <script src="<?php echo base_url('dist/vendors/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?php echo base_url('dist/vendors/slimscroll/jquery.slimscroll.min.js') ?>"></script>

    <!-- END: Template JS-->


</body>
<!-- END: Body-->

<!-- Mirrored from html.designstream.co.in/pick/html/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Jul 2020 02:12:38 GMT -->

</html>