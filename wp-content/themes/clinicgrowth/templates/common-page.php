<?php
/*
Template Name: Common Page
Template Post Type: page, post
*/
?>

<?php get_header(); ?>

	<section id='common-page'>
        <section class='landing'>
            <div class='container'>
                <div class='txt'>
                    <h2 class='title color-secondary font-bold'><?php the_title();?></h2>
                </div>
            </div>
        </section>
    </section>
	
	<section id='common-content'>
		<div class='container'>
			<div class='inner'>
			<?php the_content(); ?>
			</div>
		</div>
	</section>

<?php get_footer();?>














