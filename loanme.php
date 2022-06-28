<?php
    // Commencer la session
    session_start();

    // Se connecter a la base de données
    include("connexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Faire réservation des équipements</title>
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
							<input type="text" name="search" class="form-control" placeholder="Rechercher 🔎">
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
					<?php
                            $requete = $bdd->query('SELECT * FROM material 
													WHERE id NOT IN (SELECT id_material from borrow );');
                            
                            while($data = $requete->fetch()){
                                echo '<div class="col-lg-3 col-md-6 mb-4">
								<!-- Card -->
								<div class="card h-100">
									<!-- Card image -->
									<img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(97).jpg"
									alt="Card image cap">

									<!-- Card content -->
									<div class="card-body">
										<!-- Title -->
										<h4 class="card-title"><strong>'.$data['name'].'</strong></h4>
										<!-- Text -->
										<p class="card-text">'.$data['description'].'</p>
										<input type="hidden" class="id_mat" name="codebarre" value="'.$data["id"].'">
										<p class="card-text font-weight-bold">'.$data['codebarre'].'</p>
										<button  class="btn btn-purple btn-rounded reservEq" data-toggle="modal" data-target="#reservEquip" >Reserver</button>
									</div>
								</div>
								<!-- Card -->
							</div>';
                            }    
                    ?>
					<!--Supprimer modal-->
					<div class="modal fade" id="reservEquip" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
                            <div class="modal-dialog modal-notify modal-primary" role="document">
                                <!-- Content -->
                                <div class="modal-content">
                                    <!-- Header -->
                                    <div class="modal-header">
                                        <p class="heading lead">Modal Success</p>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true" class="white-text">&times;</span>
                                        </button>
                                    </div>

                                    <!-- Body -->
                                    <form action="reserveMaterialPost.php" method="post">
                                    <div class="modal-body">
                                        <div class="text-center">
                                        <input type="hidden" id="id_materialpost" class="form-control form-control-sm" name="id_material">
                                        <i class="fas fa-angle-double-right fa-4x mb-3 animated rotateIn"></i>
                                        <p>
                                            Voulez vous vraiment réserver cet équipement ?
                                        </p>
                                        </div>
                                    </div>
                                   
                                    <!-- Footer -->
                                    <div class="modal-footer justify-content-center">
                                        <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">Non merci<i class="far fa-gem ml-1"></i></a>
                                        <button type="submit" class="btn btn-primary" name="reservEqui">Reserver </button>
                                    </div>
                                    </form>
                                </div>
                                <!-- Content -->
                            </div>
                        </div>

                        <!--/ Supprimer modal-->
					
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
<script type="text/javascript">
	// reserver button
	$(document).ready(function(){
            
            // delete button
            $(document).on("click",".reservEq", function() {
           // $('#delete').click( function(){
				var data = $('.id_mat').val();
                console.log(data);
                $('#id_materialpost').val(data);
            });
        });
</script>

</body>
</html>
