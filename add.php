<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="icon" href="media/icon.png">
</head>

<body>

<form class="" action="db_add.php" method="POST">
	Song name <input type="text" name="song" value="" required><br>
	Main Artist <input type="text" name="artist" required><br>
	Other Artist 1 <input type="text" name="artist1"><br>
	Other Artist 2 <input type="text" name="artist2"><br>
	Other Artist 3 <input type="text" name="artist3"><br>
	Other Artist 4 <input type="text" name="artist4"><br>
	Album <input type="text" name="album"><br>
	Song Length <input type="text" name="Length" value=""><br>
	Genre <input type="text" name="Genre" value=""><br>
	Version <input type="text" name="version" value="Original"><br>
	Remixer <input type="text" name="remixer" value=""><br>
	Explicit <select class="" name="Explicit">
		<option value="N" selected>Not Explicit</option>
		<option value="R">Unsuitable for Radio</option>
		<option value="C">Clean Version</option>
		<option value="E">Explicit</option>
	</select>
	<br>
	<!-- Released <input type="number" name="released"><br> -->
	<!-- Date Bought <input type="date" name="bought"><br> -->
	<!-- Price £<input type="text" name="currency-field" id="currency-field" pattern="^\£\d{1,3}(,\d{3})*(\.\d+)?£" value="" data-type="currency" value="0.99"><br> -->
	Other Comments <textarea name="comments" maxlength="5235"></textarea><br>
	<!-- <input type="file" name="songUpload"> -->
	<input type="submit" name="submit" value="submit">
</form>

<script src="js/currency-input.js"></script>
</body>
</html>
