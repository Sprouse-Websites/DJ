<div class="l4 songSearch s12">
	<table>
		<tr>
			<td><h3>Songs Search</h3></td>
			<td>
				<button type="button" name="button" onclick="">
					<i class="fas fa-sync-alt"></i>
				</button>
			</td>
		</tr>
	</table>

<script type="text/javascript">
var $playlist = $("playlist.php");
reloadPlaylist () {
	$playlist.load("playlist.php");
}
</script>

	<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for songs.." title="Type in a Song Name">
	<div style="overflow:auto; height:240pt;">
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
					echo "<table id='myTable' class='banded' height='300pt'>";
					echo "<tr>";
					echo "<th>Add to Deck</th>";
					echo "<th>Song Name</th>";
					echo "<th>Artists <sub>(A-Z)</sub></th>";
					echo "<th>Album</th>";
					echo "<th>Length</th>";
					echo "<th>Genre</th>";
					echo "<th>Version</th>";
					echo "<th>Explicit</th>";
					echo "</tr>";
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
						echo "<td>" . $row['Length'] . "</td>";
						echo "<td>" . $row['Genre'] . "</td>";
						echo "<td>" . $row['Version'] . "</td>";
						echo "<td>" . $row['Explicit'] . "</td>";
						echo "</tr>";
						$varname = "URL".$row['id'];
						$smarks = "'";
						$URL = 'songs/Music/'.$row['MainArtist']."/".$row['Album']."/".$row['Song'].".mp3";
						$sourcea = '<audio id="DeckAAudioEl" src="'.$URL.'" style="width:100%;">Your browser does not support audio elements</audio>';
						$sourceb = '<audio id="DeckBAudioEl" src="'.$URL.'" style="width:100%;">Your browser does not support audio elements</audio>';
						echo "<script>
						function AddToA".$row['id']."() {
							document.getElementById('DeckAAudioDiv').innerHTML = ".$smarks.$sourcea.$smarks.";
							document.getElementById('DeckAArtistText').innerHTML = '".$row['MainArtist'].$row['OtherArtist1'].$row['OtherArtist2'].$row['OtherArtist3'].$row['OtherArtist4']."';
							document.getElementById('DeckASongText').innerHTML = '".$row['Song']."';
							document.getElementById('DeckAAlbumText').innerHTML = '".$row['Album']."';
							document.getElementById('DeckAPlay').disabled = false;
							document.getElementById('DeckAEject').disabled = false;
							document.getElementById('DeckAAudioEl').volume = volANew;
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
							getDeckTimes();
						}
						</script>
						";
					}
					echo "</table>";
					echo mysqli_num_rows($result)." Songs found";
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
		?>

	</div>


	<script>
	function myFunction() {
		var input, filter, table, tr, td, i, txtValue;
		input = document.getElementById("myInput");
		filter = input.value.toUpperCase();
		table = document.getElementById("myTable");
		tr = table.getElementsByTagName("tr");
		for (i = 0; i < tr.length; i++) {
			td = tr[i].getElementsByTagName("td")[1];
			if (td) {
				txtValue = td.textContent || td.innerText;
				if (txtValue.toUpperCase().indexOf(filter) > -1) {
					tr[i].style.display = "";
				} else {
					tr[i].style.display = "none";
				}
			}
		}
	}
</script>
<script>
function sortTable() {
	var table, rows, switching, i, x, y, shouldSwitch;
	table = document.getElementById("myTable");
	switching = true;
	/*Make a loop that will continue until
	no switching has been done:*/
	while (switching) {
		//start by saying: no switching is done:
		switching = false;
		rows = table.rows;
		/*Loop through all table rows (except the
		first, which contains table headers):*/
		for (i = 1; i < (rows.length - 1); i++) {
			//start by saying there should be no switching:
			shouldSwitch = false;
			/*Get the two elements you want to compare,
			one from current row and one from the next:*/
			x = rows[i].getElementsByTagName("TD")[2];
			y = rows[i + 1].getElementsByTagName("TD")[2];
			//check if the two rows should switch place:
			if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
				//if so, mark as a switch and break the loop:
				shouldSwitch = true;
				break;
			}
		}
		if (shouldSwitch) {
			/*If a switch has been marked, make the switch
			and mark that a switch has been done:*/
			rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
			switching = true;
		}
	}
}
</script>

</div>

<div class="l8">
</div>
