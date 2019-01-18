
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
		<?php // require_once "mejn_php-functies.php"; ?>
	</head>

    <body>

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

                drawPinnetjes(1, blauw0, "blue");
                drawPinnetjes(2, geel0, "yellow");
                drawPinnetjes(3, groen0, "green");
                drawPinnetjes(4, rood0, "red");

            </script>
	    </div>
        </div>

    </body>
</html>
