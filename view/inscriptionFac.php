<div class="container">
    <link rel="stylesheet" type="text/css" href="./CSS/demandeAttestation.css">
    <form id="contact" action="" method="post">
        <h3>demande attestation de présence</h3>

        <fieldset>
            <label for="cin">scanner votre cin sous format pdf <input  type="file" name="cin" tabindex="1" required autofocus></label>
        </fieldset>
        <fieldset>
            <label for="recu">joindre votre recu de payement d'inscription<input  type="file" name="recu" tabindex="1" required autofocus></label>
        </fieldset>
        <fieldset>
            <label for="image">joindre votre image sous format jng<input  type="file" name="image" tabindex="1" required autofocus></label>
        </fieldset>
        <textarea  tabindex="5" readonly>NB:si vous ferez l'inscription la premiere fois il faut donner le dossier medicale a l'administration</textarea>
        </fieldset>
        <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
        </fieldset>
    </form>
</div>
