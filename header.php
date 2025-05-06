
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title>
	<?php
		wp_title();
	?>

</title>
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/style.css"  media="all">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="keywords" content="Digitoimisto, mainostoimisto, hämeenlinna, Nico Heinimäki, kotisivut, verkkosivut, verkkokauppa, ohjelmistotestaus, tietoturva, konsultti, konsultointi" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Oswald:700,400,300' rel='stylesheet' type='text/css'>
<link rel="icon" href="<?php bloginfo('template_url');?>/images/favicon.ico" type="image/x-icon" />
<script>(function(){document.documentElement.className='js'})();</script>
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript" ></script>
<script>
$(document).ready(function() {

	$(".border-menu").click(function() {
		$(".resValikko").slideToggle();
	});	

document.querySelector( ".border-menu" )
  .addEventListener( "click", function() {
    this.classList.toggle( "active" );
	});

var btt =$('.ylosNappi');
	btt.on('click', function(e) {
	$('html, body').animate ({
	scrollTop: 0 }, 500);
	e.preventDefault(); 
});

var bttA =$('.alasNappi img');
	bttA.on('click', function(e) {
	$('html, body').animate ({
	scrollTop: 900 }, 500);
	e.preventDefault(); 
});

$(window).scroll(function(){
   if($(window).scrollTop()<200){
		 $('.ylosNappi').fadeOut("fast"); 
         $('.alasNappi img').fadeIn("fast");  		 
         $('#tervetuloaloota').fadeIn("fast"); 
		 $('#headeri').css('background', 'rgba(240 , 240 , 240 , 0.5)');
		 $('#headeri').css('border-bottom', '0px solid #890010');		 
   } else {
         $('.ylosNappi').fadeIn("fast");  
		 $('.alasNappi img').fadeOut("fast"); 		 
         $('#tervetuloaloota').fadeOut("fast"); 	 
		 $('#headeri').css('background', 'rgba(240 , 240 , 240 , 1)');		 
		 $('#headeri').css('border-bottom', '1px solid #890010');			 	 
   }

 });

$(window).scroll(function(){
   if($(window).scrollTop()<400){    
          $('#aloitus').fadeTo(600, 1.00);					  
   } else {   
          $('#aloitus').fadeTo(600, 1.4);				  
}			  
 });
$(window).load(function() {
	$("#loader").fadeOut();
	$("#preloader").delay(500).fadeOut("slow");
}); 
});
</script> 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55443739-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
<!--<!if firefox>
	.margin-top:{-23px!important;}
<![endif]>-->



<div id="preloader"><div id="loader"></div></div>


<div id="headeri">
<div id="hpositioni">
<div id="logo" ><a href="../"><img src="<?php bloginfo('template_url');?>/images/logo.png" alt="logo" /></a></div>
<div id="navi">
<div class="valikkoPos" >
<a class="border-menu"><span></span></a>
</div>

<div class="resValikko">
<ul><li><h1>Menu</h1></li></ul>
<?php
	$args = array (
	'theme_location' => 'primary'
); ?>
<?php wp_nav_menu($args);  ?>
</div><!-- resValikko -->
</div><!-- navi -->
<div id="puhelin"><a href="tel:+358445580013"><img src="<?php bloginfo('template_url');?>/images/seoIcons/telephone5.png" alt="" /></a></div>
</div><!-- hpositioni -->
</div><!-- headeri -->
