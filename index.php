<!DOCTYPE html>
<head>
<meta charset="iso-8859-1">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<title>Modular HTML</title>	
<link rel="stylesheet" href="reset.css">
<link rel="stylesheet" href="global.css">
<?php include($_SERVER['DOCUMENT_ROOT'].'/js/syntax/syntax.php'); ?>
</head>
<body>
<h1 class="logo"><img src="img/modular.png" alt="A2 Comunicação" /></h1>
<span class="dica"><strong>Dica:</strong> Use as teclas "J" e "K" para mover a página para baixo ou para cima</span>
<?php
	date ("d/m/Y H:i:s");
	$dir = new DirectoryIterator( 'modulos' );
	date_default_timezone_set('America/Sao_Paulo');
	
	$css = file_get_contents('global.css');
	
	foreach($dir as $file ){
		if (!$file->isDot() && $file->isDir()){
			$dname = $file->getFilename();
			
			$marcacao = "/*@".$dname."*/";
			$addCss = explode($marcacao, $css);
			
			print "<div class='modulo' id='$file'>";
			print "<div class='visualizacao'>";
			print "<h2 class='nome-modulo'><a href='modulos/$file/demo.php'>$file</a></h2>";
			print "<div class='codigo'>";
			include($_SERVER['DOCUMENT_ROOT'].$_SERVER['REQUEST_URI']."/modulos/$file/index.php");			
			print "</div>";
			print "</div>";
			print "<div class='info'>";
			print "<div id='HTML'>";
			print "<pre class='brush: html;'>";
			print "</pre>";	
			print "</div>";	
			print "<div id='CSS'>";
			print "<pre class='brush: css;'>";
			echo $addCss[1];
			print "</pre>";
			print "</div>";
			print "<p class='link'><a href='modulos/$file/demo.php'>$file</a></p>";
			print "<p class='data'><span>Atualizado em:</span> ".date ("d/m/Y H:i:s", filemtime($_SERVER['DOCUMENT_ROOT'].$_SERVER['REQUEST_URI']."/modulos/$file/index.php"))."</p>";
			print "</div>";
			print "</div>";			
			
		}
	}	
	foreach($dir as $file ){
		if (!$file->isDot() && $file->isFile()){
		}
	}   
?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.jknavigable.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	//código renderizado
	$('.visualizacao').each(function() {
		var render = $(this).children('.codigo').html();
		$(this).siblings('div').children('#HTML').children('pre').css('text-transform','lowercase').text(render);
	});
	// navegação
	$('.modulo').jknavigable();
	//borda 1ºmodulo
	$('.modulo').first().addClass('first');
});
</script>
</body>
</html>