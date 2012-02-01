<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<!--@2.05.navigation-tabs-->
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
<!--@2.05.navigation-tabs-->


<!--@2.06.navigation-carousel-->
<script type="text/javascript" src="/js/modulos/jquery.elastislide.js"></script>
<script type="text/javascript">	
$('#carousel').elastislide({
	imageW 	: 90,
	margin	: 10,
	minItems	: 3
});
</script>
<!--@2.06.navigation-carousel-->


<!--@2.07.navigation-accordion-->
<script type="text/javascript">
$(document).ready(function() {
	var firstAccordion = $('.accordion-item:first-child');
	firstAccordion.find('.accordion-title').addClass('open');
	firstAccordion.find('.accordion-content').css('display','block');
	
	$('.accordion-item').find('.accordion-title').each(function() {
		$(this).click(function() {
			if ( $(this).hasClass('open') ) {
				$(this).removeClass('open');
				$(this).siblings('.accordion-content').slideUp('slow');
			} 
			else {
				$('.accordion-item').find('.accordion-title').removeClass('open');
				$('.accordion-item').find('.accordion-content').slideUp('slow');
				$(this).addClass('open');
				$(this).siblings('.accordion-content').slideDown('slow');
			}
			return false;
		});
	});
});
</script>
<!--@2.07.navigation-accordion-->


<!--@2.08.navigation-tag-cloud-->
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
<!--@2.08.navigation-tag-cloud-->

<!--@2.09.navigation-glossary-->
<script src="/js/modulos/jquery.listnav.pack-2.1.js"></script>		
<script charset="utf-8" type="text/javascript">
	$(document).ready(function(){
		var url = document.URL.split('#')[1];
		if(url){
			var primeiraLetra = url.charAt(0);
		}
		if(primeiraLetra != ''){
			$('#abc').listnav({
				initLetter: primeiraLetra,
				includeAll: false,
				noMatchText: 'N&atilde;o h&aacute; itens com essa letra.',
				includeNums: false
			});	
		}else{
			$('#abc').listnav({
				includeAll: false,
				noMatchText: 'N&atilde;o h&aacute; itens com essa letra.',
				includeNums: false
			});	
		}
	});
</script>	
<!--@2.09.navigation-glossary-->

<!--@4.03.image-slideshow-->
<script type="text/javascript" src="/js/modulos/jquery.flexslider-min.js"></script>
<script type="text/javascript">
$(window).load(function() {
	$('.slideshow').flexslider();
});
</script>
<!--@4.03.image-slideshow-->
	
	
<!--@5.02.social-networks-share-->
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
<!--@5.02.social-networks-share-->

<!--@8.09.form-select+action-->
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
<!--@8.09.form-select+action-->

<!--@8.11.search-field-->
<script type="text/javascript">
$(document).ready(function() {
	$('input[type=text], textarea').each(function(){
		$(this).val($(this).attr('title'));
	});
	
	$('input[type=text], textarea').focus(function() {	
		if ( ( $(this).val() == $(this).attr('title') ) ) {
			$(this).val("");
		}
	});
	$('input[type=text], textarea').blur(function() {
		if( $(this).val() == "") {
			$(this).val( $(this).attr('title') );
		}
	});
});
</script>
<!--@8.11.search-field-->


