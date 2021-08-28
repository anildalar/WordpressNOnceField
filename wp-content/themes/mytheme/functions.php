<?php 
    add_theme_support('menus');


    function mycbfn(){
        register_nav_menus( array(
            'header_menu'=>__('Header Menu OKLABS'),
            'footer_menu'=>__('Footer Menu OKLABS')
        ) );
    }
    add_action('after_setup_theme',"mycbfn");

    
    function mycss(){
        wp_enqueue_style( 'maincss', get_stylesheet_uri(), array() );
    }

    add_action('wp_enqueue_scripts','mycss');


    //Fontend INit
    function myinit(){
        //Check for the Frontend init
        if(!is_admin()){
            //Frontend
            
            

            //1. Check for Incomming data
            if(isset($_GET['registersubmit'])){
                //echo 'ok';
                //2. Verify the Nonce Fields
                if(wp_verify_nonce( $_GET['name_of_nonce_field'], 'name_of_my_action')){
                    echo 'ok';
                }else{
                    echo 'NOT OK';
                }
            }

        }
    }
    add_action('init','myinit');
?>