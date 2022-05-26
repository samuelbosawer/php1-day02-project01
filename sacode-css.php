<?php
	// variabel
	$title = "Sacode";
	$tagLine = "#LearnToCode";
	$websie = "https://sacode.web.id";
	$intagram = "https://instagram.com/sacode.official";
	$developer = "Samuel Bosawer";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		<?php echo $title;?>
	</title>

	 <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
	<div class="card-panel">
		<h1><?php echo $title; ?> </h1>
		<p> <?php echo $tagLine; ?> </p>
		<br>
	</div>
	<div class="container">
		<div class="card-panel">
			<h1><?php echo $title; ?> </h1>
			<p><?php echo $tagLine; ?> </p>
			<br>
		</div>
	</div>
	<div class="container">
		<div class="card-panel">
			<ul>
				<li>Website : <b><?= $websie?></b> </li>
				<li>Instagram : <b><?= $intagram?></b> </li>
				<li>Developer : <b><?= $developer?></b> </li>
			</ul>
		</div>
	</div>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
