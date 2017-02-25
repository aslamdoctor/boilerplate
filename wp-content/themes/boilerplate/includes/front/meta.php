<div class="post-meta">
	<span class="meta-date">Posted on: <?php the_time('F jS, Y') ?></span>
	<span class="meta-author">by <?php the_author() ?></span>
	<span class="meta-comments"><?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments-link', ''); ?></span>
	<span class="meta-tags"><?php the_tags('Tags: ', ', ', '<br />'); ?></span>
	<span class="meta-category">Posted in <?php the_category(', ') ?></span>
</div>