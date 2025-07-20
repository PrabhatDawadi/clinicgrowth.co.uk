<?php
	$settings = parse_ini_file("settings.ini", TRUE);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title><?php wp_title('|', true, 'right'); ?></title>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="copyright" content="<?php echo $settings['website']['MAIN_DOMAIN']; ?>" />
		<meta name="description" content="We help private clinics attract 10–30 new high-value patients every month. Specialist dental & aesthetic clinic marketing: Paid Ads, Content & CRM Systems." />
		<meta name="keywords" content="Clinic marketing agency, Dental marketing UK, Aesthetic clinic marketing London”, Private dentist marketing agency, Paid ads for aesthetic clinics" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0" />
		<meta name="author" content="<?php echo $settings['website']['MAIN_DOMAIN']; ?>"/>
		<link rel="author" href="<?php echo $settings['website']['MAIN_DOMAIN']; ?>" />
		<link rel="publisher" href="<?php echo $settings['website']['MAIN_DOMAIN']; ?>" />
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
								<svg xmlns="http://www.w3.org/2000/svg" width="966.96" height="87.36" viewBox="0 0 966.96 87.36" class="col-1-1 height-auto display-block">
  									<path 
										d="M47.88,1.68c18.6,0,29.28-8.04,37.2-18.96L67.56-29.76c-5.04,6.12-10.2,10.2-18.96,10.2C36.84-19.56,28.56-29.4,28.56-42v-.24c0-12.24,8.28-22.2,20.04-22.2,8.04,0,13.56,3.84,18.36,9.84L84.48-68.16C77.04-78.48,66-85.68,48.84-85.68,23.4-85.68,4.56-66.48,4.56-42v.24C4.56-16.68,23.88,1.68,47.88,1.68ZM95.04,0H159V-20.4H118.32V-84H95.04Zm74.4,0h23.4V-84h-23.4ZM208.2,0h23.04V-46.08L267.12,0h20.4V-84H264.48v44.4L229.92-84H208.2Zm94.68,0h23.4V-84h-23.4Zm79.2,1.68c18.6,0,29.28-8.04,37.2-18.96L401.76-29.76c-5.04,6.12-10.2,10.2-18.96,10.2-11.76,0-20.04-9.84-20.04-22.44v-.24c0-12.24,8.28-22.2,20.04-22.2,8.04,0,13.56,3.84,18.36,9.84l17.52-13.56c-7.44-10.32-18.48-17.52-35.64-17.52-25.44,0-44.28,19.2-44.28,43.68v.24C338.76-16.68,358.08,1.68,382.08,1.68Zm160.08-40.8v3.24A35.275,35.275,0,0,1,531-9.42Q519.84,1.32,501.6,1.32q-19.2,0-31.68-12.54T457.44-42q0-18.24,12.36-30.78t31.32-12.54A41.946,41.946,0,0,1,522.3-79.8a39.234,39.234,0,0,1,14.94,14.76l-5.64,3.36A31.88,31.88,0,0,0,519.18-74.4a35.169,35.169,0,0,0-18.06-4.8q-16.32,0-26.82,10.74T463.8-42q0,15.72,10.56,26.46T501.6-4.8q14.76,0,23.88-8.04a29.542,29.542,0,0,0,10.2-20.28H500.04v-6ZM611.16,0,591-34.44H564.48V0h-6.36V-84h33.12a23.9,23.9,0,0,1,17.52,7.32,23.9,23.9,0,0,1,7.32,17.52,23.7,23.7,0,0,1-5.22,15.12,24.67,24.67,0,0,1-13.26,8.76L618.48,0ZM564.48-78v37.56h26.76a17.716,17.716,0,0,0,13.08-5.46,18.155,18.155,0,0,0,5.4-13.26,18.356,18.356,0,0,0-5.4-13.32A17.621,17.621,0,0,0,591.24-78ZM700.92-11.28A41.8,41.8,0,0,1,670.2,1.32a41.7,41.7,0,0,1-30.72-12.66A41.859,41.859,0,0,1,626.88-42a41.859,41.859,0,0,1,12.6-30.66A41.7,41.7,0,0,1,670.2-85.32a41.7,41.7,0,0,1,30.72,12.66A41.859,41.859,0,0,1,713.52-42,42.058,42.058,0,0,1,700.92-11.28Zm-57-4.32A35.77,35.77,0,0,0,670.2-4.8a35.473,35.473,0,0,0,26.22-10.86A36.071,36.071,0,0,0,707.16-42a36.071,36.071,0,0,0-10.74-26.34A35.473,35.473,0,0,0,670.2-79.2a35.473,35.473,0,0,0-26.22,10.86A36.071,36.071,0,0,0,633.24-42,36.377,36.377,0,0,0,643.92-15.6ZM743.88,0,719.52-84h6.72L747.96-8.52,771.36-84h7.56L802.44-8.52,824.04-84h6.72L806.4,0h-7.68L775.2-75.72,751.56,0ZM896.76-84v6h-26.4V0h-6.48V-78h-26.4v-6Zm68.4,0h6.36V0h-6.36V-40.2H916.32V0h-6.36V-84h6.36v37.8h48.84Z" transform="translate(-4.56 85.68)"/>
								</svg>					
							</a>
						</div>
						<div class="col-1-2 flex center-center nav-holder">
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
						<div class="col-1-4 mar-l-a flex center-right btn-holder">
							<a href='<?php echo get_site_url(); ?>/contact-us/' class="display-block">
								<button class="background-primary color-white hover-background-secondary hover-color-white">Contact Us</button>
							</a>
						</div>
					</div>
				</div>	
			</header>