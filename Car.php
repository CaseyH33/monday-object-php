<?php
  class Car
  {
    private $make_model;
    private $price;
    private $miles;
    private $image;

    function __construct($car_model = "Unknown Model", $car_price = 100000, $car_miles = 5000, $image_path="img/default.jpg")
    {
      $this->make_model = $car_model;
      $this->price = $car_price;
      $this->miles = $car_miles;
      $this->image = $image_path;
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

    function setImage($image_path)
    {
      $this->image = $image_path;
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

    function getImage()
    {
      return $this->image;
    }

  }



  $porsche = new Car("2014 Porsche 911", 114991, 7864, "img/porsche.jpg");

  $ford = new Car("2011 Ford F450", 55995, 14241, "img/ford.jpg");

  $lexus = new Car("2013 Lexus RX 350", 44700, 20000, "img/lexus.jpg");

  $mercedes = new Car("Mercedes Benz CLS550", 39900, 37979, "img/mercedes.jpg");

  $random = new Car();

  $cars = array($porsche, $ford, $lexus, $mercedes, $random);
  $cars_matching_search = array();
  foreach ($cars as $car) {
    $price_data = $car->getPrice();
    $mileage_data = $car->getMiles();
    if ( ($price_data <= $_GET["price"]) && ($mileage_data <= $_GET["mileage"]) ) {
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
            $image_data = $car->getImage();
            echo "<li>$model_data</li>";
            echo "<img src='$image_data'>";
            echo "<ul>";
              echo "<li> $$price_data </li>";
              echo "<li> Miles:$miles_data</li>";
            echo "</ul>";
          }
        ?>
    </ul>
  </body>
</html>
