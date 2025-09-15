<?php
    /*
        Template Name: Common Page
        Template Post Type: page, post, who-we-help
    */
?>

<?php get_header(); ?>

	<?php
        $background_image = has_post_thumbnail() ? get_the_post_thumbnail_url(null, 'full') : get_template_directory_uri() . '/images/home/clinic-growth-cover.jpg';
    ?>

    <section id='common-page'>
        <section class='landing cover-img' style="background-image: url(<?php echo esc_url($background_image); ?>);">
            <div class='container'>
                <div class='txt'>
                    <h2 class='title color-white font-bold l-h-1-1'><?php the_title(); ?></h2>
                </div>
            </div>
        </section>
    </section>
	
	<section id='common-content'>
        <div class='inner'>
            <div class='container'>
                <div class='container-medium'>
                    <div class='container-small'>
                        <div class="text-editor-content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</section>

<?php get_footer();?>