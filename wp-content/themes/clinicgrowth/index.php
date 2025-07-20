<?php get_header(); ?>

<?php if ( is_home() || is_front_page() ) : ?>
	<?php get_template_part( 'templates/home' ); ?>
<?php endif; ?>

<?php if ( is_category() ) : ?>
	<?php get_template_part( 'templates/category' ); ?>
<?php endif; ?>

<?php get_footer(); ?>
