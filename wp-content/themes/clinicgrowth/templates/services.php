<?php
	/*
		Template Name: Services
		Template Post Type: page
	*/
?>
<?php get_header(); ?>

	<section id='common-page'>
        <section class='landing background-faded'>
            <div class='container'>
                <div class='txt'>
					<p class="l-h-1 small color-primary" style="margin-bottom: 8px;">Our Services</p>
                    <h2 class='title color-secondary font-bold l-h-1-1'>Our Marketing Services for Private Clinics</h2>
                </div>
            </div>
        </section>
    </section>

	<section id="services-page">
		<section class="services">
			<section class="container">
				<div class="container-small">
					<?php get_all_services(-1); ?>
				</div>
			</section>
		</section>
	</section>

<?php get_footer();?>














