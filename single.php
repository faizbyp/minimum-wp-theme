<!-- Untuk single blog post -->
<?php get_header(); ?> <!-- Memanggil header.php -->

<div class="container">

    <h1 class="py-5"><?php the_title();?></h1>

    <?php if(has_post_thumbnail()):?>
        <img src="<?php the_post_thumbnail_url('smallest');?>" class="img-fluid">
    <?php endif;?>

    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>

</div>

<?php get_footer(); ?> <!-- Memanggil footer.php -->