<?php
    /*
        Template Name: Results Single
        Template Post Type: results
    */
?>

<?php get_header(); ?>

    <section id='common-page'>
        <section class='landing landing-with-image pos-rel cover-img' style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
            <div class='container'>
                <div class='txt'>
                    <p class="l-h-1 small color-primary" style="margin-bottom: 8px;">Growth Results</p>
                    <h2 class='title color-secondary font-bold l-h-1-1'><?php the_title(); ?></h2>
                    <p class="l-h-1 small color-light" style="margin-top: 8px;"><?php echo get_the_date('F j, Y'); ?></p>
                </div>
            </div>
        </section>
    </section>

    <section id="results-single-page">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <section class="content">
                <div class="container">
                    <div class="container-medium">
                        <div class="flex top-left row">
                            <div class="right">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img class="col-1-1 height-auto display-block main-image" src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="left">
                                <h2 class="l-h-1 font-bold main-title">
                                    <?php the_title(); ?>
                                </h2>
                                <hr class="line" />
                                <?php the_content(); ?>
                                <hr class="sep background-faded" style="outline: none; border: none; height: 1px;" />
                                <p class="l-h-1 small color-primary" style="margin-bottom: 8px;">Results</p>
                                <h6 class="l-h-1 font-lightsss largess">More Case Studies</h6>
                                <?php get_other_results(get_the_ID(), -1); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; endif; ?>
    </section>

<?php get_footer(); ?>
