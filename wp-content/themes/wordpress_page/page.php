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
    <aside class="aside">
        <div class="wrapper wrapper-aside">
           <div class="sidebar-box">
                <ul class="sidebar menu tag">                
                    <?php wp_list_categories( array(
                        'orderby'    => 'count',
                        'order' => 'DESC',
                        'number'    => 7,
                        'title_li' => "<h2 class='aside-titles'>Categories </h2></br>"
                    ) ); ?>
                    <!-- or <?php //dynamic_sidebar(); ?> -->
                </ul>
            </div>
        </div>
    </aside>
</section>

<?php get_footer(); ?>