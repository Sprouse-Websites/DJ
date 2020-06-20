<div id="midiModule" class="">
	<h2>MIDI Inputs</h2>
	<pre id="inputs"></pre>

	<h2>MIDI Outputs</h2>
	<pre id="outputs"></pre>
	<h2>MIDI Messages</h2>
	<p id="midiValue">
		No recorded MIDI values
	</p>
</div>

<script>
function checkMIDIDevice() {
	navigator.requestMIDIAccess()
	.then(onMidiSuccess, onMidiFailure);
}


function onMidiSuccess(midiAccess) {
	for (var input of midiAccess.inputs.values())
	input.onmidimessage = getMIDIMessage;
}


function getMIDIMessage(midiMessage) {
	var FullMidiMessage = String(midiMessage.data[0]) + ", " + String(midiMessage.data[1]) + ", " + String(midiMessage.data[2])+ ", " + String(midiMessage.data[3]);
	document.getElementById('midiValue').innerHTML = FullMidiMessage;
	if (midiMessage.data[0] == 144) {
		if (midiMessage.data[1] == 11) {
			if (midiMessage.data[2] != 0) {
				if (document.getElementById("DeckAAudioEl").paused == true && document.getElementById("DeckAPlay").disable == false) {
					DeckAPlay();
				} else {
					DeckAPause();
				}
			}
		} else if (midiMessage.data[1] == 12) {
			if (midiMessage.data[2] != 0) {
				DeckACue();
			}
		}
	}
	else if (midiMessage.data[0] == 145) {
		if (midiMessage.data[1] == 11) {
			if (midiMessage.data[2] != 0) {
				if (document.getElementById("DeckBAudioEl").paused == true) {
					DeckBPlay();
				} else {
					DeckBPause();
				}
			}
		} else if (midiMessage.data[1] == 12) {
			if (midiMessage.data[2] != 0) {
				DeckBCue();
			}
		}
	}
}

function onMidiFailure() {
	console.log('Could not access MIDI devices.');
	checkMIDIDevice();
}

</script>
