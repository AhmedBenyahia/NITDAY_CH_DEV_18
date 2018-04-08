
<body>


<div class="row">

    <div class="col-sm-12" >


        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"></h3>
            </div>
            <div class="panel-body">

                    <div class=" col-md-9 col-lg-9 ">
                        <table class="table table-user-information">
                            <tbody>

                            <?php

                            require '../includes/connexion.php';
                            $bdd = ConnexionBD::getInstance();


                            $req  =$bdd->prepare('SELECT *  FROM etudiant , adresse WHERE cin= :cin AND adresseID=id ');

                            $req->execute(array('cin' => $_SESSION['cin']));
                            $personne = $req->fetch(PDO::FETCH_OBJ);


                            foreach ($personne as $key => $value) {
                                if($key!='adresseID'&& $key!='id'){
                                echo "<tr>";
                                echo "<td>".$key."</td>";
                                echo "<td>".$value."</td>";
                                echo "</tr>";
                            }}
                            $req->closeCursor();

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