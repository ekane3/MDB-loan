<?php 
    // Le lien du dashboard utilisateur ou admin
    $href_var = ( $_SESSION['type'] == "etudiant") ? "stat.php" : "admin_stat.php";

	include('connexion.php');
    // Faire le calcul du nombre de prêt effectué
	    // Compte de pieces non rendues
	$reqnonrendu = $bdd->query('SELECT COUNT(*) FROM borrow
								INNER JOIN users ON users.id = '.$_SESSION['id'].'
								INNER JOIN material ON material.id = id_material
								WHERE rendu = 0;');
	$nbrenonrendu = $reqnonrendu->fetchColumn();
?>

<!-- Navigation -->
<header>
	<!-- Sidebar navigation -->
	<ul id="slide-out" class="side-nav custom-scrollbar sn-bg-4">
		<!-- Logo -->
		<li>
			<div class="logo-wrapper waves-light">
				<a href="#"><img src="https://mdbootstrap.com/img/logo/mdb-transparent.png" class="img-fluid flex-center"></a>
			</div>
		</li>
		<!-- Logo -->
		<!-- Search Form -->
		<li>
			<form class="search-form" role="search">
				<div class="form-group md-form mt-0 pt-1 waves-light">
					<input type="text" class="form-control" placeholder="Search">
				</div>
			</form>
		</li>
		<!-- Search Form -->
		<!-- Side navigation links -->
		<li>
			<ul class="collapsible collapsible-accordion">
				<li>
					<a href="<?php echo $href_var;?>" class="collapsible-header waves-effect"><i class="fas fa-barcode"></i> Dashboard </a>
				</li>
				<?php
					if($_SESSION['type'] == "admin"){
				?>
				<li>
					<a href="materiels.php" class="collapsible-header waves-effect"><i class="fas fa-tools"></i> Matériel </a>
				</li>
				<li>
					<a href="users.php" class="collapsible-header waves-effect"><i class="fas fa-users"></i> Utilisateurs </a>
				</li>
				<?php
					}
				?> 
				<?php
					if($_SESSION['type'] == "etudiant"){
				?>
					<li>
						<a href="loanme.php" class="collapsible-header waves-effect"><i class="fas fa-keyboard"></i>Faire un prêt</a>
					</li>
				<?php
					}
				?>                
				<li>
					<a href="account.php" class="collapsible-header waves-effect"><i class="fas fa-user"></i>Account</a>
				</li>
				<li>
					<a href="contact.php" class="collapsible-header waves-effect"><i class="fas fa-envelope"></i> Contact</a>
				</li>
			</ul>
		</li>
		<!-- Side navigation links -->
		<div class="sidenav-bg mask-strong"></div>
	</ul>
	<!-- Sidebar navigation -->
	<!-- Navbar -->
	<nav class="navbar fixed-top navbar-expand-lg navbar-light scrolling-navbar white">
		<div class="container">
			<!-- SideNav slide-out button -->
			<div class="float-left mr-2">
				<a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
			</div>
			<a class="navbar-brand font-weight-bold" href="#"><strong>LOAN ME</strong></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
				<ul class="navbar-nav ml-auto">
                    <?php
                        if($_SESSION["type"]=="etudiant"){
                    ?>
                            <li class="nav-item ">
                                <a class="nav-link dark-grey-text font-weight-bold" href="#" data-toggle="modal" data-target="#cart-modal-ex">
                                    <span class="badge danger-color">
										<?=$nbrenonrendu?>
									</span>
                                    <span class="clearfix d-none d-sm-inline-block">loans</span>
                                </a>
                            </li>
                    <?php
                        }
					?>
					<li class="nav-item ml-3">
                        
						<a class="nav-link waves-effect waves-light dark-grey-text font-weight-bold" href="<?php echo $href_var;?>">
                            <i class="fas fa-barcode blue-text"></i> Dashboard
                        </a>
					</li>
					<li class="nav-item dropdown ml-3">
						<a class="nav-link dropdown-toggle waves-effect waves-light dark-grey-text font-weight-bold" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user blue-text"></i> Profile </a>
						<div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
							<a class="dropdown-item waves-effect waves-light" href="account.php">My account</a>
							<a class="dropdown-item waves-effect waves-light" href="deconnexion.php">Log out</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Navbar -->
</header>
<!-- Navigation -->
