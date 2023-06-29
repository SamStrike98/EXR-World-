<?php get_header(); ?>
    <div class="single_post_header">
        <img class="single_post_header_image" src="<?php the_post_thumbnail_url() ?>">
        <h1 class="single_post_header_title"><?php the_title(); ?></h1>
    </div>
    <div class="container post_container">
        
            <section class="post_section">
                <?php
                    if(have_posts()){
                        while(have_posts()){ ?>
                        <?php the_post(); ?>
                            <h2><?php the_title(); ?></h2>
                            <ul class="post_meta_data">
                            <li><?php the_author(); ?> </li>
                            <li><?php the_date(); ?></li>
                            <li><?php comments_number(); ?></li>
                            </ul>
                        <?php the_content(); ?>
                        <?php
                        }
                    }
                    comment_form();
                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
	                comments_template();
                endif;
                ?>            
                </section>
            <section class="sidebar_section">SideBar</section>
    </div>

<?php get_footer(); ?>