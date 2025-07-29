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
			register_nav_menu('my-custom-menu','Footer Services');
		}
		add_action('init', 'custom_theme_setup');

		add_filter('theme_page_templates', function ($post_templates, $theme, $post) {
			if ($post->post_type === 'services') {
				$post_templates['single-services.php'] = 'Service Template A';
			}
			if ($post->post_type === 'results') {
				$post_templates['single-results.php'] = 'Result Template A';
			}
			return $post_templates;
		}, 10, 3);

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
	//			Get Services Cards
	// =======================================

		function get_all_services($limit='-1') {
			if (is_plugin_active('services/index.php')) {

				$allPosts = new WP_Query(
					array(
						'post_type'			=> 'services', 
						'post_status'		=> 'publish', 
						'posts_per_page'	=> $limit,
						'order_by'			=> 'menu_order', 
						'order'				=> 'asc'
					)
				);

				if ($allPosts->have_posts()):
					echo '<div class="all">';
						while($allPosts->have_posts()):$allPosts->the_post();
							echo '<div class="single col-1-1">';
								echo '<a href="'. get_the_permalink() . '">';
									echo '<div>';	
										echo '<img src="';
											echo the_post_thumbnail_url();
										echo '" alt="' . get_the_title() . '" />';
										echo '<div class="desc">';
											echo '<h5 class="font-medium title l-h-1">' . get_the_title() . '</h5>';
											echo '<p class="small description color-light">';
												echo substr(strip_tags(get_the_content()), 0, 480);
											echo '</p>';
											echo '<div class="flex center-left" style="gap: 8px;">';
												echo '<p class="color-primary small"><span class="hover-color-primary">Find out more</span></p>';
												echo '<svg xmlns="http://www.w3.org/2000/svg" width="12.001" height="12" viewBox="0 0 12.001 12" class="width-auto display-block color-primary-path" style="height: 8px;">
														<path d="M-333-190v-7.586l-8.293,8.293A1,1,0,0,1-342-189a1,1,0,0,1-.707-.293,1,1,0,0,1,0-1.415l8.293-8.293H-342a1,1,0,0,1-1-1,1,1,0,0,1,1-1h9.971a1,1,0,0,1,.736.293,1,1,0,0,1,.292.736V-190a1,1,0,0,1-1,1A1,1,0,0,1-333-190Z" transform="translate(343 201)"/>
													</svg>';
											echo '</div>';
										echo '</div>';
									echo '</div>';
								echo '</a>';
							echo '</div>';
						endwhile;
					echo '</div>';
					wp_reset_postdata();
				else :
				endif;
			}
		}

		function get_other_services($postId, $limit='-1') {
			if (is_plugin_active('services/index.php')) {

				$allPosts = new WP_Query(array(
					'post_type'      => 'services',
					'post_status'    => 'publish',
					'posts_per_page' => $limit,
					'orderby'        => 'menu_order',
					'order'          => 'asc',
					'post__not_in'   => array($postId)
				));

				if ($allPosts->have_posts()):
					echo '<div class="other-services">';
						while($allPosts->have_posts()):$allPosts->the_post();
							echo '<div class="one">';
								echo '<a href="'. get_the_permalink() . '">';
									echo '<div class="flex center-left _row">';
										echo '<div class="_i">';
											echo '<img src="';
												echo the_post_thumbnail_url();
											echo '" alt="' . get_the_title() . '" />';
										echo '</div>';
										echo '<div class="_d">';
											echo '<p class="large font-medium title l-h-1 _title">' . get_the_title() . '</p>';
											echo '<p class="small _description color-light">';
												echo substr(strip_tags(get_the_content()), 0, 480);
											echo '</p>';
											echo '<div class="flex center-left" style="gap: 8px;">';
												echo '<p class="color-light small"><span class="hover-color-primary">Read more</span></p>';
												echo '<svg xmlns="http://www.w3.org/2000/svg" width="12.001" height="12" viewBox="0 0 12.001 12" class="width-auto display-block color-primary-path" style="height: 8px;">
														<path d="M-333-190v-7.586l-8.293,8.293A1,1,0,0,1-342-189a1,1,0,0,1-.707-.293,1,1,0,0,1,0-1.415l8.293-8.293H-342a1,1,0,0,1-1-1,1,1,0,0,1,1-1h9.971a1,1,0,0,1,.736.293,1,1,0,0,1,.292.736V-190a1,1,0,0,1-1,1A1,1,0,0,1-333-190Z" transform="translate(343 201)"/>
													</svg>';
											echo '</div>';
										echo '</div>';
									echo '</div>';
								echo '</a>';
							echo '</div>';
						endwhile;
					echo '</div>';
					wp_reset_postdata();
				else :
				endif;
			}
		}

	// =======================================
	//			Get Results Cards
	// =======================================

		function get_all_results($limit='-1') {
			if (is_plugin_active('results/index.php')) {

				$allPosts = new WP_Query(
					array(
						'post_type'			=> 'results', 
						'post_status'		=> 'publish', 
						'posts_per_page'	=> $limit,
						'order_by'			=> 'menu_order', 
						'order'				=> 'asc'
					)
				);

				if ($allPosts->have_posts()):
					echo '<div class="all">';
						while($allPosts->have_posts()):$allPosts->the_post();
							echo '<div class="single">';
								echo '<a href="'. get_the_permalink() . '">';
									echo '<div class="img cover-img" style="background-image: url(';
											echo the_post_thumbnail_url();
										echo ');">';
										echo '<img src="';
											echo the_post_thumbnail_url();
										echo '" alt="' . get_the_title() . '" />';
									echo '</div>';
									echo '<div class="desc transition">';
										echo '<p class="large font-medium title l-h-1-2">' . get_the_title() . '</p>';
										echo '<p class="color-light l-h-1-2" style="font-size: 12px; margin-top: 6px; margin-bottom: 4px;">';
											echo get_the_date('F j, Y');
										echo '</p>';											
										echo '<div class="flex center-right" style="gap: 8px;">';	
											echo '<p class="color-light l-h-1" style="font-size: 14px;"><span class="hover-color-primary">Read more</span></p>';
											echo '<svg xmlns="http://www.w3.org/2000/svg" width="12.001" height="12" viewBox="0 0 12.001 12" class="width-auto display-block color-primary-path" style="height: 8px;">
													<path d="M-333-190v-7.586l-8.293,8.293A1,1,0,0,1-342-189a1,1,0,0,1-.707-.293,1,1,0,0,1,0-1.415l8.293-8.293H-342a1,1,0,0,1-1-1,1,1,0,0,1,1-1h9.971a1,1,0,0,1,.736.293,1,1,0,0,1,.292.736V-190a1,1,0,0,1-1,1A1,1,0,0,1-333-190Z" transform="translate(343 201)"/>
												</svg>';
										echo '</div>';											
									echo '</div>';									
								echo '</a>';
							echo '</div>';
						endwhile;
					echo '</div>';
					wp_reset_postdata();
				else :
				endif;
			}
		}

		function get_other_results($postId, $limit='-1') {
			if (is_plugin_active('results/index.php')) {

				$allPosts = new WP_Query(array(
					'post_type'      => 'results',
					'post_status'    => 'publish',
					'posts_per_page' => $limit,
					'orderby'        => 'menu_order',
					'order'          => 'asc',
					'post__not_in'   => array($postId)
				));

				if ($allPosts->have_posts()):
					echo '<div class="other-results">';
						while($allPosts->have_posts()):$allPosts->the_post();
							echo '<div class="one">';
								echo '<a href="'. get_the_permalink() . '">';									
									echo '<div class="img cover-img" style="background-image: url(';
											echo the_post_thumbnail_url();
										echo ');">';
										echo '<img src="';
											echo the_post_thumbnail_url();
										echo '" alt="' . get_the_title() . '" />';
									echo '</div>';
									echo '<div class="desc transition">';
										echo '<p class="large font-medium title l-h-1-2">' . get_the_title() . '</p>';
										echo '<p class="color-light l-h-1-2" style="font-size: 12px; margin-top: 4px;">';
											echo get_the_date('F j, Y');
										echo '</p>';											
										echo '<div class="flex center-right" style="gap: 8px;">';	
											echo '<p class="color-light l-h-1" style="font-size: 14px;"><span class="hover-color-primary">Read more</span></p>';
											echo '<svg xmlns="http://www.w3.org/2000/svg" width="12.001" height="12" viewBox="0 0 12.001 12" class="width-auto display-block color-primary-path" style="height: 8px;">
													<path d="M-333-190v-7.586l-8.293,8.293A1,1,0,0,1-342-189a1,1,0,0,1-.707-.293,1,1,0,0,1,0-1.415l8.293-8.293H-342a1,1,0,0,1-1-1,1,1,0,0,1,1-1h9.971a1,1,0,0,1,.736.293,1,1,0,0,1,.292.736V-190a1,1,0,0,1-1,1A1,1,0,0,1-333-190Z" transform="translate(343 201)"/>
												</svg>';
										echo '</div>';											
									echo '</div>';
								echo '</a>';
							echo '</div>';							
						endwhile;
					echo '</div>';
					wp_reset_postdata();
				else :
				endif;
			}
		}

	// =======================================
	//			Get Client Testimonials
	// =======================================

		function get_all_client_testimonials($limit='-1') {
			if (is_plugin_active('client-testimonials/index.php')) {

				$allPosts = new WP_Query(
					array(
						'post_type'			=> 'client-testimonials', 
						'post_status'		=> 'publish', 
						'posts_per_page'	=> $limit,
						'order_by'			=> 'menu_order', 
						'order'				=> 'asc'
					)
				);

				if ($allPosts->have_posts()):
					echo '<ul class="slides">';
						while($allPosts->have_posts()):$allPosts->the_post();
							echo '<li class="l-s-n">';
								echo '<div class="one border-color-faded">';
									echo '<p class="l-h-1 color-primary" style="font-size: 12px;">';
										echo get_the_date('F j, Y');
									echo '</p>';
									echo '<p class="small quote color-light">';
										echo strip_tags(get_the_content());
									echo '</p>';
									echo '<div class="flex center-left" style="gap: 12px;">';
										echo '<div class="i flex center-center b-r-100 background-faded">';
											echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" viewBox="0 0 16 20" class="width-auto display-block">
													<path d="M-461-466v-2a3,3,0,0,0-3-3h-6a2.977,2.977,0,0,0-2.121.878A2.981,2.981,0,0,0-473-468v2a1,1,0,0,1-1,1,1,1,0,0,1-1-1v-2a4.967,4.967,0,0,1,1.464-3.535A4.968,4.968,0,0,1-470-473h6a5.006,5.006,0,0,1,5,5v2a1,1,0,0,1-1,1A1,1,0,0,1-461-466Zm-11-14a5.005,5.005,0,0,1,5-5,5.006,5.006,0,0,1,5,5,5.006,5.006,0,0,1-5,5A5.005,5.005,0,0,1-472-480Zm2,0a3,3,0,0,0,3,3,3,3,0,0,0,3-3,3,3,0,0,0-3-3A3,3,0,0,0-470-480Z" transform="translate(475 485)"/>
												</svg>';
										echo '</div>';
										echo '<div>';
											echo '<p class="l-h-1-2 tiny">';
												echo get_the_title();
											echo '</p>';
											echo '<p class="l-h-1-2 _t">';
												echo get_post_meta( get_the_ID(), 'COMPANY', true );
											echo '</p>';
										echo '</div>';
									echo '</div>';
								echo '</div>';
							echo '</li>';
						endwhile;
					echo '</ul>';
					wp_reset_postdata();
				else :
				endif;
			}
		}

	// =======================================
	//			END OF FUNCTIONS
	// =======================================