<!DOCTYPE html>
<html lang="en">
<head>
<title>Malang Sports Information System</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="DirectoryPlus template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>asset/styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="<?php echo base_url(''); ?>asset/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>asset/plugins/OwlCarousel2-2.3.4/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>asset/plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>asset/plugins/OwlCarousel2-2.3.4/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>asset/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>asset/styles/responsive.css">

<!-- Olahraga Page -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>asset/styles/listings.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>asset/styles/listings_responsive.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>asset/styles/blog.css">

<!-- Detail Page -->
<link href="<?php echo base_url(''); ?>asset/plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>asset/styles/listing.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>asset/styles/listing_responsive.css">


<!-- Datatable -->
<link rel="stylesheet" href="<?php echo base_url(''); ?>assetdt/assets/css/cs-skin-elastic.css">
<link rel="stylesheet" href="<?php echo base_url(''); ?>assetdt/assets/css/lib/datatable/dataTables.bootstrap.min.css">

<!-- Search -->
<link rel="stylesheet" href="<?php echo base_url(''); ?>aset/css/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet"></link>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>

</head>

<body>
<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_overlay"></div>
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			
			<!-- Logo -->
			<div style="height:80px;width:300px"><a href="<?php echo base_url('home')?>"><img src="<?php echo base_url(''); ?>asset/images/logologo.png"></a></div>

			<!-- Header Nav -->
			<div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
				<nav class="main_nav">
					<ul class="d-flex flex-row align-items-center justify-content-start">
							<li><a href="<?php echo base_url('home')?>">Beranda</a></li>
							<li class="active"><a href="<?php echo base_url('olahraga')?>">Tempat Olahraga</a></li>
							<li><a href="<?php echo base_url('user/login')?>">Login</a></li>
							<li><a href="<?php echo base_url('user/register')?>">Register</a></li>
					</ul>
				</nav>
				<div class="hamburger">
					<i class="fa fa-bars trans_200"></i>
				</div>
			</div>
		</div>
	</header>
        <!-- END HEADER MOBILE -->
</html>