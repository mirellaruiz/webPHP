<?php
include('inc/funciones.php');
 ?>
<?php
if (isset($_GET["id"])):
  $oferta_id = $_GET["id"];
else :
  header("Location: offers.php");
  exit();
endif;

if (isset($_GET["item"])){

$oferta_item =$_GET["item"];
if ($oferta_item == "sports"){
  if(isset($sport[$oferta_id]))
  $oferta = $sport[$oferta_id];
}
else if ($oferta_item == "food"){
  if(isset($food[$oferta_id]))
  $oferta = $food[$oferta_id];
}
else if ($oferta_item == "places"){
  if(isset($places[$oferta_id]))
  $oferta = $places[$oferta_id];
}
}
else {
  if (isset($items[$oferta_id]))
$oferta = $items[$oferta_id];
}


$tittlePag = $oferta["nombre"];
$pagina = $oferta["nombre"];
include('inc/header.php'); ?>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
  <div class ="row">
    <div class="col-md-8">
      <p>
        <img style="width:100%" src="<?php echo $oferta["imagen"]; ?>" alt="<?php echo $oferta["nombre"]; ?>"
      </p>
      <h2 style="font-family:courier"><strong><?php echo $oferta["nombre"]; ?></strong></h2>
      <p style="font-family:arial">
        <?php echo $oferta["descripcion"]; ?>
      </p>
    </div>

  </div>
</div>
</div>
<?php include('inc/footer.php'); ?>
