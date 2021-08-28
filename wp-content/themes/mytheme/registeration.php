<?php
    /**
     * Template Name: Registeration Page
     */
get_header();

?>
<div class="main row">

    <section class="c col-9">
        <div class="row">
            <div class="col-6 offset-3">
                <form class="">
                    <?php  
                       wp_nonce_field( 'name_of_my_action', 'name_of_nonce_field' );
                    ?>
                    <div class="mb-3">
                        <label for="fname" class="form-label">First Name</label>
                        <input name="firstname" type="text" class="form-control" id="fname" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="lname" class="form-label">Last Name</label>
                        <input name="lastname" type="text" class="form-control" id="lname">
                    </div>
                    <button type="submit" name="registersubmit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
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
    <?php get_sidebar( ); ?>
</div>
<?php get_footer() ;?>