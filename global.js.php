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

<!--@2.10.calendar-picker-->
<!-- Tema do jQueryUI usado:smoothness | arquivo css e imagens na pasta 'smoothness' -->
<link rel="stylesheet" href="/js/modulos/smoothness/jquery-ui-1.8.17.custom.css" />
<script src="/js/modulos/jquery-ui-1.8.17.custom.min.js"></script>
<script type="text/javascript">
$(function(){
	$('#datepicker').datepicker();
});
</script>
<!--@2.10.calendar-picker-->

<!--@4.03.image-slideshow-->
<script type="text/javascript" src="/js/modulos/jquery.flexslider-min.js"></script>
<script type="text/javascript">
$(window).load(function() {
	$('.slideshow').flexslider();
});
</script>
<!--@4.03.image-slideshow-->
	
<!--@5.01.tweets-->
<script type="text/javascript" src="/js/modulos/jquery.jtweetsanywhere-1.3.1.min.js"></script>
<script type="text/javascript" src="http://platform.twitter.com/anywhere.js?id=kxArpQ1JRyYdGOKosZsrow&v=1"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#tweetFeed').jTweetsAnywhere({
			username: 'a2comunicacao',
			count: 3,
			showTweetFeed: {
				showProfileImages: true,
				showUserScreenNames: true,
				showUserFullNames: true,
				showActionReply: true,
				showActionRetweet: true,
				showActionFavorite: true
			},
			showTweetBox: false
		});
	});
</script>
<!--@5.01.tweets-->
	
<!--@5.02.widget-social-networks-share-->
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
	googlePlus: {size: 'tall', lang: 'pt-BR'},
	facebook: {layout: 'box_count', lang: 'pt_BR'},
	twitter: {count: 'vertical', lang:'pt_br'},
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
<!--@5.02.widget-social-networks-share-->


<!--@5.03.control-font-size-->
<script type="text/javascript">
$(document).ready(function() {
	$('.resizeText').click(function(){
		var ourText = $('p');
		var currFontSize = ourText.css('fontSize');
		var finalNum = parseFloat(currFontSize, 16);
		var stringEnding = currFontSize.slice(-2);
		if(this.id == 'increase') {
			finalNum *= 1.2;
		}
		else if (this.id == 'decrease'){
			finalNum /=1.2;
		}
		ourText.css('fontSize', finalNum + stringEnding);
		return false;
	});	
});
</script>
<!--@5.03.control-font-size-->

<!--@5.04.print-->
<script type="text/javascript">
$(document).ready(function() {
	$("#print").click(function(){
		window.print();
		return false;
	});
});
</script>
<!--@5.04.print-->


<!--@5.05.contrast-->
<script src="/js/modulos/styleswitcher.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.contrast').click(function() {
		if ( getActiveStyleSheet() == 'normal' )
			setActiveStyleSheet('contraste');
		else 
			setActiveStyleSheet('normal');
		return false;
	});
});
</script>
<!--@5.05.contrast-->


<!--@5.08.01.audio-player-->
<script src="/js/modulos/audio/jquery.jplayer.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#jquery_jplayer_1").jPlayer({
		ready: function () {
			$(this).jPlayer("setMedia", {
				mp3:"/js/modulos/audio/musica.mp3"
			});
		},
		play: function() { // To avoid both jPlayers playing together.
			$(this).jPlayer("pauseOthers");
		},
		repeat: function(event) { // Override the default jPlayer repeat event handler
			if(event.jPlayer.options.loop) {
				$(this).unbind(".jPlayerRepeat").unbind(".jPlayerNext");
				$(this).bind($.jPlayer.event.ended + ".jPlayer.jPlayerRepeat", function() {
					$(this).jPlayer("play");
				});
			} else {
				$(this).unbind(".jPlayerRepeat").unbind(".jPlayerNext");
				$(this).bind($.jPlayer.event.ended + ".jPlayer.jPlayerNext", function() {
					$("#jquery_jplayer_2").jPlayer("play", 0);
				});
			}
		},
		swfPath: "/js/modulos/audio",
		supplied: "mp3",
		wmode: "window"
	});
});
</script>
<!--@5.08.01.audio-player-->


<!--@5.08.02.audio-player-->
<script type="text/javascript" src="/js/modulos/mediaelement-and-player.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
	$('.visualizacao audio').mediaelementplayer();
});
</script>
<!--@5.08.02.audio-player-->


<!--@5.10.rating-->
<script type="text/javascript" src="/js/modulos/jquery.raty.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('#rating').raty({
		cancel:     true,
		path:		'/modulos/5.10.rating/img/'
	});
});
</script>
<!--@5.10.rating-->

<!--@7.01.modal-window-->
<!-- Tema do jQueryUI usado :smoothness | arquivo css e imagens na pasta 'smoothness' -->
<link rel="stylesheet" href="/js/modulos/smoothness/jquery-ui-1.8.17.custom.css" />
<script src="/js/modulos/jquery-ui-1.8.17.custom.min.js"></script>
<script type="text/javascript">
$(function(){		
	$('#dialog').dialog({
		autoOpen: false,
		modal: true,
		width: 600,
		buttons: {
			"Ok": function() { 
				$(this).dialog("close"); 
			}, 
			"Cancel": function() { 
				$(this).dialog("close"); 
			} 
		}
	});
	$('#dialog_link').click(function(){
		$('#dialog').dialog('open');
		return false;
	});
});
</script>
<!--@7.01.modal-window-->

<!--@8.09.form-select-action-->
<script type="text/javascript">
$(document).ready(function () {
	$('#select-action option').click(function() {
		var valor = $('#select-action option:selected').val();
		if ( valor =="" ) {
			$('#select-submit').attr('disabled', 'disabled');
		} else {
			$('#select-submit').removeAttr('disabled');
		}
	});
	
});
</script>
<!--@8.09.form-select-action-->

<!--@8.11.form-search-field-->
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
<!--@8.11.form-search-field-->

<!--@8.12.form-cadastre-->
<script type="text/javascript" src="/js/modulos/jquery.password-strength.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('#cadastre-password').password_strength();
});
</script>
<!--@8.12.form-cadastre-->

<!--@8.15.form-password-strength-->
<script type="text/javascript" src="/js/modulos/jquery.password-strength.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('#password').password_strength();
});
</script>
<!--@8.15.form-password-strength-->


