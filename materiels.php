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
  <title>Gestion du matériel</title>
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

    <?php
        include('header.php');
    ?>

    <br><br><br>
    <!-- Main Container -->
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-10">
                        <h1 class="mb-3">Table matériel</h1>
                    </div>
                    <div class="col-2"> 
                        <button class="btn btn-warning btn-sm float-end btn-rounded" type="button" data-toggle="modal" data-target="#addMateriel">
                            <i class="fas fa-plus"></i>    
                            Add New
                        </button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead class="thead-inverse">
                                <tr>
                                    <th></th>
                                    <th>Noms</th>
                                    <th>Code barre</th>
                                    <th>Description</th>
                                    <th>Date achat</th>
                                    <th>Prix achat</th>
                                    <th>Fournisseur</th>
                                    <th></th>
                                    <th>#</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $requete = $bdd->query(' SELECT * FROM material');
                                    $i=1;
                                    
                                    while($data = $requete->fetch()){
                                        echo'<tr>'
                                                .'<td  scope="row">'.$data['id'].'</td>'
                                                .'<td>'.$data['name'].'</td>'
                                                .'<td>'.$data['codebarre'].'</td>'
                                                .'<td>'.$data['description'].'</td>'
                                                .'<td>'.$data['purchased_date'].'</td>'
                                                .'<td>'.$data['purchased_price'].'</td>'
                                                .'<td>'.$data['supplier'].'</td>'
                                                ?>
                                                <td>
                                                    <span id="edit" class="fas fa-edit text-success waves-effect" ></span>
                                                </td>
                                                <?php 
                                                echo '<td>
                                                    <span id="delete" class="fas fa-trash text-danger waves-effect" data-toggle="modal" data-target="#deleteMateriel"></span>
                                                </td>'
                                            .'</tr>';
                                       // $i++;
                                    }    
                                ?>
                                </tbody>
                        </table>

                        <!--Créer modal-->
                        <!-- Modal: Ajouter form -->
                        <div class="modal fade" id="addMateriel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog cascading-modal" role="document">
                                <!-- Content -->
                                <div class="modal-content">

                                <!-- Header -->
                                <div class="modal-header light-blue darken-3 white-text">
                                    <h4 class=""><i class="fas fa-pencil-alt"></i> Ajouter du matériel</h4>
                                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <!-- Body -->
                                    <div class="modal-body mb-0">
                                        <div class="md-form form-sm">
                                            <i class="fas fa-user prefix"></i>
                                            <input type="text" id="form19" class="form-control form-control-sm" name="nom">
                                            <label for="form19">Name</label>
                                        </div>
                                        <div class="md-form form-sm">
                                            <i class="fas fa-pencil-alt prefix"></i>
                                            <textarea type="text" id="form8" class="md-textarea form-control form-control-sm" rows="3" name="description"></textarea>
                                            <label for="form8">Description</label>
                                        </div>
                                        <div class="md-form form-sm">
                                            <i class="fas fa-user prefix"></i>
                                            <input type="date" id="form30" class="form-control form-control-sm" name="date_achat">
                                            <label for="form30">Date achat</label>
                                        </div>

                                        <div class="md-form form-sm">
                                        <i class="fas fa-envelope prefix"></i>
                                        <input type="number" id="form20" class="form-control form-control-sm" name="prix_achat">
                                        <label for="form20">Prix achat</label>
                                        </div>

                                        <div class="md-form form-sm">
                                        <i class="fas fa-envelope prefix"></i>
                                        <input type="text" id="form40" class="form-control form-control-sm" name="fournisseur">
                                        <label for="form40">Fournisseur</label>
                                        </div>

                                        <div class="text-center mt-1-half">
                                        <button class="btn btn-info mb-2">Enregistrer <i class="fas fa-paper-plane ml-1"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Content -->
                            </div>
                        </div>
                        <!-- Modal: Ajouterform -->

                        <!--Edit modal-->
                        <div class="modal fade" id="editMateriel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog cascading-modal" role="document">
                                <!-- Content -->
                                <div class="modal-content">

                                <!-- Header -->
                                <div class="modal-header light-blue darken-3 white-text">
                                    <h4 class=""><i class="fas fa-pencil-alt"></i> Ajouter du matériel</h4>
                                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <!-- Body -->
                                    <div class="modal-body mb-0">
                                        <div class="md-form form-sm">
                                            <i class="fas fa-user prefix"></i>
                                            <input type="text" id="form19" class="form-control form-control-sm" name="nom">
                                            <label for="form19">Name</label>
                                        </div>
                                        <div class="md-form form-sm">
                                            <i class="fas fa-pencil-alt prefix"></i>
                                            <textarea type="text" id="form8" class="md-textarea form-control form-control-sm" rows="3" name="description"></textarea>
                                            <label for="form8">Description</label>
                                        </div>
                                        <div class="md-form form-sm">
                                            <i class="fas fa-user prefix"></i>
                                            <input type="date" id="form30" class="form-control form-control-sm" name="date_achat">
                                            <label for="form30">Date achat</label>
                                        </div>

                                        <div class="md-form form-sm">
                                        <i class="fas fa-envelope prefix"></i>
                                        <input type="number" id="form20" class="form-control form-control-sm" name="prix_achat">
                                        <label for="form20">Prix achat</label>
                                        </div>

                                        <div class="md-form form-sm">
                                        <i class="fas fa-envelope prefix"></i>
                                        <input type="text" id="form40" class="form-control form-control-sm" name="fournisseur">
                                        <label for="form40">Fournisseur</label>
                                        </div>

                                        <div class="text-center mt-1-half">
                                        <button class="btn btn-info mb-2">Enregistrer <i class="fas fa-paper-plane ml-1"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Content -->
                            </div>
                        </div>
                        <!--Edit modal-->

                        <!--Supprimer modal-->
                        <div class="modal fade" id="deleteMateriel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
                            <div class="modal-dialog modal-notify modal-danger" role="document">
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
                                    <div class="modal-body">
                                        <div class="text-center">
                                        <i class="fas fa-angle-double-right fa-4x mb-3 animated rotateIn"></i>
                                        <p>
                                            Vous voulez vous vraiment supprimer ce matériel ? 
                                        </p>
                                        </div>
                                    </div>
                                    <!-- Footer -->
                                    <div class="modal-footer justify-content-center">
                                        <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">Non merci<i class="far fa-gem ml-1"></i></a>
                                        <a type="button" class="btn btn-danger">Supprimer </a>
                                    </div>
                                </div>
                                <!-- Content -->
                            </div>
                        </div>

                        <!--/ Supprimer modal-->
                        
                    </div>
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

    $(document).ready(function () {
            // edit button
            $(document).on("click","#edit", function() {
           // $('#edit').click( function(){

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function(){
                    return $(this).text();
                });

                $('#editMateriel').modal('show');
                $('#id').val(data[0]);
                $('#firstname').val(data[1]);
                $('#lastname').val(data[2]);
                $('#email').val(data[3]);
                $('#password').val(data[4]);
                $('#birthday').val(data[5]);
                $('#type').val(data[6]);
                
                data = 0;
            });

        });

        $(document).ready(function(){
            
            // delete button
            $(document).on("click","#delete", function() {
           // $('#delete').click( function(){
                
                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function(){
                    return $(this).text();
                });
                
                $('#id_delete').val(data[0]);
            });
        });
  </script>
</body>
</html>