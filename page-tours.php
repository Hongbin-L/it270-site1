<?php 
get_header(); 
/* Template Name: Tours Page */
?>

<div id="hero">
<img src="<?php echo get_template_directory_uri();?>/../../uploads/pexels-pixabay-1583982.jpg" alt="banner">
</div>

<div class="wrapper">
<main>
<?php if(has_post_thumbnail()) : ?>
<?php the_post_thumbnail(); ?>
<?php endif;?>

<?php while(have_posts()) : the_post() ;?>

<?php the_content() ; ?>
<?php endwhile;?>


</main>

<aside id="secondary" class="widget-area">
    <?php dynamic_sidebar( 'sidebar-tours' ); ?>
</aside><!-- #secondary -->

</div>
<!-- end wrapper -->

<div class="full-width">
<?php dynamic_sidebar('sidebar-buy'); ?>
</div>
<!-- end full width div-->
<?php get_footer(); ?>