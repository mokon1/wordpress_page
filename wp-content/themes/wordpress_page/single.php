<?php get_header(); ?>

<section id="main-section">
    <main class="main-content">
        <div class="wraper">
            <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();				
                    ?>
                    
                <div class="post-box">
                        <p class="mainSide"><a href = "<?php bloginfo( 'url' ); ?>"  >Wróc na stronę główną</a></p>
                        <p class="aside-text aligncenter"><a href="<?php the_permalink(); ?>" class='date'><?php echo get_the_date('M j, Y'); ?></a></p>
                        <h2 class="post-title aligncenter"><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
                        <p class="aligncenter tag"> <?php echo get_the_category_list(" |  "); ?></p>
                        
                        <p class="main-text">
                            <script>
                                $(function(){
                                    $('span').removeClass('hide'); //added
                                    $('.main-content').css('width','90%');
                                })
                            </script>
                            <?php
                                 echo get_the_content();
                            ?>
                        </p>
                    
                    </div>
                    <?php
                    endwhile;
                endif; 
            ?>
        </div>
    </main>
</section>

<?php get_footer(); ?>