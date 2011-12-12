<?php get_header();?>
        <div id="main">
<?php get_sidebar();?>
            <div id="content">
 <?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>
				<div class="postmetadata">
					<?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> on <?php the_time('F j, Y') ?> 
    	            <!-- | by <?php the_author() ?> --><?php edit_post_link('Edit', '', ' | '); ?> 
                </div>
			<?php comments_template(); // Get wp-comments.php template ?>
			</div>
			<?php endwhile; ?>

			<div class="navigation">
				<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
				<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
			</div>

		<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>
            </div><img src="<?php bloginfo('stylesheet_directory'); ?>/images/spacer.gif" alt="free blog themes" height="1" width="800"/>
        </div><!-- end og main -->
<?php get_footer ();?>
