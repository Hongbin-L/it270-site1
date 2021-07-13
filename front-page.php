<?php 
get_header(); 
/* Template Name: Front Page */
?>

<div id="wrapper">
<?php if(have_posts()) :?>
<?php while(have_posts()) : the_post() ;?>
<h2><?php the_title() ;?></h2>
<?php if(has_post_thumbnail()) : ?>
<?php the_post_thumbnail(); ?>
<?php endif;?>
<?php the_content() ; ?>
<?php endwhile;?>
<?php else : ?>
<?php echo wp_autop('Sorry, no posts were found!'); ?>
<?php endif; ?>

<p>Here is my content</p>


</div>
<!-- end wrapper -->

<?php get_footer(); ?>