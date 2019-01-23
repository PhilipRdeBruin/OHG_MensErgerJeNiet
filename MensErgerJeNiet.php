 
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset=utf-8>
		<title>Mens Erger je Niet</title>
		<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
		
        <script src="mejn.js"></script>
        <script src="mejn_dragndrop.js"></script>
		<!-- <script src="mejnQuery.js"></script> -->
		<link rel="stylesheet" href="mejn.css">
		<?php require_once "includes/mejn_php-functies.php"; ?>
	</head>

    <body>

    <?php
        if (isset($_GET["kleur1"])) {
            $kleur1 = $_GET["kleur1"];
        } else {
            $kleur1 = "blauw";
        }

        for ($i=1;$i<=4;$i++) { $act[$i] = ""; }
        $spelerx[1] = "Hans Poelman";
        $spelerx[2] = "Jacomijn Steen";
        $spelerx[3] = "Hergen Dillema";
        $spelerx[4] = "Philip de Bruin";
        $act[1] = "-act";

        echo '<script>init_spelbord("' . $kleur1 . '")</script>';
        $spelery = assign_spelers($kleur1, $spelerx);
    ?>

        <div id="beeldscherm">
            <div id="zij-kolom">
                <?php div_speler_img("b", $spelery[2], $act[2]); ?>
                <div id="chatbox">
                    <p>chatbox</p>
                </div>
                <?php div_speler_img("o", $spelery[1], $act[1]); ?>
            </div>
            <div id="speelbord">
                <div id="speelbord2">
                    <script>
                        for (i=1; i<=11; i++) {
                            ii = fmt00(i);
                            document.write('<div class="rij">');
                            for (j=1; j<=11; j++) {
                                jj = fmt00(j);
                                document.write('<div class="veld" id="veld' + ii + jj + '"></div>');
                            }
                            document.write('</div>');
                        }

                        drawRondjes(blauw, "rondblauw");
                        drawRondjes(geel, "rondgeel");
                        drawRondjes(groen, "rondgroen");
                        drawRondjes(rood, "rondrood");
                        drawRondjes(wit, "rondwit");

                        drawPinnetjes(1, blauw0, "#04f");
                        drawPinnetjes(2, geel0, "#e2c300");  // was: "#ffdc00"
                        drawPinnetjes(3, groen0, "green");
                        drawPinnetjes(4, rood0, "#c80000");

                    </script>
                </div>
            </div>
            <div id="zij-kolom">
                <?php div_speler_img("b", $spelery[3], $act[3]); ?>
                <div id="dobbelbox">
                <div id="dobbelkader">
                    <p>dobbelbox</p>
                    <img id="dobbelsteen" src="afbeeldingen/dobbelstenen/dice13.png" alt="dobbelsteen">
                    <p><button id="dobbelen">dobbelen</button></p>
                </div>
                </div>
                <?php div_speler_img("o", $spelery[4], $act[4]); ?>
            </div>
        </div>

    </body>
</html>
