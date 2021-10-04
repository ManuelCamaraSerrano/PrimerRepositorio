<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        include "libreria.php";
    ?>
</head>
<body>
    
    <?php
    /* generacion numero aleatorio 
    numero aleatorio entre el 1 y el 100
    rellenamos un array de 20 casillas con numeros del 1-100 aleatorios sin que se repita ninguno.
    pintamos por pantalla el array.*/
      $num=0;
      $array= array();
      $contador=0;
      for($i=0;$contador<20;$i++)
      {
         $num=numAleatorio();
         if(!in_array($num,$array))
         {
            array_push($array,$num);
            $contador=$contador+1;
         }
         
      }

      var_dump($array);

      var_dump($_SERVER['PHP_SELF']);
      var_dump($_SERVER['DOCUMENT_ROOT']);
      echo $_SERVER['DOCUMENT_ROOT'].$_SERVER['PHP_SELF'];
      echo gettype($array)."(size=".count($array).")";
      miVar_dump($array);
    ?>
</body>
</html>

