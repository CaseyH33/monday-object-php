<?php
  class Triangle
  {
    private $side_a;
    private $side_b;
    private $side_c;

    function __construct($a, $b, $c)
    {
      $this->side_a = $a;
      $this->side_b = $b;
      $this->side_c = $c;
    }

    function getSideA()
    {
      return $this->side_a;
    }

    function getSideB()
    {
      return $this->side_b;
    }

    function getSideC()
    {
      return $this->side_c;
    }

  }

  $user_triangle = new Triangle($_GET["side_a"], $_GET["side_b"], $_GET["side_c"]);

  function checkTriangle($user_triangle){
    $a_check = $user_triangle->getSideA();
    $b_check = $user_triangle->getSideB();
    $c_check = $user_triangle->getSideC();
    if(!(($a_check <= $b_check + $c_check) && ($b_check <= $a_check + $c_check) && ($c_check <= $a_check +$b_check))){
      return "This is not a triangle!" ;
    }elseif(($a_check == $b_check) && ($a_check == $c_check) && ($b_check == $c_check)){
      return "This is an equilateral triangle" ;
    }elseif (($a_check == $b_check) || ($a_check == $b_check) || ($b_check == $c_check)){
      return "This is an isosceles triangle" ;
    }else{
      return "This is a scalene triangle" ;
    }
  }

  ?>

  <!DOCTYPE html>
  <html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Triangle Time</title>
  </head>
  <body>
    <div class="container">
      <?php
        echo "<h1>" . checkTriangle($user_triangle) . "</h1>";
      ?>
    </div>
  </body>
  </html>
