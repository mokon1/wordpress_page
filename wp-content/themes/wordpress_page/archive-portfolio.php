<?php get_header(); ?>

<section id="main-section">
    <div class="portfolio">
        <?php
            while ( have_posts() ) : the_post(); ?>		
                <div class="portfolioItem">
                    <h3 class="aligncenter"><?php echo the_title(); ?></h3></br>
                    <?php
                        echo get_the_content();
                    ?>
                </div>
        <?php
            endwhile; 
        ?>  
    </div>
</section>

<?php get_footer(); ?>



