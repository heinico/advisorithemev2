<?php get_header(); 
/**
* Template Name: English template
*/
?>
<div id="main">
<div id="aloitus"></div><div id="kansikuvaeng"></div>
<div class="ylosNappi"><a href="#"><img src="<?php bloginfo('template_url');?>/images/nuoliAlas.png" alt="" /></a></div>
<div class="alasNappi"><img src="<?php bloginfo('template_url');?>/images/nuoliYlos.png" alt="" /></div>
<div class="indexloota">
<div class="sisennys">
<h1>About Advisori</h1>
<p>Advisori is a finnish digital agency focused on the Internet. Our main service is to make professional websites, and they are being used a latest technology.</p>
<br /><br />
</div></div>
<div id="tavastehuskuva">
</div>

<div class="indexloota">
<div class="sisennys">
<h1>Services</h1>

<div class="serviisit">
<img src="<?php bloginfo('template_url');?>/images/seoIcons/browser10.png" alt="" />
<h3>Websites</h3>
</div>

<div class="serviisit">
<img src="<?php bloginfo('template_url');?>/images/seoIcons/windows10.png" alt="" />
<h3>Responsive sites</h3>
</div>

<div class="serviisit">
<img src="<?php bloginfo('template_url');?>/images/seoIcons/magnifying.png" alt="" />
<h3>Search engine optimization</h3>
</div>

<div class="serviisit">
<img src="<?php bloginfo('template_url');?>/images/seoIcons/html25.png" alt="" />
<h3>Custom wordPress themes</h3>
</div>

<div class="serviisit">
<img src="<?php bloginfo('template_url');?>/images/seoIcons/shopping10.png" alt="" />
<h3>eCommerce</h3>
</div>

<div class="serviisit">
<img src="<?php bloginfo('template_url');?>/images/seoIcons/tick18.png" alt="" />
<h3>Software testing</h3>
</div>

<div class="serviisit">
<img src="<?php bloginfo('template_url');?>/images/seoIcons/video25.png" alt="" />
<h3>Word and PowerPoint themes</h3>
</div>

<div class="serviisit">
<img src="<?php bloginfo('template_url');?>/images/seoIcons/market.png" alt="" />
<h3>Small branding</h3>
<br /><br /><br />
</div>
</div></div>
<div class="indexloota">
<div class="sisennys">
<h1></h1>
<div id="content">
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

</div><!-- content -->
</div></div>
<div id="lappajarvikuva">
</div>

<div class="indexloota2">
<div class="contact">
<h1>Contact</h1>
<p><a href="mailto:nico.heinimaki@gmail.com?subject=Moi!">nico.heinimaki@gmail.com</a></p>
<p><a href="tel:+358445580013">+358 44 558 0013</a></p>
</div></div>

<?php //get_sidebar(); ?>
</div> <!-- main -->
<?php get_footer(); ?>