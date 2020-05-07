<!-- Start of weather.php file -->
<?php
include 'header.php';
$apiKey1 = "bf06ed6c271fb0b0fa20525bfe56a1a6";
$cityId1 = "2643743";
$googleApiUrl1 = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId1 . "&lang=en&units=metric&APPID=" . $apiKey1;
$googleApiUrl2 = "http://api.openweathermap.org/data/2.5/forecast/hourly?q=London&appid=".$apiKey1;
echo $googleApiUrl2;

$ch1 = curl_init();

curl_setopt($ch1, CURLOPT_HEADER, 0);
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch1, CURLOPT_URL, $googleApiUrl1);
curl_setopt($ch1, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch1, CURLOPT_VERBOSE, 0);
curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
$response1 = curl_exec($ch1);

curl_close($ch1);
$data1 = json_decode($response1);
$currentTime1 = time();

$apiKey2 = "bf06ed6c271fb0b0fa20525bfe56a1a6";
$cityId2 = "2643743";
$googleApiUrl2 = "http://datapoint.metoffice.gov.uk/public/data/resource?key=" . $apiKey2;

$ch2 = curl_init();

curl_setopt($ch2, CURLOPT_HEADER, 0);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch2, CURLOPT_URL, $googleApiUrl2);
curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch2, CURLOPT_VERBOSE, 0);
curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);
$response2 = curl_exec($ch2);

curl_close($ch2);
$data2 = json_decode($response2);
$currentTime2 = time();



$curl = curl_init();

curl_setopt_array($curl, array(
	CURLOPT_URL => "https://api-metoffice.apiconnect.ibmcloud.com/metoffice/production/v0/forecasts/point/hourly?includeLocationName=Lewisham&latitude=51.4415&longitude=0.0117",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => array(
		"accept: application/json",
		"x-ibm-client-id: 65d0105e-aad1-41ec-ad97-fb4bc49f85b6",
		"x-ibm-client-secret: C5oP0gU2eY1qR2bR7fU3iO6eS1nY8cL5nO6lB4lF1gK6eK7gJ7"
	),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	// echo $response;
}


$ch3 = curl_init();

curl_setopt($ch3, CURLOPT_HEADER, 0);
curl_setopt($ch3, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch3, CURLOPT_URL, $googleApiUrl3);
curl_setopt($ch3, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch3, CURLOPT_VERBOSE, 0);
curl_setopt($ch3, CURLOPT_SSL_VERIFYPEER, false);
$response3 = curl_exec($ch3);

curl_close($ch3);
$data2 = json_decode($response3);
$currentTime3 = time();
?>
<script type="text/javascript">
console.log("OpenWeatherAPI Data loaded");
</script>

<div id="weather" style="width:100%; text-align:center;">

	<?php
	if ($data1->weather[0]->icon == "01d") {
		echo "<i class='fas fa-sun weather-icon'></i>";
	}
	if ($data1->weather[0]->icon == "01n") {
		echo "<i class='fas fa-moon weather-icon'></i>";
	}
	if ($data1->weather[0]->icon == "02d") {
		echo "<i class='fas fa-cloud-sun weather-icon'></i>";
	}
	if ($data1->weather[0]->icon == "02n") {
		echo "<i class='fas fa-cloud-moon weather-icon'></i>";
	}
	if ($data1->weather[0]->icon == "03d") {
		echo "<i class='fas fa-cloud weather-icon'></i>";
	}
	if ($data1->weather[0]->icon == "03n") {
		echo "<i class='fas fa-cloud weather-icon'></i>";
	}
	echo "<img src='http://sprousewebsites.co.uk/hosted-files/dj/media/weather/".$data1->weather[0]->icon.".png' class='weather-icon' height='150px'>";
	?>

	<div class="weather-forecast">
		<table style="text-align: center; margin-left: auto; margin-right: auto;">
			<tr>
				<td rowspan="2">

					<br>
					<?php echo ucwords($data1->weather[0]->description); ?>
				</td>
				<td>
					Max: <?php echo $data1->main->temp_max; ?>°C
				</td>
				<td>
					Current: <?php echo $data1->main->temp; ?>°C
				</td>
				<td>
					<div>Humidity: <?php echo $data1->main->humidity; ?> %</div>
				</td>
			</tr>
			<tr>
				<td>
					<span class="min-temperature">
						Min: <?php echo $data1->main->temp_min; ?>°C
					</span>
				</td>
				<td>
					Feels Like: <?php echo $data1->main->feels_like; ?>°C
				</td>
				<td>
					<div>Wind: <?php echo $data1->wind->speed; ?> km/h</div>
				</td>
			</tr>
			<tr>
				<td>Updated: <?php echo date("d/m/y g:i:s a"); ?></td>
			</tr>
		</table>
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<div id="chart_div" style="width: 100%; height: 500px;"></div>
		<?php
		echo $data2->list->dt[0];
		?>
		<script>
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(drawChart);

		function drawChart() {
			var data = google.visualization.arrayToDataTable([
				['Time', 'Temperature', 'World'],
				['8am',  6, 4],
				['9am',  11, 24],
				['10am',  6, 12],
				['11am',  10, 5],
				['12pm',  6, 12],
				['1pm',  6, 12],
				['2pm',  6, 12],
				['3pm',  6, 12],
			]);

			var options = {
				title: 'Detailed Weather',
				hAxis: {title: 'Time',  titleTextStyle: {color: '#333'}},
				vAxis: {minValue: -10}
				colors: {'#e0440e', '#55555'}
			};

			var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
			chart.draw(data, options);
		}
		</script>
	</div>
</div>

<script type="text/javascript">
function getDateTime() {
	var today = new Date();
	var milliseconds = today.getMilliseconds();
	var rmilliseconds = Math.round(milliseconds / 10);
	var seconds = today.getSeconds();
	var minutes = today.getMinutes();
	var hours = today.getHours();
	var month = today.getMonth();
	var month = month + 1;
	var date = today.getDate();
	var year = today.getFullYear();

	var zd = "";
	var zmo = "";
	var zy = "";
	var zh = "";
	var zmi = "";
	var zs = "";
	var zms = "";

	if (date < 10) {
		zd = "0";
	}

	if (month < 10) {
		zmo = "0";
	}

	if (hours < 10) {
		zh = "0";
	}

	if (minutes < 10) {
		zmi = "0";
	}

	if (seconds < 10) {
		zs = "0";
	}

	if (rmilliseconds < 10) {
		zms = "0";
	}

	var dateTime = zd + date + "/" + zmo + month + "/" + year + " " + zh + hours + ":" + zmi + minutes + ":" + zs + seconds + ":" + zms + rmilliseconds;
	document.getElementById("datetime").innerHTML = dateTime;
	setTimeout(getDateTime, 50);
};

</script>
<script type="text/javascript">
console.log("Weather.php file loaded");
</script>
<!-- End of weather.php file -->
