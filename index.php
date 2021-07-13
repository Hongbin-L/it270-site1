<?php get_header(); ?>

<div id="wrapper">
<main>
<?php if(have_posts()) :?>
<?php while(have_posts()) : the_post() ;?>
<article class="posts">
<h1><a href="<?php the_permalink() ;?>"><?php the_title() ;?></a></h1>
<div class="meta">
<span><b>Posted By: </b><?php the_author(); ?></span>
<span><b>Posted On: </b><?php the_time('F j, Y g:i a'); ?></span>
</div>
</article>
<!-- end meta -->
<div class="thumbnail">
<?php if(has_post_thumbnail()) : ?>
<a href="<?php the_permalink(); ?>">
<?php the_post_thumbnail(); ?>
</a>
<?php endif;?>
</div>
<?php the_excerpt() ; ?>
<span class="block">
<a href="<?php the_permalink(); ?>">Read More About <?php the_title(); ?></a>
</span>
<?php endwhile;?>
<?php else : ?>
<?php echo wp_autop('Sorry, no posts were found!'); ?>
<?php endif; ?>
</main>

<aside>

</aside>


</div>
<!-- end wrapper -->

<?php get_footer(); ?>