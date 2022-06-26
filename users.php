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
  <title>Gestion des utilisateurs</title>
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
                        <h1 class="mb-3">Table utilisateurs</h1>
                    </div>
                    <div class="col-2"> 
                        <button class="btn btn-warning btn-sm float-end btn-rounded" type="button" data-toggle="modal" data-target="#addUser">
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
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>email</th>
                                    <th>Mot de passe</th>
                                    <th>Date de naissance</th>
                                    <th>Type</th>
                                    <th></th>
                                    <th>#</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $requete = $bdd->query(' SELECT * FROM users');
                                    $i=1;
                                    
                                    while($data = $requete->fetch()){
                                        echo'<tr>'
                                                .'<td  scope="row">'.$data['id'].'</td>'
                                                .'<td>'.$data['firstname'].'</td>'
                                                .'<td>'.$data['lastname'].'</td>'
                                                .'<td>'.$data['email'].'</td>'
                                                .'<td>'.$data['password'].'</td>'
                                                .'<td>'.$data['birthday'].'</td>'
                                                .'<td>'.$data['type'].'</td>'
                                                ?>
                                                <td>
                                                    <span id="edit" class="fas fa-edit text-success waves-effect" ></span>
                                                </td>
                                                <?php 
                                                echo '<td>
                                                    <span id="delete" class="fas fa-trash text-danger waves-effect" data-toggle="modal" data-target="#deleteUser"></span>
                                                </td>'
                                            .'</tr>';
                                       // $i++;
                                    }    
                                ?>
                                </tbody>
                        </table>

                        <!--Créer modal-->
                        <!-- Modal: Ajouter form -->
                        <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog cascading-modal" role="document">
                                <!-- Content -->
                                <div class="modal-content">

                                <!-- Header -->
                                <div class="modal-header light-blue darken-3 white-text">
                                    <h4 class=""><i class="fas fa-pencil-alt"></i> Ajouter un utilisateur</h4>
                                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <!--AddUser Form-->
                                    <form method="post" action="addUserPost.php">
                                        <!-- Body -->
                                        <div class="modal-body mb-0">
                                            <div class="md-form form-sm">
                                                <i class="fas fa-user prefix"></i>
                                                <input type="text" id="form19" class="form-control form-control-sm" name="firstname">
                                                <label for="form19">Your first name</label>
                                            </div>
                                            <div class="md-form form-sm">
                                                <i class="fas fa-user prefix"></i>
                                                <input type="text" id="form30" class="form-control form-control-sm" name="lastname">
                                                <label for="form30">Your last name</label>
                                            </div>

                                            <div class="md-form form-sm">
                                            <i class="fas fa-envelope prefix"></i>
                                            <input type="email" id="form20" class="form-control form-control-sm" name="email">
                                            <label for="form20">Your email</label>
                                            </div>

                                            <div class="md-form form-sm">
                                            <i class="fas fa-envelope prefix"></i>
                                            <input type="password" id="form40" class="form-control form-control-sm" name="password">
                                            <label for="form40">Mot de passe</label>
                                            </div>

                                            <div class="md-form form-sm mt-2">
                                            <i class="fas fa-tag prefix"></i>
                                            <input type="date" id="form21" class="form-control form-control-sm" name="birthday" >
                                            </div>

                                            <div class="md-form form-sm mt-2">
                                            <i class="fas fa-tag prefix"></i>
                                            <input type="text"  class="form-control form-control-sm" name="type" >
                                            <label >Type d'utilisateur</label>    
                                            </div>

                                            <div class="text-center mt-1-half">
                                            <button type="submit" class="btn btn-info mb-2" name="addUser">Enregistrer <i class="fas fa-paper-plane ml-1"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Content -->
                            </div>
                        </div>
                        <!-- Modal: Ajouterform -->

                        <!--Edit modal-->
                        <div class="modal fade" id="editUser" role="dialog" >
                            <div class="modal-dialog cascading-modal" role="document">
                                <!-- Content -->
                                <div class="modal-content">

                                <!-- Header -->
                                <div class="modal-header light-blue darken-3 white-text">
                                    <h4 class=""><i class="fas fa-pencil-alt"></i> Modifier un utilisateur</h4>
                                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <!--EditUser Form-->
                                    <form method="post" action="addUserPost.php">
                                        <!-- Body -->
                                        <div class="modal-body mb-0">
                                            <div class="md-form form-sm">
                                                <i class="fas fa-user prefix"></i>
                                                <input type="hidden" id="id" class="form-control form-control-sm" name="id">
                                                <input type="text" id="firstname" class="form-control form-control-sm" name="firstname">
                                                <label >Your first name</label>
                                            </div>
                                            <div class="md-form form-sm">
                                                <i class="fas fa-user prefix"></i>
                                                <input type="text" id="lastname" class="form-control form-control-sm" name="lastname">
                                                <label for="form30">Your last name</label>
                                            </div>

                                            <div class="md-form form-sm">
                                            <i class="fas fa-envelope prefix"></i>
                                            <input type="email" id="email" class="form-control form-control-sm" name="email">
                                            <label for="form20">Your email</label>
                                            </div>

                                            <div class="md-form form-sm">
                                            <i class="fas fa-envelope prefix"></i>
                                            <input type="password" id="password" class="form-control form-control-sm" name="password">
                                            <label for="form40">Mot de passe</label>
                                            </div>

                                            <div class="md-form form-sm mt-2">
                                            <i class="fas fa-tag prefix"></i>
                                            <input type="date" id="birthday" class="form-control form-control-sm" name="birthday" >
                                            </div>

                                            <div class="md-form form-sm mt-2">
                                            <i class="fas fa-tag prefix"></i>
                                            <input type="text" id="type" class="form-control form-control-sm" name="type" >
                                            <label >Type d'utilisateur</label>    
                                            </div>

                                            <div class="text-center mt-1-half">
                                            <button type="submit" class="btn btn-info mb-2" name="updateUser">Modifier <i class="fas fa-paper-plane ml-1"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Content -->
                            </div>
                        </div>

                        <!--Supprimer modal-->
                        <div class="modal fade" id="deleteUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
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
                                    <form action="deleteUserPost.php" method="post">
                                    <div class="modal-body">
                                        <div class="text-center">
                                        <input type="hidden" id="id_delete" class="form-control form-control-sm" name="id_del">
                                        <i class="fas fa-angle-double-right fa-4x mb-3 animated rotateIn"></i>
                                        <p>
                                            Vous voulez vous vraiment supprimer cet utilisateur ?
                                        </p>
                                        </div>
                                    </div>
                                   
                                    <!-- Footer -->
                                    <div class="modal-footer justify-content-center">
                                        <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">Non merci<i class="far fa-gem ml-1"></i></a>
                                        <button type="submit" class="btn btn-danger" name="deleteUser">Supprimer </button>
                                    </div>
                                    </form>
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
        /*
        function editUserfunc(id,firstname,lastname,email,password,birthday,type){
            $(document).ready(function () {
                $('#id').val(id);
                $('#firstname').val(firtsname);
                $('#lastname').val(lastname);
                $('#email').val(email);
                $('#password').val(password);
                $('#birthday').val(birthday);
                $('#type').val(type);
            });
        }
        */
        $(document).ready(function () {
            // edit button
            $(document).on("click","#edit", function() {
           // $('#edit').click( function(){

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function(){
                    return $(this).text();
                });

                $('#editUser').modal('show');
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