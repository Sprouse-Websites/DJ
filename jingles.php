<!-- Start of jingles.php file -->
<div id="jinglesModules" class="">

	<b>Jingles</b> Bank:
	<button type="button" onclick="stationjingles()" style="padding:6pt;border:1.6pt solid;" class="JingleBankButton">Station Jingles</button>
	<button type="button" onclick="communityjingles()" style="padding:6pt;border:1.6pt solid;" class="JingleBankButton">Community Jingles</button>
	<button type="button" onclick="showjingles()" style="padding:6pt;border:1.6pt solid;" class="JingleBankButton">Show Jingles</button>
	<button type="button" onclick="sfx()" style="padding:6pt;border:1.6pt solid;" class="JingleBankButton">SFXs</button>
	<a href="jingles" target="_blank">View all jingles</a>
	<a href="sfx" target="_blank">View all sound effects</a>
	<table id="station-jingles" style="text-align:center; width:100%;">
		<tr>
			<td>
				<audio id="jingle1"  preload="auto" onended="stopJ1()" src="https://www.sprousewebsitestest.com/dj/jingles/LTBRL Fing Silent.mp3" type="audio/mp3">
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
				<audio id="jingle2"  preload="auto" onended="stopJ2()" src="https://www.sprousewebsitestest.com/dj/jingles/LTBRL Fing Beat.mp3" type="audio/mp3">
				</audio>
				<div class="jingle-box">
					<button type="button" name="button" id="j2play" onclick="playJ2()" class=" play-button"><i class="fas fa-play"></i></button>
					<button type="button" name="button" id="j2stop" onclick="stopJ2()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
					LTBRL Fing Beat
				</div>
			</td>
			<td>
				<audio id="jingle3"  preload="auto" onended="stopJ3()" src="https://www.sprousewebsitestest.com/dj/jingles/LTBRL Fing Full.mp3" type="audio/mp3">
				</audio>
				<div class="jingle-box">
					<button type="button" name="button" id="j3play" onclick="playJ3()" class=" play-button"><i class="fas fa-play"></i></button>
					<button type="button" name="button" id="j3stop" onclick="stopJ3()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
					LTBRL Fing Full
				</div>
			</td>
			<td>
				<audio id="jingle10"  preload="auto" onended="stopJ10()" src="https://www.sprousewebsitestest.com/dj/jingles/LTBRL Fing Pulse.mp3" type="audio/mp3">
				</audio>
				<div class="jingle-box">
					<button type="button" name="button" id="j10play" onclick="playJ10()" class=" play-button"><i class="fas fa-play"></i></button>
					<button type="button" name="button" id="j10stop" onclick="stopJ10()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
					LTBRL Fing Pulse
				</div>
			</td>
			<td>
				<audio id="jingle11"  preload="auto" onended="stopJ11()" src="https://www.sprousewebsitestest.com/dj/jingles/LTBRL Fing Rotation.mp3" type="audio/mp3">
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
				<audio id="jingle4"  preload="auto" onended="stopJ4()" src="https://www.sprousewebsitestest.com/dj/jingles/LTBRL Repeat Silent.mp3" type="audio/mp3">
				</audio>
				<div class="jingle-box">
					<button type="button" name="button" id="j4play" onclick="playJ4()" class=" play-button"><i class="fas fa-play"></i></button>
					<button type="button" name="button" id="j4stop" onclick="stopJ4()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
					LTBRL Repeat Silent
				</div>
			</td>
			<td>
				<audio id="jingle5"  preload="auto" onended="stopJ5()" src="https://www.sprousewebsitestest.com/dj/jingles/LTBRL Repeat Radar.mp3" type="audio/mp3">
				</audio>
				<div class="jingle-box">
					<button type="button" name="button" id="j5play" onclick="playJ5()" class=" play-button"><i class="fas fa-play"></i></button>
					<button type="button" name="button" id="j5stop" onclick="stopJ5()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
					LTBRL Repeat Radar
				</div>
			</td>
			<td>
				<audio id="jingle6"  preload="auto" onended="stopJ6()" src="https://www.sprousewebsitestest.com/dj/jingles/LTBRL Repeat Full.mp3" type="audio/mp3">
				</audio>
				<div class="jingle-box">
					<button type="button" name="button" id="j6play" onclick="playJ6()" class=" play-button"><i class="fas fa-play"></i></button>
					<button type="button" name="button" id="j6stop" onclick="stopJ6()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
					LTBRL Repeat Full
				</div>
			</td>
			<td>
				<audio id="jingle7"  preload="auto" onended="stopJ7()" src="https://www.sprousewebsitestest.com/dj/jingles/LTBRL Down Silent.mp3" type="audio/mp3">
				</audio>
				<div class="jingle-box">
					<button type="button" name="button" id="j7play" onclick="playJ7()" class=" play-button"><i class="fas fa-play"></i></button>
					<button type="button" name="button" id="j7stop" onclick="stopJ7()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
					LTBRL Down Silent
				</div>
			</td>
			<td>
				<audio id="jingle8"  preload="auto" onended="stopJ8()" src="https://www.sprousewebsitestest.com/dj/jingles/LTBRL Down Radar.mp3" type="audio/mp3">
				</audio>
				<div class="jingle-box">
					<button type="button" name="button" id="j8play" onclick="playJ8()" class=" play-button"><i class="fas fa-play"></i></button>
					<button type="button" name="button" id="j8stop" onclick="stopJ8()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
					LTBRL Down Radar
				</div>
			</td>
			<td>
				<audio id="jingle9"  preload="auto" onended="stopJ9()" src="https://www.sprousewebsitestest.com/dj/jingles/LTBRL Down Full.mp3" type="audio/mp3">
				</audio>
				<div class="jingle-box">
					<button type="button" name="button" id="j9play" onclick="playJ9()" class=" play-button"><i class="fas fa-play"></i></button>
					<button type="button" name="button" id="j9stop" onclick="stopJ9()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
					LTBRL Down Full
				</div>
			</td>
		</tr>
	</table>

	<div id="community-jingles" style="display:none; width: 100%;">
		<table>
			<tr>
				<td>
					<audio id="jingle12"  preload="auto" onended="stopJ12()" src="https://www.sprousewebsitestest.com/dj/jingles/LTBR Socials Silent.mp3" type="audio/mp3">
					</audio>
					<div class="jingle-box">
						<button type="button" name="button" id="j12play" onclick="playJ12()" class=" play-button"><i class="fas fa-play"></i></button>
						<button type="button" name="button" id="j12stop" onclick="stopJ12()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
						LTBR Socials Silent
					</div>
				</td>
				<td>
					<audio id="jingle13"  preload="auto" onended="stopJ13()" src="https://www.sprousewebsitestest.com/dj/jingles/LTBR Socials Radar.mp3" type="audio/mp3">
					</audio>
					<div class="jingle-box">
						<button type="button" name="button" id="j13play" onclick="playJ13()" class=" play-button"><i class="fas fa-play"></i></button>
						<button type="button" name="button" id="j13stop" onclick="stopJ13()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
						LTBR Socials Radar
					</div>
				</td>
				<td>
					<audio id="jingle14"  preload="auto" onended="stopJ14()" src="https://www.sprousewebsitestest.com/dj/jingles/LTBR Socials Full.mp3" type="audio/mp3">
					</audio>
					<div class="jingle-box">
						<button type="button" name="button" id="j14play" onclick="playJ14()" class=" play-button"><i class="fas fa-play"></i></button>
						<button type="button" name="button" id="j14stop" onclick="stopJ14()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
						LTBR Socials Full
					</div>
				</td>
				<td>
					<audio id="jingle15"  preload="auto" onended="stopJ15()" src="https://www.sprousewebsitestest.com/dj/jingles/LTBR Community Silent.mp3" type="audio/mp3">
					</audio>
					<div class="jingle-box">
						<button type="button" name="button" id="j15play" onclick="playJ15()" class=" play-button"><i class="fas fa-play"></i></button>
						<button type="button" name="button" id="j15stop" onclick="stopJ15()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
						LTBR Community Silent
					</div>
				</td>
				<td>
					<audio id="jingle16"  preload="auto" onended="stopJ16()" src="https://www.sprousewebsitestest.com/dj/jingles/LTBR Community Radar.mp3" type="audio/mp3">
					</audio>
					<div class="jingle-box">
						<button type="button" name="button" id="j16play" onclick="playJ16()" class=" play-button"><i class="fas fa-play"></i></button>
						<button type="button" name="button" id="j16stop" onclick="stopJ16()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
						LTBR Community Radar
					</div>
				</td>
				<td>
					<audio id="jingle17"  preload="auto" onended="stopJ17()" src="https://www.sprousewebsitestest.com/dj/jingles/LTBR Community Full.mp3" type="audio/mp3">
					</audio>
					<div class="jingle-box">
						<button type="button" name="button" id="j17play" onclick="playJ17()" class=" play-button"><i class="fas fa-play"></i></button>
						<button type="button" name="button" id="j17stop" onclick="stopJ17()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
						LTBR Community Full
					</div>
				</td>
			</tr>
		</table>
	</div>

	<div id="show-jingles" style="display:none; width: 100%;" class="">

		<table style="text-align:center; width:100%;">
			<tr>
				<td><button type="button" name="button" onclick="showjoel()" class="JingleBankButton">Joel's Show Jingles</button>
					<button type="button" name="button" onclick="showozey()" class="JingleBankButton">Ozey's Show Jingles</button></td>
				</tr>
			</table>

			<table id="joel-show-jingles" style="width: 100%;">
				<tr>
					<td>
						<audio id="joeljingle1"  preload="auto" onended="stopJoel1()" src="https://www.sprousewebsitestest.com/dj/jingles/LTBRL EDM Mix Startup.mp3" type="audio/mp3">
						</audio>
						<div class="jingle-box">
							<button type="button" name="button" id="joel1play" onclick="playJoel1()" class=" play-button"><i class="fas fa-play"></i></button>
							<button type="button" name="button" id="joel1stop" onclick="stopJoel1()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
							LTBRL EDM Mix Startup
						</div>
					</td>
					<td>
						<audio id="joeljingle2"  preload="auto" onended="stopJoel2()" src="https://www.sprousewebsitestest.com/dj/jingles/LTBRL EDM Mix Silent.mp3" type="audio/mp3">
						</audio>
						<div class="jingle-box">
							<button type="button" name="button" id="joel2play" onclick="playJoel2()" class=" play-button"><i class="fas fa-play"></i></button>
							<button type="button" name="button" id="joel2stop" onclick="stopJoel2()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
							LTBRL EDM Mix Silent
						</div>
					</td>
					<td>
						<audio id="joeljingle3"  preload="auto" onended="stopJoel3()" src="https://www.sprousewebsitestest.com/dj/jingles/LTBRL EDM Mix Pulse.mp3" type="audio/mp3">
						</audio>
						<div class="jingle-box">
							<button type="button" name="button" id="joel3play" onclick="playJoel3()" class=" play-button"><i class="fas fa-play"></i></button>
							<button type="button" name="button" id="joel3stop" onclick="stopJoel3()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
							LTBRL EDM Mix Pulse
						</div>
					</td>
					<td>
						<audio id="joeljingle4"  preload="auto" onended="stopJoel4()" src="https://www.sprousewebsitestest.com/dj/jingles/LTBRL EDM Mix Lead Layers.mp3" type="audio/mp3">
						</audio>
						<div class="jingle-box">
							<button type="button" name="button" id="joel4play" onclick="playJoel4()" class=" play-button"><i class="fas fa-play"></i></button>
							<button type="button" name="button" id="joel4stop" onclick="stopJoel4()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
							LTBRL EDM Mix Lead Layers
						</div>
					</td>
					<td>
						<audio id="joeljingle5" preload="auto" onended="stopJoel5()" src="https://www.sprousewebsitestest.com/dj/jingles/LTBRL New Music Drums.mp3" type="audio/mp3">
						</audio>
						<div class="jingle-box">
							<button type="button" name="button" id="joel5play" onclick="playJoel5()" class=" play-button"><i class="fas fa-play"></i></button>
							<button type="button" name="button" id="joel5stop" onclick="stopJoel5()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
							LTBRL New Music Drums
						</div>
					</td>
				</tr>
			</table>
			<table id="ozey-show-jingles" style="display:none;width: 100%;">
				<tr>
					<td>
						<audio id="ozeyjingle1"  preload="auto" onended="stopOzey1()" src="https://www.sprousewebsitestest.com/dj/jingles/LTBRL Ozey Silent.mp3" type="audio/mp3">
						</audio>
						<div class="jingle-box">
							<button type="button" name="button" id="ozey1play" onclick="playOzey1()" class=" play-button"><i class="fas fa-play"></i></button>
							<button type="button" name="button" id="ozey1stop" onclick="stopOzey1()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
							LTBRL Ozey Silent
						</div>
					</td>
					<td>
						<audio id="ozeyjingle2"  preload="auto" onended="stopOzey2()" src="https://www.sprousewebsitestest.com/dj/jingles/LTBRL Ozey Radar.mp3" type="audio/mp3">
						</audio>
						<div class="jingle-box">
							<button type="button" name="button" id="ozey2play" onclick="playOzey2()" class="play-button"><i class="fas fa-play"></i></button>
							<button type="button" name="button" id="ozey2stop" onclick="stopOzey2()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
							LTBRL Ozey Radar
						</div>
					</td>
					<td>
						<audio id="ozeyjingle3"  preload="auto" onended="stopOzey3()" src="https://www.sprousewebsitestest.com/dj/jingles/LTBRL Ozey Indie.mp3" type="audio/mp3">
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
						<!-- <button type="button" name="button" onclick="sfxFav()">Favourites</button> -->
						<button type="button" name="button" onclick="this.classList.add('active'); sfxLoops();" class="JingleBankButton">Loops</button>
						<button type="button" name="button" onclick="this.classList.add('active'); sfxDrums();" class="JingleBankButton">Drums</button>
						<button type="button" name="button" onclick="this.classList.add('active'); sfxlist1();" class="JingleBankButton">1</button>
						<button type="button" name="button" onclick="this.classList.add('active'); sfxlist2();" class="JingleBankButton">2</button>
					</td>
				</tr>
			</table>

			<!-- <table id="sfx-fav">
			<tr>
			<td>
			<audio id="sfxfav1"  preload="auto" onended="stopSFXFav1()" src="sfx/EDM Mix Eastern Promise.mp3" type="audio/mp3">
		</audio>
		<div class="jingle-box">
		<button type="button" name="button" id="joel1play" onclick="playJoel1()" class=" play-button"><i class="fas fa-play"></i></button>
		<button type="button" name="button" id="joel1stop" onclick="stopJoel1()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
		LTBRL EDM Mix Eastern Promise
	</div>
</td>
</tr>
</table> -->
<table id="loops-list" style="width: 100%;">
	<tr>
		<td>
			<audio id="loop1"  preload="auto" onended="stopLoop1()" src="sfx/61321_mansardian_news-background.mp3" type="audio/mp3">
			</audio>
			<div class="jingle-box">
				<button type="button" name="button" id="loop1play" onclick="playLoop1()" class=" play-button"><i class="fas fa-play"></i></button>
				<button type="button" name="button" id="loop1stop" onclick="stopLoop1()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
				News Background
			</div>
		</td>
		<td>
			<audio id="loop2"  preload="auto" onended="stopLoop2()" src="sfx/Talk loop.mp3" type="audio/mp3">
			</audio>
			<div class="jingle-box">
				<button type="button" name="button" id="loop2play" onclick="playLoop2()" class=" play-button"><i class="fas fa-play"></i></button>
				<button type="button" name="button" id="loop2stop" onclick="stopLoop2()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
				Talk Loop
			</div>
		</td>
		<td>
			<audio id="loop3"  preload="auto" onended="stopLoop3()" src="sfx/synth layers.mp3" type="audio/mp3">
			</audio>
			<div class="jingle-box">
				<button type="button" name="button" id="loop3play" onclick="playLoop3()" class=" play-button"><i class="fas fa-play"></i></button>
				<button type="button" name="button" id="loop3stop" onclick="stopLoop3()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
				Synth Layers
			</div>
		</td>
	</tr>
</table>

<table id="drums-list" style="width: 100%;">
	<tr>
		<td>
			<audio id="drum1"  preload="auto" onended="stopLoop1()" src="sfx/AC CYMBAL.mp3" type="audio/mp3">
			</audio>
			<div class="jingle-box">
				<button type="button" name="button" id="drum1play" onclick="playDrum1()" class=" play-button"><i class="fas fa-play"></i></button>
				<button type="button" name="button" id="drum1stop" onclick="stopDrum1()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
				AC Cymbal
			</div>
		</td>
	</tr>
</table>

<table id="sfx-list-1" style="display:none; width: 100%;">
	<tr>
		<td>
			<audio id="sfx1"  preload="auto" onended="stopSFX1()" src="sfx/Ahh Yeah!.mp3" type="audio/mp3">
			</audio>
			<div class="jingle-box">
				<button type="button" name="button" id="sfx1play" onclick="playSFX1()" class=" play-button"><i class="fas fa-play"></i></button>
				<button type="button" name="button" id="sfx1stop" onclick="stopSFX1()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
				Ahh Yeah!
			</div>
		</td>
		<td>
			<audio id="sfx2"  preload="auto" onended="stopSFX2()" src="sfx/airhorn.mp3" type="audio/mp3">
			</audio>
			<div class="jingle-box">
				<button type="button" name="button" id="sfx2play" onclick="playSFX2()" class=" play-button"><i class="fas fa-play"></i></button>
				<button type="button" name="button" id="sfx2stop" onclick="stopSFX2()" style="display:none;" class=" stop-button"><i class="fas fa-stop"></i></button>
				Airhorn
			</div>
		</td>
	</tr>
</table>
<table id="sfx-list-2" style="display:none; width: 100%;">
	<tr>
		<td>
			<audio id="ozeyjingle3"  preload="auto" onended="stopOzey3()" src="sfx/LTBRL Ozey Indie.mp3" type="audio/mp3">
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
</div>
<script type="text/javascript">
var j1 = document.getElementById("jingle1");
var j1play = document.getElementById("j1play");
var j1stop = document.getElementById("j1stop");
var j2 = document.getElementById("jingle2");
var j2play = document.getElementById("j2play");
var j2stop = document.getElementById("j2stop");
var j3 = document.getElementById("jingle3");
var j3play = document.getElementById("j3play");
var j3stop = document.getElementById("j3stop");
var j4 = document.getElementById("jingle4");
var j4play = document.getElementById("j4play");
var j4stop = document.getElementById("j4stop");
var j5 = document.getElementById("jingle5");
var j5play = document.getElementById("j5play");
var j5stop = document.getElementById("j5stop");
var j6 = document.getElementById("jingle6");
var j6play = document.getElementById("j6play");
var j6stop = document.getElementById("j6stop");
var j7 = document.getElementById("jingle7");
var j7play = document.getElementById("j7play");
var j7stop = document.getElementById("j7stop");
var j8 = document.getElementById("jingle8");
var j8play = document.getElementById("j8play");
var j8stop = document.getElementById("j8stop");
var j9 = document.getElementById("jingle9");
var j9play = document.getElementById("j9play");
var j9stop = document.getElementById("j9stop");
var j10 = document.getElementById("jingle10");
var j10play = document.getElementById("j10play");
var j10stop = document.getElementById("j10stop");
var j11 = document.getElementById("jingle11");
var j11play = document.getElementById("j11play");
var j11stop = document.getElementById("j11stop");
var j12 = document.getElementById("jingle12");
var j12play = document.getElementById("j12play");
var j12stop = document.getElementById("j12stop");
var j13 = document.getElementById("jingle13");
var j13play = document.getElementById("j13play");
var j13stop = document.getElementById("j13stop");
var j14 = document.getElementById("jingle14");
var j14play = document.getElementById("j14play");
var j14stop = document.getElementById("j14stop");
var j15 = document.getElementById("jingle15");
var j15play = document.getElementById("j15play");
var j15stop = document.getElementById("j15stop");
var j16 = document.getElementById("jingle16");
var j16play = document.getElementById("j16play");
var j16stop = document.getElementById("j16stop");
var j17 = document.getElementById("jingle17");
var j17play = document.getElementById("j17play");
var j17stop = document.getElementById("j17stop");


var joel1 = document.getElementById("joeljingle1");
var joel1play = document.getElementById("joel1play");
var joel1stop = document.getElementById("joel1stop");
var joel2 = document.getElementById("joeljingle2");
var joel2play = document.getElementById("joel2play");
var joel2stop = document.getElementById("joel2stop");
var joel3 = document.getElementById("joeljingle3");
var joel3play = document.getElementById("joel3play");
var joel3stop = document.getElementById("joel3stop");
var joel4 = document.getElementById("joeljingle4");
var joel4play = document.getElementById("joel4play");
var joel4stop = document.getElementById("joel4stop");
var joel5 = document.getElementById("joeljingle5");
var joel5play = document.getElementById("joel5play");
var joel5stop = document.getElementById("joel5stop");
var ozey1 = document.getElementById("ozeyjingle1");
var ozey1play = document.getElementById("ozey1play");
var ozey1stop = document.getElementById("ozey1stop");
var ozey2 = document.getElementById("ozeyjingle2");
var ozey2play = document.getElementById("ozey2play");
var ozey2stop = document.getElementById("ozey2stop");
var ozey3 = document.getElementById("ozeyjingle3");
var ozey3play = document.getElementById("ozey3play");
var ozey3stop = document.getElementById("ozey3stop");
var loop1 = document.getElementById("loop1");
var loop1play = document.getElementById("loop1play");
var loop1stop = document.getElementById("loop1stop");
var loop2 = document.getElementById("loop2");
var loop2play = document.getElementById("loop2play");
var loop2stop = document.getElementById("loop2stop");

</script>

<?php
include 'vars.php';
include 'jinglefunctions.php';
include 'identbuttons.php';
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
	// document.getElementById("sfx-fav").style.display = "block";
	document.getElementById("loops-list").style.display = "none";
	document.getElementById("sfx-list-2").style.display = "none";
}

function sfxLoops() {
	document.getElementById("sfx-list-1").style.display = "none";
	// document.getElementById("sfx-fav").style.display = "none";
	document.getElementById("loops-list").style.display = "block";
	document.getElementById("sfx-list-2").style.display = "none";
}

function sfxlist1() {
	document.getElementById("sfx-list-1").style.display = "block";
	// document.getElementById("sfx-fav").style.display = "none";
	document.getElementById("loops-list").style.display = "none";
	document.getElementById("sfx-list-2").style.display = "none";
}

function sfxlist2() {
	// document.getElementById("sfx-fav").style.display = "none";
	document.getElementById("loops-list").style.display = "none";
	document.getElementById("sfx-list-1").style.display = "none";
	document.getElementById("sfx-list-2").style.display = "block";
}
</script>
<!-- End of jingles.php file -->
