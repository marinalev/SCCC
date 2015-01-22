<?php 
/* Template Name : Member 
*/
?>
<?php get_header(); ?>
	<div class="container ">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php get_sidebar("left"); ?>
		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<div class="col-lg-8">
				
					<h2><?php the_title(); ?></h2>
					<?php post_thumbnail(); ?>
					<?php the_content(); ?>
				
			</div>

		</div>
	
		<?php endwhile;  else : ?>

			<h2>Not Found</h2>

		<?php endif; ?>
			
			
		 
	</div><!--end container-->
<?php get_footer(); ?>