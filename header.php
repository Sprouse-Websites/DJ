<!-- Start of header.php file -->
<body onload="load()">
	<?php include 'alpha.php'; ?>
	<div id="showbox" style="position: sticky; top: 0pt; width: 100%; background-color: #888; color: #eee; padding: 3pt; padding-left: 7pt; display:none; z-index:100;">
		Show
		<select id="ShowDecksModule" name="decks" onchange="updateShowModules()">
			<option value="0">Hide Decks</option>
			<option value="1" disabled>1 Deck (Coming Soon)</option>
			<option value="2" selected>2 Decks</option>
			<option value="4" disabled>4 Decks (Coming Soon)</option>
		</select>
		<input id="ShowTimeModule" type="checkbox" checked onclick="updateShowModules()" name="time" value="time"> Time
		<input id="ShowWeatherModule" type="checkbox" checked onclick="updateShowModules()" name="weather" value="weather"> Weather
		<input id="ShowPlaylistModule" type="checkbox" checked onclick="updateShowModules()" name="playlist" value="playlist"> Playlist
		<input id="ShowJinglesModule" type="checkbox" checked onclick="updateShowModules()" name="jingles" value="jingles"> Jingles
		<input id="ShowMidiModule" type="checkbox" disabled onclick="updateShowModules()" name="midi" value="midi"> MIDI
		<a href="settings.php">
			<i class="fas fa-cogs"></i> Settings
		</a>
	</div>
	<div id="snackbar" class="snackbar">Some text some message..</div>
	<div id="ErrorSnackbar" class="error snackbar">Some text some message..</div>
	<div id="offlineSnackbar" class="snackbar">&f6ac; <i class="fas fa-wifi-slash"></i> Offline. Please connect to the internet to continue using</div>
	<!-- End of header.php file -->
