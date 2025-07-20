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

		define('RANDOM_SVG_ICONS', array(
			'<svg xmlns="http://www.w3.org/2000/svg" width="524" height="524.001" viewBox="0 0 524 524.001">
				<g transform="translate(-6362 -2725)">
					<path d="M524,524H0V0H524V524ZM278.379,2c-4.13,0-8.329.094-12.479.28a268.471,268.471,0,0,0-35.416,3.815,221.788,221.788,0,0,0-33.674,8.659c-22.661,7.846-41.859,19.088-57.061,33.413a150.308,150.308,0,0,0-15.7,17.358,224.043,224.043,0,0,0-13.624,19.711c-8.557,13.777-16.072,28.369-24.027,43.817-6.213,12.066-12.637,24.538-19.6,36.573-6.479,11.2-13.564,22.244-20.416,32.924-9.705,15.128-18.872,29.417-26.521,44.185a195.126,195.126,0,0,0-9.992,22.332,128.137,128.137,0,0,0-6.244,22.891c-3.362,19.983-1.5,42.01,5.537,65.468a228.978,228.978,0,0,0,12.684,32.539,291.277,291.277,0,0,0,17.277,31.026,273.805,273.805,0,0,0,43.933,53.374c17.073,15.855,35.26,27.921,54.054,35.862,14.754,6.234,31.167,10.466,50.177,12.938,15.071,1.96,31.488,2.834,53.229,2.834h.007c8.276,0,16.631-.124,23.813-.24,23.318-.431,44.33-.968,65.361-3.185a316.046,316.046,0,0,0,32.071-4.938,233.92,233.92,0,0,0,31.457-8.831,216.781,216.781,0,0,0,30.537-13.639,208.125,208.125,0,0,0,28.345-18.492,187.07,187.07,0,0,0,24.77-23.061,163.577,163.577,0,0,0,19.81-27.344,169.2,169.2,0,0,0,13.721-31.116,219.121,219.121,0,0,0,8.111-33.933c3.473-21.773,4.353-45.862,2.616-71.6-.8-11.858-2.154-23.8-4.023-35.485-1.857-11.608-4.274-23.3-7.186-34.742-2.891-11.364-6.352-22.81-10.285-34.019-3.9-11.127-8.386-22.336-13.319-33.315C475.7,124.3,463.645,103.18,450.5,85.285A235.942,235.942,0,0,0,427.49,58.28a184.908,184.908,0,0,0-26.737-22.295c-16.834-11.4-36.315-20.1-57.9-25.857A250.288,250.288,0,0,0,278.379,2Z" transform="translate(6362 2725)" fill="#1b00e6"/>
				</g>
			</svg>',
			'<svg xmlns="http://www.w3.org/2000/svg" width="524" height="524.001" viewBox="0 0 524 524.001">
				<g transform="translate(-7006 -2725)">
					<path d="M524,524H0V0H524V524ZM214.856,2c-18.1,0-33.308,1.146-46.5,3.5a145.865,145.865,0,0,0-21.1,5.325,105.478,105.478,0,0,0-19.046,8.549A100.16,100.16,0,0,0,115.22,28.4a120.706,120.706,0,0,0-11.693,10.976A173.189,173.189,0,0,0,83.433,65.917C71.252,85.3,61.3,107.46,52.151,128.5c-8.661,19.759-17.712,41.009-25.227,62.522-3.83,10.963-6.989,21.183-9.656,31.242a326.766,326.766,0,0,0-6.861,32.019A273.29,273.29,0,0,0,7.143,287.4,210.194,210.194,0,0,0,8.47,320.353c2.87,23.2,9.928,43.091,20.977,59.121a122.792,122.792,0,0,0,17.228,19.787,197.938,197.938,0,0,0,21.49,17.347c15.481,10.96,32.708,20.752,50.948,31.118,7.34,4.172,14.927,8.484,22.386,12.877,7.232,4.259,14.529,8.706,21.587,13.007l.009.005c17.613,10.734,35.825,21.834,53.874,30.484a215.039,215.039,0,0,0,27.269,11.037,140.086,140.086,0,0,0,27.831,6.091A128.1,128.1,0,0,0,286.2,522c19.266,0,39.947-4.173,61.472-12.4a286.4,286.4,0,0,0,57.892-30.757c20.863-14.157,38.863-29.7,53.5-46.2,15.637-17.621,27.275-36.173,34.591-55.141a165.56,165.56,0,0,0,6.857-22.547,235.569,235.569,0,0,0,4.115-23.424c2.035-15.886,2.843-32.005,3.7-49.071.555-11.074,1.129-22.522,2.07-33.995.733-8.934,1.707-18.094,2.649-26.952v-.007c1.951-18.342,3.968-37.308,3.95-55.3a181.891,181.891,0,0,0-1.78-26.4,118.934,118.934,0,0,0-6.285-24.91,116.088,116.088,0,0,0-15.458-28.133,151.719,151.719,0,0,0-22.834-24.446,192.387,192.387,0,0,0-28.327-20.213,220.812,220.812,0,0,0-31.936-15.435,251.754,251.754,0,0,0-33.854-10.335c-10.886-2.548-22.437-4.616-35.315-6.324C317.231,6.831,292.956,5.455,267.256,4,249.961,3.016,232.077,2,214.856,2Z" transform="translate(7006 2725)" fill="#1b00e6"/>
				</g>
			</svg>',
			'<svg xmlns="http://www.w3.org/2000/svg" width="524" height="524" viewBox="0 0 524 524">
				<g transform="translate(-7652 -2725)">
					<path d="M524,524H0V0H524V524ZM177.336,2a124.385,124.385,0,0,0-24.2,2.227,84.488,84.488,0,0,0-35.214,15.5A114.2,114.2,0,0,0,105.973,30,179.727,179.727,0,0,0,84.39,56.146c-6.155,8.877-12.468,19.182-19.3,31.5-6.209,11.2-12.32,23.115-18,34.326-5.695,11.171-11.723,23.131-17.22,34.907-6.034,12.927-10.844,24.375-14.7,35a236.961,236.961,0,0,0-10,34.938,169.7,169.7,0,0,0-2.55,17.4,134.9,134.9,0,0,0,1.119,34.554A168.194,168.194,0,0,0,7.4,295.89a234.969,234.969,0,0,0,12.145,33.864c4.435,10.093,9.865,20.989,16.6,33.31,5.9,10.786,11.958,21.183,18.7,32.684,6.365,10.855,12.61,21.449,19.016,31.709,7.125,11.412,13.58,20.988,19.734,29.277a221.708,221.708,0,0,0,21.387,25.11,148.772,148.772,0,0,0,11.6,10.451,118.853,118.853,0,0,0,12.368,8.759c13.731,8.351,29.82,14,49.186,17.261S227.752,522,243.213,522c4.882,0,10.073-.046,16.832-.148,9.706-.147,21.129-.379,32.261-.976,11.778-.632,22.1-1.606,31.551-2.978a207.319,207.319,0,0,0,30.2-6.528c4.978-1.5,9.822-3.207,14.4-5.08a140.172,140.172,0,0,0,13.822-6.549,156.425,156.425,0,0,0,25.858-17.826A226.635,226.635,0,0,0,431.8,458.608a343.259,343.259,0,0,0,21.843-27.616c6.622-9.236,13.3-19.3,20.415-30.756,7.345-11.8,13.538-22.5,18.933-32.717A322.29,322.29,0,0,0,508.7,333.49a210.1,210.1,0,0,0,10.339-34.728,156.574,156.574,0,0,0,2.485-17.433,133.28,133.28,0,0,0,.337-17.377,141.8,141.8,0,0,0-6.113-34.192,197.4,197.4,0,0,0-13.549-32.951,278.211,278.211,0,0,0-18.758-30.96c-6.438-9.277-13.752-18.771-21.74-28.22-7.379-8.784-15.047-17.191-22.792-24.989-7.621-7.673-15.54-14.983-23.537-21.726-7.86-6.627-16.027-12.9-24.274-18.647-8.094-5.64-16.506-10.94-25-15.753a350.562,350.562,0,0,0-52.808-23.877c-16.464-5.965-35.024-11.6-58.412-17.719-10.682-2.819-24.731-6.383-38.66-8.942A215.348,215.348,0,0,0,177.336,2Z" transform="translate(7652 2725)" fill="#1b00e6"/>
				</g>
			</svg>'
		));

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
						
						$index = 0;

						while($allPosts->have_posts()):$allPosts->the_post();
							echo '<div class="single">';
								echo '<a href="'. get_the_permalink() . '">';
									echo '<div class="flex center-left row">';
										echo '<div class="img cover-img" style="background-image: url(';
												echo the_post_thumbnail_url();
											echo ');">';
											echo RANDOM_SVG_ICONS[$index % count(RANDOM_SVG_ICONS)];
											echo '<img src="';
												echo the_post_thumbnail_url();
											echo '" alt="' . get_the_title() . '" />';
										echo '</div>';
										echo '<div class="desc">';
											echo '<h5 class="font-medium title l-h-1">' . get_the_title() . '</h5>';
											echo '<p class="small description color-light">';
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
						
						$index++;

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
						
						$index = 0;

						while($allPosts->have_posts()):$allPosts->the_post();
							echo '<div class="one">';
								echo '<a href="'. get_the_permalink() . '">';
									echo '<div class="flex center-left _row">';
										echo '<div class="_i cover-img" style="background-image: url(';
												echo the_post_thumbnail_url();
											echo ');">';
											echo RANDOM_SVG_ICONS[$index % count(RANDOM_SVG_ICONS)];
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

							$index++;
							
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
						
						$index = 0;

						while($allPosts->have_posts()):$allPosts->the_post();
							echo '<div class="single">';
								echo '<a href="'. get_the_permalink() . '">';
									echo '<div class="flex center-left row">';
										echo '<div class="img cover-img" style="background-image: url(';
												echo the_post_thumbnail_url();
											echo ');">';
											echo RANDOM_SVG_ICONS[$index % count(RANDOM_SVG_ICONS)];
											echo '<img src="';
												echo the_post_thumbnail_url();
											echo '" alt="' . get_the_title() . '" />';
										echo '</div>';
										echo '<div class="desc">';
											echo '<h5 class="font-medium title l-h-1">' . get_the_title() . '</h5>';
											echo '<p class="small description color-light">';
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
						
						$index++;

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
					echo '<div class="other-services">';
						
						$index = 0;

						while($allPosts->have_posts()):$allPosts->the_post();
							echo '<div class="one">';
								echo '<a href="'. get_the_permalink() . '">';
									echo '<div class="flex center-left _row">';
										echo '<div class="_i cover-img" style="background-image: url(';
												echo the_post_thumbnail_url();
											echo ');">';
											echo RANDOM_SVG_ICONS[$index % count(RANDOM_SVG_ICONS)];
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

							$index++;
							
						endwhile;
					echo '</div>';
					wp_reset_postdata();
				else :
				endif;
			}
		}

	// =======================================
	//			END OF FUNCTIONS
	// =======================================