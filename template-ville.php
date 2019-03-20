
<?php

echo '<form action="" method="post">
    Ville : <input type="text" name="city-name" id="city-name"><input type="submit">
</form>';

$url = 'https://www.prevision-meteo.ch/services/json/'.$_POST["city-name"];
$contenus = file_get_contents($url);
$contenus=json_decode($contenus);
echo $contenus->name;


foreach ($contenus as $contenu) {
    if (isset($contenu->name)){
        echo '<span>La température à ';
        echo $contenu->name;
        echo '</span>';
    }
    if (isset($contenu->tmp)) {
        echo '<span>est de ';
        echo $contenu->tmp;
        echo '</span>';
    }
}

?>
