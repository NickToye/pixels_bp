<?php get_header(); ?>

<div class="wrapper">
	<div class="content">

		<main>

			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<header>
				<h1><?php the_title();?></h1>
			</header>

			<div class="scaffold">
				<?php the_content(); ?>
			</div>

			<?php endwhile; ?>
		</main>
	</div>

</div>





