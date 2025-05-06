<?php get_header(); ?>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/55ff93595a1a1ea7701e1134/19vn61r0g';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<div id="main"><div id="tervetuloaloota"><p><?php bloginfo('description'); ?></p></div>

<div id="kansikuva"><h1 class="widget_title"></h1><?php if(dynamic_sidebar('advisori_slide_area')) : else : endif ?>
</div><div class="ylosNappi"><a href="#"><img src="<?php bloginfo('template_url');?>/images/nuoliAlas.png" alt="" /></a></div><div class="alasNappi"><a href="#"><img src="<?php bloginfo('template_url');?>/images/nuoliYlos.png" alt="" /></a></div>
<div class="aboutti"><div class="aboutti2">
<h1>Advisori on Internetiin keskittynyt hämeenlinnalainen mainostoimisto. </h1><br /><h1>Toteutamme asiakkaille ammatillisella työllä ja viimeisimmillä teknologioilla toteutettuja verkkosivustoja.</h1>
<!--<div id="content">

<?php the_post_thumbnail ('post-thumb'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h2><?php //the_title(); ?></h2>

<h4><?php //the_time('d/m/y') ?></h4>
<br />
<p><?php the_content('Read more...'); ?></p>
<br />
<?php endwhile; else: ?>
<br />
<p><?php _e('Pahoittelut, etsimääsi sivua tai hakutulosta ei löydy.'); ?></p><?php endif; ?>
</div>--><!-- content -->
<br /><br /><br /><br />
<p><a href="./meista">Lisää tietoa Advisorista</a></p>
</div></div> <!-- aboutti, aboutti2 -->

<div id="tavastehuskuva">
</div>

<div class="indexloota">
<div class="sisennys">
<h1>Palvelut </h1>

<div class="serviisit">
<img src="<?php bloginfo('template_url');?>/images/seoIcons/browser10.png" alt="" />
<h3>Verkkosivut</h3>
</div>

<div class="serviisit">
<img src="<?php bloginfo('template_url');?>/images/seoIcons/windows10.png" alt="" />
<h3>Responsiiviset sivut</h3>
</div>

<div class="serviisit">
<img src="<?php bloginfo('template_url');?>/images/seoIcons/magnifying.png" alt="" />
<h3>Hakukoneoptimointi</h3>
</div>

<div class="serviisit">
<img src="<?php bloginfo('template_url');?>/images/seoIcons/html25.png" alt="" />
<h3>Räätälöidyt WordPress-sivupohjat</h3>
</div>

<div class="serviisit">
<img src="<?php bloginfo('template_url');?>/images/seoIcons/shopping10.png" alt="" />
<h3>Verkkokaupat</h3>
</div>

<div class="serviisit">
<img src="<?php bloginfo('template_url');?>/images/seoIcons/tick18.png" alt="" />
<h3>Ohjelmistotestaus</h3>
</div>

<div class="serviisit">
<img src="<?php bloginfo('template_url');?>/images/seoIcons/video25.png" alt="" />
<h3>Word- ja PowerPointin pohjat</h3>
</div>

<div class="serviisit">
<img src="<?php bloginfo('template_url');?>/images/seoIcons/market.png" alt="" />
<h3>Pieniä brändäyksiä</h3>
</div>
<p class="lisaaTietoa"><a href="./palvelut">Lisää tietoa palveluista</a></p>
</div><!-- sisennys -->
</div><!-- indexloota --><div id="valikuva"></div>

<div class="indexloota">
<div class="portfolio">
<h1>Työnäytteet ja referenssit</h1>
<div class="rivi">
<a href="http://uatf.fi" target="_blank"><img src="http://localhost:78/adval/wp-content/uploads/2016/06/nicoUATF.png" alt="" /></a><p>Unique Art Tattoo Festival.</p>
</div>

<div class="rivi">
<a href="http://info.advisori.org" target="_blank"><img src="http://localhost:78/adval/wp-content/uploads/2016/06/nicoInfo.png" alt="" /></a>
<p>Heinimäen Nicon info- ja personal sivusto.</p>
</div>

<div class="rivi">
<a href="http://ezura.advisori.org" target="_blank"><img src="http://localhost:78/adval/wp-content/uploads/2016/06/nicoEru.png" alt="" /></a>
<p>Ezuran valokuvasivusto.</p>
</div>

</div><!-- portfolio -->
</div><!-- indexloota --><div id="lappajarvikuva"></div><div class="indexloota"><div class="sisennys"><h1>Viimeisin blogikirjoitus</h1><br /><?phpglobal $wp_query;$wp_query = new WP_Query( array( 'p' => 'portfolio' ) );include( 'single-portfolio.php' );?></div></div><!-- sisennys, indexloota -->

<div class="indexloota2">
<div class="contact">
<h1>Yhteystiedot</h1>
<p><a href="mailto:nico.heinimaki@gmail.com?subject=Moi!">nico.heinimaki@gmail.com</a></p>
<p><a href="tel:+358445580013">044 558 0013</a></p>
<p><a href="./yhteystiedot">Lähetä viesti!</a></p>
</div></div>

<?php //get_sidebar(); ?>
</div> <!-- main -->
<?php get_footer(); ?>
