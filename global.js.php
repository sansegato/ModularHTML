<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>


<!--@2.05.abas -->
<script type="text/javascript">
$(document).ready(function(){

	$('#tab-content .tab:first-child').css('display', 'block');
	$('#tab-nav li:first-child a').addClass('current');
	
	var alturaInicial = $('#tab-content .tab:first-child').innerHeight();
	$('#tab-content').height(alturaInicial);

	$('a', $('#tab-nav')).click(function() {
		var i = $('a', $('#tab-nav') ).index(this) + 1;
		$(this).parents('#tabs').children('#tab-content').children('.tab:visible').hide();
		$('#tab' + i).show();
		$(this).parents('#tab-nav').find('a').removeClass('current');
		$(this).addClass('current');
		
		var altura = $('#tab' + i ).innerHeight();
		$('#tab-content').stop().animate({
			height: altura
		}, 'slow' );

		return false;
	});
	
})
</script>
<!--@2.05.abas -->


<!--@2.08.nuvem-de-tags -->
<!--[if lt IE 9]><script type="text/javascript" src="/js/modulos/excanvas.js"></script><![endif]-->
<script src="/js/modulos/jquery.tagcanvas.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	if(!$('#myCanvas').tagcanvas({
	  textColour: '#666',
	  outlineColour: '#bbb',
	  reverse: true,
	  depth: 0.8,
	  maxSpeed: 0.05,
	  zoom: 1.2,
	  zoomStep: 0
	},'tag-cloud')) {
	  // something went wrong, hide the canvas container
	  $('#myCanvasContainer').hide();
	}
});
</script>
<!--@2.08.nuvem-de-tags -->


<!--@4.03.slideshow -->
<script type="text/javascript" src="/js/modulos/jquery.flexslider-min.js"></script>
<script type="text/javascript">
$(window).load(function() {
	$('.slideshow').flexslider();
});
</script>
<!--@4.03.slideshow -->
	

<!--@5.02.compartilhar -->
<script src="/js/modulos/jquery.sharrre-1.2.0.min.js"></script>
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
<!--@5.02.compartilhar -->


<!--@8.09.select+acao-->
<script type="text/javascript">
$(document).ready(function () {
	$('select option').click(function() {
		var valor = $('select option:selected').val();
		if ( valor =="" ) {
			$('#enviar').attr('disabled', 'disabled');
		} else {
			$('#enviar').removeAttr('disabled');
		}
	});
	
});
</script>
<!--@8.09.select+acao-->

