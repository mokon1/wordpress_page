<?php get_header(); ?>

<section id="main-section">
    <main class="main-content">
        <div class="wraper">
            <?php $my_query = new WP_Query('category_tag=happiness&showposts=10');
            if ( have_posts() ) :
                while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <div class="post-box">
                    <p class="aside-text aligncenter"><a href="<?php the_permalink(); ?>" class='date'><?php echo get_the_date('M j, Y'); ?></a></p>
                    <h2 class="post-title aligncenter"><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
                    <p class="aligncenter tag"> <?php echo get_the_category_list(" |  "); ?></p>
                    <p class="main-text">
                        <?php
                            echo get_the_content();
                        ?>
                    </p>
                    <span class="more-text tag">continue reading &#10137;></span>
                </div>
            <?php 
                endwhile;
            endif;
            ?>
        </div>
    </main>
    <script>
        var moreText = $("span.tag");
        var mainContent = $(".main-content");
        moreText.each(function(){
            $(this).on("click",function(e){
                e.preventDefault();
                $(this).prev().children().find('span').toggleClass('hide');
            });
        });
        mainContent.css("width","100%");
    </script>
</section>

<?php get_footer(); ?>