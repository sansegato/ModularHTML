<!doctype html>
<html lang="pt-br">
<head>
	<title>Compartilhar</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

	<link rel="stylesheet" href="../../reset.css">
	<link rel="stylesheet" href="../../global.css">

	<!-- modernizr -->
	<script src="js/libs/modernizr-2.0.6.min.js"></script>

</head>
<body>
<div id="main">
	<?php include ('index.php'); ?>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
<script src="js/jquery.sharrre-1.2.0.min.js"></script>
<script>
$('#shareme').sharrre({
	share: {
	googlePlus: true,
	facebook: true,
	twitter: true,
	digg: true,
	delicious: true,
	stumbleupon: true,
	linkedin: true
	},
	buttons: {
	googlePlus: {size: 'tall'},
	facebook: {layout: 'box_count'},
	twitter: {count: 'vertical'},
	digg: {type: 'DiggMedium'},
	delicious: {size: 'tall'},
	stumbleupon: {layout: '5'},
	linkedin: {counter: 'top'}
	},
	enableHover: false,
	enableCounter: false,
	enableTracking: true
});
</script>
</body>
</html>
