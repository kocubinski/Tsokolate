<?php get_header();?>
        <div id="main">
<?php get_sidebar();?>
            <div id="content">
<?php if (have_posts()) : ?>

		<h1>Search Results</h1>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post">
				<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                <div class="entry">
					<?php the_excerpt(); ?>
                    </div>
				
				<div class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> on <?php the_time('F j, Y') ?> <!-- | by <?php the_author() ?> -->| <?php edit_post_link('Edit', '', ' | '); ?>  There are currently <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></div>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">No posts found. Try a different search?</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>
            </div>
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/spacer.gif" alt="free blog themes" height="1" width="800">
        </div><!-- end og main -->
<?php get_footer ();?>
