<?php

function numAleatorio(){
    $numero_aleatorio = rand(1,100);
    return $numero_aleatorio;
}

function miVar_dump($a)
{
    $cadena = $_SERVER['DOCUMENT_ROOT'].$_SERVER['PHP_SELF'];
    echo $cadena;
    $claves = array_keys($a);

    $tipo=gettype($a)."(size=".count($a).")";

    for($i=0;$i<count($a);$i++)
    {
        echo "<br>".$claves[$i]." => ".gettype($a[$i])." <spam style='color:green'>".$a[$i]."</spam>";
    }
}

/*array profesores que han ido a roma 
array profesores polonia han ido
array profesores dublin que quieren ir a dublin
quitar de dublin los que han ido a roma y polonia */