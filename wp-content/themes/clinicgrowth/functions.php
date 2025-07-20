<?php 

// =======================================
	//			0. Add SVG capabilities
	// =======================================

		function wpcontent_svg_mime_type($mimes=array()) {

			$mimes['svg']  = 'image/svg+xml';
			$mimes['svgz'] = 'image/svg+xml';
			return $mimes;
		}
		add_filter( 'upload_mimes', 'wpcontent_svg_mime_type' );

	// =======================================
	//			1. Enqueue Scripts
	// =======================================

		function custom_script_enqueue() {

			$settings = parse_ini_file("settings.ini", TRUE);			
			wp_enqueue_script('customjs', get_template_directory_uri().'/js/main.js', array(), $settings['design']['JS_VERSION'], 'all');
			wp_localize_script('customjs', 'CustomAjax', array(
				'ajaxurl' => admin_url('admin-ajax.php'),
				'check_nonce' => wp_create_nonce('CUSTOM_WP_SPECIAL_STRING')
			));
			wp_enqueue_style('basestyle', get_template_directory_uri().'/css/base.css', array(), $settings['design']['CSS_VERSION'], 'all');
			wp_enqueue_style('pagesstyles', get_template_directory_uri().'/css/pages.css', array(), $settings['design']['CSS_VERSION'], 'all');			
			wp_enqueue_style('responsive', get_template_directory_uri().'/css/responsive.css', array(), $settings['design']['CSS_VERSION'], 'all');
			wp_enqueue_style('animationstyles', get_template_directory_uri().'/css/animations.css', array(), $settings['design']['CSS_VERSION'], 'all');
			wp_enqueue_style('vivifystyles', get_template_directory_uri().'/css/vivify.min.css', array(), $settings['design']['CSS_VERSION'], 'all');
			
		}
		add_action('wp_enqueue_scripts','custom_script_enqueue');

	// =======================================
	//			2. Theme Setup
	// =======================================	

		function custom_theme_setup() {

			add_theme_support('menus');
			add_theme_support('post-thumbnails');
			register_nav_menu('primary','Header Navigations');
			register_nav_menu('my-custom-menu','Footer Menu');
		}
		add_action('init', 'custom_theme_setup');

	// =======================================
	//			3. Custom Title Addition
	// =======================================

		function add_page_title($title) {

		    if (!is_single())
		        return $title;
		    global $wp_query;
		    if (isset($wp_query->post->post_title)){
		        return $wp_query->post->post_title;
		    }
		    return $title;
		}
		add_filter('wp_title', 'add_page_title');

	// =======================================
	//			4. Allow SVG Upload
	// =======================================

		function cc_mime_types($mimes) {

			$mimes['svg'] = 'image/svg+xml';
			$mimes['svgz'] = 'image/svg+xml';
			return $mimes;
		}
		add_filter('upload_mimes', 'cc_mime_types');

	// =======================================
	//			Get Experiences
	// =======================================

		function get_all_experiences($limit='-1') {
			if (is_plugin_active('our-experiences/index.php')) {
				$allPosts = new WP_Query(
					array(
						'post_type'			=> 'our-experiences', 
						'post_status'		=> 'publish', 
						'posts_per_page'	=> $limit,
						'order_by'			=> 'menu_order', 
						'order'				=> 'asc'
					)
				);
				if ($allPosts->have_posts()):
					echo '<div class="row">';
						while($allPosts->have_posts()):$allPosts->the_post();
							echo '<div class="col play-video" data-video-url="'.get_post_meta( get_the_ID(), 'videoURL', true ).'">';
								echo '<img alt="thumb" src="'.get_template_directory_uri().'/images/icons/300x400.svg"/>';
								echo '<div class="ol"></div>';
								echo '<video class="bg-video" playsInline="true" controls="false" autoPlay="false" muted="true" loop="true">';
									echo '<source src="'. get_post_meta( get_the_ID(), 'videoURL', true ). '" type="video/mp4" />';
								echo '</video>';
								echo '<div class="icon">';
									echo '<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><g id="Play_1"><path d="M6.562,21.94a2.5,2.5,0,0,1-2.5-2.5V4.56A2.5,2.5,0,0,1,7.978,2.5L18.855,9.939a2.5,2.5,0,0,1,0,4.12L7.977,21.5A2.5,2.5,0,0,1,6.562,21.94Zm0-18.884a1.494,1.494,0,0,0-.7.177,1.477,1.477,0,0,0-.8,1.327V19.439a1.5,1.5,0,0,0,2.35,1.235l10.877-7.44a1.5,1.5,0,0,0,0-2.471L7.413,3.326A1.491,1.491,0,0,0,6.564,3.056Z"></path></g></svg>';
								echo '</div>';
							echo '</div>';
						endwhile;
					echo '</div>';
					wp_reset_postdata();
				else :
				endif;
			}
		}

	// =======================================
	//			Get Menus
	// =======================================


		function get_all_menus($limit='-1') {
			if (is_plugin_active('our-menus/index.php')) {
				$allPosts = new WP_Query(
					array(
						'post_type'			=> 'our-menus', 
						'post_status'		=> 'publish', 
						'posts_per_page'	=> $limit,
						'order_by'			=> 'menu_order', 
						'order'				=> 'asc'
					)
				);
				if ($allPosts->have_posts()):
					echo '<div class="all">';
						while($allPosts->have_posts()):$allPosts->the_post();
							echo '<div class="one">';
								echo '<a href="'. get_the_permalink() . '">';
									echo '<div class="img cover-img" style="background-image: url(';
											echo the_post_thumbnail_url();
										echo ');">';
										echo '<img src=';
											echo the_post_thumbnail_url();
										echo '" />';
									echo '</div>';
								echo '</a>';
								echo '<div class="desc">';
									echo '<div class="i">';
										echo '<svg xmlns="http://www.w3.org/2000/svg" width="81.06" height="80.134" viewBox="0 0 81.06 80.134">
												<g transform="translate(-257.709 389.492)">
													<path d="M277.941-317.758v-16.667H294.8c3.237,0,5.935,2.933,6.609,6.667H286.438a1.776,1.776,0,0,0-1.755,1.733,1.776,1.776,0,0,0,1.755,1.733h33.719c7.148,0,13.353,2.933,14.837,6.667Zm-3.373,4.933H261.081v-26.667h13.487Zm58.268-11.733a25.638,25.638,0,0,0-12.813-3.2H304.781c-.675-5.6-4.991-10-9.981-10H277.941v-3.333a1.775,1.775,0,0,0-1.753-1.733H259.462a1.775,1.775,0,0,0-1.753,1.733v30a1.775,1.775,0,0,0,1.753,1.733h16.86a1.775,1.775,0,0,0,1.753-1.733v-3.333h58.941a1.775,1.775,0,0,0,1.753-1.733c-.135-3.2-2.159-6.267-5.935-8.4" fill="#e84043"/>
													<path d="M296.554-379.491h3.371a23.466,23.466,0,0,1,23.469,21.733H272.949a23.69,23.69,0,0,1,23.6-21.733Zm1.617-6.667a1.775,1.775,0,0,1,1.753,1.733,1.775,1.775,0,0,1-1.753,1.733,1.775,1.775,0,0,1-1.753-1.733A1.775,1.775,0,0,1,298.171-386.158Zm22.929,38.4H275.242l-4.316-6.667h54.491Zm-58.268-6.667h4.183l5.933,9.2a1.554,1.554,0,0,0,1.484.8H322.18a1.485,1.485,0,0,0,1.348-.8l6.069-9.2h4.181a1.775,1.775,0,0,0,1.753-1.733,1.775,1.775,0,0,0-1.753-1.733h-6.744a26.9,26.9,0,0,0-23.873-24.8,4.982,4.982,0,0,0-.546-4.659,4.982,4.982,0,0,0-4.174-2.141,5.019,5.019,0,0,0-4.151,2.157,5.019,5.019,0,0,0-.57,4.643,26.786,26.786,0,0,0-23.873,24.8H263.1a1.775,1.775,0,0,0-1.753,1.733,1.557,1.557,0,0,0,.364,1.19,1.557,1.557,0,0,0,1.119.543" fill="#e84043"/>
													<path d="M293.181-374.424c-7.417,0-13.487,8-13.487,13.333a1.774,1.774,0,0,0,1.752,1.733,1.776,1.776,0,0,0,1.755-1.733c0-1.733,1.213-4.4,3.1-6.4,1.215-1.333,3.777-3.6,7.149-3.6a1.775,1.775,0,0,0,1.753-1.733c0-.933-1.079-1.6-2.024-1.6" fill="#e84043"/>
													<path d="M267.825-317.758a1.774,1.774,0,0,1-1.753-1.733,1.774,1.774,0,0,1,1.753-1.733,1.775,1.775,0,0,1,1.753,1.733,1.775,1.775,0,0,1-1.753,1.733Zm0-6.667a5.1,5.1,0,0,0-5.127,5.067,5.1,5.1,0,0,0,5.127,5.067,5.093,5.093,0,0,0,3.612-1.472,5.093,5.093,0,0,0,1.512-3.6,5.093,5.093,0,0,0-1.512-3.6,5.093,5.093,0,0,0-3.612-1.471" fill="#e84043"/>
												</g>
											</svg>';
									echo '</div>';
									echo '<div class="t">';
										echo '<div>';
											echo '<h6 class="color-white f-w-600 _t">';
												echo '<span class="flex center-left">';
													echo '<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><g id="Bookmark"><path d="M17.6,21.945a1.483,1.483,0,0,1-1.01-.4l-4.251-3.9a.5.5,0,0,0-.68,0L7.409,21.545a1.5,1.5,0,0,1-2.516-1.1V4.57a2.5,2.5,0,0,1,2.5-2.5h9.214a2.5,2.5,0,0,1,2.5,2.5V20.442a1.481,1.481,0,0,1-.9,1.374A1.507,1.507,0,0,1,17.6,21.945ZM12,16.51a1.5,1.5,0,0,1,1.018.395l4.251,3.9a.5.5,0,0,0,.839-.368V4.57a1.5,1.5,0,0,0-1.5-1.5H7.393a1.5,1.5,0,0,0-1.5,1.5V20.442a.5.5,0,0,0,.839.368L10.983,16.9A1.5,1.5,0,0,1,12,16.51Z"></path></g></svg>';
													echo '&nbsp;&nbsp;';
													echo get_the_title();
												echo '</span>';
											echo '</h6>';
											echo '<p class="color-read f-w-300 _d">';
												echo '<span class="flex center-left">';
												echo '<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><g id="Clock_1"><g><path d="M12,21.933A9.933,9.933,0,1,1,21.933,12,9.944,9.944,0,0,1,12,21.933ZM12,3.067A8.933,8.933,0,1,0,20.933,12,8.943,8.943,0,0,0,12,3.067Z"></path><path d="M11.5,6a.5.5,0,0,1,1,0v4.8c1.13-1.13,2.26-2.27,3.39-3.4a.5.5,0,0,1,.71.71l-4.26,4.25a.463.463,0,0,1-.58.07c-.01-.02-.02-.02-.03-.02a.425.425,0,0,1-.22-.33Z"></path></g></g></svg>';
													echo '<span>';
														echo get_post_meta( get_the_ID(), 'TIMING', true );
													echo '</span>';
												echo '</span>';
											echo '</p>';
										echo '</div>';
									echo '</div>';
								echo '</div>';
								echo '<div class="btn">';
									echo '<a href="' .get_the_permalink(). '">';
										echo '<button class="red">';
											echo '<span>';
												echo '<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><g id="Circle_Chev_Right"><g><path d="M13.85,11.65a.492.492,0,0,1,0,.7l-3,3a.495.495,0,0,1-.7-.7L12.79,12,10.15,9.35a.495.495,0,0,1,.7-.7Z"></path><path d="M12,2.067A9.933,9.933,0,1,1,2.067,12,9.944,9.944,0,0,1,12,2.067Zm0,18.866A8.933,8.933,0,1,0,3.067,12,8.943,8.943,0,0,0,12,20.933Z"></path></g></g></svg>';
												echo 'Find out more';
											echo '</span>';
										echo '</button>';
									echo '</a>';
								echo '</div>';
							echo '</div>';
						endwhile;
					echo '</div>';
					wp_reset_postdata();
				else :
				endif;
			}
		}

		function get_other_menus($menuName) {			
			if (is_plugin_active('our-menus/index.php')) {
				$allPosts = new WP_Query(
					array(
						'post_type'			=> 'our-menus', 
						'post_status'		=> 'publish', 
						'posts_per_page'	=> -1,
						'order_by'			=> 'menu_order', 
						'order'				=> 'desc'
					)
				);
				if ($allPosts->have_posts()):
					echo '<div class="other-menus">';
						while($allPosts->have_posts()):$allPosts->the_post();
							if(get_the_title() != $menuName) {
								echo '<a href="'. get_the_permalink() . '" title="' . get_the_title() . '">';
									echo '<div class="m">';
										echo '<div class="i">';
											echo '<svg xmlns="http://www.w3.org/2000/svg" width="81.06" height="80.134" viewBox="0 0 81.06 80.134"><g transform="translate(-257.709 389.492)"><path d="M277.941-317.758v-16.667H294.8c3.237,0,5.935,2.933,6.609,6.667H286.438a1.776,1.776,0,0,0-1.755,1.733,1.776,1.776,0,0,0,1.755,1.733h33.719c7.148,0,13.353,2.933,14.837,6.667Zm-3.373,4.933H261.081v-26.667h13.487Zm58.268-11.733a25.638,25.638,0,0,0-12.813-3.2H304.781c-.675-5.6-4.991-10-9.981-10H277.941v-3.333a1.775,1.775,0,0,0-1.753-1.733H259.462a1.775,1.775,0,0,0-1.753,1.733v30a1.775,1.775,0,0,0,1.753,1.733h16.86a1.775,1.775,0,0,0,1.753-1.733v-3.333h58.941a1.775,1.775,0,0,0,1.753-1.733c-.135-3.2-2.159-6.267-5.935-8.4" fill="#e84043"/><path d="M296.554-379.491h3.371a23.466,23.466,0,0,1,23.469,21.733H272.949a23.69,23.69,0,0,1,23.6-21.733Zm1.617-6.667a1.775,1.775,0,0,1,1.753,1.733,1.775,1.775,0,0,1-1.753,1.733,1.775,1.775,0,0,1-1.753-1.733A1.775,1.775,0,0,1,298.171-386.158Zm22.929,38.4H275.242l-4.316-6.667h54.491Zm-58.268-6.667h4.183l5.933,9.2a1.554,1.554,0,0,0,1.484.8H322.18a1.485,1.485,0,0,0,1.348-.8l6.069-9.2h4.181a1.775,1.775,0,0,0,1.753-1.733,1.775,1.775,0,0,0-1.753-1.733h-6.744a26.9,26.9,0,0,0-23.873-24.8,4.982,4.982,0,0,0-.546-4.659,4.982,4.982,0,0,0-4.174-2.141,5.019,5.019,0,0,0-4.151,2.157,5.019,5.019,0,0,0-.57,4.643,26.786,26.786,0,0,0-23.873,24.8H263.1a1.775,1.775,0,0,0-1.753,1.733,1.557,1.557,0,0,0,.364,1.19,1.557,1.557,0,0,0,1.119.543" fill="#e84043"/><path d="M293.181-374.424c-7.417,0-13.487,8-13.487,13.333a1.774,1.774,0,0,0,1.752,1.733,1.776,1.776,0,0,0,1.755-1.733c0-1.733,1.213-4.4,3.1-6.4,1.215-1.333,3.777-3.6,7.149-3.6a1.775,1.775,0,0,0,1.753-1.733c0-.933-1.079-1.6-2.024-1.6" fill="#e84043"/><path d="M267.825-317.758a1.774,1.774,0,0,1-1.753-1.733,1.774,1.774,0,0,1,1.753-1.733,1.775,1.775,0,0,1,1.753,1.733,1.775,1.775,0,0,1-1.753,1.733Zm0-6.667a5.1,5.1,0,0,0-5.127,5.067,5.1,5.1,0,0,0,5.127,5.067,5.093,5.093,0,0,0,3.612-1.472,5.093,5.093,0,0,0,1.512-3.6,5.093,5.093,0,0,0-1.512-3.6,5.093,5.093,0,0,0-3.612-1.471" fill="#e84043"/></g></svg>';
										echo '</div>';
										echo '<div class="t">';
											echo '<div>';
												echo '<h6 class="color-white f-w-600 _t transition-all-200ms">';
													echo '<span class="flex center-left">';
														echo '<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><g id="Bookmark"><path d="M17.6,21.945a1.483,1.483,0,0,1-1.01-.4l-4.251-3.9a.5.5,0,0,0-.68,0L7.409,21.545a1.5,1.5,0,0,1-2.516-1.1V4.57a2.5,2.5,0,0,1,2.5-2.5h9.214a2.5,2.5,0,0,1,2.5,2.5V20.442a1.481,1.481,0,0,1-.9,1.374A1.507,1.507,0,0,1,17.6,21.945ZM12,16.51a1.5,1.5,0,0,1,1.018.395l4.251,3.9a.5.5,0,0,0,.839-.368V4.57a1.5,1.5,0,0,0-1.5-1.5H7.393a1.5,1.5,0,0,0-1.5,1.5V20.442a.5.5,0,0,0,.839.368L10.983,16.9A1.5,1.5,0,0,1,12,16.51Z"></path></g></svg>
														&nbsp;&nbsp;';
														echo get_the_title();
													echo '</span>';
												echo '</h6>';
												echo '<p class="color-read f-w-300 _d">';
													echo '<span class="flex center-left">';
													echo '<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><g id="Timer"><g><path d="M2.336,9.685A9.934,9.934,0,0,0,13.592,21.808,9.931,9.931,0,0,0,20.708,7.23,10.046,10.046,0,0,0,12,2.072a.507.507,0,0,0-.5.5v4.2a.5.5,0,0,0,1,0v-4.2l-.5.5a8.935,8.935,0,0,1,8.433,11.892A8.938,8.938,0,0,1,6.468,19.027,9.041,9.041,0,0,1,3.3,9.951c.142-.627-.822-.9-.964-.266Z"></path><path d="M7.4,8.117a.5.5,0,0,1,.707-.707l4.243,4.242h0a.5.5,0,0,1-.707.707Z"></path></g></g></svg>
														<span>';
															echo get_post_meta( get_the_ID(), 'TIMING', true );
														echo '</span>';
													echo '</span>';
												echo '</p>';
											echo '</div>';
										echo '</div>';
									echo '</div>';
								echo '</a>';
							}
						endwhile;
					echo '</div>';
					wp_reset_postdata();
				else :
				endif;
			}
		}

	// =======================================
	//			Get Gallery
	// =======================================

		function countImgTags($html) {
			$dom = new DOMDocument();
			libxml_use_internal_errors(true);
			$dom->loadHTML($html, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
			libxml_clear_errors();
			$imgTags = $dom->getElementsByTagName('img');
			return $imgTags->length;
		}

		function get_all_gallery($limit='-1') {
			if (is_plugin_active('our-gallery/index.php')) {
				$allPosts = new WP_Query(
					array(
						'post_type'			=> 'our-gallery', 
						'post_status'		=> 'publish', 
						'posts_per_page'	=> $limit,
						'order_by'			=> 'menu_order', 
						'order'				=> 'asc'
					)
				);
				if ($allPosts->have_posts()):
					echo '<div class="all">';
						while($allPosts->have_posts()):$allPosts->the_post();
							echo '<div class="one">';
								echo '<a href="'. get_the_permalink() . '" title="' . get_the_title() . '">';
									echo '<div class="img cover-img" style="background-image: url(';
											echo the_post_thumbnail_url();
										echo ');">';
										echo '<div class="cover">';
											echo '<img src="';
												echo the_post_thumbnail_url();
											echo '" />';
										echo '</div>';
										echo '<div class="i">';
											echo '<div class="r">';
												echo '<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><g id="Image_On"><g><path d="M18.435,3.06H5.565a2.5,2.5,0,0,0-2.5,2.5V18.44a2.507,2.507,0,0,0,2.5,2.5h12.87a2.507,2.507,0,0,0,2.5-2.5V5.56A2.5,2.5,0,0,0,18.435,3.06ZM4.065,5.56a1.5,1.5,0,0,1,1.5-1.5h12.87a1.5,1.5,0,0,1,1.5,1.5v8.66l-3.88-3.88a1.509,1.509,0,0,0-2.12,0l-4.56,4.57a.513.513,0,0,1-.71,0l-.56-.56a1.522,1.522,0,0,0-2.12,0l-1.92,1.92Zm15.87,12.88a1.5,1.5,0,0,1-1.5,1.5H5.565a1.5,1.5,0,0,1-1.5-1.5v-.75L6.7,15.06a.5.5,0,0,1,.35-.14.524.524,0,0,1,.36.14l.55.56a1.509,1.509,0,0,0,2.12,0l4.57-4.57a.5.5,0,0,1,.71,0l4.58,4.58Z"></path><path d="M8.062,10.565a2.5,2.5,0,1,1,2.5-2.5A2.5,2.5,0,0,1,8.062,10.565Zm0-4a1.5,1.5,0,1,0,1.5,1.5A1.5,1.5,0,0,0,8.062,6.565Z"></path></g></g></svg>';
												echo '<p class="small">';
													echo countImgTags(get_the_content());
													echo " Photos";
												echo '</p>';
											echo '</div>';
										echo '</div>';
									echo '</div>';
								echo '</a>';
								echo '<h6 class="title">';
									echo '<a href="'. get_the_permalink() . '" title="' . get_the_title() . '">';
										echo get_the_title();
									echo '</a>';
								echo '</h6>';
								echo '<p class="date">';
									echo '<span class="flex center-left" style="gap: 4px">';
										echo '<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><g id="Clock_2"><g><path d="M12,21.933A9.933,9.933,0,1,1,21.933,12,9.944,9.944,0,0,1,12,21.933ZM12,3.067A8.933,8.933,0,1,0,20.933,12,8.943,8.943,0,0,0,12,3.067Z"></path><path d="M18,12.5H12a.429.429,0,0,1-.34-.14c-.01,0-.01-.01-.02-.02A.429.429,0,0,1,11.5,12V6a.5.5,0,0,1,1,0v5.5H18A.5.5,0,0,1,18,12.5Z"></path></g></g></svg>';
										echo get_the_date('F j Y');
									echo '</span>';
								echo '</p>';
								echo '<div class="btn">';
									echo '<a href="'. get_the_permalink() . '" title="' . get_the_title() . '">';
										echo '<button>';
											echo '<span>';
												echo '<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><g id="Share_1"><g><path d="M12.223,11.075a.5.5,0,0,0,.7.71l7-7v3.58a.508.508,0,0,0,.5.5.5.5,0,0,0,.5-.5V3.575a.5.5,0,0,0-.5-.5h-4.79a.5.5,0,0,0,0,1h3.58Z"></path><path d="M17.876,20.926H6.124a3.053,3.053,0,0,1-3.05-3.05V6.124a3.053,3.053,0,0,1,3.05-3.05h6.028a.5.5,0,0,1,0,1H6.124a2.053,2.053,0,0,0-2.05,2.05V17.876a2.053,2.053,0,0,0,2.05,2.05H17.876a2.053,2.053,0,0,0,2.05-2.05V11.849a.5.5,0,0,1,1,0v6.027A3.053,3.053,0,0,1,17.876,20.926Z"></path></g></g></svg>';
												echo '&nbsp;Open Album';
											echo '</span>';
										echo '</button>';
									echo '</a>';
								echo '</div>';
							echo '</div>';
						endwhile;
					echo '</div>';
					wp_reset_postdata();
				else :
				endif;
			}
		}

		function getImgSrcUrls($html) {
			$dom = new DOMDocument();
			libxml_use_internal_errors(true);
			$dom->loadHTML($html, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
			libxml_clear_errors();
			$imgTags = $dom->getElementsByTagName('img');
			$imgSrcUrls = [];
			foreach ($imgTags as $imgTag) {
				$imgSrcUrls[] = $imgTag->getAttribute('src');
			}
			return $imgSrcUrls;
		}

		function get_all_galley_images($html) {
			$all = getImgSrcUrls($html);
			echo '<div class="row">';
			foreach ($all as $single) {
				echo '<div class="one cover-img" style="background-image: url(' . $single . ')">';
					echo '<img alt="square" src="'.get_template_directory_uri().'/images/icons/square.svg"/>';
				echo '</div>';
			}
			echo '</div>';
		}

		function get_all_galley_images_for_slider($html) {
			$all = getImgSrcUrls($html);
			echo '<ul class="slides">';
			foreach ($all as $single) {
				echo '<li>';
					echo '<img src="' . $single . '"/>';
				echo '</li>';
			}
			echo '</ul>';
		}

	// =======================================
	//			Get FAQs
	// =======================================

		function get_all_faqs($limit='-1') {
			if (is_plugin_active('our-faqs/index.php')) {
				$allPosts = new WP_Query(
					array(
						'post_type'			=> 'our-faqs', 
						'post_status'		=> 'publish', 
						'posts_per_page'	=> $limit,
						'order_by'			=> 'menu_order', 
						'order'				=> 'asc'
					)
				);
				if ($allPosts->have_posts()):
					echo '<div class="all">';
						while($allPosts->have_posts()):$allPosts->the_post();
							echo '<div class="one">';
								echo '<div class="title">';
									echo '<h6 class="f-w-400 t">';
										echo get_the_title();
									echo '</h6>';
									echo '<div class="arr">';
										echo '<svg
												xmlns="http://www.w3.org/2000/svg"
												width="33.368"
												height="20.233"
												viewBox="0 0 33.368 20.233">
												<path
													d="M15.458,19.868a1.8,1.8,0,0,0,2.516,0L32.883,5.048a1.893,1.893,0,0,0,0-2.6L31.13.664a1.893,1.893,0,0,0-2.6,0L16.758,12.438,4.905.664a1.893,1.893,0,0,0-2.6,0L.549,2.423a1.893,1.893,0,0,0,0,2.6Z"
													transform="translate(-0.032 -0.147)"
												/>
											</svg>';
									echo '</div>';
								echo '</div>';
								echo '<div class="con">';
									echo get_the_content();
								echo '</div>';
							echo '</div>';
						endwhile;
					echo '</div>';
					wp_reset_postdata();
				else :
				endif;
			}
		}

	// =======================================
	//			Get Whats On
	// =======================================

		function get_posts_categories($active='') {
			$categories = get_categories();
			foreach($categories as $category) {
				echo '<li ';
					if($category->slug === $active) {
						echo 'class="active" ';
					}
				echo '>';
				echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
			}
		}

		function get_whats_on($limit='-1') {
			$allPosts = new WP_Query(
				array(
					'post_type'			=> 'post', 
					'post_status'		=> 'publish', 
					'posts_per_page'	=> 6,
					'order_by'			=> 'menu_order', 
					'order'				=> 'asc'
				)
			);
			if ($allPosts->have_posts()):
				echo '<div class="all">';
					while($allPosts->have_posts()):$allPosts->the_post();
						echo '<div class="one">';
							echo '<a href="'. get_the_permalink() . '" title="' . get_the_title() . '">';
								echo '<div class="img cover-img" style="background-image: url(';
									echo the_post_thumbnail_url();
									echo ');">';
									echo '<img src="';
										echo the_post_thumbnail_url();
									echo '" alt="' . get_the_title() . '" />';
								echo '</div>';
							echo '</a>';
							echo '<div class="desc">';
								get_categories_of_a_post(get_the_ID());
								echo '<h4 class="title">';
									echo '<a href="'. get_the_permalink() . '" title="' . get_the_title() . '">';
										echo get_the_title();
									echo '</a>';
								echo '</h4>';
								echo '<div class="con">';
									echo '<p>'. substr(strip_tags(get_the_content()), 0, 148) .'...	</p>';
								echo '</div>';
								echo '<a href="'. get_the_permalink() . '" title="' . get_the_title() . '">';
									echo '<button>';
										echo '<span>';
											echo '<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><g id="read"><g><path d="M12,18.883a10.8,10.8,0,0,1-9.675-5.728,2.6,2.6,0,0,1,0-2.31A10.8,10.8,0,0,1,12,5.117a10.8,10.8,0,0,1,9.675,5.728h0a2.6,2.6,0,0,1,0,2.31A10.8,10.8,0,0,1,12,18.883ZM12,6.117a9.787,9.787,0,0,0-8.78,5.176,1.586,1.586,0,0,0,0,1.415A9.788,9.788,0,0,0,12,17.883a9.787,9.787,0,0,0,8.78-5.176,1.584,1.584,0,0,0,0-1.414h0A9.787,9.787,0,0,0,12,6.117Z"></path><path d="M12,16.049A4.049,4.049,0,1,1,16.049,12,4.054,4.054,0,0,1,12,16.049Zm0-7.1A3.049,3.049,0,1,0,15.049,12,3.052,3.052,0,0,0,12,8.951Z"></path><circle cx="12" cy="12" r="2.028"></circle></g></g></svg>';
											echo '&nbsp;Read More';
										echo '</span>';
									echo '</button>';
								echo '</a>';
							echo '</div>';
						echo '</div>';
					endwhile;
				echo '</div>';
				echo '<ul class="pagination">';
						$big = 999999999;
						echo paginate_links( array(
							'base' 			=> str_replace($big, '%#%', get_pagenum_link($big)),
							'format' 		=> '?paged=%#%',
							'current' 		=> max(1, get_query_var('paged')),
							'total' 		=> $allPosts->max_num_pages,
							'prev_text' 	=> '&laquo;',
							'next_text' 	=> '&raquo;'
						));
					echo '</ul>';
				wp_reset_postdata();
			else :
			endif;
		}

		function get_category_details($slug) {
			$category = get_category_by_slug($slug);
			if ($category) {
				return $category;
			} else {
				return false;
			}
		}

		function get_whats_on_by_category($category_slug) {
			$allPosts = new WP_Query(
				array(
					'post_type'			=> 'post', 
					'post_status'		=> 'publish', 
					'posts_per_page'	=> -1,
					'order_by'			=> 'menu_order', 
					'order'				=> 'asc',
					'category_name' 	=> $category_slug,
				)
			);
			if ($allPosts->have_posts()):
				echo '<div class="all">';
					while($allPosts->have_posts()):$allPosts->the_post();
						echo '<div class="one">';
							echo '<a href="'. get_the_permalink() . '" title="' . get_the_title() . '">';
								echo '<div class="img cover-img" style="background-image: url(';
									echo the_post_thumbnail_url();
									echo ');">';
									echo '<img src="';
										echo the_post_thumbnail_url();
									echo '" alt="' . get_the_title() . '" />';
								echo '</div>';
							echo '</a>';
							echo '<div class="desc">';
								echo '<ul><li><a href="#">Events</a><li><li><a href="#">News</a><li></ul>';
								echo '<h4 class="title">';
									echo '<a href="'. get_the_permalink() . '" title="' . get_the_title() . '">';
										echo get_the_title();
									echo '</a>';
								echo '</h4>';
								echo '<div class="con">';
									echo '<p>'. substr(strip_tags(get_the_content()), 0, 148) .'...	</p>';
								echo '</div>';
								echo '<a href="'. get_the_permalink() . '" title="' . get_the_title() . '">';
									echo '<button>';
										echo '<span>';
											echo '<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><g id="read"><g><path d="M12,18.883a10.8,10.8,0,0,1-9.675-5.728,2.6,2.6,0,0,1,0-2.31A10.8,10.8,0,0,1,12,5.117a10.8,10.8,0,0,1,9.675,5.728h0a2.6,2.6,0,0,1,0,2.31A10.8,10.8,0,0,1,12,18.883ZM12,6.117a9.787,9.787,0,0,0-8.78,5.176,1.586,1.586,0,0,0,0,1.415A9.788,9.788,0,0,0,12,17.883a9.787,9.787,0,0,0,8.78-5.176,1.584,1.584,0,0,0,0-1.414h0A9.787,9.787,0,0,0,12,6.117Z"></path><path d="M12,16.049A4.049,4.049,0,1,1,16.049,12,4.054,4.054,0,0,1,12,16.049Zm0-7.1A3.049,3.049,0,1,0,15.049,12,3.052,3.052,0,0,0,12,8.951Z"></path><circle cx="12" cy="12" r="2.028"></circle></g></g></svg>';
											echo '&nbsp;Read More';
										echo '</span>';
									echo '</button>';
								echo '</a>';
							echo '</div>';
						echo '</div>';
					endwhile;
				echo '</div>';
				// echo '<ul class="pagination">';
				// 		$big = 999999999;
				// 		echo paginate_links( array(
				// 			'base' 			=> str_replace($big, '%#%', get_pagenum_link($big)),
				// 			'format' 		=> '?paged=%#%',
				// 			'current' 		=> max(1, get_query_var('paged')),
				// 			'total' 		=> $allPosts->max_num_pages,
				// 			'prev_text' 	=> '&laquo;',
				// 			'next_text' 	=> '&raquo;'
				// 		));
				// 	echo '</ul>';
				wp_reset_postdata();
			else :
			endif;
		}

		function get_categories_of_a_post($postId) {
			$categories = get_the_category($postId);
			if (!empty($categories)) {
				echo '<ul>';
				foreach ($categories as $category) {
					echo '<li><a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a></li>';
				}
				echo '</ul>';
			}
		}

	// =======================================
	//			END OF FUNCTIONS
	// =======================================