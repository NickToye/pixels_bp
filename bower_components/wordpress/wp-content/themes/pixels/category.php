<?php get_header(); ?>

<div class="wrapper">
	<div class="content">

	    <main>
		    <header>
			    <?php breadcrumb_trail( array('container' => 'div','show_browse' => 'false')); ?>
	    		<h1><?php single_cat_title(); ?></h1>
		    </header>
		    <section class="block">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<div class="media">
					<?php if ( has_post_thumbnail() ) { ?>
						<figure class="media__img">

							<?	the_post_thumbnail('blog-thumb'); ?>


						</figure>
						<div class="media__body">
							<header class="media__body__heading">
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<time><?php the_time('l, F jS, Y') ?></time>
							</header>
							<?php the_excerpt(); ?>
						</div>
					<?php } else { ?>
						<div class="media__body media__body--noimage">
							<header class="media__body__heading">
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<time><?php the_time('l, F jS, Y') ?></time>
							</header>
							<?php the_excerpt(); ?>
						</div>
					<?php } ?>

				</div>
			<? endwhile; ?>

			<?php wpbeginner_numeric_posts_nav(); ?>
			</section>
	    </main>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>
