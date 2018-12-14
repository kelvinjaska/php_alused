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
 * muidu, kui tingimus ei kehti, toimuvad siin kirjutatud tegevused
 * }
*/
/** tingimuslaused
 *  if (tingimus) {
 * tegevused , mis toimuvad siis, kui tingimus kehtib
 * } else if (tingimus2) {
 * muidu, kui tingimus ei kehti, toimuvad siin kirjutatud tegevused
 * } else {
 * muidu, kui koik mis eelenvat kirjutatud, rs sobi , tootab see osa
 * }
 */

echo '<h5 style="font-size:50px; color: white;">Ulesanne</h5>';
$arv = rand(0, 100);
if($arv % 2 == 0) {
    echo '<div style="color: red;">'. $arv .'</div>';
} else {
    echo '<div style="color: blue;">'. $arv . '</div>';
}

echo '<hr>';
echo '<body style="background: black">';
$arv2 = rand(0,100);
if($arv2 >= 0 and $arv2 < 25) {
    echo '<div style="color: red; font-size: 40px">' . $arv2 . '</div>';
} else if ($arv2 >= 25 and $arv2 < 50) {
    echo '<div style="color: green; font-size: 40px">' . $arv2 . '</div>';
} else if ($arv2 >= 50 and $arv2 < 75) {
    echo '<div style="color: yellow; font-size: 40px">' . $arv2 . '</div>';
} else if ($arv2 >= 75 and $arv2 < 100) {
    echo '<div style="color: orange; font-size: 40px">' . $arv2 . '</div>';
} else {
    echo '<div style="color: white; font-size: 40px">' . $arv2 . '</div>';
}