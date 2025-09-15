<?php
	/*
		Template Name: Services
		Template Post Type: page
	*/
?>

<?php get_header(); ?>

	<section id='common-page'>
        <section class='landing cover-img' style="background-image: url(<?php bloginfo('template_directory'); ?>/images/home/clinic-growth-cover.jpg);">
            <div class='container'>
                <div class='txt'>
					<p class="l-h-1 small color-primary" style="margin-bottom: 8px;">Our Services</p>
                    <h2 class='title color-white font-bold l-h-1-1'>Our Marketing Services for Private Clinics</h2>
                </div>
            </div>
        </section>
    </section>

	<section id="services-page">
		<section class="all-services">
			<section class="container">
				<div class="flex row">
					<div class="left">
						<p class="l-h-1 small color-primary" style="margin-bottom: 8px;">Our Services</p>
						<h3 class='title color-secondary font-bold l-h-1-1'>Marketing Services for Private Clinics</h3>
						<br/>
						<p>Specialist marketing for dentists & aesthetic clinics: Paid Ads, Social Media Content & CRM Systems — All Done For You</p>
					</div>
					<div class="flex-1 right">
						<?php get_all_services(-1); ?>
					</div>
				</div>
			</section>
		</section>
	</section>

<?php get_footer();?>