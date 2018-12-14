<?php
/**
 * Created by PhpStorm.
 * User: kelvin.jaska
 * Date: 14.12.2018
 * Time: 13:57
 */
/* for
 * for($jmn = alg; $jmn <=lopp; $jmn++) {
 *  tegevused, mis toimuvad nii kaua kui jm vaartus ei ole loppvaartust saavutanud
 * }
*/
?>
<style>
     table, tr, th, td {
        width: 100px;
         height: auto;
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
    <script>
        <!--
        function timedRefresh(timeoutPeriod) {
        setTimeout("location.reload(true);",timeoutPeriod);
        }

        window.onload = timedRefresh(500);

        //   -->
    </script>
<?php
echo '<h1>Ulesanne</h1>';

for($arv = 1; $arv <= 10; $arv++) {
    $varv = '';
    if ($arv & 2 == 0) {
        $varv = 'green';
    } else {
        $varv = 'red';
    }
    echo '<div class="color: '.$varv.'">'.$arv.'</div>';
}

echo '<hr>';
echo '<table>';
    for ($reaNumber = 1; $reaNumber <= 5; $reaNumber++) {
        echo '<tr>';
        for ($veeruNumber = 1; $veeruNumber <= 5; $veeruNumber++) {
            $varv = '#';
            for($kord = 1; $kord <= 6; $kord++) {
                $varv = $varv.dechex(rand(0,15));
            }
            echo '<td style="background: '. $varv.'">&nbsp;</td>';
        }
        echo '</tr>';
    }
echo '</table>';

echo '<hr>';

echo '<table>';
        echo '<tr>';
            for($arv1 = 0; $arv1 <= 10; $arv1++) {
            $txt = ($arv1 == 0) ? '&nbsp;' : $arv1;
             echo '<th style="background: deepskyblue ">' . $txt . '</th>';
            }
        echo '</tr>';
    for($arv1 = 1; $arv1 <= 10; $arv1++) {
        echo '<tr>';
            echo '<th style="background-color: coral;">'.$arv1.'</th>';
            for($arv2 = 1; $arv2 <= 10; $arv2++) {
                echo '<td>';
                echo ($arv1 * $arv2);
                echo '</td>';
            }
        echo '</tr>';
    }
echo '</table>';

echo '<hr>';
/* WHLE WHILE WHILE WHILE WHILE WHILE WHILE WHILE WHILE WHILE WHILE
* while(tinigumus) {
 * tegevused, mis toimuvad nii kaua kui tingimus kehtib
*/


