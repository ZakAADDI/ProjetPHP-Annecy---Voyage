<?php
$title = "Home";
include('header.php');
?>
 
 <html>

 <link rel="stylesheet" href="style.css">

<div class="welcome">
    <div class="card-body">
        Bonjour est bienvenu sur le site d'Annecy - Voyage !
    </div>
</div>

<div class="cards3">
  <div class="card" style="width: 18rem;">
    <img src="villeAnnecy.svg" class="card-img-top" alt="Ville">
    <div class="card-body">
      <h3>La ville </h3>
      <p class="card-text">L'une des plus belles villes de France. Venez visiter la ville d'Annecy en vous baladant dans sa ville, et sa vieille ville surplombé du château.</p>
    </div>
  </div>

  <div class="card" id="lac"  style="width: 18rem;">
    <img src="lake.svg" class="card-img-top" alt="Lac">
    <div class="card-body">
      <h3>Le lac</h3>
      <p class="card-text">Le lac le plus pured'Europe. Venez naviger et vous baigner dans ce fabuleux lac, avec un magnifique panorama plein de de couleurs et de textures.</p>
    </div>
  </div>

  <div class="card" style="width: 18rem;">
    <img src="mountains.svg" class="card-img-top" alt="Montagne">
    <div class="card-body">
      <h3>Les montagnes</h3>
      <p class="card-text">De magnifique montagnes qui entour la ville et le lac. Vous pourrez faire des randonnées, vous balader dans la forêt, et également skier.</p>
    </div>
  </div>
</div>

    </html>
  
    <?php
include('footer.php');
?>
