<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php wp_head(); ?>
</head>

<!-- page wrapper -->
<body class="boxed_wrapper" <?php body_class(); ?>>


    <!-- .preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- /.preloader -->

    
    <!-- menu-area -->
    <header class="main-header header-style-four">      
        <!-- header-top-style-two -->
        <div class="header-top-two">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <ul class="social-style-four in-block">
                            <?php 
                                $header_social_top = get_field('header_social_top', 'option');
                                foreach($header_social_top as $sinlge_header_social){ 
                                    $header_social_top_icon = $sinlge_header_social['header_social_top_icon'];
                                    $header_social_top_link = $sinlge_header_social['header_social_top_link'];
                                    if($header_social_top_icon &&  $header_social_top_link){ ?>
                                        <li><a href="<?php echo $sinlge_header_social['header_social_top_link'];?>"><i class="<?php echo $sinlge_header_social['header_social_top_icon'];?>"></i></a></li>
                                        <?php
                                    }
                                    ?>
                                 <?php 
                                }
                            ?> 
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="logo-box centred">
                            <?php 
                                $custom_logo_id = get_theme_mod( 'custom_logo' );
                                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                
                                if ( has_custom_logo() ) {
                                    echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                                } else {                                   
                                    echo '<h1 class="theme-logo-title">' . get_bloginfo('name') . '</h1>';
                                    echo '<p class="theme-logo-description">' . get_bloginfo('description') . '</p>';
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="search-box">
                            <form action="index.html" method="post">
                                <div class="form-group">
                                    <?php
                                        if(is_active_sidebar('header-search')){
                                            dynamic_sidebar('header-search');
                                        }
                                    ?>
                                    <!-- <input type="search" name="search" placeholder="Search" required="">
                                    <button type="submit"><i class="fa fa-search"></i></button> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- header-top-style-two -->