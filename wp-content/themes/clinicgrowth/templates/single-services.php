<?php
    /*
        Template Name: Services Single
        Template Post Type: services
    */
?>

<?php get_header(); ?>

    <section id='common-page'>
        <section class='landing cover-img' style="background-image: url(<?php bloginfo('template_directory'); ?>/images/home/clinic-growth-cover.jpg);">
            <div class='container'>
                <div class='txt'>
                    <p class="l-h-1 small color-primary" style="margin-bottom: 8px;">Our Services</p>
                    <h2 class='title color-white font-bold l-h-1-1'><?php the_title(); ?></h2>
                </div>
            </div>
        </section>
    </section>

    <section id="services-single-page">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <section class="content">
                <div class="container">
                    <div class="container-small">
                        <div class="flex top-left row">
                            <div class="right">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="col-1-1 height-auto display-block main-image">
                                        <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="left">
                                <h2 class="l-h-1 font-bold main-title">
                                    <?php the_title(); ?>
                                </h2>
                                <br />
                                <div class="text-editor-content">
                                    <?php the_content(); ?>
                                </div>
                                <hr class="sep background-faded" style="outline: none; border: none; height: 1px;" />
                                <p class="l-h-1 small color-primary" style="margin-bottom: 8px;">Services</p>
                                <h5 class="l-h-1 font-bold color-secondary">Other Services</h5>
                                <?php get_other_services(get_the_ID(), -1); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; endif; ?>
    </section>

<?php get_footer(); ?>
