<?php
/*
Template Name: Services Single
Template Post Type: services, post
*/
?>
<?php get_header(); ?>

    <section id='common-page'>
        <section class='landing cover-img' style="background-image: url(<?php echo the_post_thumbnail_url(); ?>)">
            <div class='container'>
                <div class='txt'>
                    <h1 class='color-white title'>
                        <?php echo the_title(); ?>
                    </h1>
                    <div class='sep-2'>
                        <hr />
                    </div>
                    <div class='desc'>
                        <p><?php echo countImgTags(get_the_content()); ?> Photos</p>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section id="gallery-slider">
        <div class="wrap">
            <div class='box'>
                <div class='close'>
                    <svg
                        xmlns='http://www.w3.org/2000/svg'
                        width='22'
                        height='22'
                        viewBox='0 0 22 22'>
                        <path
                            id='iconmonstr-x-mark-9'
                            d='M23,20.168l-8.185-8.187L23,3.807,20.168,1,11.986,9.179,3.81,1,1,3.81l8.186,8.2L1,20.19,3.81,23l8.2-8.192L20.193,23Z'
                            transform='translate(-1 -1)'
                        />
                    </svg>
                </div>
                <div class='inner'>
                    <div id="sliders" class="flexslider">
                        <?php get_all_galley_images_for_slider(get_the_content()); ?>
                    </div>
                <div>
            </div>
        </div>
    </section>

    <section class='gallery-single'>
        <div class='container' id="patch-here000">
            <?php get_all_galley_images(get_the_content()); ?>
        </div>
    </section>

<?php get_footer();?>