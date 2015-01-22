<?php get_header(); ?>
	<div class="container">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<div class="col-lg-8">
				<div class="row">
					<h2><?php the_title(); ?></h2>
					<?php the_post_thumbnail(); ?>
					
					<?php the_content(); ?>

					<div class="postmetadata">
						<?php the_tags('Tags: ', ', ', '<br />'); ?>
						Posted in <?php the_category(', ') ?> | 
						<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
					</div>
				</div><!--end row-->
			</div>

		</div>
	
		<?php endwhile; else : ?>

			<h2>Not Found</h2>

		<?php endif; ?>
			
		<?php get_sidebar("right"); ?>
		
	</div><!--end container-->
<?php get_footer(); ?>