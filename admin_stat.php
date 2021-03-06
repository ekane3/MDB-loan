<?php
    // Commencer la session
    session_start();

    // Se connecter a la base de données
    include("connexion.php");

    // Compte nbre total prêt
    $reqtotal = $bdd->query('SELECT COUNT(*) FROM borrow
                            INNER JOIN users ON users.id = user_id
                            INNER JOIN material ON material.id = id_material ;');
    $nbretotal = $reqtotal->fetchColumn();

    // Compte de pieces non rendues
    $reqnonrendu = $bdd->query('SELECT COUNT(*) FROM borrow
                            INNER JOIN users ON users.id = user_id
                            INNER JOIN material ON material.id = id_material
                            WHERE rendu = 0;');
    $nbrenonrendu = $reqnonrendu->fetchColumn();

    // Compte du nbre etudiant
    $reqnbreteudiant = $bdd->query('SELECT COUNT(*) FROM users WHERE type = "etudiant";');
    $nbretudiant = $reqnbreteudiant->fetchColumn();


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Statistiques etudiant</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <style> </style>
</head>
<body class="homepage-v1 hidden-sn white-skin animated">
    <?php
        include('header.php');
    ?>
    
    <br><br><br>
    
    <!-- Main Container -->
    <div class="container">
         <!-- Section: Analytical panel -->
      <section class="mt-md-4 pt-md-2 mb-5">
        <h1 class="mb-3">Tableau de bord</h1>
        <br><br><br>
        <!-- First row -->
        <div class="row">

            <!-- First column -->
            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">

                <!-- Card -->
                <div class="card card-cascade cascading-admin-card">

                    <!-- Card Data -->
                    <div class="admin-up text-center my-4">
                        <i class="far fa-chart-bar primary-color mr-3 z-depth-2 mt-2"></i>
                        <div class="data">
                        <p class="text-uppercase">Nbre total prêt</p>
                        <h4 class="font-weight-bold "> 
                           <?=$nbretotal?>
                        </h4>
                        </div>
                    </div>

                </div>
                <!-- Card -->

            </div>
            <!-- First column -->

            <!-- Second column -->
            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">

                <!-- Card -->
                <div class="card card-cascade cascading-admin-card">

                    <!-- Card Data -->
                    <div class="admin-up text-center  my-4">
                        <i class="fas fa-chart-line warning-color mr-3 z-depth-2 MT62"></i>
                        <div class="data">
                        <p class="text-uppercase">Non rendus</p>
                        <h4 class="font-weight-bold ">
                            <?=$nbrenonrendu?>
                        </h4>
                        </div>
                    </div>

                </div>
                <!-- Card -->

            </div>
            <!-- Second column -->

            <!-- Third column -->
            <div class="col-xl-3 col-md-6 mb-md-0 mb-4"> 
                <!-- Card -->
                <div class="card card-cascade cascading-admin-card">

                    <!-- Card Data -->
                    <div class="admin-up text-center  my-4">
                        <i class="fas fa-chart-line warning-color mr-3 z-depth-2 MT62"></i>
                        <div class="data">
                        <p class="text-uppercase">Nbre étudiants</p>
                        <h4 class="font-weight-bold ">
                            <?=$nbretudiant?>
                        </h4>
                        </div>
                    </div>

                </div>
                <!-- Card -->
            </div>
            <!-- Third column -->

            <!-- Fourth column -->
            <div class="col-xl-3 col-md-6 mb-0"> </div>
            <!-- Fourth column -->

        </div>
        <!-- First row -->

        </section>
        <!-- Section: Analytical panel -->

        <div class="row mt-4">
            <div class="col-lg-12">
                 <!-- Panel -->
                <div class="card mb-lg-0 mb-4">

                    <div class="card-header white-text primary-color">
                    <h5 class="font-weight-500 my-1">Matériel pas rendu</h5>
                    </div>

                    <div class="card-body">

                    <div class="table-responsive">
                        <table class="table">
                        <thead>
                            <tr>
                            <th class="font-weight-bold ">Status</th>
                            <th class="font-weight-bold ">Nom matériel</th>
                            <th class="font-weight-bold ">Date pretée</th>
                            <th class="font-weight-bold ">Date rendue</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $requete = $bdd->query('SELECT id_material,borrowed_date,return_date,name FROM borrow
                                                    INNER JOIN users ON users.id = user_id
                                                    INNER JOIN material ON material.id = id_material
                                                    WHERE rendu = 0;');
                            
                            while($data = $requete->fetch()){
                                echo'<tr>'
                                .'<td><span class="badge red">Pas rendu</span></td>'
                                .'<td>'.$data['name'].'</td>'
                                .'<td>'.$data['borrowed_date'].'</td>'
                                .'<td>'.$data['return_date'].'</td>'
                                .'</tr>';
                            }    
                        ?>
                        </tbody>
                        </table>
                    </div>

                    </div>

                    </div>
                    <!-- Panel -->
                </div>
            </div>


            <div class="row my-4">
            <div class="col-lg-12">
                 <!-- Panel -->
                <div class="card mb-lg-0 mb-4">

                    <div class="card-header white-text primary-color">
                    <h5 class="font-weight-500 my-1">Historique de prêt</h5>
                    </div>

                    <div class="card-body">

                    <div class="table-responsive">
                        <table class="table">
                        <thead>
                            <tr>
                            <th class="font-weight-bold ">Status</th>
                            <th class="font-weight-bold ">Nom matériel</th>
                            <th class="font-weight-bold ">Nom étudiant</th>
                            <th class="font-weight-bold ">Date pretée</th>
                            <th class="font-weight-bold ">Date rendue</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $requete = $bdd->query('SELECT id_material,borrowed_date,return_date,name,rendu, users.firstname as firstname, users.lastname as lastname FROM borrow
                                                    INNER JOIN users ON users.id = user_id
                                                    INNER JOIN material ON material.id = id_material;');
                            
                            while($data = $requete->fetch()){
                                echo'<tr>';

                                if( $data['rendu'] == 0){
                                    echo '<td><span class="badge red">Pas rendu</span></td>';
                                }else{
                                    echo '<td><span class="badge green">Rendu</span></td>';
                                }

                                echo '<td>'.$data['name'].'</td>'
                                .'<td>'.$data['firstname'].' '.$data['lastname'].'</td>'
                                .'<td>'.$data['borrowed_date'].'</td>'
                                .'<td>'.$data['return_date'].'</td>'
                                .'</tr>';
                            }    
                        ?>
                        </tbody>
                        </table>
                    </div>

                    </div>

                    </div>
                    <!-- Panel -->
                </div>
            </div>
        </div>

        </div>

     
        <!-- Main Container -->



<!-- SCRIPTS -->
  <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js">
    </script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript">
        /* WOW.js init */
        new WOW().init();
        // Tooltips Initialization
        $(function () {
        $('[data-toggle="tooltip"]').tooltip()
        })

        // Material Select Initialization
        $(document).ready(function () {
        $('.mdb-select').material_select();
        });

        // SideNav Initialization
        $(".button-collapse").sideNav();

    </script>

</body>
</html>