<?php get_header(); ?>
  <main id="content">
	[ARCHIVE Template]
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<article class="post">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

			<p>By <?php the_author(); ?>
               on <span class="date"><?php echo the_time('l, F jS, Y'); ?></span>
               in <?php the_category( ', ' ); ?>
               <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
            </p>
			<?php the_excerpt(); ?>
		</article>
		<?php endwhile; else: ?>
	           <!-- we run this else if there is no content -->
	          <div class="page-header">
	            <h1>Wups!</h1>
	          </div>

	          <p>Looks like we have no content for this page?</p>

	    <?php endif; ?>
	</main>
	<aside>
		<?php get_sidebar(); ?>

	</aside>

<?php get_footer(); ?>

