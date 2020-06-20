<!-- Start of decks.php file -->
<script>
var jsmediatags = window.jsmediatags;
</script>

<script type="text/javascript">
var volANew = 1;
var volBNew = 1;
var volA = 1;
var volB = 1;
var DeckADurationF = "";
var DeckACurrentF = "";
var DeckARemainingF = "";
</script>
<div id="Decks">
	<div id="DeckAAudioDiv" class="">
		<audio id="DeckAAudioEl" src="" style="width:100%;">

		</audio>
	</div>
	<div id="DeckBAudioDiv" class="">
		<audio id="DeckBAudioEl" src="" style="width:100%;">

		</audio>
	</div>

	<table style="width:100%;">
		<tr>
			<td colspan="2">
				<input id="DeckALengthRange" type="range" disabled value="0" class="length" onchange="DeckALengthChange()" min="0" step="0.05">
				<div class="range-text-container">
					<div class="range-text-subcontainer">
						<range-text>0<span></span></range-text>
					</div>
				</div>
			</td>
			<td rowspan="3" style="width: 27pt;">
				<input type="range" id="DeckAVol" name="DeckAVol" min="0" max="100" oninput="DeckAVol()" value="100" orient="vertical">
				<input type="range" id="DeckBVol" name="DeckBVol" min="0" max="100" oninput="DeckBVol()" value="100" orient="vertical">
				<script type="text/javascript">
				console.log("Mixer script loaded");
				</script>
			</td>
			<td colspan="2">
				<input id="DeckBLengthRange" type="range" disabled value="0" class="length" onchange="DeckBLengthChange()" min="0" step="0.05">
				<div class="range-text-container">
					<div class="range-text-subcontainer">
						<range-text>0<span></span></range-text>
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<td>
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
			</td>
			<td rowspan="2">
				<!-- IMAGES FOR SONG STATUS -->
				<img id="DeckARedLight" src="media/red-traffic-light.png" title="Song Not Ready to Play" alt="Song Not Ready to Play" height="30pt">
				<img id="DeckAAmberLight" src="media/amber-traffic-light.png" title="Song Can Play But Not Fully Loaded" alt="Song Can Play But Not Fully Loaded" height="30pt" style="display:none;">
				<img id="DeckAGreenLight" src="media/green-traffic-light.png" title="Song Fully Loaded" alt="Song Fully Loaded" height="30pt" style="display:none;">
				<!-- END OF SONG STATUS IMAGES -->

				<img id="pictureA" src="" alt="" height="90pt">
			</td>

			<td>
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
			</td>
			<td rowspan="2">
				<img id="pictureB" src="" alt="" height="90pt">
			</td>
		</tr>
		<tr>
			<td>
				<span>Song: <span id="DeckASongText">-----</span></span>
				<br>
				<span>Artist(s): <span id="DeckAArtistText">-----</span></span>
				<br>
				<span>Album: <span id="DeckAAlbumText">-----</span></span>
				<br>
				<div class="DeckTimes">
					<span>Current <span id="DeckACurrentText">--:--</span></span> <span>Remaining <span id="DeckARemainingText">--:--</span></span>
					<br>
					<span>Duration <span id="DeckADurationText">--:--</span></span>

				</div>
			</td>
			<td>
				<span>Song: <span id="DeckBSongText">-----</span></span>
				<br>
				<span>Artist(s): <span id="DeckBArtistText">-----</span></span>
				<br>
				<span>Album: <span id="DeckBAlbumText">-----</span></span>
				<br>
				<div class="DeckTimes">
					<span>Current <span id="DeckBCurrentText">--:--</span></span> <span>Remaining <span id="DeckBRemainingText">--:--</span></span>
					<br>
					<span>Duration <span id="DeckBDurationText">--:--</span></span>
				</div>
			</td>
		</tr>
	</table>


</div>
<script type="text/javascript">
const getCellValue = (tr, idx) => tr.children[idx].innerText || tr.children[idx].textContent;

const comparer = (idx, asc) => (a, b) => ((v1, v2) =>
v1 !== '' && v2 !== '' && !isNaN(v1) && !isNaN(v2) ? v1 - v2 : v1.toString().localeCompare(v2)
)(getCellValue(asc ? a : b, idx), getCellValue(asc ? b : a, idx));

// do the work...
document.querySelectorAll('th.playlistTableHeader').forEach(th => th.addEventListener('click', (() => {
	const table = th.closest('table');
	Array.from(table.querySelectorAll('tr:nth-child(n+2)'))
	.sort(comparer(Array.from(th.parentNode.children).indexOf(th), this.asc = !this.asc))
	.forEach(tr => table.appendChild(tr) );
})));
</script>

<script type="text/javascript">
console.log("Decks.php file loaded");
</script>
<!-- End of decks.php file -->
