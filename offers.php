<?php
include('inc/funciones.php');
 ?>
<?php
if (isset($_GET["id"])){
$item_id =$_GET["id"];
if ($item_id == 1){
  header("Location: food.php");
  exit();
}
if ($item_id == 2){
  header("Location: places.php");
  exit();
}
if ($item_id == 3){
  header("Location: sports.php");
  exit();
}
}

$tittlePag = "Things";
$pagina = "Little things";
include('inc/header.php'); ?>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
  <h1 style="font-family:courier;text-align:center;"><strong>ALL THOSE LITTLE THINGS</strong></h1>
  <div class="row" style=" text-align:center;">
    <div class="col-sm-4 col-xs-4 col-md-4" >
      <p style="font-family:courier;"><a class="btn btn-default btn-md" href="sports.php" role="button">Sports &raquo;</a></p>
    </div>
    <div class="col-sm-4 col-xs-4 col-md-4" >
      <p style="font-family:courier;"><a class="btn btn-default btn-md" href="food.php" role="button">Places &raquo;</a></p>
    </div>
    <div class="col-sm-4 col-xs-4 col-md-4" >
      <p style="font-family:courier"><a class="btn btn-default btn-md" href="places.php" role="button">Food &raquo;</a></p>
    </div>
  </div>
</div>
</div>
<!-- Ofertas -->
<div class="container">

<div class="row">

<?php foreach ($sport as $oferta_id => $oferta) {
echo paginas($oferta_id, $oferta);
} ?>
<?php foreach ($food as $oferta_id => $oferta) {
echo paginas($oferta_id, $oferta);
} ?>
<?php foreach ($places as $oferta_id => $oferta) {
echo paginas($oferta_id, $oferta);
} ?>
</div>




</div> <!-- /Ofertas -->
<?php include('inc/footer.php'); ?>
