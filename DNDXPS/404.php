<?php 
get_header(); ?>
	
	<main id="main" class="container">

		<div class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentynineteen' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentynineteen' ); ?></p>
				<?php get_search_form(); ?>
			</div><!-- .page-content -->
		</div><!-- .error-404 -->

	</main><!-- #main -->	

<?php get_footer();