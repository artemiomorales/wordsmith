<?php get_header(); ?>
<?php $query1 = new WP_Query( 'category_name=entries' ); ?>
<div id="content-prototypes" class="content group">
	<?php if ($query1->have_posts()) : while ($query1->have_posts()) : $query1->the_post(); ?>

	<!-- <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2> -->
	<h2 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h2>
	<!-- <p class="comments"><a href="<?php comments_link(); ?>"><?php comments_number('without comments','with one comment','with % comments'); ?></a></p> -->

	<div class="main">
		<?php the_content('Read the rest of this entry &raquo;'); ?>
	</div>

	<div class="meta group">
	<div class="signature">
	    <p>Written by <?php the_author() ?> <span class="edit"><?php edit_post_link('Edit'); ?></span></p>
	    <p><?php the_time('F jS, Y'); ?> <?php _e("at"); ?> <?php the_time('g:i a'); ?></p>
	</div>	
	<div class="tags">
	    <p>Posted in <?php the_category(',') ?></p>
	    <?php if ( the_tags('<p>Tagged with ', ', ', '</p>') ) ?>
	</div>
	</div>

	<?php if ( comments_open() ) comments_template(); ?>

	<?php endwhile; else: ?>
	<div class="warning">
		<p>Sorry, but you are looking for something that isn't here.</p>
	</div>
	<?php endif; ?>

	<div class="navigation group">
		<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
		<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
	</div>

</div>

<?php wp_reset_postdata(); ?>
<?php $query2 = new WP_Query( 'category_name=projects' ); ?>

<div id="content-entries" class="content group">
	<?php if ($query2->have_posts()) : while ($query2->have_posts()) : $query2->the_post(); ?>

	<!-- <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2> -->
	<h2 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h2>
	<!-- <p class="comments"><a href="<?php comments_link(); ?>"><?php comments_number('without comments','with one comment','with % comments'); ?></a></p> -->

	<div class="main">
		<?php the_content('Read the rest of this entry &raquo;'); ?>
	</div>

	<div class="meta group">
	<div class="signature">
	    <p>Written by <?php the_author() ?> <span class="edit"><?php edit_post_link('Edit'); ?></span></p>
	    <p><?php the_time('F jS, Y'); ?> <?php _e("at"); ?> <?php the_time('g:i a'); ?></p>
	</div>	
	<div class="tags">
	    <p>Posted in <?php the_category(',') ?></p>
	    <?php if ( the_tags('<p>Tagged with ', ', ', '</p>') ) ?>
	</div>
	</div>

	<?php if ( comments_open() ) comments_template(); ?>

	<?php endwhile; else: ?>
	<div class="warning">
		<p>Sorry, but you are looking for something that isn't here.</p>
	</div>
	<?php endif; ?>

	<div class="navigation group">
		<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
		<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
	</div>

</div> 

<?php get_footer(); ?>