<?php get_header(); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
        <section class="takeroot-categories">
            <div class="row">
                <div class="col-md-12">
                    <?php echo root_category_list('slug', '', 'home-prod-category'); ?>
                </div>
            </div>
        </section>
        <!-- /section -->


        <!-- section -->
        <section class="takeroot-tagline">
            <div class="row">
                <div class="col-md-12">
                    <h2><?php echo get_bloginfo('description'); ?></h2>
                </div>

            </div>

        </section>
        <!-- /section -->

        <!-- section -->
        <section class="takeroot-features">
            <div class="row">
                <div class="col-md-12">
                    <?php echo apply_filters( 'the_content','[featured_products per_page="4" columns="4"]'); ?>
                </div>
            </div>
        </section>
        <!-- /section -->



        <!-- /section -->






	</main>

<?php get_footer(); ?>
