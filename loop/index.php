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
    <style>
     table, tr, th, td {
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
</style>
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
    for ($reaNumber = 1; reaNumber <= 5; $reaNumber++) {
        echo '<tr>';
            echo '<td>&nbsp;</td>';
        echo '</tr>';
    }
echo '</table>';