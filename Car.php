<?php
  class Car
  {
    private $make_model;
    private $price;
    private $miles;

    function __construct($car_model, $car_price, $car_miles)
    {
      $this->make_model = $car_model;
      $this->price = $car_price;
      $this->miles = $car_miles;
    }

    function setModel($car_model)
    {
      $this->make_model = $car_model;
    }

    function setPrice($car_price)
    {
      $this->price = $car_price;
    }

    function setMiles($car_miles)
    {
      $this->miles = $car_miles;
    }

    function getModel()
    {
      return $this->make_model;
    }

    function getPrice()
    {
      return $this->price;
    }

    function getMiles()
    {
      return $this->miles;
    }

  }



  $porsche = new Car("2014 Porsche 911", 114991, 7864);

  $ford = new Car("2011 Ford F450", 55995, 14241);

  $lexus = new Car("2013 Lexus RX 350", 44700, 20000);

  $mercedes = new Car("Mercedes Benz CLS550", 39900, 37979);


  $cars = array($porsche, $ford, $lexus, $mercedes);
  $cars_matching_search = array();
  foreach ($cars as $car) {
    $price_data = $car->getPrice();
    if ( $price_data <= $_GET["price"]) {
      array_push($cars_matching_search, $car);
    }
  }
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
          foreach ($cars_matching_search as $car) {
            $model_data = $car->getModel();
            $price_data = $car->getPrice();
            $miles_data = $car->getMiles();
            echo "<li>$model_data</li>";
            echo "<ul>";
              echo "<li> $$price_data </li>";
              echo "<li> Miles:$miles_data</li>";
            echo "</ul>";
          }
        ?>
    </ul>
  </body>
</html>
