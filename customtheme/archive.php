<?php get_header(); ?>

    <div class="archive_header">
        <img class="archive_header_image" src="<?php echo get_template_directory_uri().'/assets/images/category_header_image.jpg'?>">
        <h2 class="archive_header_title"><?php echo the_category(); ?></h2>
    </div>


<section class="archive_post_section container">
    
    
<?php
    if(have_posts()){
        while(have_posts()){
            the_post(); ?>


            <a href="<?php the_permalink(); ?>" class="post_item">
                <img class="post_item_featured_image" src="<?php the_post_thumbnail_url('medium') ?>">
                <div class="post_item_meta_data">
                    <h4> <?php the_title(); ?></h4>
                    <p><?php the_author(); ?></p>
                </div>
            </a>
<?php
        }
    }
?>
</section>

<?php get_footer(); ?>