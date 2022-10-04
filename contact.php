<?php
$title = "Contact";
include('header.php');
?>

<html>
<link rel="stylesheet" href="style.css">

 <div class="welcome">
            <div class="card-body">
                Envoyez nous un petit message !
            </div>
        </div>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Message</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  <button type="button" class="btn btn-primary" id=button>Envoyer</button>

</div>

</html>

<?php
include('footer.php');
?>