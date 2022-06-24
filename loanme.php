<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>E-Commerce - MDBootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <style> </style>
</head>
<body class="homepage-v1 hidden-sn white-skin animated">
  <!-- Navigation -->
  <?php
    include('header.php');
  ?>
  <!-- Navigation -->

  <!-- Intro -->
  <section>
	<!-- Carousel Wrapper -->
	<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-1z" data-slide-to="1"></li>
			<li data-target="#carousel-example-1z" data-slide-to="2"></li>
		</ol>
		<!-- Indicators -->
		<!-- Slides -->
		<div class="carousel-inner" role="listbox">
			<!-- First slide -->
			<div class="carousel-item active">
				<div class="view h-100">
					<img class="d-block h-100 w-lg-100" src="https://mdbootstrap.com/img/Photos/Others/ecommerce4.jpg"alt="First slide">
					<div class="mask">
						<!-- Caption -->
						<div class="full-bg-img flex-center white-text">
							<ul class="animated fadeIn col-10 list-unstyled">
								<li>
									<p class="h1 red-text mb-4 mt-5">
										<strong>Réserver un ordinateur de votre choix !</strong>
									</p>
								</li>
								<li><h5 class="h5-responsive dark-grey-text font-weight-bold mb-5"></h5></li>
								<li><a target="_blank" href="https://mdbootstrap.com/docs/jquery/getting-started/download/"class="btn btn-danger btn-rounded" rel="nofollow">See more!</a></li>
							</ul>
						</div>
						<!-- Caption -->
					</div>
				</div>
			</div>
			<!-- First slide -->
			<!-- Second slide -->
			<div class="carousel-item h-100">
				<div class="view h-100">
					<img class="d-block h-100 w-lg-100" src="https://mdbootstrap.com/img/Photos/Others/ecommerce2.jpg"alt="Second slide">
					<div class="mask">
						<!-- Caption -->
						<div class="full-bg-img flex-center white-text">
							<ul class="animated fadeIn col-10 list-unstyled">
								<li>
									<p class="h1 dark-grey-text mb-4">
									</p>
								</li>
								<li><h5 class="h5-responsive dark-grey-text font-weight-bold mb-5"></h5></li>
								<li><a target="_blank" href="https://mdbootstrap.com/education/bootstrap/"class="btn btn-primary btn-rounded" rel="nofollow">Read more</a></li>
							</ul>
						</div>
						<!-- Caption -->
					</div>
				</div>
			</div>
			<!-- Second slide -->
			<!-- Third slide -->
			<div class="carousel-item">
				<div class="view h-100">
					<img class="d-block h-100 w-lg-100" src="https://mdbootstrap.com/img/Photos/Others/ecommerce3.jpg"alt="Third slide">
					<div class="mask">
						<!-- Caption -->
						<div class="full-bg-img flex-center white-text">
							<ul class="animated fadeIn col-md-10 text-center text-md-right list-unstyled">
								<li>
									<p class="h1 blue-text mb-4 mt-5 pr-lg-5">
									</p>
								</li>
								<li><h5 class="h5-responsive dark-grey-text font-weight-bold mb-5 pr-lg-5"></h5></li>
							</ul>
						</div>
						<!-- Caption -->
					</div>
				</div>
			</div>
			<!-- Third slide -->
		</div>
		<!-- Slides -->
		<!-- Controls -->
		<a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- Controls -->
	</div>
	<!-- Carousel Wrapper -->
	<div class="container-fluid mx-0 px-0">
		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg navbar-dark primary-color mb-5">
			<div class="container">
				<!-- Navbar brand -->
				<a class="font-weight-bold white-text mr-4" href="#">Equipements</a>
        
				<div class="collapse navbar-collapse" id="navbarSupportedContent1">
					<form class="search-form" role="search">
						<div class="form-group md-form my-0 waves-light">
							<input type="text" class="form-control" placeholder="Rechercher 🔎">
						</div>
					</form>
				</div>
				<!-- Collapsible content -->
			</div>
		</nav>
		<!-- Navbar -->
	</div>
</section>

  <!-- Intro -->

  <!-- Main Container -->
  <div class="container">
	<!-- Grid row -->
	<div class="row pt-4">
		<!-- Content -->
		<div class="col-lg-12">
			<!-- Section: Last items -->
			<section>
				<h4 class="font-weight-bold mt-4 dark-grey-text"><strong>LIST ITEMS</strong></h4>
				<hr class="mb-5">
				<!-- Grid row -->
				<div class="row">
					<!-- Grid column -->
					<div class="col-lg-3 col-md-6 mb-4">
						<!-- Card -->
						<div class="card card-ecommerce">
							<!-- Card image -->
							<div class="view overlay">
								<img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg" class="img-fluid"alt="sample image">
								<a><div class="mask rgba-white-slight"></div></a>
							</div>
							<!-- Card image -->
							<!-- Card content -->
							<div class="card-body">
								<!-- Category & Title -->
								<h5 class="card-title mb-1">
									<strong><a href="" class="dark-grey-text">Headphones</a></strong>
								</h5>
								<span class="badge badge-danger mb-2">bestseller</span>
								<!-- Rating -->
								<ul class="rating">
									<li><i class="fas fa-star blue-text"></i></li>
									<li><i class="fas fa-star blue-text"></i></li>
									<li><i class="fas fa-star blue-text"></i></li>
									<li><i class="fas fa-star blue-text"></i></li>
									<li><i class="fas fa-star blue-text"></i></li>
								</ul>
								<!-- Card footer -->
								<div class="card-footer pb-0">
									<div class="row mb-0">
										<span class="float-left"><strong>1439$</strong></span>
										<span class="float-right">
											<a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-shopping-cart ml-3"></i></a>
										</span>
									</div>
								</div>
							</div>
							<!-- Card content -->
						</div>
						<!-- Card -->
					</div>
					<!-- Grid column -->
					<!-- Grid column -->
					<div class="col-lg-3 col-md-6 mb-4">
						<!-- Card -->
						<div class="card card-ecommerce">
							<!-- Card image -->
							<div class="view overlay">
								<img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/16.jpg" class="img-fluid"alt="sample image">
								<a><div class="mask rgba-white-slight"></div></a>
							</div>
							<!-- Card image -->
							<!-- Card content -->
							<div class="card-body">
								<!-- Category & Title -->
								<h5 class="card-title mb-1">
									<strong><a href="" class="dark-grey-text">Headphones</a></strong>
								</h5>
								<span class="badge badge-danger mb-2">bestseller</span>
								<!-- Rating -->
								<ul class="rating">
									<li><i class="fas fa-star blue-text"></i></li>
									<li><i class="fas fa-star blue-text"></i></li>
									<li><i class="fas fa-star blue-text"></i></li>
									<li><i class="fas fa-star blue-text"></i></li>
									<li><i class="fas fa-star blue-text"></i></li>
								</ul>
								<!-- Card footer -->
								<div class="card-footer pb-0">
									<div class="row mb-0">
										<span class="float-left"><strong>1439$</strong></span>
										<span class="float-right">
											<a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-shopping-cart ml-3"></i></a>
										</span>
									</div>
								</div>
							</div>
							<!-- Card content -->
						</div>
						<!-- Card -->
					</div>
					<!-- Grid column -->
					<!-- Grid column -->
					<div class="col-lg-3 col-md-6 mb-4">
						<!-- Card -->
						<div class="card card-ecommerce">
							<!-- Card image -->
							<div class="view overlay">
								<img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/11.jpg" class="img-fluid"alt="sample image">
								<a><div class="mask rgba-white-slight"></div></a>
							</div>
							<!-- Card image -->
							<!-- Card content -->
							<div class="card-body">
								<!-- Category & Title -->
								<h5 class="card-title mb-1">
									<strong><a href="" class="dark-grey-text">iPhone</a></strong>
								</h5>
								<span class="badge badge-info mb-2">new</span>
								<!-- Rating -->
								<ul class="rating">
									<li><i class="fas fa-star blue-text"></i></li>
									<li><i class="fas fa-star blue-text"></i></li>
									<li><i class="fas fa-star blue-text"></i></li>
									<li><i class="fas fa-star blue-text"></i></li>
									<li><i class="fas fa-star blue-text"></i></li>
								</ul>
								<!-- Card footer -->
								<div class="card-footer pb-0">
									<div class="row mb-0">
										<span class="float-left"><strong>1439$</strong></span>
										<span class="float-right">
											<a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-shopping-cart ml-3"></i></a>
										</span>
									</div>
								</div>
							</div>
							<!-- Card content -->
						</div>
						<!-- Card -->
					</div>
					<!-- Grid column -->
					<!-- Grid column -->
					<div class="col-lg-3 col-md-6 mb-4">
						<!-- Card -->
						<div class="card card-ecommerce">
							<!-- Card image -->
							<div class="view overlay">
								<img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/3.jpg" class="img-fluid"alt="sample image">
								<a><div class="mask rgba-white-slight"></div></a>
							</div>
							<!-- Card image -->
							<!-- Card content -->
							<div class="card-body">
								<!-- Category & Title -->
								<h5 class="card-title mb-1">
									<strong><a href="" class="dark-grey-text">iMac</a></strong>
								</h5>
								<span class="badge badge-danger mb-2">bestseller</span>
								<!-- Rating -->
								<ul class="rating">
									<li><i class="fas fa-star blue-text"></i></li>
									<li><i class="fas fa-star blue-text"></i></li>
									<li><i class="fas fa-star blue-text"></i></li>
									<li><i class="fas fa-star blue-text"></i></li>
									<li><i class="fas fa-star grey-text"></i></li>
								</ul>
								<!-- Card footer -->
								<div class="card-footer pb-0">
									<div class="row mb-0">
										<span class="float-left"><strong>1439$</strong></span>
										<span class="float-right">
											<a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-shopping-cart ml-3"></i></a>
										</span>
									</div>
								</div>
							</div>
							<!-- Card content -->
						</div>
						<!-- Card -->
					</div>
					<!-- Grid column -->
				</div>
				<!-- Grid row -->
			</section>
			<!-- Section: Last items -->
		</div>
		<!-- Content -->
	</div>
	<!-- Grid row -->
</div>

  <!-- Main Container -->

  <!-- Footer -->
  <?php
    include('footer.php');
  ?>
  <!-- Footer -->

</body>

</html>
