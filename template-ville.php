
<?php

echo '<div class="flex-center-col border-2px bg-widget" style="width: 300px; padding: 20px; border: 5px solid white;">
            <h4 class="center-text padding-bot-widget white-font">METEO</h4>';
echo '<form action="" method="post" class="flex-center-row padding-bot-widget">
        <input type="text" name="city-name" id="city-name" placeholder="Nom de votre ville" onkeydown="if(event.keyCode==32) return false;">
        <input type="submit">
            </form>';

$url = 'https://www.prevision-meteo.ch/services/json/'.trim($_POST["city-name"]);

$contenus = file_get_contents($url);
$contenus=json_decode($contenus);





if (isset($contenus->city_info->name)) {
    echo '<div class="flex-center-row center-text  bg-tab-widget">';
    echo '<img src="'.$contenus->current_condition->icon.'">';
    echo '</div>';


    echo '<div class="flex-center-row center-text ">';
    echo '<div class="width-50  white-font bg-tab-widget">Ville</div>';
    echo '<div class="width-50  white-font bg-tab-widget">'.$contenus->city_info->name.'</div> ';
    echo '</div>';



    echo '<div class="flex-center-row center-text">';
    echo '<div class="width-50  white-font bg-tab-widget">Date</div>';
    echo '<div class="width-50  white-font bg-tab-widget">'.$contenus->current_condition->date.'</div> ';
    echo '</div>';

    echo '<div class="flex-center-row center-text">';
    echo '<div class="width-50  white-font bg-tab-widget">Heure</div>';
    echo '<div class="width-50  white-font bg-tab-widget">'.$contenus->current_condition->hour.'</div> ';
    echo '</div>';

    echo '<div class="flex-center-row center-text">';
    echo '<div class="width-50  white-font bg-tab-widget">Temperature</div>';
    echo '<div class="width-50  white-font bg-tab-widget">'.$contenus->current_condition->tmp.'</div> ';
    echo '</div>';

    echo '<div class="flex-center-row center-text">';
    echo '<div class="width-50  white-font bg-tab-widget">Condition</div>';
    echo '<div class="width-50  white-font bg-tab-widget">'.$contenus->current_condition->condition.'</div> ';
    echo '</div>';




    echo '</div>';}
else{
    echo '<div class="flex-center-row center-text ">';
    echo '<p>Ce nom de ville est incorrect</p>';
    echo '</div>';
}

?>
