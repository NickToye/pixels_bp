<?php get_header(); ?>

<div class="wrapper">
	<div class="content">

		<main>
			<header>
				<h1>Blog</h1>
			</header>
			<?php query_posts('post_type=post&posts_per_page=10&paged=' . $paged); ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<article class="blog-post">
				<header>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p class="author"><?php koi_posted_on(); ?><br />
					Filed in <?php the_category(', ') ?></p>
				</header>
				<?php if(has_post_thumbnail()) :?>
				<figure class="img pull-right">
					<?php the_post_thumbnail('blog-thumb', array('class' => 'img img--thumbnail')); ?>
				</figure>
				<?php else :?>
				<?php endif;?>
				<?php the_excerpt(); ?>

				<a href="<?php the_permalink(); ?>" class="btn btn--primary btn--sm read-more">Read More<i class="fa fa-chevron-right pull-right"></i></a>

			</article>

			<?php endwhile; ?>

			<div class="paginate">
				<?php posts_nav_link(' | ', 'Previous', 'Next'); ?>
			</div>
		</main>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>

