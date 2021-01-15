<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



</head>
<body>


<?php

  class Magazzino
  {

    public $name;
    public $locations;
    public $prodotti_contenuti;

    public function __construct($name, $locations)
    {
      $this -> name = $name;
      $this -> locations = $locations;
    }
  }


    $magazzino = new Magazzino("Magazzino centrale", "Via de gasperi");

    ?>
       <h1>
         Magazzino: <?php echo $magazzino -> name ?>
      </h1>
      <h2>
        Indirizzo:  <?php  echo $magazzino -> locations  ?>
      </h2>
    <?php


    class Prodotto
    {
      public $name;
      public $weight;
      public $price;


      public function __construct($name, $price)
      {
        $this -> name = $name;
        $this -> price = $price;
      }
    }

    ?> Prodotti: <br> <?php
    $prodotto1 = new Prodotto("Shampoo:", " 50$");
    echo $prodotto1 -> name . ' ';
    echo $prodotto1 -> price . '<br>';

    $prodotto2 = new Prodotto("Calcolatrice:", " 10$");
    echo $prodotto2 -> name . ' ';
    echo $prodotto2 -> price;



 ?>


</body>
</html>
