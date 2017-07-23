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
        <div class="sidebar-box">
            <h2 class="aside-titles">RELATED POSTS</h2>
            </br>
            <ul class="sidebar menu">
                <?php
                    $relatedPosts = get_posts( array(
                        'numberposts' => 3,
                        'category__in' => wp_get_post_categories($post->ID),
                        'post__not_in' => array($post->ID) ) );
                
                    if($relatedPosts) foreach($relatedPosts as $post) {
                        setup_postdata($post); 
                ?>
                <ul>
                    <li>
                        <a href="<?php the_permalink() ?>"> <b><?php the_title(); ?></b></a>
                        <?php
                            $content = apply_filters( 'the_content', get_the_content() );
                            $picture = substr( $content, 0, strpos( $content, '</p>' )); //show picture
                            echo $picture;
                        ?>
                    </li>
                </ul>
                <?php }
                    wp_reset_postdata();
                ?>
            </ul>
        </div>
    </div>
</aside>