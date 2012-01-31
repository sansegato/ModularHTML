<!DOCTYPE html>
<head>
<meta charset="iso-8859-1">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<title>ModularHTML</title>	
<script type="text/javascript" src="js/libs/modernizr-2.0.6.min.js"></script>
<link rel="stylesheet" href="reset.css">
<link rel="stylesheet" href="global.css">
</head>
<body>

<?php include ('header.php'); ?>

<div id="intro">
	<p>ModularHTML é um guia de estilo para código HTML semântico e padronizado</p>
	<div class="links">
		<a title="Acessar" href="demo.php">Acessar</a>
		<span>|</span>
		<a title="Download" href="https://github.com/a2comunicacao/ModularHTML">Download</a>
	</div>
	<div class="social-networks-share">
		<div id="shareme" data-url="http://modularhtml.com.br/" data-text="Make your sharing widget with Sharrre (jQuery Plugin)"></div>
	</div>
</div>

<?php include ('footer.php'); ?>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.links a:first-child').addClass('first');
});
</script>
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

<script type="text/javascript">
 var _gaq = _gaq || [];
 _gaq.push(['_setAccount', 'UA-23940018-5']);
 _gaq.push(['_trackPageview']);

 (function() {
   var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
   ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
   var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
 })();
</script>

<script type="text/javascript">
  var uvOptions = {};
  (function() {
    var uv = document.createElement('script'); uv.type = 'text/javascript'; uv.async = true;
    uv.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'widget.uservoice.com/o4eOwYZ3zcPxhUGm9YH7w.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(uv, s);
  })();
</script>

</body>
</html>