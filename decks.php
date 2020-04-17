<!-- Start of decks.php file -->
<style>
.deck {
	width:45%;
	display: inline-block;
}
</style>


<div id="DeckA" class="deck">
	<div id="DeckAAudioDiv" class="">
		<audio id="DeckAAudioEl" src="" style="width:100%;">

		</audio>
	</div>
	<div class="controls">
		<button id="DeckAPlay" type="button" name="button" onclick="DeckAPlay()" disabled class="play-button">
			<i class="fas fa-play"></i>
		</button>
		<button id="DeckAPause" type="button" name="button" onclick="DeckAPause()" style="display:none;" class="pause-button">
			<i class="fas fa-pause"></i>
		</button>
		<button id="DeckAEject" type="button" name="button" onclick="DeckAEject()" disabled class="eject-button">
			<i class="fas fa-eject"></i>
		</button>
		<button id="DeckAMute" type="button" name="button" onclick="DeckAMute()" style="display:none;">
			<i class="fas fa-volume-mute"></i>
		</button>
		<button id="DeckAVolLow" type="button" name="button" onclick="DeckAMute()" style="display:none;">
			<i class="fas fa-volume-down"></i>
		</button>
		<button id="DeckAVolUp" type="button" name="button" onclick="DeckAMute()">
			<i class="fas fa-volume-up"></i>
		</button>

	</div>
	<div class="">
		<span>Song: <span id="DeckASongText">-----</span></span>
		<br>
		<span>Artist(s): <span id="DeckAArtistText">-----</span></span>
		<br>
		<span>Album: <span id="DeckAAlbumText">-----</span></span>
		<br>
	</div>
	<div class="DeckTimes">
		<span>Remaining <span id="DeckARemainingText">--:--</span></span>
		<br>
		<span>Current <span id="DeckACurrentText">--:--</span></span>
		<br>
		<span>Duration <span id="DeckADurationText">--:--</span></span>
	</div>
</div>

<div id="Mixer" class="" style="display:inline; width:8%;">
	<input type="range" id="DeckAVol" name="DeckAVol" min="0" max="100" oninput="DeckAVol()" value="100" orient="vertical">
	<input type="range" id="DeckBVol" name="DeckBVol" min="0" max="100" oninput="DeckBVol()" value="100" orient="vertical">
</div>

<div id="DeckB" class="deck">
	<div id="DeckBAudioDiv" class="">
		<audio id="DeckBAudioEl" src="" style="width:100%;">

		</audio>
	</div>
	<div class="controls">
		<button id="DeckBPlay" type="button" name="button" onclick="DeckBPlay()" disabled class="play-button">
			<i class="fas fa-play"></i>
		</button>
		<button id="DeckBPause" type="button" name="button" onclick="DeckBPause()" style="display:none;" class="pause-button">
			<i class="fas fa-pause"></i>
		</button>
		<button id="DeckBEject" type="button" name="button" onclick="DeckBEject()" disabled class="eject-button">
			<i class="fas fa-eject"></i>
		</button>
		<button id="DeckBMute" type="button" name="button" onclick="DeckBMute()" style="display:none;">
			<i class="fas fa-volume-mute"></i>
		</button>
		<button id="DeckBVolLow" type="button" name="button" onclick="DeckBMute()" style="display:none;">
			<i class="fas fa-volume-down"></i>
		</button>
		<button id="DeckBVolUp" type="button" name="button" onclick="DeckBMute()">
			<i class="fas fa-volume-up"></i>
		</button>

	</div>
	<div class="">
		<span>Song: <span id="DeckBSongText">-----</span></span>
		<br>
		<span>Artist(s): <span id="DeckBArtistText">-----</span></span>
		<br>
		<span>Album: <span id="DeckBAlbumText">-----</span></span>
		<br>
	</div>
	<div class="DeckTimes">
		<span>Remaining <span id="DeckBRemainingText">--:--</span></span>
		<br>
		<span>Current <span id="DeckBCurrentText">--:--</span></span>
		<br>
		<span>Duration <span id="DeckBDurationText">--:--</span></span>
	</div>
</div>

<script type="text/javascript">
function DeckAPlay() {
	document.getElementById("DeckAAudioEl").play();
	document.getElementById("DeckAPlay").style.display = "none";
	document.getElementById("DeckAPause").style.display = "inline-block";
}

function DeckAPause() {
	document.getElementById('DeckAAudioEl').pause();
	document.getElementById('DeckAPlay').style.display = "inline-block";
	document.getElementById('DeckAPause').style.display = "none";
}

function DeckAEject() {
	var AEjectBox = confirm("Are you sure you want to eject Deck A?");
	if (AEjectBox == true) {
		document.getElementById('DeckAAudioDiv').innerHTML = '<audio id="DeckAAudioEl" src="" style="width:100%;">Your browser does not support audio elements</audio>';
		document.getElementById('DeckAPlay').style.display = "inline-block";
		document.getElementById('DeckAPause').style.display = "none";
		document.getElementById('DeckAPlay').disabled = true;
		document.getElementById('DeckAEject').disabled = true;
	}
	else {
		var fafddgaj = "3";
	}
}

function DeckAMute() {
	var DeckAMuted = document.getElementById("DeckAAudioEl").muted;
	if (DeckAMuted == true) {
		document.getElementById('DeckAAudioEl').muted = false;
		document.getElementById("DeckAVol").value = PreAVol;
	} else {
		var PreAVol = document.getElementById("DeckAVol").value;
		document.getElementById('DeckAAudioEl').muted = true;
		document.getElementById("DeckAVol").value = "0";
	}
}

function DeckAVol() {
	var volA = document.getElementById("DeckAVol").value;
	var volANew = volA / 100;
	document.getElementById('DeckAAudioEl').volume = volANew;
	console.log("Volume for Deck A set to " + volA);
	if (volA == "0") {
		document.getElementById("DeckAMute").style.display = "inline";
		document.getElementById("DeckAVolLow").style.display = "none";
		document.getElementById("DeckAVolUp").style.display = "none";
	}
	else if (volA < "45") {
		document.getElementById("DeckAMute").style.display = "none";
		document.getElementById("DeckAVolLow").style.display = "inline";
		document.getElementById("DeckAVolUp").style.display = "none";
	}
	else if (volA == "100") {
		document.getElementById("DeckAMute").style.display = "none";
		document.getElementById("DeckAVolLow").style.display = "none";
		document.getElementById("DeckAVolUp").style.display = "inline";
	}
	else {
		document.getElementById("DeckAMute").style.display = "none";
		document.getElementById("DeckAVolLow").style.display = "none";
		document.getElementById("DeckAVolUp").style.display = "inline";
	}
}


function DeckBPlay() {
	document.getElementById('DeckBAudioEl').play();
	document.getElementById('DeckBPlay').style.display = "none";
	document.getElementById('DeckBPause').style.display = "inline-block";
}

function DeckBPause() {
	document.getElementById('DeckBAudioEl').pause();
	document.getElementById('DeckBPlay').style.display = "inline-block";
	document.getElementById('DeckBPause').style.display = "none";
}

function DeckBEject() {
	var BEjectBox = confirm("Are you sure you want to eject Deck B?");
	if (BEjectBox == true) {
		document.getElementById('DeckBAudioDiv').innerHTML = '<audio id="DeckBAudioEl" src="" style="width:100%;">Your browser does not support audio elements</audio>';
		document.getElementById('DeckBPlay').style.display = "inline-block";
		document.getElementById('DeckBPause').style.display = "none";
		document.getElementById('DeckBPlay').disabled = true;
		document.getElementById('DeckBEject').disabled = true;
	}
	else {
		var fafddgaj = "3";
	}
}

function DeckBMute() {
	var DeckBMuted = document.getElementById("DeckBAudioEl").muted;
	if (DeckBMuted == true) {
		document.getElementById('DeckBAudioEl').muted = false;
		document.getElementById("DeckBVol").value = PreBVol;
	} else {
		var PreBVol = document.getElementById("DeckBVol").value;
		document.getElementById('DeckBAudioEl').muted = true;
		document.getElementById("DeckBVol").value = "0";
	}
}

function DeckBVol() {
	var volB = document.getElementById("DeckBVol").value;
	var volBNew = volB / 100;
	document.getElementById('DeckBAudioEl').volume = volBNew;
	console.log("Volume for Deck B set to " + volB);
	if (volB == "0") {
		document.getElementById("DeckBMute").style.display = "inline";
		document.getElementById("DeckBVolLow").style.display = "none";
		document.getElementById("DeckBVolUp").style.display = "none";
	}
	else if (volB < "45") {
		document.getElementById("DeckBMute").style.display = "none";
		document.getElementById("DeckBVolLow").style.display = "inline";
		document.getElementById("DeckBVolUp").style.display = "none";
	}
	else {
		document.getElementById("DeckBMute").style.display = "none";
		document.getElementById("DeckBVolLow").style.display = "none";
		document.getElementById("DeckBVolUp").style.display = "inline";
	}
}
</script>

<script>
function getDeckTimes() {
	var DeckADuration = document.getElementById("DeckAAudioEl").duration;
	var DeckACurrent = document.getElementById("DeckAAudioEl").currentTime;
	var DeckARemaining = DeckADuration - DeckACurrent;

	var DeckADurationH = Math.floor(DeckADuration / 60 / 60);
	var DeckADurationM = Math.floor(DeckADuration / 60) - (DeckADurationH * 60);
	var DeckADurationS = DeckADuration % 60;
	var DeckADurationS = DeckADurationS.toFixed(2);
	var DeckADurationF = DeckADurationH.toString().padStart(2, '0') + ':' + DeckADurationM.toString().padStart(2, '0') + ':' + DeckADurationS.toString().padStart(2, '0');

	var DeckACurrentH = Math.floor(DeckACurrent / 60 / 60);
	var DeckACurrentM = Math.floor(DeckACurrent / 60) - (DeckACurrentH * 60);
	var DeckACurrentS = DeckACurrent % 60;
	var DeckACurrentS = DeckACurrentS.toFixed(2);
	var DeckACurrentF = DeckACurrentH.toString().padStart(2, '0') + ':' + DeckACurrentM.toString().padStart(2, '0') + ':' + DeckACurrentS.toString().padStart(2, '0');

	var DeckARemainingH = Math.floor(DeckARemaining / 60 / 60);
	var DeckARemainingM = Math.floor(DeckARemaining / 60) - (DeckARemainingH * 60);
	var DeckARemainingS = DeckARemaining % 60;
	var DeckARemainingS = DeckARemainingS.toFixed(2);
	var DeckARemainingF = DeckARemainingH.toString().padStart(2, '0') + ':' + DeckARemainingM.toString().padStart(2, '0') + ':' + DeckARemainingS.toString().padStart(2, '0');
	document.getElementById("DeckACurrentText").innerHTML = DeckACurrentF;
	document.getElementById("DeckADurationText").innerHTML = DeckADurationF;
	document.getElementById("DeckARemainingText").innerHTML = DeckARemainingF;


	var DeckBDuration = document.getElementById("DeckBAudioEl").duration;
	var DeckBCurrent = document.getElementById("DeckBAudioEl").currentTime;
	var DeckBRemaining = DeckBDuration - DeckBCurrent;

	var DeckBDurationH = Math.floor(DeckBDuration / 60 / 60);
	var DeckBDurationM = Math.floor(DeckBDuration / 60) - (DeckBDurationH * 60);
	var DeckBDurationS = DeckBDuration % 60;
	var DeckBDurationS = DeckBDurationS.toFixed(2);
	var DeckBDurationF = DeckBDurationH.toString().padStart(2, '0') + ':' + DeckBDurationM.toString().padStart(2, '0') + ':' + DeckBDurationS.toString().padStart(2, '0');

	var DeckBCurrentH = Math.floor(DeckBCurrent / 60 / 60);
	var DeckBCurrentM = Math.floor(DeckBCurrent / 60) - (DeckBCurrentH * 60);
	var DeckBCurrentS = DeckBCurrent % 60;
	var DeckBCurrentS = DeckBCurrentS.toFixed(2);
	var DeckBCurrentF = DeckBCurrentH.toString().padStart(2, '0') + ':' + DeckBCurrentM.toString().padStart(2, '0') + ':' + DeckBCurrentS.toString().padStart(2, '0');

	var DeckBRemainingH = Math.floor(DeckBRemaining / 60 / 60);
	var DeckBRemainingM = Math.floor(DeckBRemaining / 60) - (DeckBRemainingH * 60);
	var DeckBRemainingS = DeckBRemaining % 60;
	var DeckBRemainingS = DeckBRemainingS.toFixed(1);
	var DeckBRemainingF = DeckBRemainingH.toString().padStart(2, '0') + ':' + DeckBRemainingM.toString().padStart(2, '0') + ':' + DeckBRemainingS.toString().padStart(2, '0');
	document.getElementById("DeckBCurrentText").innerHTML = DeckBCurrentF;
	document.getElementById("DeckBDurationText").innerHTML = DeckBDurationF;
	document.getElementById("DeckBRemainingText").innerHTML = DeckBRemainingF;
	setTimeout(getDeckTimes, 50);
}
</script>

<!-- End of decks.php file -->
