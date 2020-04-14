<?php
include 'header.php';
include 'http://www.sprousewebsites.co.uk/hidden/music-db-secret.php';
include 'vars.php';
include 'decks.php';
include 'weather.php';
include 'playlist.php';
include 'jingles.php';
include 'addtodeckjs.php';
include 'rcm.php';
?>


<script type="text/javascript">
var i = document.getElementById("rcm").style;
if (document.addEventListener) {
	document.addEventListener('contextmenu', function(e) {
		var posX = e.clientX;
		var posY = e.clientY;
		menu(posX, posY);
		e.preventDefault();
	}, false);
	document.addEventListener('click', function(e) {
		i.opacity = "0";
		setTimeout(function() {
			i.visibility = "hidden";
		}, 501);
	}, false);
} else {
	document.attachEvent('oncontextmenu', function(e) {
		var posX = e.clientX;
		var posY = e.clientY;
		menu(posX, posY);
		e.preventDefault();
	});
	document.attachEvent('onclick', function(e) {
		i.opacity = "0";
		setTimeout(function() {
			i.visibility = "hidden";
		}, 501);
	});
}

function menu(x, y) {
	i.top = y + "px";
	i.left = x + "px";
	i.visibility = "visible";
	i.opacity = "1";
}
</script>

<?php
include 'footer.php';
?>
