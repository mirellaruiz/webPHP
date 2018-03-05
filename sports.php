<?php
include('inc/funciones.php');
 ?>
<?php
$tittlePag = "Sports";
$pagina = "Sports";
include('inc/header.php'); ?>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
    <h1 style="font-family:courier;text-align:center;"><strong>SPORT AS LIFE STYLE</strong></h1>
  </div>
</div>
<!-- Sports -->
<div class="container">

<div class="row" style="align:center; margin:10px;">
  <?php foreach ($sport as $sport_id => $sport) {
  echo paginas($sport_id, $sport);
} ?>
</div>




</div> <!-- /Sports -->
<?php include('inc/footer.php'); ?>
