<?php
  class Car
  {
    public $make_model;
    public $price;
    public $miles;
  }

  $porche new Car();
  $porche->make_model = "2014 Porche 911";
  $porche->price = 114991;
  $porche->miles = 7864;

  $ford = new Car();
  $ford->make_model = "2011 Ford F450";
  $ford->price = 55995;
  $ford->miles = 14241;

  $lexus = new Car();
  $lexus->make_model = "2013 Lexus RX 350";
  $lexus->price = 44700;
  $lexus->miles = 20000;

  $mercedes = new Car();
  $mercedes->make_model = "Mercedes Benz CLS550";
  $mercedes->price = 39900;
  $mercedes->miles = 37979;

  $cars = array($porsche, $ford, $lexus, $mercedes)
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Ian & Casey's Dealership-O'Rama</title>
  </head>
  <body>
    <h1>Ian & Casey's Dealership-O'Rama</h1>
    <ul>
        <?php
          foreach ($cars as $car) {
            echo "<li> $car->make_model </li>";
            echo "<ul>";
              echo "<li> $$car->price </li>";
              echo "<li> Miles:$car->miles </li>";
            echo "</ul>";
          }
        ?>
    </ul>
  </body>
</html>
