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
    $user_height = $user_parcel->GetHeight();
    $user_width = $user_parcel->GetWidth();
    $user_depth = $user_parcel->GetDepth();

    return $user_height * $user_width * $user_depth ;
  }

?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <title>Parcel calculator</title>
</head>
<body>
  <h1>The volume of your parcel is:
    <?php
      $end_result = volume($user_parcel);
      echo  $end_result;
    ?>
  </h1>
</body>
</html>
