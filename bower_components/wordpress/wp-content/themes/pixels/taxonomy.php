<?php get_header(); ?>
<div class="content">
    <?php get_sidebar(); ?>
    <main class="item">

	    <header>
    		<h1><?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); echo $term->name; ?></h1>
    		<?php echo category_description(); ?>
    		 <figure class="fl-left">
	            <a href="<?php the_field('banner_link', $term); ?>" target="_blank">
	                <img src="<?php the_field('banner', $term); ?>" alt="<?php the_title(); ?> Logo">
	            </a>
	        </figure>


	    </header>
	    <section class="companies">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<article class="company panel">
			<header class="panel__heading">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<h3><? the_field('city'); ?></h3>
			</header>
			<div class="panel__body">
				<figure class="fl-right">
					<? if ( has_post_thumbnail() ) {
						the_post_thumbnail('company_thumb');
					}
					else {
						echo '<img src="http://placehold.it/150x50">';
					}
					?>
				</figure>
				<?php the_excerpt(); ?>
			</div>
			<footer class="panel__footer">
				<a href="<?php the_permalink(); ?>" class="btn btn--primary btn--sm">More information</a>
			</footer>
		</article>
	<?php endwhile; ?>
    </main>
</div>
<?php get_footer(); ?>