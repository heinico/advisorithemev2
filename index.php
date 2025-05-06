<?php get_header(); ?>

<div id="main">
<img src="<?php bloginfo('template_url');?>/images/services3.jpg" alt="" />
<div class="ylosNappi"><a href="#"><img src="<?php bloginfo('template_url');?>/images/nuoliAlas.png" alt="" /></a></div>
<div id="content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php get_template_part( 'content-single', get_post_format() ); endwhile; else: ?>

<br />
<p><?php _e('Pahoittelut, etsimääsi sivua tai hakutulosta ei löydy.'); ?></p><?php endif; ?>

</div> <!-- content -->
<?php // get_sidebar(); ?>
</div> <!-- main -->
<?php get_footer(); ?>