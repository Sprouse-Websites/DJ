<!-- Start of header.php file -->
<!DOCTYPE html>
<html>
<head>
	<?php $version = "Beta 0.1.8" ?>
	<!-- Google Analytics -->
	<!-- Global Site Tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-145359620-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', 'UA-145359620-1', { 'optimize_id': 'GTM-5W3HGPF'});
</script>


<meta charset="UTF-8">
<!-- <meta http-equiv="refresh" content="5"> -->
<!-- https://developer.mozilla.org/en-US/docs/Web/HTTP/CSP -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'self'">
<meta http-equiv="X-Content-Security-Policy" content="default-src 'self'; script-src 'self'"> -->

<!-- <link rel="stylesheet" href="http://www.w3schools.com/w3css/4/w3.css"> -->

<title>DJ</title>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/search.css">
<link rel="stylesheet" href="css/songlist.css">
<link rel="stylesheet" href="css/rcm.css">
<link rel="stylesheet" href="css/fa.css">
<link rel="stylesheet" href="css/snackbar.css">
<!-- <link rel="stylesheet/less" type="text/css" href="css/styles.less" /> -->
<link rel="stylesheet/less" type="text/css" href="css/decksprogress.less" />
<script src="http://cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>
<!-- <link rel="stylesheet" href="css/decksprogress.scss"> -->

<link rel="icon" href="media/icon.png">

<script src="https://kit.fontawesome.com/e8abc56752.js" crossorigin="anonymous"></script>
<script src="js/addtodecks.js" charset="utf-8"></script>
<script src="js/autocomplete.js" charset="utf-8"></script>
<script src="js/addtodecks.js" charset="utf-8"></script>
<script src="js/decks.js" charset="utf-8"></script>
<script src="js/filter.js" charset="utf-8"></script>
<!-- <script src="js/refresh.js" charset="utf-8"></script> -->
<script src="js/sorttable.js" charset="utf-8"></script>
<script src="js/modules.js" charset="utf-8"></script>
<script src="js/jcontrols.js" charset="utf-8"></script>
<script src="js/playlists.js" charset="utf-8"></script>
<script src="js/snackbar.js" charset="utf-8"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/jsmediatags.min.js"></script>
<script src="js/decksprogress.js" charset="utf-8"></script>
<script type="text/javascript" src="https://unpkg.com/album-art"></script>

</head>
<body onload="load()">
	<?php include 'beta.php'; ?>
	<div id="showbox" style="position: sticky; top: 0pt; width: 100%; background-color: #888; color: #ddd; padding: 3pt; padding-left: 7pt; display:none; z-index:100;">
		Show
		<select id="ShowDecksModule" name="decks" onchange="updateShowModules()">
			<option value="0">Hide Decks</option>
			<option value="1" disabled>1 Deck</option>
			<option value="2" selected>2 Decks</option>
			<option value="4" disabled>4 Decks</option>
		</select>
		<input id="ShowTimeModule" type="checkbox" checked onclick="updateShowModules()" name="time" value="time"> Time
		<input id="ShowWeatherModule" type="checkbox" checked onclick="updateShowModules()" name="weather" value="weather"> Weather
		<input id="ShowPlaylistModule" type="checkbox" checked onclick="updateShowModules()" name="playlist" value="playlist"> Playlist
		<input id="ShowJinglesModule" type="checkbox" checked onclick="updateShowModules()" name="jingles" value="jingles"> Jingles
	</div>
	<div id="snackbar" class="snackbar">Some text some message..</div>
	<div id="offlineSnackbar" class="snackbar">&f6ac; <i class="fas fa-wifi-slash"></i> Offline. Please connect to the internet to continue using</div>
	<!-- End of header.php file -->
