<?php session_start()?>
<body>


<div class="row">

    <div class="col-sm-12" >


        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Ahmed Benyahia</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="img/1.jpg" class="img-circle img-responsive"> </div>
                    <div class=" col-md-9 col-lg-9 ">
                        <table class="table table-user-information">
                            <tbody>

                            <?php

                      require 'Connexion.php';
                           $bdd = ConnexionBD::getInstance();
                         $req  =$db_connexion->prepare('SELECT * pwd FROM etudiant , adresse WHERE cin:=cin and adresseID = id');
                            $req->execute(array('cin' => $_SESSION['cin']));
                            $personne = $rep->fetchAll(PDO::FETCH_OBJ);
                            foreach ($personne as $key => $value) {
                                echo "<tr>";
                                echo "<td>".$key."</td>";
                                echo "<td>".$value."</td>";
                                echo "</tr>";
                            }
                            $rep->closeCursor();

                 ?>
 


                                </tr>
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

</body>