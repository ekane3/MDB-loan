<?php
  session_start();
  if ( isset($_SESSION['password'])&& isset($_SESSION['firstname']) ) {
  include('connexion.php');
  $st = $bdd->query("SELECT * FROM users WHERE firstname='".$_SESSION['firstname']."' AND password='".$_SESSION['password']."' ");
  $st->execute();
  $donnees = $st->fetch();
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
  <style>

  </style>

</head>
<body class="homepage-v1 hidden-sn white-skin animated">
   <!--Main Navigation-->
   <?php
  include "header.php";
  ?>
  <!--Main Navigation-->

  <!-- Main layout -->
  <main>
    <div class="container-fluid">

      <!-- Section: Team v.1 -->
      <section class="section team-section">

        <!-- Grid row -->
        <div class="row text-center">

          <!-- Grid column -->
        <div class="col-md-8 mb-4">

            <!-- Card -->
            <div class="card card-cascade cascading-admin-card user-card">

              <!-- Card Data -->
              <div class="admin-up d-flex justify-content-start">
                <i class="fas fa-users info-color py-4 mr-3 z-depth-2"></i>
                <div class="data">
                  <h5 class="font-weight-bold dark-grey-text mt-2">Modifier votre profil - <span class="text-muted">Completer vos informations</span></h5>
                </div>
              </div>
              <!-- Card Data -->
            <form method="POST" action="#">
              <!-- Card content -->
            <div class="card-body card-body-cascade">

                <!-- Grid row -->
                <div class="row">
                  <!-- Grid column -->
                  <div class="col-lg-4">

                    <div class="md-form form-sm mb-0 mt-3">
                      <input type="text" id="form12" class="form-control form-control-sm" name="lastname" value="<?php echo $donnees['lastname']; ?>">
                      <label for="form12" class="">Votre prénom</label>

                    </div>

                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-lg-4">

                    <div class="md-form form-sm mb-0">
                      <input type="text" id="form3" class="form-control form-control-sm" name="firstname" value="<?php echo $donnees['firstname']; ?>">
                      <label for="form3" class="">Votre nom</label>

                    </div>

                  </div>
                  <!-- Grid column -->
                   <!-- Grid column -->
                  <div class="col-lg-4">
                    <div class="md-form form-sm mb-0">
                      <input type="text" id="form122" class="form-control form-control-sm" name="birthday" value="<?php echo $donnees['birthday']; ?>">
                      <label for="form122" class="">Date de naissance</label>
                    </div>
                  </div>
                  <!-- Grid column -->

                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row">

                  <!-- Grid column -->
                  <div class="col-md-4">

                    <div class="md-form form-sm mb-0">
                      <input type="password" id="form5" class="form-control form-control-sm" name="pass" value="<?php echo $donnees['password']; ?>">
                      <label for="form5" class="">Mot de passe</label>
                    </div>

                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-md-4">

                    <div class="md-form form-sm mb-0">
                      <input type="text" id="form5" class="form-control form-control-sm" readonly value="<?php echo $donnees['type']; ?>">
                      <label for="form5" class="">Votre statut</label>
                    </div>

                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-md-4">

                    <div class="md-form form-sm mb-0">
                      <input type="email" id="form5" class="form-control form-control-sm" name="email" value="<?php echo $donnees['email']; ?>">
                      <label for="form5" class="">Votre email</label>
                    </div>

                  </div>
                  <!-- Grid column -->

                </div>
                <!-- Grid row -->

                 <!-- Grid row -->
              <div class="row">
                <!-- Grid column -->
                <div class="col-md-4 ">
                  <div class="md-form">
                    <button class="btn btn-primary">Update</button>
                  </div>
                </div>
                <!-- Grid column -->
              </div>
              <!-- Grid row -->

            </div>
              <!-- Card content -->
            </form>
            </div>
            <!-- Card -->
        </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 mb-4">

            <!-- Card -->
            <div class="card profile-card">

              <div class="card-body pt-0 mt-2">

                <!-- Name -->
                <h3 class="mb-3 font-weight-bold text-UpperCase"><strong><?php echo $donnees['firstname']; ?></strong></h3>
                <h6 class="font-weight-bold cyan-text mb-4"><?php echo $donnees['type']; ?></h6>

                <p class="mt-4 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt
                  ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                  ullamco laboris nisi ut aliquip consequat.</p>

                <a class="btn btn-info btn-rounded"> Modifier la photo</a>

              </div>

            </div>
            <!-- Card -->

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </section>
      <!-- Section: Team v.1 -->

    </div>
  </main>
  <!-- Main layout -->

<br><br> <br><br><br><br><br> <br><br><br><br><br> <br><br><br><br><br> <br><br><br>
  <!-- Footer -->
  <?php
  include "footer.php";
  ?>
  <!-- Footer -->
  <?php
}
else{
   header("Location: index.php");
}
?>
</html>