<?php
    /*
        Template Name: Results
        Template Post Type: page
    */
?>

<?php get_header(); ?>

	<section id='common-page'>
        <section class='landing background-faded'>
            <div class='container'>
                <div class='txt'>
                    <p class="l-h-1 small color-primary" style="margin-bottom: 8px;">Growth Results</p>
                    <h2 class='title color-secondary font-bold l-h-1-1'>Clinic Marketing Results: Real Growth for Real Clinics</h2>
                </div>
            </div>
        </section>
    </section>

    <section id="results-page">
		<section class="results">
			<section class="container">
				<?php get_all_results(-1); ?>
			</section>
		</section>
	</section>

<?php get_footer();?>