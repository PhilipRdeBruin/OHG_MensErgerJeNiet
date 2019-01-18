
var blauw = [[10,1,30],[10,2,30],[11,1,30],[11,2,30], [11,5,50,"A"],[7,6,30,"a"],[8,6,30,"b"],[9,6,30,"c"],[10,6,30,"d"]];
var geel = [[1,1,30],[1,2,30],[2,1,30],[2,2,30],[5,1,50, "A"],[6,2,30,"a"],[6,3,30,"b"],[6,4,30,"c"],[6,5,30,"d"]];
var groen = [[1,10,30],[1,11,30],[2,10,30],[2,11,30],[1,7,50,"A"],[2,6,30,"a"],[3,6,30,"b"],[4,6,30,"c"],[5,6,30,"d"]];
var rood = [[10,10,30],[10,11,30],[11,10,30],[11,11,30], [7,11,50,"A"],[6,7,30,"a"],[6,8,30,"b"],[6,9,30,"c"],[6,10,30,"d"]];
var wit = [[5,2,50],[5,3,50],[5,4,50],[5,5,50],[4,5,50],[3,5,50],[2,5,50],[1,5,50],[1,6,50],
           [2,7,50],[3,7,50],[4,7,50],[5,7,50],[5,8,50],[5,9,50],[5,10,50],[5,11,50],[6,11,50],
           [7,7,50],[7,8,50],[7,9,50],[7,10,50],[8,7,50],[9,7,50],[10,7,50],[11,7,50],[11,6,50],
           [7,5,50],[8,5,50],[9,5,50],[10,5,50],[7,4,50],[7,3,50],[7,2,50],[7,1,50],[6,1,50]];
var blauw0 = [[10,1],[10,2],[11,1],[11,2]];
var geel0 = [[1,1],[1,2],[2,1],[2,2]];
var groen0 = [[1,10],[1,11],[2,10],[2,11]];
var rood0 = [[10,10],[10,11],[11,10],[11,11]];

function initveldparameters() {

}

function fmt00(x) {
    y = (x < 10) ? "0" + x : x;
    return y;
}

function drawRondjes(kleur, klas) {
    for (i=0; i<kleur.length; i++) {
        ii = fmt00(kleur[i][0]);
        jj = fmt00(kleur[i][1]);
        sz = kleur[i][2];
        lt = (kleur[i][3] != undefined	) ? kleur[i][3] : ""; 
        
        x = document.getElementById("veld" + ii + jj);
        htmlstring = '	            <div class="dropholder">';
        htmlstring = htmlstring + '		<div  class="dropid ' + klas + ' sz' + sz + ' " id="dropid' + ii + jj + '" ondrop="drop(event)" ondragover="allowDrop(event)">';
        htmlstring = htmlstring + '	        <span class="rondtekst' + sz + '">' + lt + '</span>';
	    htmlstring = htmlstring + '		</div>';
        htmlstring = htmlstring + '	</div>';
        // htmlstring = htmlstring + '	<div class="rondtekst' + sz + '">' + lt + '</div>';
        x.innerHTML = htmlstring;
    }
}

function drawPinnetjes(kl, kleur, color) {
    for (i=0; i<4; i++) {
        j = i + 1;
        ii = fmt00(kleur[i][0]);
        jj = fmt00(kleur[i][1]);
        x = document.getElementById("dropid" + ii + jj);
        htmlstring = '	            <div class = "dragcl" id="dragid' + kl + j + '" draggable="true" ondragstart="drag(event)">';
        htmlstring = htmlstring + '		<svg class="pinkleur">';
        htmlstring = htmlstring + '			<circle class="kleur" cx="11" cy="11" r="11" fill="' + color + '" />';
        htmlstring = htmlstring + '		</svg>';
        htmlstring = htmlstring + '	</div>';
        x.innerHTML = htmlstring;
    }
}
