<!-- Start of playlist.php file -->
<script type="text/javascript">
console.log("playlist loading");
</script>
<style>
th.sort {
	cursor: pointer;
}
</style>
<div id="playlistModule">


	<div class="l4 songSearch s12">
		<h3 style="display:inline;">Songs Search</h3>
		<form method="post" style="display:inline;">
			<button type="button" name="refresh" style="display:inline;">
				<i class="fas fa-sync-alt"></i>
			</button>
		</form>

		<input type="text" id="filterbox" onkeyup="filter()" placeholder="Search for songs.." title="Type in a Song Name" style="display:inline;">


		<!-- <script type="text/javascript">
		var $playlist = $("playlist.php");
		function reloadPlaylist () {
		$playlist.load("playlist.php");
	}
</script> -->
<br>
<div id="SongsLoading" style="overflow:auto; height:240pt; background-color:white; font-size:30pt; text-align:center; vertical-align:middle;">
	Song List Loading
</div>
<button type="button" name="button" onclick="SongFull()" class="PlaylistButton">View all songs</button>
<button type="button" name="button" onclick="ShowPlaylist1()" class="PlaylistButton" disabled>View Playlist 1</button>
<br>
<script type="text/javascript">
console.error("Hi");
</script>
<div id="AllSongs" style="overflow:auto; height:240pt; display:none;">
	<table id='myTable' class='banded' height='300pt'>
		<thead>
			<tr>
				<th>Add to Deck</th>
				<th id='SongHeader' class='playlistTableHeader'>
					<!-- <a href='javascript:sortTableBySong()'> -->
					Song Name
					<!-- </a> -->
				</th>
				<th id='ArtistHeader' class='playlistTableHeader'>
					<!-- <a href='javascript:sortTableByArtist()'> -->
					Artists
					<!-- </a> -->
				</th>
				<th id='AlbumHeader' class='playlistTableHeader'>
					<!-- <a href='javascript:sortTableByAlbum()'> -->
					Album
					<!-- </a> -->
				</th>
				<th class='playlistTableHeader'>Length</th>
				<th id='GenreHeader' class='playlistTableHeader'>
					<!-- <a href='javascript:sortTableBy'> -->
					Genre
					<!-- </a> -->
				</th>
				<th>
					Version
				</th>
				<th class='playlistTableHeader'>
					<p title='E means Explicit R means unsuitable for Radio N means Not Explicit'>
						Explicit
					</p>
				</th>
				<th>
					<i class="fas fa-download"></i>
				</th>
			</tr>
		</thead>
		<?php
		function getSongs() {
			$servername = "mysql5.clusterdb.net";
			$username = "music-g0j-u-261256";
			$password = "AtlAs45678";
			$dbname = "music-g0j-u-261256";
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			$link = mysqli_connect($servername, $username, $password, $dbname);

			// Check connection
			if($link === false){
				die("ERROR: Could not connect. " . mysqli_connect_error());
			}

			// Attempt select query execution
			$sql = "SELECT * FROM songs";

			if($result = mysqli_query($link, $sql)){
				if(mysqli_num_rows($result) > 0){
					while($row = mysqli_fetch_array($result)){
						echo "<tr>";
						echo "<td><button type='button' class='DeckButton' onclick='AddToA".$row['id']."()'>A</button>
						<button type='button' class='DeckButton' onclick='AddToB".$row['id']."()'>B</button></td>";
						echo "<td>" . $row['Song'] . "</td>";
						echo "<td>";
						if ($row['MainArtist'] != NULL) {
							echo $row['MainArtist'];
						};
						if ($row['OtherArtist1'] != NULL) {
							echo "; " . $row['OtherArtist1'] . "; ";
						};
						if ($row['OtherArtist2'] != NULL) {
							echo $row['OtherArtist2'] . "; ";
						};
						if ($row['OtherArtist3'] != NULL) {
							echo $row['OtherArtist3'] . "; ";
						};
						if ($row['OtherArtist4'] != NULL) {
							echo $row['OtherArtist4'] . ";";
						};
						echo "</td>";
						// echo "<td>" . $row['MainArtist'] . " " . $row['OtherArtist1']." ".$row['OtherArtist2']." ".$row['OtherArtist3']." ".$row['OtherArtist4']."</td>";
						echo "<td>" . $row['Album'] . "</td>";
						echo "<td>";
						if ($row['Length'] != NULL) {
							$minutes = 0;
							$seconds = 0;
							$length = $row['Length'];
							while ($length > 60) {
								$minutes = $minutes + 1;
								$length = $length - 60;
							};
							$seconds = $length;
							if ($minutes < 10) {
								echo "0";
							};
							echo $minutes . ":";
							if ($seconds < 10) {
								echo "0";
							};
							echo $seconds;
						}
						echo "</td>";
						echo "<td>" . $row['Genre'] . "</td>";
						echo "<td>" . $row['Version'] . "</td>";
						echo "<td>" . $row['Explicit'] . "</td>";
						$URL1 = 'http://sprousewebsites.co.uk/hosted-files/dj/songs/Music/'.$row['MainArtist']."/".$row['Album']."/".$row['Song'].".mp3";
						$URL2 = 'http://sprousewebsites.co.uk/hosted-files/dj/songs/Music/'.$row['MainArtist']."/".$row['Album']."/01 ".$row['Song'].".mp3";
						$sourcea = '<audio id="DeckAAudioEl"><source src="'.$URL1.'" type="audio/mpeg"><source src="'.$URL2.'" type="audio/mpeg">Your browser does not support audio elements</audio>';
						$sourceb = '<audio id="DeckBAudioEl"><source src="'.$URL1.'" type="audio/mpeg"><source src="'.$URL2.'" type="audio/m4a">Your browser does not support audio elements</audio>';
						echo "<td><a href='".$URL1."' class='hidden' download><i class='fas fa-arrow-alt-circle-down'></i></a></td>";
						echo "</tr>";
						$varname = "URL".$row['id'];
						$smarks = "'";
						echo "<script>
						function AddToA".$row['id']."() {
							try {
								document.getElementById('DeckAAudioDiv').innerHTML = ".$smarks.$sourcea.$smarks.";
							} catch (e) {
								console.error(e.name);
								console.error(e.message);
							}

							document.getElementById('DeckAArtistText').innerHTML = '".$row['MainArtist'].$row['OtherArtist1'].$row['OtherArtist2'].$row['OtherArtist3'].$row['OtherArtist4']."';
							document.getElementById('DeckASongText').innerHTML = '".$row['Song']."';
							document.getElementById('DeckAAlbumText').innerHTML = '".$row['Album']."';
							document.getElementById('DeckAPlay').disabled = false;
							document.getElementById('DeckAEject').disabled = false;
							document.getElementById('DeckAAudioEl').volume = volANew;
							document.getElementById('DeckALengthRange').disabled = false;
							document.getElementById('pictureA').src = 'http://sprousewebsites.co.uk/hosted-files/dj/songs/Music/".$row['MainArtist']."/".$row['Album']."/".$row['Album'].".jpg';
							DeckAPause()
							getDeckTimes();
						}

						function AddToB".$row['id']."() {
							document.getElementById('DeckBAudioDiv').innerHTML = ".$smarks.$sourceb.$smarks.";
							document.getElementById('DeckBArtistText').innerHTML = '".$row['MainArtist'].$row['OtherArtist1'].$row['OtherArtist2'].$row['OtherArtist3'].$row['OtherArtist4']."';
							document.getElementById('DeckBSongText').innerHTML = '".$row['Song']."';
							document.getElementById('DeckBAlbumText').innerHTML = '".$row['Album']."';
							document.getElementById('DeckBPlay').disabled = false;
							document.getElementById('DeckBEject').disabled = false;
							document.getElementById('DeckBAudioEl').volume = volBNew;
							document.getElementById('DeckBLengthRange').disabled = false;
							document.getElementById('pictureB').src = 'http://sprousewebsites.co.uk/hosted-files/dj/songs/Music/".$row['MainArtist']."/".$row['Album']."/".$row['Album'].".jpg';
							DeckBPause()
							getDeckTimes();
						}
						</script>
						";
					}
					echo "</table>";
					$SongsInt = mysqli_num_rows($result);
					echo "<span id='songsfound'>". mysqli_num_rows($result)." Songs found in the Library</span>";
					// Free result set
					mysqli_free_result($result);
				} else{
					echo "<tr>";
					echo "<td colspan='11'>No records matching your query were found.</td>";
					echo "</tr>";
					echo "</table>";
				}
			} else{
				echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
			}
		}

		getSongs();
		if(isset($_POST['refresh'])) {
			getSongs();
		}
		echo "<script type='text/javascript'>";
		echo "var SongsInt = '".$SongsInt."';";
		?>

		console.log("Songs from database recieved");
		document.getElementById("SongsLoading").style.display = "none";
		document.getElementById("AllSongs").style.display = "block";
		document.getElementById("snackbar").innerHTML = "Songs from Database loaded";
		snackbar();
	</script>
</div>
<div id="Playlist1" class="DisplayNone">
	<table id='myTable' class='banded' height='300pt'>
		<thead>
			<tr>
				<th>Add to Deck</th>
				<th id='SongHeader' class='playlistTableHeader'>
					<!-- <a href='javascript:sortTableBySong()'> -->
					Song Name
					<!-- </a> -->
				</th>
				<th id='ArtistHeader' class='playlistTableHeader'>
					<!-- <a href='javascript:sortTableByArtist()'> -->
					Artists
					<!-- </a> -->
				</th>
				<th id='AlbumHeader' class='playlistTableHeader'>
					<!-- <a href='javascript:sortTableByAlbum()'> -->
					Album
					<!-- </a> -->
				</th>
				<th class='playlistTableHeader'>Length</th>
				<th id='GenreHeader' class='playlistTableHeader'>
					<!-- <a href='javascript:sortTableBy'> -->
					Genre
					<!-- </a> -->
				</th>
				<th>
					Version
				</th>
				<th class='playlistTableHeader'>
					<p title='E means Explicit R means unsuitable for Radio N means Not Explicit'>
						Explicit
					</p>
				</th>
			</tr>
		</thead>
		<?php
		function getPlaylist1() {
			$servername = "mysql5.clusterdb.net";
			$username = "music-g0j-u-261256";
			$password = "AtlAs45678";
			$dbname = "music-g0j-u-261256";
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			$link = mysqli_connect($servername, $username, $password, $dbname);

			// Check connection
			if($link === false){
				die("ERROR: Could not connect. " . mysqli_connect_error());
			}

			// Attempt select query execution
			$sql = "SELECT * FROM playlist1";

			if($result = mysqli_query($link, $sql)){
				if(mysqli_num_rows($result) > 0){
					while($row = mysqli_fetch_array($result)){
						echo "<tr>";
						echo "<td><button type='button' class='DeckButton' onclick='AddToA".$row['id']."()'>A</button>
						<button type='button' class='DeckButton' onclick='AddToB".$row['id']."()'>B</button></td>";
						echo "<td>" . $row['Song'] . "</td>";
						echo "<td>";
						if ($row['MainArtist'] != NULL) {
							echo $row['MainArtist'];
						};
						if ($row['OtherArtist1'] != NULL) {
							echo "; " . $row['OtherArtist1'] . "; ";
						};
						if ($row['OtherArtist2'] != NULL) {
							echo $row['OtherArtist2'] . "; ";
						};
						if ($row['OtherArtist3'] != NULL) {
							echo $row['OtherArtist3'] . "; ";
						};
						if ($row['OtherArtist4'] != NULL) {
							echo $row['OtherArtist4'] . ";";
						};
						echo "</td>";
						// echo "<td>" . $row['MainArtist'] . " " . $row['OtherArtist1']." ".$row['OtherArtist2']." ".$row['OtherArtist3']." ".$row['OtherArtist4']."</td>";
						echo "<td>" . $row['Album'] . "</td>";
						echo "<td>";
						if ($row['Length'] != NULL) {
							$minutes = 0;
							$seconds = 0;
							$length = $row['Length'];
							while ($length > 60) {
								$minutes = $minutes + 1;
								$length = $length - 60;
							};
							$seconds = $length;
							if ($minutes < 10) {
								echo "0";
							};
							echo $minutes . ":";
							if ($seconds < 10) {
								echo "0";
							};
							echo $seconds;
						}
						echo "</td>";
						echo "<td>" . $row['Genre'] . "</td>";
						echo "<td>" . $row['Version'] . "</td>";
						echo "<td>" . $row['Explicit'] . "</td>";
						echo "</tr>";
						$varname = "URL".$row['id'];
						$smarks = "'";
						$URL1 = 'http://sprousewebsites.co.uk/hosted-files/dj/songs/Music/'.$row['MainArtist']."/".$row['Album']."/".$row['Song'].".mp3";
						$URL2 = 'http://sprousewebsites.co.uk/hosted-files/dj/songs/Music/'.$row['MainArtist']."/".$row['Album']."/01 ".$row['Song'].".mp3";
						$sourcea = '<audio id="DeckAAudioEl"><source src="'.$URL1.'" type="audio/mpeg"><source src="'.$URL2.'" type="audio/mpeg">Your browser does not support audio elements</audio>';
						$sourceb = '<audio id="DeckBAudioEl"><source src="'.$URL1.'" type="audio/mpeg"><source src="'.$URL2.'" type="audio/m4a">Your browser does not support audio elements</audio>';
						echo "<script>
						function AddToA".$row['id']."() {
							document.getElementById('DeckAAudioDiv').innerHTML = ".$smarks.$sourcea.$smarks.";
							document.getElementById('DeckAArtistText').innerHTML = '".$row['MainArtist'].$row['OtherArtist1'].$row['OtherArtist2'].$row['OtherArtist3'].$row['OtherArtist4']."';
							document.getElementById('DeckASongText').innerHTML = '".$row['Song']."';
							document.getElementById('DeckAAlbumText').innerHTML = '".$row['Album']."';
							document.getElementById('DeckAPlay').disabled = false;
							document.getElementById('DeckAEject').disabled = false;
							document.getElementById('DeckAAudioEl').volume = volANew;
							document.getElementById('DeckALengthRange').disabled = false;
							document.getElementById('pictureA').src = 'http://sprousewebsites.co.uk/hosted-files/dj/songs/Music/".$row['MainArtist']."/".$row['Album']."/".$row['Album'].".jpg';
							getDeckTimes();
						}

						function AddToB".$row['id']."() {
							document.getElementById('DeckBAudioDiv').innerHTML = ".$smarks.$sourceb.$smarks.";
							document.getElementById('DeckBArtistText').innerHTML = '".$row['MainArtist'].$row['OtherArtist1'].$row['OtherArtist2'].$row['OtherArtist3'].$row['OtherArtist4']."';
							document.getElementById('DeckBSongText').innerHTML = '".$row['Song']."';
							document.getElementById('DeckBAlbumText').innerHTML = '".$row['Album']."';
							document.getElementById('DeckBPlay').disabled = false;
							document.getElementById('DeckBEject').disabled = false;
							document.getElementById('DeckBAudioEl').volume = volBNew;
							document.getElementById('DeckBLengthRange').disabled = false;
							document.getElementById('pictureB').src = 'http://sprousewebsites.co.uk/hosted-files/dj/songs/Music/".$row['MainArtist']."/".$row['Album']."/".$row['Album'].".jpg';
							getDeckTimes();
						}
						</script>
						";
					}
					echo "</table>";
					echo "<span id='songsfound'>". mysqli_num_rows($result)." Songs found in the Library</span>";
					// Free result set
					mysqli_free_result($result);
				} else{
					echo "<tr>";
					echo "<td colspan='11'>No songs were found in this playlist.</td>";
					echo "</tr>";
					echo "</table>";
				}
			} else{
				echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
			}
		}

		getPlaylist1();
		?>
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

</div>

<div class="l8">
</div>
</div>

<script type="text/javascript">
console.log("playlist.php file loaded");
</script>
<!-- End of playlist.php file -->
