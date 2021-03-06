<!DOCTYPE html>
<html lang="en">
<head>

	<title>Landing Page</title>

	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<!-- Main Font -->
	<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/webfontloader.min.js"></script>

	<script>
		WebFont.load({
			google: {
				families: ['Roboto:300,400,500,700:latin']
			}
		});
	</script>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/Bootstrap/dist/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/Bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/Bootstrap/dist/css/bootstrap-grid.css">

	<!-- Main Styles CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/css/main.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/css/fonts.min.css">



</head>

<body class="landing-page">

<div class="content-bg-wrap"></div>


<!-- Header Standard Landing  -->

<div class="header--standard header--standard-landing" id="header--standard">
	<div class="container">
		<div class="header--standard-wrap">

			<a href="#" class="logo">
				<div class="img-wrap">
					<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/logo.png" alt="Olympus">
					<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/logo-colored-small.png" alt="Olympus" class="logo-colored">
				</div>
				<div class="title-block">
					<h6 class="logo-title">olympus</h6>
					<div class="sub-title">SOCIAL NETWORK</div>
				</div>
			</a>

			<a href="#" class="open-responsive-menu js-open-responsive-menu">
				<svg class="olymp-menu-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-menu-icon"></use></svg>
			</a>

			<div class="nav nav-pills nav1 header-menu">
				<div class="mCustomScrollbar">
					<ul>
						<li class="nav-item">
							<a href="#" class="nav-link">Home</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false" tabindex='1'>Profile</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Profile Page</a>
								<a class="dropdown-item" href="#">Newsfeed</a>
								<a class="dropdown-item" href="#">Post Versions</a>
							</div>
						</li>
						<li class="nav-item dropdown dropdown-has-megamenu">
							<a href="#" class="nav-link dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="false" tabindex='1'>Forums</a>
							<div class="dropdown-menu megamenu">
								<div class="row">
									<div class="col col-sm-3">
										<h6 class="column-tittle">Main Links</h6>
										<a class="dropdown-item" href="#">Profile Page<span class="tag-label bg-blue-light">new</span></a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
									</div>
									<div class="col col-sm-3">
										<h6 class="column-tittle">BuddyPress</h6>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page<span class="tag-label bg-primary">HOT!</span></a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
									</div>
									<div class="col col-sm-3">
										<h6 class="column-tittle">Corporate</h6>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
									</div>
									<div class="col col-sm-3">
										<h6 class="column-tittle">Forums</h6>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
										<a class="dropdown-item" href="#">Profile Page</a>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Terms & Conditions</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Events</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Privacy Policy</a>
						</li>
						<li class="close-responsive-menu js-close-responsive-menu">
							<svg class="olymp-close-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
						</li>
						<li class="nav-item js-expanded-menu">
							<a href="#" class="nav-link">
								<svg class="olymp-menu-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-menu-icon"></use></svg>
								<svg class="olymp-close-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
							</a>
						</li>
						<li class="shoping-cart more">
							<a href="#" class="nav-link">
								<svg class="olymp-shopping-bag-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-shopping-bag-icon"></use></svg>
								<span class="count-product">2</span>
							</a>
							<div class="more-dropdown shop-popup-cart">
								<ul>
									<li class="cart-product-item">
										<div class="product-thumb">
											<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/product1.png" alt="product">
										</div>
										<div class="product-content">
											<h6 class="title">White Enamel Mug</h6>
											<ul class="rait-stars">
												<li>
													<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
												</li>
												<li>
													<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
												</li>

												<li>
													<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
												</li>
												<li>
													<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
												</li>
												<li>
													<i class="far fa-star star-icon" aria-hidden="true"></i>
												</li>
											</ul>
											<div class="counter">x2</div>
										</div>
										<div class="product-price">$20</div>
										<div class="more">
											<svg class="olymp-little-delete"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
										</div>
									</li>
									<li class="cart-product-item">
										<div class="product-thumb">
											<img src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/img/product2.png" alt="product">
										</div>
										<div class="product-content">
											<h6 class="title">Olympus Orange Shirt</h6>
											<ul class="rait-stars">
												<li>
													<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
												</li>
												<li>
													<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
												</li>

												<li>
													<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
												</li>
												<li>
													<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
												</li>
												<li>
													<i class="far fa-star star-icon" aria-hidden="true"></i>
												</li>
											</ul>
											<div class="counter">x1</div>
										</div>
										<div class="product-price">$40</div>
										<div class="more">
											<svg class="olymp-little-delete"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
										</div>
									</li>
								</ul>

								<div class="cart-subtotal">Cart Subtotal:<span>$80</span></div>

								<div class="cart-btn-wrap">
									<a href="#" class="btn btn-primary btn-sm">Go to Your Cart</a>
									<a href="#" class="btn btn-purple btn-sm">Go to Checkout</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ... end Header Standard Landing  -->
<div class="header-spacer--standard"></div>

<div class="container">
	<div class="row display-flex">
		<div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
			<div class="landing-content">
				<h1>Jodohin</h1>
				<p>Temukan Jodohmu disini </p>
				<a href="#" class="btn btn-md btn-border c-white">Register Now!</a>
			</div>
		</div>

		<div class="col col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12">

			<!-- Login-Registration Form  -->

			<div class="registration-login-form">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#home" role="tab">
							<svg class="olymp-login-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-login-icon"></use></svg>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#profile" role="tab">
							<svg class="olymp-register-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-register-icon"></use></svg>
						</a>
					</li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="home" role="tabpanel" data-mh="log-tab">
						<div class="title h6">Register to Olympus</div>
						<form class="content" method="post" action="<?php echo Yii::$app->request->BaseUrl ?>/pengguna/create">
							<div class="row">
								<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
									<div class="form-group label-floating is-empty">
										<label class="control-label">First Name</label>
										<input class="form-control" placeholder="" type="text" name="first_name">
									</div>
								</div>
								<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
									<div class="form-group label-floating is-empty">
										<label class="control-label">Last Name</label>
										<input class="form-control" placeholder="" type="text" name="last_name">
									</div>
								</div>
								<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group label-floating is-empty">
										<label class="control-label">Your Email</label>
										<input class="form-control" placeholder="" type="email" name="email">
									</div>
									<div class="form-group label-floating is-empty">
										<label class="control-label">Your Password</label>
										<input class="form-control" placeholder="" type="password" name="password">
									</div>

									<div class="form-group form_datetime label-floating">
										<label class="control-label">Your Birthday</label>

										<input name="datetimepicker" value="10/24/1984" >
										<span class="input-group-addon">
											<svg class="olymp-calendar-icon"><use xlink:href="<?php echo Yii::$app->request->BaseUrl ?>/olympus/svg-icons/sprites/icons.svg#olymp-calendar-icon"></use></svg>
										</span>
									</div>

									<div class="form-group label-floating is-select">
										<label class="control-label">Your Gender</label>
										<select class="selectpicker form-control" name="gender">
											<option value="Laki-laki">Male</option>
											<option value="Perempuan">Female</option>
										</select>
									</div>

									<div class="remember">
										<div class="checkbox">
											<label>
												<input name="optionsCheckboxes" type="checkbox">
												I accept the <a href="#">Terms and Conditions</a> of the website
											</label>
										</div>
									</div>

									<input type="submit" value="Complete Registration !" class="btn btn-purple btn-lg full-width">

									<!-- <a href="../web/pengguna/create" class="btn btn-purple btn-lg full-width">Complete Registration!</a> -->
								</div>
							</div>
						</form>
					</div>

					<div class="tab-pane" id="profile" role="tabpanel" data-mh="log-tab">
						<div class="title h6">Login to your Account</div>
						<form class="content" action="../pengguna/login" method="post" >
							<div class="row">
								<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group label-floating is-empty">
										<label class="control-label">Your Email</label>
										<input class="form-control" placeholder="" type="email" name="email">
									</div>
									<div class="form-group label-floating is-empty">
										<label class="control-label">Your Password</label>
										<input class="form-control" placeholder="" type="password" name="password">
									</div>

									<div class="remember">

										<div class="checkbox">
											<label>
												<input name="optionsCheckboxes" type="checkbox">
												Remember Me
											</label>
										</div>
										<a href="#" class="forgot">Forgot my Password</a>
									</div>

									<input type="submit" value="Login" class="btn btn-lg btn-primary full-width">


									<!-- <input type="submit" value="Login" class="btn btn-lg btn-primary full-width"> -->

									<!-- <a href="" class="btn btn-lg btn-primary full-width">Login</a> -->

									<div class="or"></div>

									<a href="#" class="btn btn-lg bg-facebook full-width btn-icon-left"><i class="fab fa-facebook-f" aria-hidden="true"></i>Login with Facebook</a>

									<a href="#" class="btn btn-lg bg-twitter full-width btn-icon-left"><i class="fab fa-twitter" aria-hidden="true"></i>Login with Twitter</a>


									<p>Don’t you have an account? <a href="#">Register Now!</a> it’s really simple and you can start enjoing all the benefits!</p>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>

			<!-- ... end Login-Registration Form  -->		</div>
	</div>
</div>


<!-- JS Scripts -->
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/jquery-3.2.1.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/jquery.appear.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/jquery.mousewheel.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/perfect-scrollbar.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/jquery.matchHeight.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/svgxuse.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/imagesloaded.pkgd.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/Headroom.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/velocity.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/ScrollMagic.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/jquery.waypoints.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/jquery.countTo.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/popper.min.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/material.min.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/bootstrap-select.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/smooth-scroll.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/selectize.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/swiper.jquery.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/moment.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/daterangepicker.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/simplecalendar.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/fullcalendar.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/isotope.pkgd.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/ajax-pagination.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/Chart.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/chartjs-plugin-deferred.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/circle-progress.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/loader.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/run-chart.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/jquery.magnific-popup.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/jquery.gifplayer.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/mediaelement-and-player.js"></script>
<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/mediaelement-playlist-plugin.min.js"></script>

<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/js/base-init.js"></script>
<script defer src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/fonts/fontawesome-all.js"></script>

<script src="<?php echo Yii::$app->request->BaseUrl ?>/olympus/Bootstrap/dist/js/bootstrap.bundle.js"></script>

</body>
</html>
