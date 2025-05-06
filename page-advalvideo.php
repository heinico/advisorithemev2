<?php get_header(); ?>
<div id="tervetuloaloota"><p>Web-ohjelmointi on vakavaa bisnestä.</p>
</div>

<div id="main">
<?php the_post_thumbnail ('post-thumb'); ?>
<video id="video" src="<?php bloginfo('template_url');?>/videos/coding.mp4" autoplay="true" loop="true" muted="true"></video>
<div class="ylosNappi"><a href="#"><img src="<?php bloginfo('template_url');?>/images/nuoliAlas.png" alt="" /></a></div>
<div class="alasNappi"><img src="<?php bloginfo('template_url');?>/images/nuoliYlos.png" alt="" /></div>
<div id="content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h1><?php the_title(); ?></h1>

<br />
<?php the_content(__('(more...)')); ?>
<br />
<?php endwhile; else: ?>
<br />
<p><?php _e('Pahoittelut, etsimääsi sivua tai hakutulosta ei löydy.'); ?></p><?php endif; ?>

</div> <!-- content -->
<?php // get_sidebar(); ?>
</div> <!-- main -->
<?php get_footer(); ?>