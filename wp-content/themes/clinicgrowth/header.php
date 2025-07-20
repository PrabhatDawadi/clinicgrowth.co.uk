<!DOCTYPE HTML>
<html>
	<head>
		<title><?php wp_title('|', true, 'right'); ?></title>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="copyright" content="https://cosmeticdigital.co.uk" />
		<meta name="description" content="We help private clinics attract 10–30 new high-value patients every month. Specialist dental & aesthetic clinic marketing: Paid Ads, Content & CRM Systems." />
		<meta name="keywords" content="Clinic marketing agency, Dental marketing UK, Aesthetic clinic marketing London”, Private dentist marketing agency, Paid ads for aesthetic clinics" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0" />
		<meta name="author" content="cosmeticdigital.co.uk"/>
		<link rel="author" href="https://cosmeticdigital.co.uk" />
		<link rel="publisher" href="https://cosmeticdigital.co.uk/" />
		<?php $settings = parse_ini_file("settings.ini", TRUE); ?>

		<link rel='stylesheet' href='<?php bloginfo('template_directory'); ?>/css/fonts.css?ver=<?php echo $settings['design']['CSS_VERSION']; ?>' type='text/css' media='all'/>
		<link rel='stylesheet' href='<?php bloginfo('template_directory'); ?>/css/base.css?ver=<?php echo $settings['design']['CSS_VERSION']; ?>' type='text/css' media='all'/>
		<link rel='stylesheet' href='<?php bloginfo('template_directory'); ?>/css/pages.css?ver=<?php echo $settings['design']['CSS_VERSION']; ?>' type='text/css' media='all'/>
		<link rel='stylesheet' href='<?php bloginfo('template_directory'); ?>/css/responsive.css?ver=<?php echo $settings['design']['CSS_VERSION']; ?>' type='text/css' media='all'/>
		<link rel='stylesheet' href='<?php bloginfo('template_directory'); ?>/css/animations.css?ver=<?php echo $settings['design']['CSS_VERSION']; ?>' type='text/css' media='all'/>
		<link rel='stylesheet' href='<?php bloginfo('template_directory'); ?>/css/vivify.min.css?ver=<?php echo $settings['design']['CSS_VERSION']; ?>' type='text/css' media='all'/>
		
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-3.2.1.min.js?ver=<?php echo $settings['design']['JS_VERSION']; ?>"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-ui.min.js?ver=<?php echo $settings['design']['JS_VERSION']; ?>"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/velocity.min.js?ver=<?php echo $settings['design']['JS_VERSION']; ?>"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/tweenmax.min.js?ver=<?php echo $settings['design']['JS_VERSION']; ?>"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider-min.js?ver=<?php echo $settings['design']['JS_VERSION']; ?>"></script>

		<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_directory'); ?>/images/favicons/96x96.ico">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/images/favicons/48x48.ico">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/images/favicons/32x32.ico">        
        <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/images/favicons/16x16.ico">
		<?php wp_head(); ?>	
	</head>
	<body>
		<main>
			
			<?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); ?>

			<header id='header'>
				<div class='menu-btn' >
					<svg
						clip-rule='evenodd'
						fill-rule='evenodd'
						stroke-linejoin='round'
						stroke-miterlimit='2'
						viewBox='0 0 24 24'
						xmlns='http://www.w3.org/2000/svg'>
						<path
							d='m13 16.745c0-.414-.336-.75-.75-.75h-9.5c-.414 0-.75.336-.75.75s.336.75.75.75h9.5c.414 0 .75-.336.75-.75zm9-5c0-.414-.336-.75-.75-.75h-18.5c-.414 0-.75.336-.75.75s.336.75.75.75h18.5c.414 0 .75-.336.75-.75zm-4-5c0-.414-.336-.75-.75-.75h-14.5c-.414 0-.75.336-.75.75s.336.75.75.75h14.5c.414 0 .75-.336.75-.75z'
							fill-rule='nonzero'
						/>
					</svg>
				</div>
				<div class='container'>
					<div class='col-1-1 flex center-left'>
						<div class='col-1-4 flex center-left logo'>
							<a href='<?php echo get_site_url(); ?>/'>	
								<svg xmlns="http://www.w3.org/2000/svg" width="1045.88" height="87.36" viewBox="0 0 1045.88 87.36" class="col-1-1 height-auto display-block">
									<g transform="translate(-3708.96 -806.32)">
										<path d="M349.953,328.389l38.758,85.856h-13.4l-26.005-57.213-26.129,57.213H309.726Z" transform="translate(4312.209 478.051)" fill="#57baa9"/>
										<path d="M-391.68-84q17.16,0,28.5,12.18T-351.84-42q0,17.64-11.34,29.82T-391.68,0h-32.76V-84Zm0,73.44q12.84,0,21-9T-362.52-42q0-13.44-8.16-22.44t-21-9h-21.6v62.88ZM-338.28-84h11.16V0h-11.16Zm110.16,42.36v5.04q0,16.44-11.28,27.3T-269.28,1.56q-19.2,0-31.74-12.66A42.246,42.246,0,0,1-313.56-42a42.246,42.246,0,0,1,12.54-30.9q12.54-12.66,31.5-12.66a42.147,42.147,0,0,1,21.36,5.58,39.826,39.826,0,0,1,15,14.7l-9.6,5.64a27.046,27.046,0,0,0-10.86-10.98,31.771,31.771,0,0,0-16.02-4.14q-14.4,0-23.64,9.42T-302.52-42q0,13.92,9.3,23.28t24.06,9.36q12.6,0,20.4-6.18a25.188,25.188,0,0,0,9.48-16.02h-30.84V-41.64ZM-214.56-84h11.16V0h-11.16Zm82.92,0v10.56h-24.84V0h-11.04V-73.44h-24.72V-84ZM-38.4-10.56H-2.16V0h-47.4V-84H-38.4Z" transform="translate(4757 892)" fill="#000"/>
										<path d="M47.64,1.68q-18.96,0-31.32-12.6T3.96-42q0-18.6,12.36-31.14T47.64-85.68A42.815,42.815,0,0,1,68.7-80.34,39.1,39.1,0,0,1,83.76-65.88L69.48-57.6a22.172,22.172,0,0,0-8.88-8.82A26.361,26.361,0,0,0,47.64-69.6q-12.24,0-19.74,7.68T20.4-42q0,12.12,7.5,19.8t19.74,7.68A26.7,26.7,0,0,0,60.66-17.7a21.5,21.5,0,0,0,8.82-8.7l14.28,8.28a39.21,39.21,0,0,1-15,14.46A42.714,42.714,0,0,1,47.64,1.68ZM163.8-10.92a42.342,42.342,0,0,1-30.96,12.6,42.041,42.041,0,0,1-30.9-12.66Q89.28-23.64,89.28-42t12.66-31.02a42.041,42.041,0,0,1,30.9-12.66A42.239,42.239,0,0,1,163.8-73.02Q176.52-60.36,176.52-42A42.28,42.28,0,0,1,163.8-10.92ZM113.52-22.2a26.452,26.452,0,0,0,19.32,7.68,26.344,26.344,0,0,0,19.32-7.74q7.8-7.74,7.8-19.74t-7.8-19.8a26.239,26.239,0,0,0-19.32-7.8,26.239,26.239,0,0,0-19.32,7.8q-7.8,7.8-7.8,19.8T113.52-22.2ZM213.84,1.68q-12.48,0-21-5.58a29.846,29.846,0,0,1-12-15.18L195-27.36q4.92,12.84,19.32,12.84,6.96,0,10.2-2.52a7.74,7.74,0,0,0,3.24-6.36,7.71,7.71,0,0,0-3.96-6.9q-3.96-2.46-14.16-5.34A87.982,87.982,0,0,1,200.1-39a41.142,41.142,0,0,1-7.8-4.5,18.351,18.351,0,0,1-5.94-7.14,23.374,23.374,0,0,1-2.04-10.08q0-11.4,8.1-18.18a29.385,29.385,0,0,1,19.5-6.78,32.422,32.422,0,0,1,17.94,4.98,33.466,33.466,0,0,1,12.06,13.86L228-58.8q-5.04-10.8-16.08-10.8-5.16,0-8.1,2.34a7.391,7.391,0,0,0-2.94,6.06,7.647,7.647,0,0,0,3.3,6.42q3.3,2.46,12.66,5.34,3.84,1.2,5.82,1.86t5.4,2.04a32.55,32.55,0,0,1,5.28,2.58,41.638,41.638,0,0,1,4.26,3.24,16.6,16.6,0,0,1,3.66,4.2,23.576,23.576,0,0,1,2.16,5.22,23.519,23.519,0,0,1,.9,6.66q0,11.64-8.46,18.48T213.84,1.68ZM336.72-84V0H320.28V-54.48l-23.64,39h-1.92L271.08-54.36V0H254.52V-84h17.04l24.12,39.72,24-39.72Zm32.16,68.16h35.4V0H352.32V-84h51.36v15.84h-34.8v17.88h31.8v15.6h-31.8ZM471.48-84v15.84H448.8V0H432.24V-68.16H409.68V-84Zm9.24,0h16.56V0H480.72Zm72,85.68q-18.96,0-31.32-12.6T509.04-42q0-18.6,12.36-31.14t31.32-12.54a42.815,42.815,0,0,1,21.06,5.34,39.1,39.1,0,0,1,15.06,14.46L574.56-57.6a22.172,22.172,0,0,0-8.88-8.82,26.361,26.361,0,0,0-12.96-3.18q-12.24,0-19.74,7.68T525.48-42q0,12.12,7.5,19.8t19.74,7.68a26.7,26.7,0,0,0,13.02-3.18,21.5,21.5,0,0,0,8.82-8.7l14.28,8.28a39.209,39.209,0,0,1-15,14.46A42.714,42.714,0,0,1,552.72,1.68Z" transform="translate(3705 892)" fill="#000"/>
									</g>
								</svg>								
							</a>
						</div>
						<div class="col-1-2 flex center-center">
							<?php if ( has_nav_menu( 'primary' ) ) : ?>
								<nav id='navigations'>
									<?php
										wp_nav_menu(
											array(
												'theme_location' => 'primary',
												'menu_class'     => 'main-menu',
												'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
											)
										);
									?>
								</nav>
							<?php endif; ?>		
						</div>
						<div class="col-1-4 mar-l-a flex center-right">
							<button class="background-primary color-white hover-background-secondary hover-color-white">Contact Us</button>
						</div>
					</div>
				</div>	
			</header>