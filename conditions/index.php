<?php
/**
 * Created by PhpStorm.
 * User: kelvin.jaska
 * Date: 14.12.2018
 * Time: 12:33
 */

/** tingimuslaused
*  if (tingimus) {
 * tegevused , mis toimuvad siis, kui tingimus kehtib
 * } else {
 * mui,du, kui tingimus ei kehti, toimuvad siin kirjutatud tegevused
 * }
*/

echo '<h5>Ulesanne</h5>';
$arv1 = 68;
if(arv % 2 == 0) {
    echo '<div style="color: red";>'.$arv.'</div>';
} else {
    echo '<div style="color: blue;">'. $arv . '</div>';
}