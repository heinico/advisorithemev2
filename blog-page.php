<?php get_header(); 
/**
* Template Name: Blog template
*/
?>

<div id="main">
<?php the_post_thumbnail ('post-thumb'); ?>
<div class="ylosNappi"><a href="#"><img src="<?php bloginfo('template_url');?>/images/nuoliAlas.png" alt="" /></a></div>
<div id="content">
<h3>TESTI</h3>
<h1><?php the_title(); ?></h1>

<h2><?php single_post_title( 'Current post: ' ); ?></h2>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h4><?php the_time('d/m/y') ?></h4>
<br />
<?php the_content(__('(more...)')); ?>
<br />
<?php endwhile; else: ?>
<br />
<p><?php _e('Pahoittelut, etsimääsi sivua tai hakutulosta ei löydy.'); ?></p><?php endif; ?>

</div><!-- content -->
<?php // get_sidebar(); ?>
</div> <!-- main -->
<div id="delimiter">
</div> <!-- delimiter -->
<?php get_footer(); ?>