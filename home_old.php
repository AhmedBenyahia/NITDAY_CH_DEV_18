<!DOCTYPE html>

<html>
        <head>
            <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

            <!-- jQuery library -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

            <!-- Latest compiled JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        </head>

    <body>
        <div class="container">
            <div class="row">
            <div class="col-sm-4">

                <ul class="nav nav-pills nav-stacked">
                    <li> <a href="#">Profile</a></li>
                    <li> <a href="ins_fac.php">insciprtion faculter</a></li>
                    <li> <a href="#">inscripton foyer</a></li>
                    <li><a href="#"> inscription restourant universitaire</a></li>
                </ul>
            </<div class="col-sm-4">

                <div class="col-sm-4">
                    <article>
                        <form>
                            <label>Pseudo:</label> <input type="text"  size="20" id="Pseudo">
                            <label> *Le pseudo ne doit contenir que des lettres alphabétiques miniscule ou des chifres<br></label>
                            <label> Email: </label><input type="text"  size="20" id="mail"></br>
                            <label>Code postal:</label> <input type="text" name="T3" size="20"></br>
                            <label>Commentaire:</label><br><textarea rows="5" cols="15" maxlength="100" ></textarea>
                            </br><input type="submit" value="Envoyer" id="sub"/><input type="reset"/>
                        </form>
                    </article>
                </div>

            </div>
        </div>
    </body>
</html>