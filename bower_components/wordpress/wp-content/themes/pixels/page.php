<?php get_header(); ?>

<div class="wrapper">
	<div class="content">

		<main>
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<header>
				<?php breadcrumb_trail( array('container' => 'div','show_browse' => 'false')); ?>
				<h1><?php the_title();?></h1>
			</header>
				<figure class="featured">
					<?php the_post_thumbnail('featured-image'); ?>
				</figure>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</main>
		<?php get_sidebar(); ?>
	</div>

</div>

<?php get_footer(); ?>




