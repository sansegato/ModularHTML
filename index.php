<!DOCTYPE html>
<head>
<meta charset="iso-8859-1">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<title>Modular HTML</title>	
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
</div>

<?php include ('footer.php'); ?>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	//	c—digo renderizado
	$('.visualizacao').each(function() {
		var render = $(this).children('.codigo').html();
		$(this).siblings('div').children('.html').children('pre').css('text-transform','lowercase').text(render);
	});
	//	navega‹o
	$('.modulo').jknavigable();
	// 	borda 1¼modulo
	$('.modulo').first().addClass('first');
	
	
	//	Abas	
	$('.info div.html').show();		
	$('.abas li:first-child a').addClass('active');	
	$('.abas li a').click(function(){			
		var anchor = $(this).parent('li').attr('class').slice(4,10);
		if ( $(this).hasClass('active') ) {			
		
		} else {
			$(this).addClass('active');
			$(this).parent().siblings().children().removeClass('active');			
			$(this).closest('ul').siblings('div.'+anchor).show();
			$(this).closest('ul').siblings('div.'+anchor).siblings('div').hide();
			return false;
		}		
	});	
});
</script>
</body>
</html>