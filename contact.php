<?php
$title = "Contact";
include('header.php');
?>

<?php
session_start();
?>

<?php

@$user_civility = $_POST['user_civility'];
@$user_name = $_POST['user_name'];
@$user_firstname = $_POST['user_firstname'];
@$user_mail = $_POST['user_mail'];
@$pattern_email = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
@$user_subject = $_POST['user_subject'];
@$user_message = $_POST['user_message'];
@$msg_length = strlen ($user_message);
@$submit = $_POST['submit'];

$valid = 'Merci, votre message à bien été envoyé.';
$error = '';
$msg_short = 'Votre message est trop court.';

if(isset($submit)){
    if(empty($user_civility)) $error= "<li>Civilité est vide.</li>";
    if(empty($user_name)) $error.= "<li>Nom est vide.</li>";
    if(empty($user_firstname)) $error.= "<li>Prénom est vide.</li>";
    if(empty($user_mail) OR (!preg_match($pattern_email,$user_mail))) $error.= "<li>email est vide.</li>";
    if(empty($user_subject)) $error.= "<li>Objet du message est vide.</li>";
    if(empty($user_name)) $error.= "<li>Message est vide.</li>";
    if(!empty($user_message) && ($msg_length < 5)) $error.= "<li>Message trop court.</li>";
}

$data = array (
        'Civilité' => $user_civility,
        'Nom' => $user_name,
        'Prénom' => $user_firstname,
        'eMail' => $user_mail,
        'Objet' => $user_subject,
        'Message' => $user_message,
);

$_SESSION['data'] = $data;

file_put_contents('data.txt', $data);

?>


<html>

<link rel="stylesheet" href="style.css">

 <div class="welcome">
            <div class="card-body" id="message_contact">
                <h2> Envoyez-nous un petit message ! </h2>
            </div> <br>

<form action="contact.php" method="post">
    
    <div>
        <select name="user_civility" id="civility">
          <option value="">-- Civilité --</option>
          <option value="Femme">Femme</option>
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
        <input type="submit" value="Envoyer" name="submit">
    </div>

</form>

     <div> <?php echo @$error ?> </div>

</div>
</html>

<?php
include('footer.php');
?>