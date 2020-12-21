<?php
class First {}

class Second {}

class Third extends Second {}

class Fourth {}

function checkObject( $obj ) {
    //----------NE MODIFIEZ PAS LE CODE AU DESSUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
    $a = new First;
    $b = new Second;
    $c = new Third;
    $d = new Fourth;
    
    echo $obj instanceOf $a; 
    echo $obj instanceOf $b; 
    echo $obj instanceOf $c; 
    echo $obj instanceOf $d; 
    //----------NE MODIFIEZ PAS LE CODE EN DESSOUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
}
?>