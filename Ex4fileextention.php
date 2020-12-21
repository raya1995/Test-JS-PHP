<?php
function getExtension( $filepath ) { 
    //----------NE MODIFIEZ PAS LE CODE AU DESSUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
    $filepath = 'dir/test.txt';
    $extension = pathinfo($filepath, PATHINFO_EXTENSION);
    var_dump($extension);
    //----------NE MODIFIEZ PAS LE CODE EN DESSOUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE l'EXECUTION----------
}
print "Extension du fichier blah.gif: ".getExtension( "blah.gif" )."<br />\n";
print "Extension du fichier rmon.fichier.gif: ".getExtension( "mon.fichier.gif" )."<br />\n";
print "Extension du chemin ceci/estun/fichier: ".getExtension( "ceci/estun/fichier" )."<br />\n";
?>