<?php
include('inc/funciones.php');
 ?>
<?php
$tittlePag = "Food";
$pagina = "Food";
include('inc/header.php'); ?>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
    <h1 style="font-family:courier;text-align:center;"><strong>FOOD MAKES YOU SMILE</strong></h1>
  </div>
</div>
<!-- Sports -->
<div class="container">

<div class="row" style="align:center; margin:10px;">
  <?php foreach ($food as $food_id => $food) {
  echo paginas($food_id, $food);
} ?>
</div>




</div> <!-- /Sports -->
<?php include('inc/footer.php'); ?>
