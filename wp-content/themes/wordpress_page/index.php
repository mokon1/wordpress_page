<?php get_header(); ?>

<section>
    <div class="photo-wrapper">
        <div class="photo-box">
            <?php dynamic_sidebar('Sidebar 1'); ?>
        </div>
        <div class="photo-box">
            <?php dynamic_sidebar('Sidebar 2'); ?>
        </div>
    </div>
</section>
<section id="main-section">
    <main class="main-content">
        <div class="wraper">
            <?php
                if ( have_posts() ) :
                while ( have_posts() ) : the_post();
            ?>
                    <div class="post-box">
                        <p class="aside-text aligncenter"><a href="<?php the_permalink(); ?>" class='date'><?php echo get_the_date('M j, Y'); ?></a></p>
                        <h2 class="post-title aligncenter"><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
                        <p class="aligncenter tag"> <?php echo get_the_category_list(" |  "); ?></p>
                        <p class="main-text">
                            <?php
                                echo get_the_content();
                            ?>
                        </p>
                        <span class="more-text tag"><a href="<?php the_permalink(); ?>">continue reading &#10137;</a></span>
                    </div>
            <?php
                endwhile;
                endif;
            ?>
        </div>
        <span class="more-text tag alignright"><a href="    
            <?php echo get_page_link(75); ?> ">MORE POSTS &#10137;</a>
        </span>
    </main>
    <?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>