<b>Jingles</b> Bank:
<button type="button" onclick="stationjingles()" style="padding:6pt;border:1.6pt solid;">Station Jingles</button>
<button type="button" onclick="communityjingles()" style="padding:6pt;border:1.6pt solid;">Community Jingles</button>
<button type="button" onclick="showjingles()" style="padding:6pt;border:1.6pt solid;">Show Jingles</button>
<button type="button" onclick="sfx()" style="padding:6pt;border:1.6pt solid;">SFXs</button>
<table id="station-jingles" style="text-align:center; width:100%;">
	<tr>
		<td>
			<audio id="jingle1" onended="stopJ1()" src="jingles/LTBRL Fing Silent.mp3" type="audio/mp3">
			</audio>
			<div class="jingle-box">
				<button type="button" name="button" id="j1play" onclick="playJ1()" class=" play-button">
					<i class="fas fa-play"></i>
				</button>
				<button type="button" name="button" id="j1stop" onclick="stopJ1()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
				LTBRL Fing Silent
			</div>
		</td>
		<td>
			<audio id="jingle2" onended="stopJ2()" src="jingles/LTBRL Fing Beat.mp3" type="audio/mp3">
			</audio>
			<div class="jingle-box">
				<button type="button" name="button" id="j2play" onclick="playJ2()" class=" play-button"><i class="fas fa-play"></i></button>
				<button type="button" name="button" id="j2stop" onclick="stopJ2()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
				LTBRL Fing Beat
			</div>
		</td>
		<td>
			<audio id="jingle3" onended="stopJ3()" src="jingles/LTBRL Fing Full.mp3" type="audio/mp3">
			</audio>
			<div class="jingle-box">
				<button type="button" name="button" id="j3play" onclick="playJ3()" class=" play-button"><i class="fas fa-play"></i></button>
				<button type="button" name="button" id="j3stop" onclick="stopJ3()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
				LTBRL Fing Full
			</div>
		</td>
		<td>
			<audio id="jingle10" onended="stopJ10()" src="jingles/LTBRL Fing Pulse.mp3" type="audio/mp3">
			</audio>
			<div class="jingle-box">
				<button type="button" name="button" id="j10play" onclick="playJ10()" class=" play-button"><i class="fas fa-play"></i></button>
				<button type="button" name="button" id="j10stop" onclick="stopJ10()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
				LTBRL Fing Pulse
			</div>
		</td>
		<td>
			<audio id="jingle11" onended="stopJ11()" src="jingles/LTBRL Fing Rotation.mp3" type="audio/mp3">
			</audio>
			<div class="jingle-box">
				<button type="button" name="button" id="j11play" onclick="playJ11()" class=" play-button"><i class="fas fa-play"></i></button>
				<button type="button" name="button" id="j11stop" onclick="stopJ11()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
				LTBRL Fing Rotation
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<audio id="jingle4" onended="stopJ4()" src="jingles/LTBRL Repeat Silent.mp3" type="audio/mp3">
			</audio>
			<div class="jingle-box">
				<button type="button" name="button" id="j4play" onclick="playJ4()" class=" play-button"><i class="fas fa-play"></i></button>
				<button type="button" name="button" id="j4stop" onclick="stopJ4()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
				LTBRL Repeat Silent
			</div>
		</td>
		<td>
			<audio id="jingle5" onended="stopJ5()" src="jingles/LTBRL Repeat Radar.mp3" type="audio/mp3">
			</audio>
			<div class="jingle-box">
				<button type="button" name="button" id="j5play" onclick="playJ5()" class=" play-button"><i class="fas fa-play"></i></button>
				<button type="button" name="button" id="j5stop" onclick="stopJ5()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
				LTBRL Repeat Radar
			</div>
		</td>
		<td>
			<audio id="jingle6" onended="stopJ6()" src="jingles/LTBRL Repeat Full.mp3" type="audio/mp3">
			</audio>
			<div class="jingle-box">
				<button type="button" name="button" id="j6play" onclick="playJ6()" class=" play-button"><i class="fas fa-play"></i></button>
				<button type="button" name="button" id="j6stop" onclick="stopJ6()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
				LTBRL Repeat Full
			</div>
		</td>
		<td>
			<audio id="jingle7" onended="stopJ7()" src="jingles/LTBRL Down Silent.mp3" type="audio/mp3">
			</audio>
			<div class="jingle-box">
				<button type="button" name="button" id="j7play" onclick="playJ7()" class=" play-button"><i class="fas fa-play"></i></button>
				<button type="button" name="button" id="j7stop" onclick="stopJ7()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
				LTBRL Down Silent
			</div>
		</td>
		<td>
			<audio id="jingle8" onended="stopJ8()" src="jingles/LTBRL Down Radar.mp3" type="audio/mp3">
			</audio>
			<div class="jingle-box">
				<button type="button" name="button" id="j8play" onclick="playJ8()" class=" play-button"><i class="fas fa-play"></i></button>
				<button type="button" name="button" id="j8stop" onclick="stopJ8()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
				LTBRL Down Radar
			</div>
		</td>
		<td>
			<audio id="jingle9" onended="stopJ9()" src="jingles/LTBRL Down Full.mp3" type="audio/mp3">
			</audio>
			<div class="jingle-box">
				<button type="button" name="button" id="j9play" onclick="playJ9()" class=" play-button"><i class="fas fa-play"></i></button>
				<button type="button" name="button" id="j9stop" onclick="stopJ9()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
				LTBRL Down Full
			</div>
		</td>
	</tr>
</table>

<div id="community-jingles" style="display:none;">
	<table>
		<tr>
			<td>
				<audio id="jingle12" onended="stopJ12()" src="jingles/LTBR Socials Silent.mp3" type="audio/mp3">
				</audio>
				<div class="jingle-box">
					<button type="button" name="button" id="j12play" onclick="playJ12()" class=" play-button"><i class="fas fa-play"></i></button>
					<button type="button" name="button" id="j12stop" onclick="stopJ12()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
					LTBR Socials Silent
				</div>
			</td>
			<td>
				<audio id="jingle13" onended="stopJ13()" src="jingles/LTBR Socials Radar.mp3" type="audio/mp3">
				</audio>
				<div class="jingle-box">
					<button type="button" name="button" id="j13play" onclick="playJ13()" class=" play-button"><i class="fas fa-play"></i></button>
					<button type="button" name="button" id="j13stop" onclick="stopJ13()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
					LTBR Socials Radar
				</div>
			</td>
			<td>
				<audio id="jingle14" onended="stopJ14()" src="jingles/LTBR Socials Full.mp3" type="audio/mp3">
				</audio>
				<div class="jingle-box">
					<button type="button" name="button" id="j14play" onclick="playJ14()" class=" play-button"><i class="fas fa-play"></i></button>
					<button type="button" name="button" id="j14stop" onclick="stopJ14()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
					LTBR Socials Full
				</div>
			</td>
		</tr>
	</table>
</div>

<div id="show-jingles" style="display:none;" class="">

	<table style="text-align:center; width:100%;">
		<tr>
			<td><button type="button" name="button" onclick="showjoel()">Joel's Show Jingles</button>
				<button type="button" name="button" onclick="showozey()">Ozey's Show Jingles</button></td>
			</tr>
		</table>

		<table id="joel-show-jingles">
			<tr>
				<td>
					<audio id="joeljingle1" onended="stopJoel1()" src="jingles/EDM Mix Eastern Promise.mp3" type="audio/mp3">
					</audio>
					<div class="jingle-box">
						<button type="button" name="button" id="joel1play" onclick="playJoel1()" class=" play-button"><i class="fas fa-play"></i></button>
						<button type="button" name="button" id="joel1stop" onclick="stopJoel1()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
						LTBRL EDM Mix Eastern Promise
					</div>
				</td>
				<td>
					<audio id="joeljingle2" onended="stopJoel2()" src="jingles/EDM Mix Alumium 1.mp3" type="audio/mp3">
					</audio>
					<div class="jingle-box">
						<button type="button" name="button" id="joel2play" onclick="playJoel2()" class=" play-button"><i class="fas fa-play"></i></button>
						<button type="button" name="button" id="joel2stop" onclick="stopJoel2()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
						LTBRL EDM Mix Aluminium
					</div>
				</td>
			</tr>
		</table>
		<table id="ozey-show-jingles" style="display:none;">
			<tr>
				<td>
					<audio id="ozeyjingle1" onended="stopOzey1()" src="jingles/LTBRL Ozey Silent.mp3" type="audio/mp3">
					</audio>
					<div class="jingle-box">
						<button type="button" name="button" id="ozey1play" onclick="playOzey1()" class=" play-button"><i class="fas fa-play"></i></button>
						<button type="button" name="button" id="ozey1stop" onclick="stopOzey1()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
						LTBRL Ozey Silent
					</div>
				</td>
				<td>
					<audio id="ozeyjingle2" onended="stopOzey2()" src="jingles/LTBRL Ozey Radar.mp3" type="audio/mp3">
					</audio>
					<div class="jingle-box">
						<button type="button" name="button" id="ozey2play" onclick="playOzey2()" class="play-button"><i class="fas fa-play"></i></button>
						<button type="button" name="button" id="ozey2stop" onclick="stopOzey2()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
						LTBRL Ozey Radar
					</div>
				</td>
				<td>
					<audio id="ozeyjingle3" onended="stopOzey3()" src="jingles/LTBRL Ozey Indie.mp3" type="audio/mp3">
					</audio>
					<div class="jingle-box">
						<button type="button" name="button" id="ozey3play" onclick="playOzey3()" class=" play-button"><i class="fas fa-play"></i></button>
						<button type="button" name="button" id="ozey3stop" onclick="stopOzey3()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
						LTBRL Ozey Indie
					</div>
				</td>
			</tr>
		</table>
	</div>

	<div id="sfxlist" style="display:none;" class="">

		<table style="text-align:center; width:100%;">
			<tr>
				<td>
					<button type="button" name="button" onclick="sfxFav()">Favourites</button>
					<button type="button" name="button" onclick="sfxLoops()">Loops</button>
					<button type="button" name="button" onclick="sfxlist1()">1</button>
					<button type="button" name="button" onclick="sfxlist2()">2</button>
				</td>
			</tr>
		</table>

		<table id="sfx-fav">
			<tr>
				<td>
					<audio id="sfxfav1" onended="stopSFXFav1()" src="sfx/EDM Mix Eastern Promise.mp3" type="audio/mp3">
					</audio>
					<div class="jingle-box">
						<button type="button" name="button" id="joel1play" onclick="playJoel1()" class=" play-button"><i class="fas fa-play"></i></button>
						<button type="button" name="button" id="joel1stop" onclick="stopJoel1()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
						LTBRL EDM Mix Eastern Promise
					</div>
				</td>
			</tr>
		</table>
		<table id="loops-list" style="display:none;">
			<tr>
				<td>
					<audio id="loop1" onended="stopLoop1()" src="sfx/61321_mansardian_news-background.mp3" type="audio/mp3">
					</audio>
					<div class="jingle-box">
						<button type="button" name="button" id="loop1play" onclick="playLoop1()" class=" play-button"><i class="fas fa-play"></i></button>
						<button type="button" name="button" id="loop1stop" onclick="stopLoop1()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
						News Background
					</div>
				</td>
				<td>
					<audio id="loop2" onended="stopLoop2()" src="sfx/Talk loop.mp3" type="audio/mp3">
					</audio>
					<div class="jingle-box">
						<button type="button" name="button" id="loop2play" onclick="playLoop2()" class=" play-button"><i class="fas fa-play"></i></button>
						<button type="button" name="button" id="loop2stop" onclick="stopLoop2()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
						Talk Loop
					</div>
				</td>
				<td>
					<audio id="loop3" onended="stopLoop3()" src="sfx/synth layers.mp3" type="audio/mp3">
					</audio>
					<div class="jingle-box">
						<button type="button" name="button" id="loop3play" onclick="playLoop3()" class=" play-button"><i class="fas fa-play"></i></button>
						<button type="button" name="button" id="loop3stop" onclick="stopLoop3()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
						Synth Layers
					</div>
				</td>
			</tr>
		</table>
		<table id="sfx-list-1" style="display:none;">
			<tr>
				<td>
					<audio id="sfx1" onended="stopSFX1()" src="sfx/Ahh Yeah!.mp3" type="audio/mp3">
					</audio>
					<div class="jingle-box">
						<button type="button" name="button" id="sfx1play" onclick="playSFX1()" class=" play-button"><i class="fas fa-play"></i></button>
						<button type="button" name="button" id="sfx1stop" onclick="stopSFX1()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
						Ahh Yeah!
					</div>
				</td>
				<td>
					<audio id="sfx2" onended="stopSFX2()" src="sfx/airhorn.mp3" type="audio/mp3">
					</audio>
					<div class="jingle-box">
						<button type="button" name="button" id="sfx2play" onclick="playSFX2()" class=" play-button"><i class="fas fa-play"></i></button>
						<button type="button" name="button" id="sfx2stop" onclick="stopSFX2()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
						Airhorn
					</div>
				</td>
			</tr>
		</table>
		<table id="sfx-list-2" style="display:none;">
			<tr>
				<td>
					<audio id="ozeyjingle3" onended="stopOzey3()" src="sfx/LTBRL Ozey Indie.mp3" type="audio/mp3">
					</audio>
					<div class="jingle-box">
						<button type="button" name="button" id="ozey3play" onclick="playOzey3()" class=" play-button"><i class="fas fa-play"></i></button>
						<button type="button" name="button" id="ozey3stop" onclick="stopOzey3()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
						LTBRL Ozey Indie
					</div>
				</td>
			</tr>
		</table>
	</div>

	<?php
	include 'playstopfuns.php';
	include 'playstopbuttons.php';
	?>

	<script type="text/javascript">
	function sfx() {
		document.getElementById("station-jingles").style.display = "none";
		document.getElementById("show-jingles").style.display = "none";
		document.getElementById("community-jingles").style.display = "none";
		document.getElementById("sfxlist").style.display = "block";
	}

	function showjingles() {
		document.getElementById("show-jingles").style.display = "block";
		document.getElementById("station-jingles").style.display = "none";
		document.getElementById("community-jingles").style.display = "none";
		document.getElementById("sfxlist").style.display = "none";
	}

	function stationjingles() {
		document.getElementById("station-jingles").style.display = "block";
		document.getElementById("show-jingles").style.display = "none";
		document.getElementById("community-jingles").style.display = "none";
		document.getElementById("sfxlist").style.display = "none";
	}

	function communityjingles() {
		document.getElementById("community-jingles").style.display = "block";
		document.getElementById("show-jingles").style.display = "none";
		document.getElementById("station-jingles").style.display = "none";
		document.getElementById("sfxlist").style.display = "none";
	}

	function showjoel() {
		document.getElementById("joel-show-jingles").style.display = "block";
		document.getElementById("ozey-show-jingles").style.display = "none";
	}

	function showozey() {
		document.getElementById("joel-show-jingles").style.display = "none";
		document.getElementById("ozey-show-jingles").style.display = "block";
	}

	function sfxFav() {
		document.getElementById("sfx-list-1").style.display = "none";
		document.getElementById("sfx-fav").style.display = "block";
		document.getElementById("loops-list").style.display = "none";
		document.getElementById("sfx-list-2").style.display = "none";
	}

	function sfxLoops() {
		document.getElementById("sfx-list-1").style.display = "none";
		document.getElementById("sfx-fav").style.display = "none";
		document.getElementById("loops-list").style.display = "block";
		document.getElementById("sfx-list-2").style.display = "none";
	}

	function sfxlist1() {
		document.getElementById("sfx-list-1").style.display = "block";
		document.getElementById("sfx-fav").style.display = "none";
		document.getElementById("loops-list").style.display = "none";
		document.getElementById("sfx-list-2").style.display = "none";
	}

	function sfxlist2() {
		document.getElementById("sfx-fav").style.display = "none";
		document.getElementById("loops-list").style.display = "none";
		document.getElementById("sfx-list-1").style.display = "none";
		document.getElementById("sfx-list-2").style.display = "block";
	}
</script>
