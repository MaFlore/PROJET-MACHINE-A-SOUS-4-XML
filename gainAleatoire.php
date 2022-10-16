<?php

header("Content-Type: text/xml; charset=utf-8");
header("Cache-Control: no-cache . private");
header("Pragma: no-cache");
sleep(2);

if(isset($_REQUEST['niveau']))
{ 
    $niveau = $_REQUEST['niveau'];

    if($niveau == 'facile'){
        $niveau = 'facile';
        $gain = rand(0,100);

    }
    else if($niveau == 'moyen'){
        $niveau = 'moyen';
        $gain = rand(0,500);
    }
    else {
        $niveau = 'difficile';
        $gain = rand(0,1000);
    }
}
else
{
    $niveau = "inexistable";
}

$resultat = '<?xml version="1.0" encoding="utf-8" ?>';
$resultat.= "<joueur><niveau>".$niveau."</niveau><gain>".$gain."</gain></joueur>";

echo $resultat;

?>

