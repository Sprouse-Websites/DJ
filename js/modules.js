function updateShowModules() {
	var timeBox = document.getElementById("ShowTimeModule");
	var datetime = document.getElementById("datetime");
	var weatherBox = document.getElementById("ShowWeatherModule");
	var weatherforecast = document.getElementById("weather-forecast");
	var jinglesBox = document.getElementById("ShowJinglesModule");
	var jingles = document.getElementById("jinglesModules");
	var playlistBox = document.getElementById("ShowPlaylistModule");
	var playlists = document.getElementById("playlistModule");
	var decks = document.getElementById("Decks");
	var decksBox = document.getElementById("ShowDecksModule");
	if (timeBox.checked == true){
		datetime.style.display = "block";
	} else {
		datetime.style.display = "none";
	}
	if (weatherBox.checked == true){
		weatherforecast.style.display = "block";
	} else {
		weatherforecast.style.display = "none";
	}
	if (jinglesBox.checked == true){
		jingles.style.display = "block";
	} else {
		jingles.style.display = "none";
	}
	if (playlistBox.checked == true){
		playlists.style.display = "block";
	} else {
		playlists.style.display = "none";
	}
	if (decksBox.value == "0") {
		decks.style.display = "none";
	} else if (decksBox.value == "2") {
		decks.style.display = "block";
	}
}
