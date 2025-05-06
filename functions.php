<?php
/**
 *  Advisori Theme V2
 *
 * @package Advisori Theme V2
 */
 
 if (get_option('thread_comments')) {
	wp_enqueue_script('comment-reply');
	
 }
//Luodaan navigaatiomenu
register_nav_menus(array(
	'primary' => __('Päävalikko'),
	'footer' => __('Alatunnistevalikko')
));


//Tällä luodaan thumbnail
function adval_thumbnail() {
	add_theme_support('post-thumbnails');

}
add_action('after_setup_theme', 'adval_thumbnail');

function custom_comments ($comment, $args, $depth) {
$GLOBALS[' comment '] = $comment; ?>   
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">   
<div id="comment-<?php comment_ID(); ?>">  
<div class="comment-header">               
<?php echo get_avatar($comment, $size='48', $default='<path_to_url>' ); ?>    
                  
<?php printf (__('<b><cite_class="fn">%s</cite></b> <span class="says"> kommentoi:</span>'), get_comment_author_link()) ?>
</div>    
<?php if ($comment->comment_approved =='0') : ?>           
<em><?php _e('Kommenttisi odottaa moderointia.') ?> </em>
<br />           
<?php endif ; ?>                      
<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link($comment->comment_ID )) ?>">
<?php printf(__('%1$s at %2$s'), get_comment_date(), get_comment_time() ) ?> </a> 
<?php edit_comment_link(__(' (Muokkaa) '), '   ', ' ') ?> </div>                                                    
<?php comment_text() ?> <div class="reply">
<?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth'] ))) ?>                        
</div><?php
}

//Rekisteröidään sidebar, jolla saadaan widgetit käyttöön

function uatf_theme_widgets_init() {

	register_sidebar( array (
	'name' => 'Alaotsikko', 
	'id' => 'uatf_footer_area',
	'before_widget' => '<div id="footteri">',
	'after_widget' => '</div>',	
	'before_title' => '<h1>',
	'after_title' => '</h1>'
));
	register_sidebar( array (
	'name' => 'Sliderin oma area', 
	'id' => 'advisori_slide_area',
	'before_widget' => '<div id="slider">',
	'after_widget' => '</div>',	
	'before_title' => '<h1 class="widget_title">',
	'after_title' => '</h1>'
));
}

add_action( 'widgets_init', 'uatf_theme_widgets_init' );

add_shortcode( 'br', 'add_br_shortcode' );

function add_br_shortcode() {
	return '<br class="emptyline"/>';
}
?>