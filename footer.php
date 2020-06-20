<!-- Start of footer.php file -->
<script type="text/javascript">

function load() {
	sortTableByArtist();
	console.log("Playlist sorted");
	getDateTime();
	getDeckTimes();
	offline();
	updateShowModules();
	filterList()
// 	if (navigator.requestMIDIAccess) {
// 		console.log(' browser supports WebMIDI');
// 	} else {
// 		console.log('WebMIDI is not supported.');
// 	}
}
//
// if (!("requestMIDIAccess" in navigator)) {
// 	document.body.innerHTML = `<h1>:-/</h1><p>I'm sorry, but your browser does not support the WebMIDI API ☹️🚫🎹</p>`;
// }
//
// navigator.requestMIDIAccess()
// .then((access) => {
//
// 	// Get lists of available MIDI controllers
// 	const inputs = access.inputs;
// 	const outputs = access.outputs;
//
// 	const inputText = [];
// 	const outputText = [];
//
// 	inputs.forEach((midiInput) => {
// 		inputText.push(`FOUND: ${midiInput.name}`);
// 		midiInput.onmidimessage = function(message) {
// 			document.querySelector("#messages").innerText =  `# ${midiInput.name}
// 			${new Date()}
// 			==================================
// 			- Status: ${message.data[0]}
// 			- Data 1: ${message.data[1]}
// 			- Data 2: ${message.data[2]}
// 			==================================\n\n`;
// 		}
// 	})
//
// 	outputs.forEach((midiOutput) => {
// 		outputText.push(`FOUND: ${midiOutput.name}`);
// 	})
//
// 	document.querySelector("#inputs").innerText = inputText.join('');
// 	document.querySelector("#outputs").innerText = outputText.join('');
//
// });
console.log("Document Fully Loaded");
</script>
<footer>
	<div class="w3-third">
		Version: <?php echo version; ?>
	</div>
	<div class="w3-third">
		Built and maintained by <a href="http://www.sprousewebsites.co.uk/">Sprouse Websites</a> &copy; 2019-<?php echo date("Y");?>
	</div>
	<div class="w3-third">
		<a href="feedback.php" target="_blank">
			<i class="fas fa-comment"></i> Give Feedback
		</a>
		<a href="about.php" target="_blank">
			<i class="fas fa-question-circle"></i> About
			<!-- <span>Ctrl + ?!</span> -->
		</a>
		<a href="help.php" target="_blank">
			<i class="fas fa-info-circle"></i> Help
			<!-- <span>Ctrl + ?!</span> -->
		</a>
	</div>
</footer>
</body>
</html>
<!-- End of footer.php file -->
