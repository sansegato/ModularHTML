<!DOCTYPE html>
<head>
<meta charset="iso-8859-1">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<title>ModularHTML</title>	
<link rel="stylesheet" href="reset.css">
<link rel="stylesheet" href="global.css">

</head>
<body>

<?php include ('header.php'); ?>

<div id="intro">
	<p>ModularHTML &eacute; um reposit&oacute;rio de c&oacute;digo para agilizar, aperfei&ccedil;oar e padronizar a produ&ccedil;&atilde;o de p&aacute;ginas web</p>
	<ul>
		<li><a href="demo.php">Demonstra&ccedil;&atilde;o</a></li>
		<li><a href="https://github.com/a2comunicacao/ModularHTML">Download</a></li>
	</ul>
	<div class="social-networks-share">
		<div id="shareme" data-url="http://modularhtml.com.br/" data-text="Make your sharing widget with Sharrre (jQuery Plugin)"></div>
	</div>
</div>

<?php include ('footer.php'); ?>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<!--@5.02.compartilhar -->
<script src="/js/modulos/jquery.sharrre-1.2.0.min.js"></script>
<script>
$('#shareme').sharrre({
	share: {
	googlePlus: true,
	facebook: true,
	twitter: true
	},
	buttons: {
	googlePlus: {size: 'small', annotation: 'none' },
	facebook: {layout: 'button_count'},
	twitter: {count: 'none' }
	},
	enableHover: false,
	enableCounter: false,
	enableTracking: true
});
</script>
<!--@5.02.compartilhar -->


</body>
</html>