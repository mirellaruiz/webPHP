<?php
include('inc/funciones.php');
 ?>

<?php
$tittlePag = "Mirella's place";
$pagina = "Home";
include('inc/header.php'); ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1 style="font-family:courier;text-align:center;"><strong>MIRELLA'S PLACE</strong></h1>
        <p><a style="font-family:courier;" type="button" class="btn btn-default pull-right btn-md" href="about.php">DISCOVER</a></p>
      </div>
    </div>
      <!-- Destacados -->
    <div class="container">

      <div class="row">
        <!-- para filtrar el numero de items, un while-->
        <?php
$x = 1;
$items;
while($x<=3 AND list($item_id, $item) = each($items)){
  echo portada($item_id, $item);
  $x ++;
}
      ?>
      </div>




    </div> <!-- /destacados -->
<?php include('inc/footer.php'); ?>
