<?php
  class Parcel
  {

    private $weight;
    private $height;
    private $width;
    private $depth;



    function __construct($parcel_weight,$parcel_height,$parcel_width,$parcel_depth)
    {
      $this->weight = $parcel_weight ;
      $this->height = $parcel_height ;
      $this->width = $parcel_width ;
      $this->depth = $parcel_depth ;
    }

    function getWeight()
    {
      return $this->weight ;
    }

    function getHeight()
    {
      return $this->height ;
    }

    function getWidth()
    {
      return $this->width ;
    }

    function getDepth()
    {
      return $this->depth ;
    }

  }

  $user_parcel = new Parcel($_GET["weight"],$_GET["height"],$_GET["width"],$_GET["depth"]);


  function volume($user_parcel)
  {
    $user_height = $user_parcel->getHeight();
    $user_width = $user_parcel->getWidth();
    $user_depth = $user_parcel->getDepth();
   
    return $user_height * $user_width * $user_depth;
  }

  function costToShip($user_parcel)
  {
    $user_weight = $user_parcel->getWeight();
    return ($user_weight * volume($user_parcel))*.1;
  }

?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <title>Parcel calculator</title>
</head>
<body>
  <?php
    if((volume($user_parcel) != 0) && (costToShip($user_parcel) != 0))
    {
      echo "<h1>The volume of your parcel is: " . number_format(volume($user_parcel)) . "</h1>";
      echo "<h1>The cost to ship the parcel is: $" . number_format(costToShip($user_parcel), 2) . "</h1>";
    }
    else
    {
      echo "<h1>Please fill out the form correctly</h1>";
    }
    ?>
</body>
</html>
