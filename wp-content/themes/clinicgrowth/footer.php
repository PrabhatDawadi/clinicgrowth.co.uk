			<?php
				$settings = parse_ini_file("settings.ini", TRUE);
			?>

			<section id="home-page">
				<section class="cta background-faded">
					<section class="container">
						<div class="col-1-1 row flex bottom-left">
							<div class="col-3-4 left">
								<p class="l-h-1 small color-primary" style="margin-bottom: 8px;">Growth Audit</p>
								<h4 class="font-bold l-h-1 title color-secondary">Discover what’s holding your clinic back and get a clear, tailored plan to grow.</h4>
							</div>
							<div class="col-1-4 right">
								<div class="flex center-right btn">
								<a
									class="display-block"
									href='<?php echo $settings['website']['FREE_AUDIT_URL']; ?>' 
									target="_blank"
									rel='noreferrer'
								>
									<button class="background-primary color-white hover-background-secondary">Book Your Free Growth Audit</button>
								</a>
								</div>
							</div>
						</div>				
					</section>
				</section>
			</section>

			<footer class="background-secondary">
				<section class="top">
					<div class="container">
						<div class="row flex">
							<div class='col'>
								<h6 class='color-white title l-h-1'>Company</h6>
								<br />
								<p class="_link"><a class="transition hover-color-primary" href='<?php echo get_site_url(); ?>/'>Home</a></p>
								<p class="_link"><a class="transition hover-color-primary" href='<?php echo get_site_url(); ?>/services/'>Services</a></p>
								<!-- <p class="_link"><a class="transition hover-color-primary" href='<?php echo get_site_url(); ?>/results/'>Results</a></p> -->
								<p class="_link"><a class="transition hover-color-primary" href='<?php echo get_site_url(); ?>/contact-us/'>Contact Us</a></p>
							</div>
							<div class='col'>
								<h6 class='color-white title l-h-1'>Services</h6>
								<br />
								<?php if ( has_nav_menu( 'my-custom-menu' ) ) : ?>
									<?php
										wp_nav_menu(
											array(
												'theme_location' => 'my-custom-menu',
												'menu_class'     => 'main-menu',
												'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
											)
										);
									?>
								<?php endif; ?>
							</div>
							<div class='col'>
								<h6 class='color-white title l-h-1'>Website</h6>
								<br />
								<p class="_link"><a class="transition hover-color-primary" href='<?php echo get_site_url(); ?>/cookie-policy/'>Cookie Policy</a></p>
								<p class="_link"><a class="transition hover-color-primary" href='<?php echo get_site_url(); ?>/privacy-policy'>Privacy Policy</a></p>
								<p class="_link"><a class="transition hover-color-primary" href='<?php echo get_site_url(); ?>/terms'>Terms & Conditions</a></p>
							</div>
							<div class='col'>
								<h6 class='color-white title l-h-1'>Contact</h6>
								<br />
								<p class="_link"><?php echo $settings['website']['COMPANY_NAME']; ?></p>
								<p class="_link" style="max-width: 320px;">
									<a 
										class="transition hover-color-primary" 
										href='<?php echo $settings['website']['ADDRESS_URL']; ?>' 
										target="_blank"
										rel="noreferrer"
									>
										<?php echo $settings['website']['ADDRESS_TEXT']; ?>
									</a>
								</p>
								<p class="_link">
									<a 
										class="transition hover-color-primary" 
										href='mailto:<?php echo $settings['website']['EMAIL']; ?>'
									>
										<?php echo $settings['website']['EMAIL']; ?>
									</a>
								</p>
								<p class="_link">
									<a 
										class="transition hover-color-primary" 
										href='mailto:<?php echo $settings['website']['PHONE_URL']; ?>'
									>
										<?php echo $settings['website']['PHONE_TEXT']; ?>
									</a>
								</p>
							</div>
						</div>
					</div>
				</section>
				<ul class='flex center-center social' style="gap: 12px;">
					<li class="l-s-n">
						<a 
							href="<?php echo $settings['website']['FACEBOOK_URL']; ?>" 
							rel='noreferrer' 
							target='_blank'
						>
							<svg xmlns="http://www.w3.org/2000/svg" width="216" height="216" viewBox="0 0 216 216" class="width-auto display-block color-primary-path" style="height: 28px;">
  								<path d="M0,108a108,108,0,0,0,216,0A108,108,0,0,1,0,108Zm0,0A108,108,0,1,1,108,216,108,108,0,0,1,0,108Zm120,83.13V136h20a12,12,0,0,0,12-12,12,12,0,0,1-12,12H120v55.13a84.007,84.007,0,0,0,72-83.01q0-3.052-.219-6.144a84,84,0,0,0-167.569,0q-.222,3.09-.219,6.144a84.007,84.007,0,0,0,72,83.01V136H76a12,12,0,0,1-12-12,12,12,0,0,0,12,12h0a12,12,0,0,1,0-24H96V92a36,36,0,0,1,36-36h16a12,12,0,1,1,0,24H132a12,12,0,0,0-12,12v0a12,12,0,0,1,12-12h16a12,12,0,0,0,12-12,12,12,0,0,1-12,12H132a12,12,0,0,0-12,12v20h20a12,12,0,0,1,0,24H120Zm71.785-89.154q.222,3.09.219,6.144,0-3.052-.219-6.144a84,84,0,0,0-167.569,0q-.222,3.09-.219,6.144,0-3.052.219-6.144a84,84,0,0,1,167.569,0Z"/>
							</svg>
						</a>
					</li>
					<li class="l-s-n">
						<a 
							href="<?php echo $settings['website']['INSTAGRAM_URL']; ?>" 
							rel='noreferrer' 
							target='_blank'
						>
							<svg xmlns="http://www.w3.org/2000/svg" width="216" height="216" viewBox="0 0 216 216" class="width-auto display-block color-primary-path" style="height: 28px;">
  								<path d="M60,216A60.07,60.07,0,0,1,0,156a60.07,60.07,0,0,0,60,60h96a60.07,60.07,0,0,0,60-60v0a60.07,60.07,0,0,1-60,60Zm0,0A60.07,60.07,0,0,1,0,156V60A60.07,60.07,0,0,1,60,0h96a60.07,60.07,0,0,1,60,60v96a60.07,60.07,0,0,1-60,60Zm0-24h96a36,36,0,0,0,36-36V60a36,36,0,0,0-36-36H60A36,36,0,0,0,24,60v96A36,36,0,0,0,60,192ZM24,60v0A36,36,0,0,1,60,24h96a36,36,0,0,1,36,36,36,36,0,0,0-36-36H60A36,36,0,0,0,24,60Zm36,48a48,48,0,1,0,96,0,48,48,0,1,1-96,0Zm0,0a48,48,0,1,1,48,48A48,48,0,0,1,60,108Zm48,24a24,24,0,1,0-24-24A24,24,0,0,0,108,132Zm48-24a48.048,48.048,0,0,0-48-48A48.049,48.049,0,0,1,156,108Zm-24,0a24,24,0,0,0-48,0,24,24,0,0,1,48,0Zm12-52a16,16,0,1,0,32,0,16,16,0,1,1-32,0Zm0,0a16,16,0,1,1,16,16A16,16,0,0,1,144,56Z"/>
							</svg>
						</a>
					</li>
				</ul>
				<div class='bottom'>
					<p class='color-white tiny t-a-c' style="color: rgba(255, 255, 255, 0.48);">
						Copyright &copy; <?php echo date("Y"); ?>,
						<br />
						<a class="transition hover-color-primary" href='<?php echo get_site_url(); ?>/'><?php echo $settings['website']['COMPANY_NAME']; ?></a> - All Rights Reserved.
						<br />
						Version: <?php echo $settings['site']['VERSION']; ?>
					</p>
				</div>
			</footer>

			<?php wp_footer();?>
			
		</main>			
	</body>
</html>
