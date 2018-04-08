<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="js/test.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="CSS/test.css"
<div class="container">
    <div class="col-md-6">
        <div id="logbox">
            <form id="signup" method="post" action="../includes/inscriptionNew.php">
                <h1>create an account</h1>
                <input name="cin" type="text" placeholder="entrez votre cin" pattern="^[\w]{3,16}$" autofocus="autofocus" required="required" class="input pass"/>
                <input name="code" type="password" placeholder="entrez votre code " required="required" class="input pass"/>

                <input name="passwd" id="passwd" type="password" placeholder="entrez votre nouvelle mot de passe" required="required" class="input pass" pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$"/>
                <input name="Cpasswd" id="Cpasswd" type="password" placeholder="Confirmer mot de passe" required="required" class="input pass"/>
                <input name="email" type="email" placeholder="entrez votre mail" required="required" class="input pass"/>
                <input name="numTel" type="tel" placeholder="entrez votre numero de telephone" class="input pass"/>
                <input id="submit1" type="submit" value="Sign me up!" class="inputButton"/>
                <p>*Le mot de passe doit avoir au minimum 8 caractères avec une lettre majuscule, un nombre et un symbole</p>
                <div class="text-center">
                   <?php
                   if(!isset($verif)) {
                       echo '<p>merci de verifier vos coordonnees</p>';
                   }?>
                </div>
            </form>
        </div>
    </div>
    <!--col-md-6-->

    <div class="col-md-6">
        <div id="logbox">
            <form id="signup" method="post" action="../includes/inscript.php">
                <h1>account login</h1>
                <input name="cin" type="number" placeholder="entrez votre cin" class="input pass"/>
                <input name="motDePasse" type="password" placeholder="entrez votre mot de passe" required="required" class="input pass"/>
                <input type="submit" value="Sign me in!" class="inputButton"/>
                <div class="text-center"">
                <a href="#" id="">create an account</a> 
        </div>
        </form>
    </div>
</div>
</div>
<script src="../model/verificationSingIn.js"></script>