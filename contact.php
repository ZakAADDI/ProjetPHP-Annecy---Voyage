<?php
$title = "Contact";
include('header.php');
?>

<html>

<link rel="stylesheet" href="style.css">

 <div class="welcome">
            <div class="card-body" id="message_contact">
                <h2> Envoyez-nous un petit message ! </h2>
            </div> <br>

<?php

$user_civility = $_POST['user_civility'];
$user_name = $_POST['user_name'];
$user_firstname = $_POST['user_firstname'];
$user_mail = $_POST['user_mail'];
$user_subject = $_POST['user_subject'];
$user_message = $_POST['user_message']; 

if(isset($_POST['user_civility']) AND isset($_POST['user_name']) AND isset($_POST['user_firstname']) AND isset($_POST['user_mail']) 
    AND isset($_POST['user_subject']) AND isset($_POST['user_message'])){    
        
        echo 'Merci, votre message à bien été envoyé !';
    
    }else{(empty($_POST['user_civiliy']) OR empty($_POST['user_name']) OR empty($_POST['user_firstname']) OR empty($_POST['user_mail']) 
        OR isset($_POST['user_subject']) OR isset($_POST['user_message'])){
            echo 'Les champs sont vide';
    }
    ?>

    <-- Contact form >

<form action="index.php?page=contact" method="post">
    
    <div>
        <select name="user_civility" id="civility">
          <option value="">-- Civilité --</option>
          <option value="Fomme">Femme</option>
          <option value="Hemme">Homme</option>
        </select>

    </div> <br>

    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="user_name">
    </div> <br>


    <div>
        <label for="firstname">Prénom :</label>
        <input type="text" id="firstname" name="user_firstname">
    </div> <br>

    <div>
        <label for="mail">e-mail:</label>
        <input type="email" id="mail" name="user_mail">
    </div> <br>

    <div>
        <input type="radio" id="subject" name="user_subject">
        <label for="subject">Ville</label>
    </div>

    <div>
        <input type="radio" id="subject" name="user_subject">
        <label for="subject">Lac</label>
    </div>

    <div>
        <input type="radio" id="subject" name="user_subject">
        <label for="subject">Montagne</label>
    </div> <br>

    <div>
        <label for="msg">Message :</label> <br>
        <textarea id="msg" name="user_message"></textarea>
    </div>

    <div>
        <input type="submit" value="Envoyer">
    </div>
</form>
</div>
</html>

<?php
include('footer.php');
?>