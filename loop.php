<?php // If there are no posts to display, such as an empty archive page ?>

<?php if ( ! have_posts() ) : ?>

	<article id="post-0" class="post error404 not-found">
		<h1 class="entry-title">Not Found</h1>
		<section class="entry-content">
			<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
			<?php get_search_form(); ?>
		</section><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php endif; // end if there are no posts ?>

<?php // if there are posts, Start the Loop. ?>

<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<section class="entry-content">


				<?php $attachments = new Attachments( 'attachments' ); /* pass the instance name */ ?>
					<?php if( $attachments->exist() ) : ?>
				  
				  <ul class="post-images">
				    <?php while( $attachment = $attachments->get() ) : ?>
				      <li class="post-images-image">

				        <a class="lightbox-link" href="<?php echo $attachments->src( 'lightbox' )  ?>" target="_blank" title="<?php echo $attachments->field( 'caption' ); ?>" rel="gallery">
				          <img src="<?php echo $attachments->src( 'grid' )?>" />
				        </a>
				      </li>
				    <?php endwhile; ?>
				  
				  </ul>
				<?php endif; ?>	
				
			</section><!-- .entry-content -->

		

		</article><!-- #post-## -->

		<?php comments_template( '', true ); ?>


<?php endwhile; // End the loop. Whew. ?>

<?php // Display navigation to next/previous pages when applicable ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  <p class="alignleft"><?php next_posts_link('&laquo; Older Entries'); ?></p>
  <p class="alignright"><?php previous_posts_link('Newer Entries &raquo;'); ?></p>
<?php endif; ?>
