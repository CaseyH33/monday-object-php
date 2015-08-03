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
    if ( ($car->getPrice() <= $_GET["price"]) && ($car->getMiles() <= $_GET["mileage"]) ) {
      array_push($cars_matching_search, $car);
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Ian & Casey's Dealership-O'Rama</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  </head>
  <body>
    <h1>Ian & Casey's Dealership-O'Rama</h1>

        <?php
          if(empty($cars_matching_search)){
            echo "<p>We're sorry but no cars match your search</p>";
          } else {
            echo "<ul class='list-unstyled'>";
              foreach ($cars_matching_search as $car) {
                $model_data = $car->getModel();
                echo "<li>$model_data</li>";
                echo "<img src='" . $car->getImage() . "' width='25%' height='30%' alt='Image of $model_data'>";
                echo "<ul>";
                  echo "<li> $" . number_format($car->getPrice()) .  "</li>";
                  echo "<li> Miles: " . number_format($car->getMiles()) . "</li>";
                echo "</ul>";
                echo "<p></p>";
              }
            echo "</ul>";
          }
        ?>

  </body>
</html>
