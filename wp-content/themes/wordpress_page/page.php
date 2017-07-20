<?php get_header(); ?>

<section id="main-section">
    <main class="main-content">
        <div class="wraper textContainer">
            <p class="main-text">
               <?php
                while ( have_posts() ) : the_post();			
                    the_content();
                endwhile; 
                ?>
            </p>
        </div>
    </main>
     <?php get_sidebar(); ?>
</section>

<?php get_footer(); ?>