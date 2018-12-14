<?php
/**
 * Created by PhpStorm.
 * User: kelvin.jaska
 * Date: 14.12.2018
 * Time: 15:17
 */

/* WHLE WHILE WHILE WHILE WHILE WHILE WHILE WHILE WHILE WHILE WHILE
* while(tinigumus) {
 * tegevused, mis toimuvad nii kaua kui tingimus kehtib
*/
$arv = 1234;
$summa = 0;
while($arv != 0) {
    $number = $arv % 10;
    echo 'Number = '.$number. '<br>';
    $arv = $arv /10;
    echo ' Arv float = '.$arv. '<br>';
    settype($arv, type: 'int');
    echo 'Arv int = '.$arv. '<br>';
    $summa + $number;
    echo '<hr>';
}
echo 'Arvu numbrite summa = '. $summa . '<br>';