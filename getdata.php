	<?php 

	error_reporting(0);


	$getIp = json_decode(file_get_contents('http://ip-api.com/json/'),true);

	date_default_timezone_set($getIp['timezone']);

	$city =  $_GET['city']; 
	$country =  $_GET['country']; 

	$getApi = 'http://api.openweathermap.org/data/2.5/weather?q='.$city.','.$country.'&units=metric&appid=a021974a6e35d4848f58bd68db917743';

	$val = json_decode(file_get_contents($getApi),true);

	$temp = $val['main']['temp'].' °C';
	$desc = $val['weather'][0]['description'];

	$clouds = $val['clouds']['all'].' %';

	$humidity = $val['main']['humidity'].' %';

    $windspeed = $val['wind']['speed'].' m/s';
    
	$pressure = $val['main']['pressure'].' hpa';

	$sunrise = date('h:i:s a' , $val['sys']['sunrise']);

	$sunset = date('h:i:s a' , $val['sys']['sunset']);


	$icon = $val['weather'][0]['icon'];
	$logo = "<img src='http://openweathermap.org/img/w/".$icon.".png'>";




	?>

<?php 

if (empty($city) && empty($country)) {
	
	header('location:index.php');
}
 ?>




	<?php require 'header.php'; ?>
	<!-- header -->
<style>
	.panel {
		font-weight: bold;
		
	}

</style>

	<div class="panel panel-default">

		<div class="panel-heading"> 
			<center>
				<h2><?php echo $_GET['city'];?><?php echo ", "; ?><?php echo $_GET['country'];?></h2>
				<?php echo $desc; ?><br>
				<?php echo $logo; ?>
				

			</center>
			

		</div>

		<div class="panel-body">

			<table class="table table-bordered">



				<tr>
					<td class="bg-info" scope="col">Temp</td>
					<td class="bg-info" scope="col"><?php echo $temp; ?></td>
				</tr>

				<tr>
					<td class="bg-info" scope="col">Cloud</td>
					<td class="bg-info" scope="col"><?php echo $clouds; ?></td>
				</tr>
				<tr>
					<td class="bg-info" scope="col">Humidity</td>
					<td class="bg-info" scope="col"><?php echo $humidity; ?></td>
				</tr>
				<tr>
					<td class="bg-info" scope="col">Windspeed</td>
					<td class="bg-info" scope="col"><?php echo $windspeed; ?></td>
				</tr>
				<tr>
					<td class="bg-info" scope="col">Pressure</td>
					<td class="bg-info" scope="col"><?php echo $pressure; ?></td>
				</tr>
				<tr>
					<td class="bg-info" scope="col">Sunrise</td>
					<td class="bg-info" scope="col"><?php echo $sunrise; ?></td>
				</tr>
				<tr>
					<td class="bg-info" scope="col">Sunset</td>
					<td class="bg-info" scope="col"><?php echo $sunset; ?></td>
				</tr>



			</table>
		</div>
	</div>


	<!-- footer	 -->
	<?php require 'footer.php'; ?>