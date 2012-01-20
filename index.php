<!DOCTYPE html>
<head>
<meta charset="iso-8859-1">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<title>Modular HTML</title>	
<link rel="stylesheet" href="reset.css">
<link rel="stylesheet" href="global.css">
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
			print "<textarea rows='6' cols='30'>";
			//echo htmlspecialchars(file_get_contents("modulos/$file/index.php"));
			print "</textarea>";
			print "<p class='link'><a href='modulos/$file/demo.php'>$file</a></p>";
			print "<p class='date'><span>Atualizado em:</span> ".date ("d/m/Y H:i:s", filemtime($_SERVER['DOCUMENT_ROOT'].$_SERVER['REQUEST_URI']."/modulos/$file/index.php"))."</p>";
			print "</div>";
			print "</div>";
		}
	}
	foreach($dir as $file ){
		if (!$file->isDot() && $file->isFile()){
			//$dname = $file->getFilename();
			//echo 'Arquivo '.$dname."<br>";
		}
	}   
?>

<?php
/* LISTAGEM DE MÓDULOS ANTIGA*/
/* 
	$diretorio = "modulos"; 	
	$ponteiro  = opendir($diretorio);
	$pastas[] = '0';
	
	while ($nome_itens = readdir($ponteiro) ) {
		$itens[] = $nome_itens;		
		//echo '<script>alert("'.$nome_itens.'");</script>';
	}
	sort($itens);
	foreach ($itens as $listar) {
	   if ($listar!="." && $listar!=".."){ 
			if (is_dir($listar)) { 
					$pastas[]=$listar; 
					
			} else { 
					$arquivos[]=$listar;
					//echo '<script>alert("'.$listar.'");</script>';
			}
	   }
	}
	if ($pastas != "" ) { 
		foreach($pastas as $listar){
			print "<a href='#'>Arquivo - $listar</a>";
		}
	}
	if ($arquivos != "") {
		foreach($arquivos as $listar){
			print "<div class='modulo'>";
			print "<div class='visualizacao'>";
			include($_SERVER['DOCUMENT_ROOT']."/new/$diretorio/$listar/index.php");			
			print "</div>";
			print "<div class='codigo'>";
			print "<textarea rows='6' cols='30'>";
			echo htmlspecialchars(file_get_contents("$diretorio/$listar/index.php"));
			print "</textarea>";
			print "<p><a href='$diretorio/$listar/demo.php'>$listar.php</a></p>";
			print "</div>";
			print "</div>";
		}
	}
*/
?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript">
//código renderizado
$(document).ready(function() {
	$('.visualizacao').each(function() {
		var render = $(this).html();
		$(this).siblings('div').children('textarea').css('text-transform','lowercase').text(render);
	});
});
</script>
</body>
</html>