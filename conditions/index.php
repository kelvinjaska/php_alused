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

echo '<h5 style="font-size:50px; color: white;">Ulesanne</h5>';
$arv = rand(0, 100);
if($arv % 2 == 0) {
    echo '<div style="color: red; font-size: 40px">'. $arv .'</div>';
} else {
    echo '<div style="color: blue; font-size: 40px">'. $arv . '</div>';
}
/** tingimuslaused
 *  if (tingimus) {
 * tegevused , mis toimuvad siis, kui tingimus kehtib
 * } else if (tingimus2) {
 * muidu, kui tingimus ei kehti, toimuvad siin kirjutatud tegevused
 * } else {
 * muidu, kui koik mis eelenvat kirjutatud, rs sobi , tootab see osa
 * }
 */

echo '<hr>';
echo '<h5 style="font-size:50px; color: white;">Ulesanne 2</h5>';
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
/** tingimuslaused
 * switch (kontroll) {
 *      case: vastus:
 *          tegevused, mis antud case puhul toimivad
 *          break;
 *      default:
 *          tegevused, mis toimuvad siis kui koik muu ei sobi
 *          break;
 * }
 */
echo '<hr>';
echo '<h5 style="font-size:50px; color: white;">Ulesanne 3</h5>';

?>
    <style>
        .round {
            width: 100px;
            height: 100px;
            border: 1px solid white;
            border-radius: 50px;
        }
    </style>
<?php
$aktiive = 'roheline';
switch ($aktiivne) {
    case 'punane':
        echo '<div class="round" style="background-color: red;"></div>';
        echo '<div></div>';
        echo '<div></div>';
        break;
     case 'kollane':
        echo '<div class="round" style="background-color: yellow;"></div>';
        echo '<div></div>';
        echo '<div></div>';
        break;
    case 'roheline':
        echo '<div class="round" style="background-color: green;"></div>';
        echo '<div></div>';
        echo '<div></div>';
        break;
}
