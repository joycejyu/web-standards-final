<?php get_header(); ?>
	[ Blog Page Template ]
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-centered">
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
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>


	<aside class="col-md-4">
		<?php if ( dynamic_sidebar( 'blog-side' ) ); ?>
	</aside>
      </div>

<?php get_footer(); ?>