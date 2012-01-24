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

<?php include ('header.php'); ?>

<span class="dica"><strong>Dica:</strong> Use as teclas "J" e "K" para mover a página para baixo ou para cima</span>

<?php
	$dir = new DirectoryIterator( 'modulos' );
	date_default_timezone_set('America/Sao_Paulo');
	
	$css = file_get_contents('global.css');
	
	foreach($dir as $file ){
		if (!$file->isDot() && $file->isDir()){
			$dname = $file->getFilename();
			
			$marcacao = "/*@".$dname."*/";		

			print "<div class='modulo' id='$file'>";
			print "<div class='visualizacao'>";
			print "<h2 class='nome-modulo'><a href='modulos/$file/demo.php'>$file</a></h2>";
			print "<div class='codigo'>";
			include($_SERVER['DOCUMENT_ROOT']."/modulos/$file/index.php");			
			print "</div>";
			print "</div>";
			print "<div class='info'>";
			print "<ul class='abas'>";
			print "<li class='aba-html'><a href='#'>Html</a></li>";
			
			if(preg_match("/".$dname."/",$css)){
				print "<li class='aba-css'><a href='#'>Css</a></li>";						
			} else {}		
			
			print "</ul>";		
			print "<div class='html'>";			
			print "<pre class='brush: html;'>";
			include($_SERVER['DOCUMENT_ROOT']."/modulos/$file/index.php");
			print "</pre>";	
			print "</div>";	
								
			if(preg_match("/".$dname."/",$css)){
				$addCss = explode($marcacao, $css);
				print "<div class='css'>";
				print "<pre class='brush: css;'>";
				echo $addCss[1];
				print "</pre>";
				print "</div>";
			} else {}				
			
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

<?php include ('footer.php'); ?>
<?php include ('global.js.php'); ?>

<script type="text/javascript" src="js/jquery.jknavigable.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	//	código renderizado
	//$('.visualizacao').each(function() {
		//var render = $(this).children('.codigo').html();
		//$(this).siblings('div').children('.html').children('pre').css('text-transform','lowercase').text(render);
	//});
	//	navegação
	$('.modulo').jknavigable();
	// 	borda 1ºmodulo
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