<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage clinicgrowth
 * @since clinicgrowth 1.0
 */

get_header(); ?>

	<section id="not-found">
		<section class="not-found">
			<div class="container">
				<div class="col">
					<div class="txt mar-0-a t-a-c">
						<h1 class="font-bold color-secondary">ERROR 404</h1>
						<h5>We can't seem to find the page you are looking for.</h5>
						<br>
						<a title="Go to Home Page" href="<?php echo get_site_url(); ?>/">
							<button class="background-tertiary color-white hover-background-primary">Return Home</button>
						</a>
					</div>
				</div>
			</div>
		</section>
	</section>

<?php get_footer(); ?>
