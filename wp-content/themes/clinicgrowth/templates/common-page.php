<?php
    /*
        Template Name: Common Page
        Template Post Type: page, post
    */
?>

<?php get_header(); ?>

	<section id='common-page'>
        <section class='landing background-faded'>
            <div class='container'>
                <div class='txt'>
                    <h2 class='title color-secondary font-bold l-h-1-1'><?php the_title();?></h2>
                </div>
            </div>
        </section>
    </section>
	
	<section id='common-content'>
		<div class='container'>
            <div class='container-medium'>
                <div class='container-small'>
                    <div class='inner'>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
		</div>
	</section>

<?php get_footer();?>














