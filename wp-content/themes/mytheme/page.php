<?php get_header(); ?>
    <div class="main row">
        <?php //get_sidebar( ); ?>
        <section class="c col-12">
        <?php
            $args = array(
                'post_type'=>'post',
                'posts_per_page'=>-1
            );
            // The Query
            $the_query = new WP_Query( $args );
            
            // The Loop
            if ( $the_query->have_posts() ) {
                echo '<ul>';
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    echo '<li>' . get_the_title() . '</li>';
                }
                echo '</ul>';
            } else {
                // no posts found
            }
            /* Restore original Post Data */
            wp_reset_postdata();
        ?>

        </section>
    </div>
<?php get_footer() ;?>