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
        $varv = '#';
        for($kord = 1; $kord <= 6; $kord++) {
            $varv = $varv.dechex(rand(0,15));
        }
            echo '<td style="background '. $varv.'">&nbsp;</td>';
            echo '<td style="background '. $varv.'">&nbsp;</td>';
            echo '<td style="background '. $varv.'">&nbsp;</td>';
            echo '<td style="background '. $varv.'">&nbsp;</td>';
            echo '<td style="background '. $varv.'">&nbsp;</td>';
        echo '</tr>';
    }
echo '</table>';