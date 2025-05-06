<?php if ( have_comments() ) : ?>
<h4><?php comments_number('Ei kommentteja.', 'Yksi kommentti.', '% kommenttia.' ); ?></h4>
<ul class="comment-list">
<?php wp_list_comments('callback=custom_comments'); ?>
	</ul>
<?php endif; ?>
	
	


<?php
	$comments_args = array(
	'label_submit' => 'Lähetä kommentti',
	'title_reply' => '<h2>Jätä kommentti</h2>',
	'comment_notes_after' => '' );
	comment_form($comments_args);
	?>