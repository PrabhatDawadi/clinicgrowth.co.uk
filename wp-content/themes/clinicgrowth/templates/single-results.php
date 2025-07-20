<?php
    /*
        Template Name: Results Single
        Template Post Type: results
    */
?>

<?php get_header(); ?>

    <section id='common-page'>
        <section class='landing background-faded'>
            <div class='container'>
                <div class='txt'>
                    <p class="l-h-1 small color-primary" style="margin-bottom: 8px;">Growth Results</p>
                    <h2 class='title color-secondary font-bold l-h-1-1'><?php the_title(); ?></h2>
                </div>
            </div>
        </section>
    </section>

    <section id="services-single-page">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <section class="content">
                <div class="container">
                    <div class="container-medium">
                        <div class="flex top-left row">
                            <div class="right">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="col-1-1 height-auto display-block cover-img main-image" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="538.999" height="539" viewBox="0 0 538.999 539" class="enclose col-1-1 height-auto display-block pos-rel" style="z-index: 4;">
                                            <path d="M539.5,539.5H.5V.5h539v539ZM222.115,18.515a178.421,178.421,0,0,0-29.875,2.236,115.984,115.984,0,0,0-13.91,3.213,92.448,92.448,0,0,0-13.034,4.98,91.318,91.318,0,0,0-12.71,7.365,112.1,112.1,0,0,0-11.721,9.358,168.163,168.163,0,0,0-21.04,23.552c-13.147,17.471-24.975,38.312-36.414,58.466l-.715,1.259-.482.854c-11.4,20.218-23.187,41.121-32.805,62.144a315.057,315.057,0,0,0-12.73,31.994A221.831,221.831,0,0,0,28.3,257.145a202.226,202.226,0,0,0-2.733,34.745,194.163,194.163,0,0,0,3.37,34.717,171.348,171.348,0,0,0,9.727,33.011,141.814,141.814,0,0,0,26.98,42.71c3.693,4.042,7.775,8.07,12.132,11.973A237.972,237.972,0,0,0,105.584,435.5c8.931,5.905,19.077,11.954,31.017,18.494,10.47,5.734,20.866,11.072,32.4,16.956,18.534,9.5,39.541,20.273,59.6,28.016a210.035,210.035,0,0,0,29.1,9.094,144.314,144.314,0,0,0,14.357,2.535,117.406,117.406,0,0,0,14.22.9h.007c2.828,0,5.657-.114,8.409-.34a106.82,106.82,0,0,0,13.982-2.117,129.81,129.81,0,0,0,13.844-3.871,186.938,186.938,0,0,0,27.307-11.972c18.048-9.517,35.985-21.776,53.332-33.631l.035-.024c2.493-1.7,5.071-3.465,7.6-5.185,3.219-2.189,6.475-4.389,9.625-6.516C454.552,424.774,486.79,403,505.9,372.645a137.824,137.824,0,0,0,12.783-26.639,184.6,184.6,0,0,0,7.73-29.423,256.125,256.125,0,0,0,3.548-31.167c.552-10,.632-20.727.239-31.87-.357-10.839-1.141-21.49-2.33-31.658-1.245-10.651-2.972-21.091-5.133-31.03a279.1,279.1,0,0,0-8.3-30.111,248.08,248.08,0,0,0-11.836-28.9,225.669,225.669,0,0,0-15.658-27.158,202.947,202.947,0,0,0-19.3-24.43A171.414,171.414,0,0,0,445.01,59.747a141.546,141.546,0,0,0-25.614-15.4c-29.65-13.716-64.259-16.169-100.9-18.766-7.892-.559-16.052-1.138-24.2-1.835-6.143-.527-12.436-1.134-18.521-1.722C257.923,20.3,239.464,18.515,222.115,18.515Z" transform="translate(-0.5 -0.5)" fill="#b72962"/>
                                        </svg>
                                        <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="left">
                                <h2 class="l-h-1 font-bold main-title">
                                    <?php the_title(); ?>
                                </h2>
                                <br />
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
