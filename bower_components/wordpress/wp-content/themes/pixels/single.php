<?php get_header(); ?>

<div class="wrapper">
	<div class="content">

		<main>

			<header>
				<?php breadcrumb_trail( array('container' => 'div','show_browse' => 'false')); ?>
			</header>
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<article class="article">
				<header>
					<h1><?php the_title();?></h1>
					<time><?php sfp_posted_on(); ?></time>
				</header>
				<figure class="featured">
					<?php the_post_thumbnail('featured-image'); ?>
				</figure>
				<?php the_content();?>
			</article>
			<?php endwhile; ?>
		</main>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>
