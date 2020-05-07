function snackbar() {
	var snackbar = document.getElementById("snackbar");
	snackbar.classList.add("show");
	setTimeout(function(){ snackbar.classList.remove("show"); }, 4000);
}

function offline() {
	var online = navigator.online;
	var offlineSnackbar = document.getElementById("offlineSnackbar");
	if (online == true) {
		offlineSnackbar.classList.add("show");
	}
	else {
		offlineSnackbar.classList.remove("show");
	}
	setTimeout(offline, 500);
}

/*
onError: function(error) {
console.log(':(', error.type, error.info);
}
*/
