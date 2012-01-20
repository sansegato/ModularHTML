<!DOCTYPE html>
<head>
<meta charset="iso-8859-1">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<title>Modular HTML</title>	
<link rel="stylesheet" href="reset.css">
<link rel="stylesheet" href="global.css">
<?php include($_SERVER['DOCUMENT_ROOT'].'/syntax/syntax.php'); ?>
</head>
<body>
<div id="logo"><img src="img/modular.png" alt="A2 Comunicação" /></div>
<?php
	date ("d/m/Y H:i:s");
	$dir = new DirectoryIterator( 'modulos' );
	date_default_timezone_set('America/Sao_Paulo');
	
	foreach($dir as $file ){
		if (!$file->isDot() && $file->isDir()){
			$dname = $file->getFilename();
			
			print "<div class='modulo'>";
			print "<div class='visualizacao'>";
			include($_SERVER['DOCUMENT_ROOT'].$_SERVER['REQUEST_URI']."/modulos/$file/index.php");			
			print "</div>";
			print "<div class='codigo'>";
			print "<pre class='brush: html;'>";
			print "</pre>";
			print "<p class='link'><a href='modulos/$file/demo.php'>$file</a></p>";
			print "<p class='date'><span>Atualizado em:</span> ".date ("d/m/Y H:i:s", filemtime($_SERVER['DOCUMENT_ROOT'].$_SERVER['REQUEST_URI']."/modulos/$file/index.php"))."</p>";
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
<script type="text/javascript">
//código renderizado
$(document).ready(function() {
	$('.visualizacao').each(function() {
		var render = $(this).html();
		$(this).siblings('div').children('pre').css('text-transform','lowercase').text(render);
	});
});
</script>
</body>
</html>