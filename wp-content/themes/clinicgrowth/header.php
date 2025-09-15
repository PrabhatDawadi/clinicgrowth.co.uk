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

			<div class="transparent-menu-active"></div>

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
				
				<div class="col-1-1">
				<div class='container'>
					<div class='col-1-1 flex center-left'>
						<div class='flex center-left logo'>
							<a href='<?php echo get_site_url(); ?>/'>
								<svg xmlns="http://www.w3.org/2000/svg" width="966.96" height="87.36" viewBox="0 0 966.96 87.36" class="col-1-1 height-auto display-block">
  									<path 
										d="M47.88,1.68c18.6,0,29.28-8.04,37.2-18.96L67.56-29.76c-5.04,6.12-10.2,10.2-18.96,10.2C36.84-19.56,28.56-29.4,28.56-42v-.24c0-12.24,8.28-22.2,20.04-22.2,8.04,0,13.56,3.84,18.36,9.84L84.48-68.16C77.04-78.48,66-85.68,48.84-85.68,23.4-85.68,4.56-66.48,4.56-42v.24C4.56-16.68,23.88,1.68,47.88,1.68ZM95.04,0H159V-20.4H118.32V-84H95.04Zm74.4,0h23.4V-84h-23.4ZM208.2,0h23.04V-46.08L267.12,0h20.4V-84H264.48v44.4L229.92-84H208.2Zm94.68,0h23.4V-84h-23.4Zm79.2,1.68c18.6,0,29.28-8.04,37.2-18.96L401.76-29.76c-5.04,6.12-10.2,10.2-18.96,10.2-11.76,0-20.04-9.84-20.04-22.44v-.24c0-12.24,8.28-22.2,20.04-22.2,8.04,0,13.56,3.84,18.36,9.84l17.52-13.56c-7.44-10.32-18.48-17.52-35.64-17.52-25.44,0-44.28,19.2-44.28,43.68v.24C338.76-16.68,358.08,1.68,382.08,1.68Zm160.08-40.8v3.24A35.275,35.275,0,0,1,531-9.42Q519.84,1.32,501.6,1.32q-19.2,0-31.68-12.54T457.44-42q0-18.24,12.36-30.78t31.32-12.54A41.946,41.946,0,0,1,522.3-79.8a39.234,39.234,0,0,1,14.94,14.76l-5.64,3.36A31.88,31.88,0,0,0,519.18-74.4a35.169,35.169,0,0,0-18.06-4.8q-16.32,0-26.82,10.74T463.8-42q0,15.72,10.56,26.46T501.6-4.8q14.76,0,23.88-8.04a29.542,29.542,0,0,0,10.2-20.28H500.04v-6ZM611.16,0,591-34.44H564.48V0h-6.36V-84h33.12a23.9,23.9,0,0,1,17.52,7.32,23.9,23.9,0,0,1,7.32,17.52,23.7,23.7,0,0,1-5.22,15.12,24.67,24.67,0,0,1-13.26,8.76L618.48,0ZM564.48-78v37.56h26.76a17.716,17.716,0,0,0,13.08-5.46,18.155,18.155,0,0,0,5.4-13.26,18.356,18.356,0,0,0-5.4-13.32A17.621,17.621,0,0,0,591.24-78ZM700.92-11.28A41.8,41.8,0,0,1,670.2,1.32a41.7,41.7,0,0,1-30.72-12.66A41.859,41.859,0,0,1,626.88-42a41.859,41.859,0,0,1,12.6-30.66A41.7,41.7,0,0,1,670.2-85.32a41.7,41.7,0,0,1,30.72,12.66A41.859,41.859,0,0,1,713.52-42,42.058,42.058,0,0,1,700.92-11.28Zm-57-4.32A35.77,35.77,0,0,0,670.2-4.8a35.473,35.473,0,0,0,26.22-10.86A36.071,36.071,0,0,0,707.16-42a36.071,36.071,0,0,0-10.74-26.34A35.473,35.473,0,0,0,670.2-79.2a35.473,35.473,0,0,0-26.22,10.86A36.071,36.071,0,0,0,633.24-42,36.377,36.377,0,0,0,643.92-15.6ZM743.88,0,719.52-84h6.72L747.96-8.52,771.36-84h7.56L802.44-8.52,824.04-84h6.72L806.4,0h-7.68L775.2-75.72,751.56,0ZM896.76-84v6h-26.4V0h-6.48V-78h-26.4v-6Zm68.4,0h6.36V0h-6.36V-40.2H916.32V0h-6.36V-84h6.36v37.8h48.84Z" 
										transform="translate(-4.56 85.68)"
										fill="white"
									/>
								</svg>					
							</a>
						</div>
						<div class="flex-1 flex center-center nav-holder">
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
						<div class="mar-l-a flex center-right btn-holder">
							<!-- <div class="flex center-center phone">
								<svg xmlns="http://www.w3.org/2000/svg" width="17.863" height="17.877" viewBox="0 0 17.863 17.877">
  									<path 
										d="M-360.564-94.062a11.384,11.384,0,0,1-9.835-5.681,11.376,11.376,0,0,1-1.532-5.675,11.376,11.376,0,0,0,1.532,5.675,11.384,11.384,0,0,0,9.835,5.681,11.384,11.384,0,0,1-9.835-5.681,11.376,11.376,0,0,1-1.532-5.675,11.376,11.376,0,0,1,1.5-5.682,1.67,1.67,0,0,1,1.241-.823q.073-.01.147-.014l.073,0h.036a1.719,1.719,0,0,1,1.093.41l.042.037q.033.03.064.061l3.139,3.14a1.717,1.717,0,0,1,.5,1.213,1.717,1.717,0,0,1-.5,1.213l-.3.3a1.931,1.931,0,0,0-.566,1.368,1.931,1.931,0,0,1,.566-1.368l.3-.3a1.717,1.717,0,0,0,.5-1.213,1.717,1.717,0,0,1-.5,1.213l-.3.3a1.931,1.931,0,0,0-.566,1.368,1.931,1.931,0,0,0,.566,1.368l1.72,1.721a1.983,1.983,0,0,0,2.736,0l.29-.29a1.719,1.719,0,0,1,2.428,0l3.139,3.139a1.721,1.721,0,0,1,.507,1.229,1.719,1.719,0,0,1-.016.226,1.67,1.67,0,0,1-.822,1.239,11.333,11.333,0,0,1-5.544,1.5,11.325,11.325,0,0,0,5.544-1.5,1.67,1.67,0,0,0,.822-1.239,1.719,1.719,0,0,0,.016-.226,1.719,1.719,0,0,1-.016.226,1.67,1.67,0,0,1-.822,1.239,11.325,11.325,0,0,1-5.544,1.5h-.114Zm.009-1h.028a10.349,10.349,0,0,0,4.827-1.208q.148-.078.294-.162a.673.673,0,0,0,.331-.5.732.732,0,0,0,.007-.107.733.733,0,0,0-.215-.512l-3.139-3.139a.716.716,0,0,0-1.013,0l-.291.29a3,3,0,0,1-4.15,0l-1.724-1.723a2.929,2.929,0,0,1-.857-2.075,2.929,2.929,0,0,0,.857,2.075l1.724,1.723a3,3,0,0,0,4.15,0l.291-.29a.716.716,0,0,1,1.013,0l3.139,3.139a.733.733,0,0,1,.215.512.733.733,0,0,0-.215-.512l-3.139-3.139a.716.716,0,0,0-1.013,0l-.291.29a3,3,0,0,1-4.15,0l-1.724-1.723a2.929,2.929,0,0,1-.857-2.075,2.929,2.929,0,0,1,.857-2.075l.3-.3a.717.717,0,0,0,.21-.507.714.714,0,0,0-.21-.507l-3.14-3.136-.013-.013.013.013,3.14,3.136a.714.714,0,0,1,.21.507.714.714,0,0,0-.21-.507l-3.14-3.136-.013-.013,0,0-.01-.009h0l-.027-.023,0,0-.01-.008,0,0-.012-.009h0a.727.727,0,0,0-.435-.142.727.727,0,0,1,.435.142.729.729,0,0,0-.433-.142h0a.917.917,0,0,0-.1.005.673.673,0,0,0-.5.331,10.349,10.349,0,0,0-1.376,5.178,10.368,10.368,0,0,0,3.035,7.316l.1.1.081.078c.075.071.151.142.227.211l.062.055a10.37,10.37,0,0,0,6.812,2.6Zm-8.5-15.868a.673.673,0,0,0-.5.331,10.349,10.349,0,0,0-1.376,5.178,10.349,10.349,0,0,1,1.376-5.178.673.673,0,0,1,.5-.331Zm.591.183.01.009Zm-.027-.023.027.023Zm-.014-.011.01.008Zm-.014-.011.012.009Z" 
										transform="translate(371.931 111.938)"
										fill="white"
									/>
								</svg>
								<p class="color-white font-bold l-h-1">
									<a 
										class="transition hover-color-primary" 
										href='mailto:<?php echo $settings['website']['PHONE_URL']; ?>'
									>
										<?php echo $settings['website']['PHONE_TEXT']; ?>
									</a>
								</p>
							</div> -->
							<a href='<?php echo get_site_url(); ?>/contact-us/' class="display-block">
								<button class="background-primary color-white hover-background-secondary hover-color-white">Contact Us</button>
							</a>
						</div>
					</div>
				</div>
				</div>
			</header>

			<!-- Whatsapp Business Link -->

			<div style="position: fixed; bottom: 16px; right: 16px; z-index: 9999;">
				<a href="https://wa.link/ny7u8v" class="display-block" target="_blank" rel="noreferrer">
					<div class="display-block b-r-100" 
						style="
							background: transparent; 
							height: 48px; 
							width: 48px;
							box-shadow: 0 0 12px rgba(0,0,0,0.12);
						"
					>
						<svg 
							xmlns="http://www.w3.org/2000/svg" 
							width="448" 
							height="448" 
							viewBox="0 0 448 448"
							class="width-auto display-block mar-0-a" 
							style="
								height: 48px;
							"
						>
							<g transform="translate(-618 -484)">
								<path d="M0,0H283V262H0Z" transform="translate(701 570)" fill="#fff"/>
								<path 
									d="M0,448l121.764-38.682a220.388,220.388,0,0,0,106.3,27.146C349.535,436.464,448,338.749,448,218.232c0,120.517-98.465,218.232-219.938,218.232a220.388,220.388,0,0,1-106.3-27.146Zm0,0L39.693,330.919A215.979,215.979,0,0,1,8.134,218.232,215.979,215.979,0,0,0,39.693,330.919,215.979,215.979,0,0,1,8.134,218.232C8.134,97.7,106.605,0,228.062,0,349.535,0,448,97.7,448,218.232S349.535,436.464,228.062,436.464a220.388,220.388,0,0,1-106.3-27.146ZM287.045,327.67h.013c3.919,0,6.3-.807,9.149-1.245l.012,0,.031,0q.4-.062.824-.112l.11-.013.355-.038q.479-.047.986-.075c9.983-.521,32.186-11.479,38.325-23.8q.316-.635.575-1.274c3.616-8.97,4.907-17.12,4.906-22.024a10.347,10.347,0,0,0-.636-4.335c-1.317-2.371-5-3.911-10.51-6.9s-32.594-17.5-37.673-19.551c5.079,2.052,32.158,16.556,37.673,19.551s9.193,4.529,10.51,6.9a10.347,10.347,0,0,1,.636,4.335,10.347,10.347,0,0,0-.636-4.335c-1.317-2.371-5-3.911-10.51-6.9s-32.594-17.5-37.673-19.551l-.244-.1-.076-.03-.006,0-.086-.034a16.585,16.585,0,0,0-5.817-1.5h-.04c-2.187.005-4.2.979-6.273,3.722-.066.088-.133.177-.2.269-3.957,5.423-15.192,17.57-18.6,21.169a11.527,11.527,0,0,1-2.323,1.937,11.534,11.534,0,0,0,2.324-1.937c3.4-3.6,14.639-15.746,18.6-21.169-3.957,5.423-15.192,17.57-18.6,21.169a11.534,11.534,0,0,1-2.324,1.937c-2.7,1.643-5.632,1.318-9.9-1.008-5.5-2.988-23.373-9.546-44.1-29.317l-.094-.09c-15.6-14.912-26-32.875-29.4-39.113l-.289-.533a9.254,9.254,0,0,1-1.279-4.4,9.254,9.254,0,0,0,1.279,4.4l.289.533-.289-.533a9.254,9.254,0,0,1-1.279-4.4c.009-3,2.127-4.992,4.18-6.866,2.618-2.407,5.856-6.3,8.792-9.449,2.919-3.147,3.948-5.43,5.961-9.083a9.264,9.264,0,0,0,1.212-4.532,12.57,12.57,0,0,0-1.314-5.238c-1.3-2.837-11.49-30.667-15.746-41.99s-9.176-10.515-12.45-10.639c3.273.124,8.192-.685,12.45,10.639s14.443,39.153,15.746,41.99a12.57,12.57,0,0,1,1.314,5.238,12.57,12.57,0,0,0-1.314-5.238c-1.3-2.837-11.49-30.667-15.746-41.99s-9.176-10.515-12.45-10.639q-.417-.015-.827-.027c-.367-.01-.731-.019-1.1-.025-.683-.012-1.366-.017-2.067-.017h-.022c-1.545,0-3.182.025-5.116.056l-1.446.024a21.54,21.54,0,0,0-15.232,6.413c-5.357,5.378-20.365,18.311-21.4,45.725q-.039,1.044-.04,2.087,0-1.043.04-2.087c1.039-27.413,16.047-40.346,21.4-45.725a21.537,21.537,0,0,1,15.232-6.413,21.537,21.537,0,0,0-15.232,6.413c-5.358,5.378-20.366,18.311-21.4,45.725q-.039,1.044-.04,2.087c-.031,26.689,18.188,52.653,20.79,56.368,2.667,3.826,36.494,63.237,92.719,87.67l.633.275.955.413h0l.842.363.244.1.506.218.33.141.036.016q1.188.509,2.34,1l.213.09c29.107,12.335,41.545,15.184,48.8,15.3C286.739,327.669,286.893,327.67,287.045,327.67Zm11.48-1.489c9.983-.52,32.186-11.479,38.325-23.8C330.711,314.7,308.507,325.66,298.525,326.182ZM205.85,243.41c20.725,19.77,38.6,26.329,44.1,29.317-5.5-2.988-23.373-9.546-44.1-29.317l-.094-.09Zm75.12,6.95c-.066.088-.133.177-.2.269C280.837,250.538,280.9,250.448,280.97,250.36Zm12.3-2.158.244.1Zm-.082-.033.006,0Zm-5.9-1.531a16.585,16.585,0,0,1,5.817,1.5A16.591,16.591,0,0,0,287.283,246.638Zm-.022,0h0ZM156.3,111.461l-1.446.024Zm8.3-.014q.41.012.827.027Q165.009,111.459,164.6,111.447Zm-3.162-.042c.7,0,1.383.005,2.067.017C162.82,111.41,162.138,111.405,161.437,111.4Zm-.021,0h0Z" 
									transform="translate(618 484)" 
									fill="#25D366"
								/>
							</g>
						</svg>
					</div>
				</a>
			</div>

			<!-- Calendar Player -->

			<section id="calendar-booking" class="flex center-center">
				<div class="wrap flex center-center">
					<div class="col-1-1">
						<div>
							<div>
								<h4 class="font-bold l-h-1 color-white t-a-c">Book Your<br/><span class="color-primary">Free</span> Videography Shoot</h4>
								<div class="flex center-center">
									<button class="close-calendar-booking color-white hover-color-primary" style="background: transparent;">Cancel & Return</button>
								</div>
							</div>
							<div class="calendly-inline-widget" data-url="https://calendly.com/emma-clinicgrowth/30min" style="min-width:320px; height:700px;"></div>
							<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
							
						</div>
					</div>
				</div>
			</section>