
<?php

    function assign_spelers($kl, $spx) {
        switch ($kl) {
            case "blauw":
                $sp[1] = $spx[1]; $sp[2] = $spx[2];
                $sp[3] = $spx[3]; $sp[4] = $spx[4];
                break;
            case "geel":
                $sp[1] = $spx[2]; $sp[2] = $spx[3];
                $sp[3] = $spx[4]; $sp[4] = $spx[1];
                break;
            case "groen":
                $sp[1] = $spx[3]; $sp[2] = $spx[4];
                $sp[3] = $spx[1]; $sp[4] = $spx[2];
                break;
            case "rood":
                $sp[1] = $spx[4]; $sp[2] = $spx[1];
                $sp[3] = $spx[2]; $sp[4] = $spx[3];
        }
        // phpAlert("$sp[1], $sp[2], $sp[3], $sp[4]");
        // die();
        return $sp;
    }

    function div_speler_img($pcl, $naam, $act) {
        $imgnaam = str_ireplace(" ", "_", $naam);

        echo '<div id="card-' . $pcl . '">';
        echo '<p class=foto-hdr' . $act . '>' . $naam . '</p>';
        echo '<img class="foto-img" src="afbeeldingen/fotos/' . $imgnaam . '.png" alt="foto van ' . $naam . '">';
        echo '</div>';
    }


// ***************************************************************************************


function phpAlert ($msg) {
        echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }

?>
