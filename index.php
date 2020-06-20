<?php
$page_name = "DJ";
require 'head.php';
require 'header.php';
include 'vars.php';
require 'decks.php';
?>
<style media="screen">
.weatherbox:hover {
	border: 1pt grey solid;
	border: 19px;
}
</style>
<a href="weather.php" class="hidden weatherbox" target="_blank">
	<?php
	include 'widget.php';
	?>
</a>
<?php
require 'playlist.php';
include 'jingles.php';
include 'midi.php';
include 'rcm.php';
require 'footer.php';
?>
