<?php get_header(); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<section>

			<!-- article -->
			<article id="post-404">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h1><?php _e( 'Page not found', 'html5blank' ); ?></h1>
                        <h2>
                            <a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a>
                        </h2>
                    </div>

                </div>


			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>
<?php get_footer(); ?>
