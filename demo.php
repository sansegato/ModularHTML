<!DOCTYPE html>
<head>
<meta charset="iso-8859-1">
<meta name="description" content="ModularHTML � um guia de estilo para c�digo HTML sem�ntico e padronizado">
<meta name="keywords" content="html, css, js, jQuery, web, modular, grid, framework, c�digo, standards, sem�ntico, estilo, desenvolvimento, front-end, design"> 
<meta name="author" content="A2Comunica��o"> 
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<title>ModularHTML</title>
<!-- css contrast -->
<link rel="stylesheet" media="all" href="/js/modulos/contrast-normal.css" title="normal" />
<link rel="alternate stylesheet" media="all" href="/js/modulos/contrast.css" title="contraste" />
<link rel="stylesheet" href="reset.css">
<link rel="stylesheet" href="global.css">


<script type='text/javascript'src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
<script type="text/javascript">
	$(document).ready(function(){
	/*	$('#modulos .modulo').each(function(e){
			var id = $(this).attr('id');
			//console.log(id+e);
			$(this).addClass('m'+e);

			$('.m'+e).children('.info').children('.html').children().prepend('<img class="loader" src="/img/loader.gif"/>');

			setTimeout( function(){
				$('.loader').remove();
				$('.m'+e).children('.info').children('.html').children().load('/modulos/'+id+'/index.php');
			}, 8000);		
		});*/
    });
</script>
<?php include($_SERVER['DOCUMENT_ROOT'].'/js/syntax/syntax.php'); ?>

</head>
<body class="interna"> <h2>TEste</h2>
<?php include ('header_interna.php'); ?>

<span class="dica"><strong>Dica:</strong> Use as teclas "J" e "K" para mover a p�gina para baixo ou para cima</span>
<?php 
	////////////////////////////////////////////////////////////////////////////////
	date_default_timezone_set('America/Sao_Paulo');	
	
	$pasta		= glob( 'modulos/*.*' );
	$qtd		= 5;
	$atual 		= (isset($_GET['pg'])) ? intval($_GET['pg']) : 1;
	$pagPasta 	= array_chunk($pasta, $qtd);
	$contar 	= count($pagPasta);
    $resultado 	= $pagPasta[$atual-1];

    $css 		= file_get_contents('global.css');	
	$js 		= file ('global.js.php');	
	$jsConteudo = implode ('', file ('global.js.php'));
	////////////////////////////////////////////////////////////////////////////////
?>

<div id="menu">
	<select id="shortcuts" class="select-form">
		<?php
			foreach($resultado as $valor){
				$nome = substr($valor, 8);	
				print "<option value='#$nome'>$nome</option>";						
			}	  
		?>
	</select>
</div>
<div id="modulos">
<?
    foreach($resultado as $valor){
    		$file = substr($valor, 8);
    		//$dname = $file->getFilename();
			
			$marcacaoCSS = "/*@".$file."*/";		
			$marcacaoJS = "<!--@".$file."-->";		

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
			
			//Adiciona aba do CSS se Existir
			if(preg_match("/".$file."/",$css)){
				print "<li class='aba-css'><a href='#'>Css</a></li>";						
			}	
			//Adiciona aba do JS se Existir
			if(preg_match("/".$file."/", $jsConteudo)){
				print "<li class='aba-js'><a href='#'>JS</a></li>";						
			}	
			
			print "</ul>";		
			print "<div class='html'>";			
			print "<pre class='brush: html;'>";
			include($_SERVER['DOCUMENT_ROOT']."/modulos/$file/index.php");
			print "</pre>";	
			print "</div>";	
			
			//Adiciona o CSS se Existir	
			if(preg_match("/".$file."/",$css)){
				$addCss = explode($marcacaoCSS, $css);
				print "<div class='css'>";
				print "<pre class='brush: css;'>";
				echo $addCss[1];
				print "</pre>";
				print "</div>";
			}
	
			//Adiciona o JS se Existir
			if(preg_match("/".$file."/", $jsConteudo)){
				$addJs = explode ($marcacaoJS, $jsConteudo);
				print "<div class='js'>";
				print "<pre class='brush: js;'>";
				echo htmlspecialchars($addJs[1]);
				print "</pre>";
				print "</div>";
			}
			
			print "<p class='link'><a href='modulos/$file/demo.php'>$file</a></p>";
			print "<p class='data'><span>Atualizado em:</span> ".date ("d/m/Y H:i:s", filemtime($_SERVER['DOCUMENT_ROOT']."/modulos/$file/index.php"))."</p>";
			
			if (file_exists("modulos/$file/dependencias.txt")) {
				$abre = fopen ("modulos/$file/dependencias.txt", "r");
				while (!feof ($abre)) {
					$linha = fgets($abre, 4096);
					print "<p class='dependencias'>";
					echo '<a href="../js/modulos/'.$linha.'">'.$linha."</a>";
					print "</p>";
				}
				fclose ($abre);				
			}
			
			print "</div>";
			print "</div>";  		

    }

    echo '<div class="pagination">';
    for($i = 1; $i <= $contar; $i++){
    	if($i == $atual){
    		printf('<a class="active" href="#">%s</a>', $i);
    	}else{
    		printf('<a href="?pg=%s"> %s </a>', $i, $i);
    	}
    }
    echo '</div>';
    ////////////////////////////////////////////////////////////////////////////////

?>


</div>
<?php include ('footer_interna.php'); ?>
<?php include ('global.js.php'); ?>
<!-- scripts -->
<script type="text/javascript" src="js/jquery.jknavigable.js"></script>
<script type="text/javascript" src="js/jquery.fn.sortelements.js"></script>
<script type="text/javascript">
$(document).ready(function() {

	//	navega��o
	$('.modulo').jknavigable();
	
	// 	borda 1�modulo
	$('.modulo').first().addClass('first');
	
	// 	borda �ltimo modulo
	$('.modulo').last().addClass('last');	
	
	//	Abas	
	$('.info div.html').show();		
	$('.abas li:first-child a').addClass('active');	
	$('.abas li:last-child a').css('border-right','1px solid #1B2426');	
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
	
	$('body div.modulo').sortElements(function(a, b){
		return $(a).text() > $(b).text() ? 1 : -1;
	});
	
	$('#shortcuts option').sortElements(function(a, b){
		return $(a).text() > $(b).text() ? 1 : -1;
	});
	
	// Linking combo box
	$("#shortcuts").change(function() {
		//document.location = this.value;
		var link = $("#shortcuts option:selected").val();
		var nome = link.substr(1, link.length);
		$('.modulo').each(function() {
			if ( $(this).attr('id') == nome ) {
				var altura = $(this).offset().top;
				var deslocamentoInicial = altura -50;
				var deslocamentoSecundario = altura -100;
				if ( $('#menu').hasClass('nav-fixed') ) {
					$('html,body').animate({scrollTop: deslocamentoInicial},'slow');
				} else {
					$('html,body').animate({scrollTop: deslocamentoSecundario},'slow');
				}
			} else {
			}
		});
	});
	
	// Get the #menu to "fix" on window-scroll.
	var message = $( "#menu" );
	var originalMessageTop = message.offset().top;
	var view = $( window );

	view.bind(
		"scroll resize",
		function(){

			var viewTop = view.scrollTop();

			if (
				(viewTop > originalMessageTop) &&
				!message.is( ".nav-fixed" )
				){

				message
					.removeClass( "nav-absolute" )
					.addClass( "nav-fixed" )
				;

			} else if (
				(viewTop <= originalMessageTop) &&
				message.is( ".nav-fixed" )
				){

				message
					.removeClass( "nav-fixed" )
					.addClass( "nav-absolute" )
				;

			}
		}
	);		
	
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