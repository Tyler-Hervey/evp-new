<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EVP
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script type="text/javascript">
    var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142238644-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-142238644-1');
</script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'evp' ); ?></a>

	<header id="masthead" class="site-header">
		<!-- <div class="site-branding">
			<?php
			the_custom_logo(); ?> -->
			

		<!-- </div> site branding -->
	<nav id="site-navigation" class="main-navigation">
	<a class="logo-dark-link" href="/">
		<img id="logo-dark" src="<?php bloginfo('template_url'); ?>/img/Logo2.png" />
	</a>
			<a href="/" class="navigation__link logo">
				<svg id="site-logo"  width="134px" height="47px" viewBox="0 0 134 47" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						<g id="Present-og-color" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<g id="Artboard" transform="translate(-9.000000, -8.000000)">
										<g id="EVP_Logos_PMSC_Primary_Rev" transform="translate(9.000000, 8.000000)">
												<polyline id="Fill-3" fill="#FFFFFE" points="72.0392054 35.5568429 85.5326543 35.5568429 85.5326543 37.7564429 69.8034736 37.7564429 69.8034736 9.24456429 85.5326543 9.24456429 85.5326543 11.4438286 72.0392054 11.4438286 72.0392054 22.2373786 85.5326543 22.2373786 85.5326543 24.3966929 72.0392054 24.3966929 72.0392054 35.5568429"></polyline>
												<polyline id="Fill-4" fill="#FFFFFE" points="108.778034 9.24456429 111.053965 9.24456429 101.381092 37.7564429 99.3490348 37.7564429 89.6758265 9.24456429 91.9520922 9.24456429 100.365063 34.0494857 108.778034 9.24456429"></polyline>
												<path d="M124.871016,23.6222 C128.122106,23.6222 130.926653,21.5045143 130.926653,17.5128714 C130.926653,13.5212286 128.122106,11.4438286 124.871016,11.4438286 L117.920282,11.4438286 L117.920282,23.6222 L124.871016,23.6222 Z M117.920282,25.8224714 L117.920282,37.7564429 L115.68522,37.7564429 L115.68522,9.24456429 L124.871016,9.24456429 C129.382008,9.24456429 133.16205,12.0548286 133.16205,17.5128714 C133.16205,22.9709143 129.382008,25.8224714 124.871016,25.8224714 L117.920282,25.8224714 L117.920282,25.8224714 Z" id="Fill-5" fill="#FFFFFE"></path>
												<path d="M39.3005073,44.3626286 L28.7600066,44.3626286 L34.3644108,24.5121786 L50.7371097,24.5121786 L39.3005073,44.3626286 Z M3.65676484,24.5121786 L20.1520706,24.5121786 L25.7564748,44.3626286 L15.0933672,44.3626286 L3.65676484,24.5121786 Z M40.1882342,3.88421429 L50.7371097,22.1947429 L35.0186488,22.1947429 L40.1882342,3.88421429 Z M19.4978326,22.1947429 L3.65676484,22.1947429 L14.2880482,3.74153571 L19.4978326,22.1947429 Z M32.0154519,24.5121786 L27.2582407,41.3610071 L22.5013645,24.5121786 L32.0154519,24.5121786 Z M21.8471265,22.1947429 L16.2423873,2.34362143 L38.274094,2.34362143 L32.6696899,22.1947429 L21.8471265,22.1947429 Z M40.6357826,0.0261857138 L13.758092,0.0261857138 L0.319246693,23.3532929 L13.758092,46.6800643 L40.6357826,46.6800643 L54.0749629,23.3532929 L40.6357826,0.0261857138 L40.6357826,0.0261857138 Z" id="Fill-6" fill="#2AE3A2"></path>
										</g>
								</g>
						</g>
				</svg>
			</a>
					
			<!-- <div class="navigation__nav">
					<ul class="navigation__list">
							<li class="navigation__item"><a href="/who-we-are/" class="navigation__link">WHO<span class="navigation__text-space"></span>WE<span class="navigation__text-space"></span>ARE</a></li>
							<li class="navigation__item"><a href="/our-solutions/" class="navigation__link">OUR<span class="navigation__text-space"></span>SOLUTIONS</a></li>
							<li class="navigation__item"><a href="/for-appraisers/" class="navigation__link">FOR<span class="navigation__text-space"></span>APPRAISERS</a></li>
					</ul>
			</div> -->
			<div class="desktop-nav">
				<?php
				wp_nav_menu( array( 
						'theme_location' => 'my-custom-menu', 
						'container_class' => 'navigation__nav' ) ); 
				?>
			</div>

			<svg id="toggle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" alt="show"><path d="M432 176H80c-8.8 0-16-7.2-16-16s7.2-16 16-16h352c8.8 0 16 7.2 16 16s-7.2 16-16 16zM432 272H80c-8.8 0-16-7.2-16-16s7.2-16 16-16h352c8.8 0 16 7.2 16 16s-7.2 16-16 16zM432 368H80c-8.8 0-16-7.2-16-16s7.2-16 16-16h352c8.8 0 16 7.2 16 16s-7.2 16-16 16z" fill="white"/></svg>
			<div id="popout">
			<?php
wp_nav_menu( array( 
    'theme_location' => 'my-custom-menu', 
    'container_class' => 'navigation__nav' ) ); 
?>
</div>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
