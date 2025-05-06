<?php get_header(); ?>

<div id="main">
<?php the_post_thumbnail ('post-thumb'); ?>
<div class="ylosNappi"><a href="#"><img src="<?php bloginfo('template_url');?>/images/nuoliAlas.png" alt="" /></a></div>
<div id="content">
<h1><?php the_title(); ?></h1>
<br />
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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