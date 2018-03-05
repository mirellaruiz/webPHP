
<?php
function portada($item_id, $item){
$salida="";

$salida = $salida . '<div class="col-md-4">';
$salida = $salida . '<h2 style="font-size:150%; font-family:courier"><strong>' . $item["nombre"] . '</strong></h2>';
$salida = $salida . '<img height="200px" widht="200px" style="margin-bottom:5px" src="' . $item["imagen"] . '" alt="'
          .$item["nombre"].'"class="img-rounded">';
$salida = $salida . '<p style="font-family:courier;"> <a class="btn btn-default" href="offers.php?id=' .$item_id .'">' . $item["introDescripcion"].'</a></p></div>';


  return $salida;
}
function paginas($item_id, $item){
$salida="";

$salida = $salida . '<div class="col-md-3">';
$salida = $salida . '<h2 style="font-size:150%; font-family:courier"><strong>' . $item["nombre"] . '</strong></h2>';
$salida = $salida . '<img height="150px" widht="150px" style="margin-bottom:5px" src="' . $item["imagen"] . '" alt="'
          .$item["nombre"].'"class="img-rounded">';
$salida = $salida . '<p style="font-family:courier;"> <a class="btn btn-default" href="offer.php?id=' .$item_id .'&item=' .$item["item"] .'">' . $item["introDescripcion"].'</a></p></div>';


  return $salida;
}


 $items = array();
$items[001] = array (
  "nombre" => "Food",
  "introDescripcion" => "The best diets",
  "descripcion" => "The best food is about to be discovered. Are you ready? ",
  "imagen" => "img/mediterranean.jpg"
);
$items[002] = array (
  "nombre" => "Awesome Places",
  "introDescripcion" => "Gaze them",
  "descripcion" => "I love travelling. I will show you the most amazing places where I've been.",
  "imagen" => "img/places.jpg",
);
$items[003] = array (
  "nombre" => "Sports",
  "introDescripcion" => "Do it to feel free",
  "descripcion" => "I love sports. Soon I will uploading full routines to improve fitness.",
  "imagen" => "img/sports.jpg"
);
$sport = array();
$sport[001] = array (
 "nombre" => "Yoga",
 "introDescripcion" => "Find your inner peace",
 "descripcion" => "Some companies are facilitating the practice of yoga to their employees by obtaining very good and fast results relieving back pain and stress. Also, more and more pregnant women practice yoga to have a healthy pregnancy, connect with their babies and prepare for childbirth. ",
 "imagen" => "img/yoga.jpg",
 "item" => "sports"
);
$sport[002] = array (
 "nombre" => "Running",
 "introDescripcion" => "Till the moon and back",
 "descripcion" => "Running improves the lives of people, especially if the goal is to lose weight. In addition, it improves sleep and is an aphrodisiac. It even lengthens life!",
 "imagen" => "img/running.jpg",
 "item" => "sports"
);
$sport[003] = array (
 "nombre" => "Dance",
 "introDescripcion" => "Fly with the music",
 "descripcion" => "Our ancestors used dance to select a couple. With a ballet session you can lose up to 250 calories. This equates to approximately 90 minutes of soccer or running 30 kilometers. The dance has an impact on children's intelligence. What are you waiting to try it?",
 "imagen" => "img/dance.jpg",
 "item" => "sports"
);
$sport[004] = array (
 "nombre" => "Boxing",
 "introDescripcion" => "One of the oldest",
 "descripcion" => "
Boxing is a way to learn self defense. It is an aerobic exercise that burns many fats, helps your cardiovascular system and improves reflexes and mental agility. It is useful to release tension.",
 "imagen" => "img/boxing.jpg",
 "item" => "sports"
);
$places = array();
$places[001] = array (
 "nombre" => "Al Andalus",
 "introDescripcion" => "The Arab kingdom",
 "descripcion" => "
Discover the red fortress (Alhambra), one of the new wonders of the world. Going tapas in this city is wonderful and super cheap, let yourself be carried away by the Arab atmosphere and lose yourself in its white neighborhood.",
 "imagen" => "img/granada.jpg",
 "item" => "places"
);
$places[002] = array (
 "nombre" => "The metropolis",
 "introDescripcion" => "A tough history",
 "descripcion" => "Enter Berlin through the Brandenburg Gate. Discover the longest art gallery in the world, designed on the old wall, the East Side Gallery. Let yourself be moved by its history and relax in the gardens, which are the 44% of the whole city.",
 "imagen" => "img/berlin.jpg",
 "item" => "places"
);
$places[003] = array (
 "nombre" => "My city",
 "introDescripcion" => "Alive",
 "descripcion" => "
Madrid has continuous fun, it is one of the sunniest cities in Europe. It has many museums and the oldest universities, as well as many places to eat and drink.",
 "imagen" => "img/madrid.jpg",
 "item" => "places"
);
$places[004] = array (
 "nombre" => "The eternal city",
 "introDescripcion" => "Going back to the past",
 "descripcion" => "Rome has more than 900 churches and almost 300 fountains. In the Trevi fountain, more than 3000 euros are collected per day, and there are many sources of drinking water. The food is spectacular and the ice cream more.",
 "imagen" => "img/roma.jpg",
 "item" => "places"
);
$food = array();
$food[001] = array (
 "nombre" => "Mediterranean",
 "introDescripcion" => "The healthiest diet",
 "descripcion" => "This is the diet of my country. Is one of the healthiest due to it's plenty of vegetables and fruits. Its star product is the olive oil, which take care of the brain and combats aging. ",
 "imagen" => "img/mediterranean.jpg",
 "item" => "food"
);
$food[002] = array (
 "nombre" => "Viva Mexico!",
 "introDescripcion" => "A little bit of spicy food",
 "descripcion" => "Chili is the fruit most used by Mexicans. Yes, it is a fruit! They love to put spicy and the more ingredients the better, but always with a Margarita.",
 "imagen" => "img/mexican.jpg",
 "item" => "food"
);
$food[003] = array (
 "nombre" => "Indian cuisine",
 "introDescripcion" => "The one with more spices",
 "descripcion" => "
Curry is the most popular spice, but not only there are spicy spices, there are also sweet spices. Most of the meals are vegetarian, but among the meats, the lamb and chicken stand out.",
 "imagen" => "img/indian.jpg",
 "item" => "food"
);
$food[004] = array (
 "nombre" => "The Italians",
 "introDescripcion" => "Pasta and pizza",
 "descripcion" => "The pizza was poor food, until Queen Margherita tried it and became an icon, in fact there is a pizza with her name. The three basic elements of the table are water, bread and wine, and the appetizers are called 'antipasti'.",
 "imagen" => "img/italians.jpg",
 "item" => "food"
);
?>
