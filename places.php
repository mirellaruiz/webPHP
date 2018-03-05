<?php
include('inc/funciones.php');
 ?>
<?php
$tittlePag = "Places";
$pagina = "Places";
include('inc/header.php'); ?>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
    <h1 style="font-family:courier;text-align:center;"><strong>TRAVELLING ENRICH YOU</strong></h1>
  </div>
</div>
<!-- Sports -->
<div class="container">

<div class="row" style="align:center; margin:10px;">
  <?php foreach ($places as $place_id => $places) {
  echo paginas($place_id, $places);
} ?>
</div>




</div> <!-- /Sports -->
<?php include('inc/footer.php'); ?>
