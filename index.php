<?php 

$alcohol = array(
	['viski', 'images/viski.png'],
	['pivo', 'images/pivo.png'],
	['rakija' , 'images/rakija.png'],
	['vodka' , 'images/vodka.png'],
	['jegermeister' , 'images/jegermeister.png'],
	['vinjak' , 'images/vinjak.png'],
	['pelinkovac' , 'images/pelinkovac.png'],
	['crno vino' , 'images/crno_vino.png'],
	['belo vino' , 'images/belo_vino.png'],
	['roze' , 'images/roze.png'],
	['spricer' , 'images/spricer.png'],
	['Smirnoff Ice'  , 'images/smirnoff_ice.png']
	);	


$whatToDrink = array_rand($alcohol);


//echo $alcohol[$whatToDrink];
?>
<!DOCTYPE html>
<html>
<head>

	<title>What to drink tonight?</title>
	<meta charset="utf-8">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">


</head>
<body>
	<h2 style="text-align: center;">Večeras treba da piješ</h2>
	<h1 class="jumbotron" style="text-align: center; text-transform: uppercase;"><?=$alcohol[$whatToDrink][0] ?></h1>
	<div style="text-align: center;"> <img src="<?php echo $alcohol[$whatToDrink][1]; ?>" style="height: 200px;"> </div>
	




	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</body>
</html>
