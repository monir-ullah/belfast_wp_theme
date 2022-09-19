<footer class="footer-style-six sp-one">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 footer-column">
                    <?php 
                        $footer_copy_wright = get_field('footer_copy_wright', 'option');
                        if($footer_copy_wright){ ?>
                            <div class="copyright"><?php echo $footer_copy_wright; ?></div>
                         <?php
                        }
                    ?>
                    
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 footer-column">
                    <div class="footer-logo">
                            <?php 
                                $custom_logo_id = get_theme_mod( 'custom_logo' );
                                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                
                                if ( has_custom_logo() ) {
                                    echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                                } else {                                   
                                    echo '<h1 class="theme-logo-title">' . get_bloginfo('name') . '</h1>';
                                }
                            ?>
                        <!-- <a href="index.html"><figure><img src="images/footer/logo1.png" alt=""></figure></a> -->
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 footer-column">
                    <ul class="social-style-seven pull-right in-block">
                        <?php 
                            $footer_social_media_link_repeater = get_field('footer_social_media_link_repeater', 'option');
                            if($footer_social_media_link_repeater){ 
                                foreach($footer_social_media_link_repeater as $footer_sinlge_link){ 
                                    $footer_social_media_name = $footer_sinlge_link['footer_social_media_name']; 
                                    $footer_social_media_link = $footer_sinlge_link['footer_social_media_link']; 
                                    $footer_social_media_icon = $footer_sinlge_link['footer_social_media_icon']; 
                                    if($footer_social_media_name && $footer_social_media_link && $footer_social_media_icon){ ?>
                                        <li><a href="<?php echo $footer_social_media_link;?>"> <i class="<?php echo $footer_social_media_icon;?>"></i><span class="margin-l-5"><?php echo $footer_social_media_name;?></span></a></li>
                                      <?php  
                                    }
                                }
                                ?>
                                
                            <?php
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-angle-up"></span></div>
<?php wp_footer(); ?>
</body><!-- End of .page_wrapper -->
</html>