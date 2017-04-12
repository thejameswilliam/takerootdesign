<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">
			<!-- nav -->
			<nav class="nav" role="navigation">
				<?php root_nav(); ?>
                <?php
                $shop_page_url = get_permalink( wc_get_page_id( 'shop' ) );
                $myaccount_page_id = get_option( 'woocommerce_myaccount_page_id' );
                if (is_user_logged_in() && $myaccount_page_id) :
                    $myaccount_page_url = get_permalink( $myaccount_page_id );
                endif;
                $cart_count = WC()->cart->get_cart_contents_count();
                ?>
                <div class="shop-links hidden-xs hidden-sm">
                    <?php if (is_user_logged_in() && $myaccount_page_id) : ?>
                        <a href="<?php echo $myaccount_page_url; ?>"><i class="fa fa-user" aria-hidden="true"></i></a>
                    <?php endif; ?>
                    <?php if ($cart_count > 0) : ?>
                        <a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
                            <?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?>
                        </a>
                    <?php endif; ?>
                </div>
			</nav>

			<!-- /nav -->
			<!-- header -->
			<?php if(is_home()) : ?>
				<header class="header-home clear" role="banner">
						<div class="site-title">
							<h3 class="fancy"><span>Custom Built</span></h3>
							<h1><?php echo get_bloginfo('name');?></h1>
							<h3 class="fancy"><span><?php echo get_bloginfo('description');?></span></h3>
						</div>
				</header>
			<?php elseif(is_archive()) : ?>
				<header class="header-page clear" role="banner">
						<div class="site-title">
							<h3 class="fancy"><span>Custom Built</span></h3>
							<h1><?php the_archive_title();?></h1>
						</div>
				</header>
			<?php elseif(is_page()) : ?>
				<header class="header-page clear" role="banner">
						<div class="site-title">
							<h3 class="fancy"><span>Custom Built</span></h3>
							<h1><?php the_title();?></h1>
							<h3 class="fancy"><span><?php the_field('sub_title'); ?></span></h3>
						</div>
				</header>
            <?php else : ?>
                <header class="header-page clear" role="banner">
                    <div class="site-title">
                        <h3 class="fancy"><span>Custom Built</span></h3>
                        <h1>Take Root Design</h1>
                        <h3 class="fancy"><span><?php the_field('sub_title'); ?></span></h3>
                    </div>
                </header>
			<?php endif; ?>

			<!-- /header -->
<?php include(get_stylesheet_directory() . '/inc/slider.php'); ?>
