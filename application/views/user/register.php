<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Register</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url(''); ?>/assetlogin/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(''); ?>/assetlogin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(''); ?>/assetlogin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(''); ?>/assetlogin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url(''); ?>/assetlogin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url(''); ?>/assetlogin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(''); ?>/assetlogin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(''); ?>/assetlogin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(''); ?>/assetlogin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(''); ?>/assetlogin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(''); ?>/assetlogin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(''); ?>/assetlogin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url(''); ?>/assetlogin/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5" style="background-image: url('<?php echo base_url("");?>/asset/images/backgroundfix.png'); background-size: 100%; background-attachment: fixed; background-position: center;">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="<?php echo base_url('olahraga') ?>">
                                <img src="<?php echo base_url(''); ?>/asset/images/logologo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <button class="au-btn au-btn--block au-btn--blue m-b-20" type="submit">Register</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Already have account?
                                    <a href="<?php echo base_url('user/login/') ?>">Sign In</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url(''); ?>/assetlogin/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url(''); ?>/assetlogin/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?php echo base_url(''); ?>/assetlogin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url(''); ?>/assetlogin/vendor/slick/slick.min.js">
    </script>
    <script src="<?php echo base_url(''); ?>/assetlogin/vendor/wow/wow.min.js"></script>
    <script src="<?php echo base_url(''); ?>/assetlogin/vendor/animsition/animsition.min.js"></script>
    <script src="<?php echo base_url(''); ?>/assetlogin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?php echo base_url(''); ?>/assetlogin/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url(''); ?>/assetlogin/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?php echo base_url(''); ?>/assetlogin/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo base_url(''); ?>/assetlogin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo base_url(''); ?>/assetlogin/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url(''); ?>/assetlogin/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?php echo base_url(''); ?>/assetlogin/js/main.js"></script>

</body>

</html>
<!-- end document-->