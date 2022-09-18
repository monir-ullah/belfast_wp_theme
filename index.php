<?php 
    get_header();
?>



    <!-- main-menu -->
    <div class="theme_menu menu-area stricky centred">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 menu-column">
                    <div class="menu-area">
                        <nav class="main-menu">
                            <div class="navbar-header">     
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="current"><a href="#">Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li class="dropdown"><a href="#">Pages</a>
                                        <ul class="submenu">
                                            <li><a href="single.html">Single Post</a></li>
                                            <li><a href="category.html">Category Page</a></li>
                                            <li><a href="author.html">Author Page</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>


                                <!-- mobile menu -->
                                <ul class="mobile-menu clearfix">
                                    <li class="current dropdown"><a href="#">Home</a>
                                        <ul>
                                            <li><a href="index.html">Homepage Larg Grid</a></li>
                                            <li><a href="index2.html">Homepage Grid</a></li>
                                            <li><a href="index3.html">Homepage List</a></li>
                                            <li><a href="index4.html">Homepage Masonry</a></li>
                                            <li><a href="index5.html">Homepage Classic</a></li>
                                            <li><a href="index6.html">Homepage Zigzag</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                    <li class="dropdown"><a href="#">Features</a>
                                        <ul>
                                            <li><a href="post1.html">Standard Post</a></li>
                                            <li><a href="post2.html">Slider Post</a></li>
                                            <li><a href="post3.html">Gallery Post</a></li>
                                            <li><a href="video-post.html">Video Post</a></li>
                                            <li><a href="audio-post.html">Audio Post</a></li>
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="shop-single.html">Single Shop</a></li>
                                            <li><a href="cart.html">Cart Page</a></li>
                                            <li><a href="checkout.html">Checkout Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="travel.html">Travel</a></li>
                                    <li><a href="lifestyle.html">Lifestyle</a></li>
                                    <li><a href="music.html">Music</a></li>
                                    <li><a href="contact.html">contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end main-menu -->
</header>
<!-- end menu-area -->


<section class="slider-style-six">
    <div class="container">
        <div class="row">
            <?php
                $header_args = array(
                    'post_type' => 'post',
                    'order'     => 'DESC',
                );
                $header_query = new WP_Query( $header_args );
                while($header_query->have_posts()){
                    $header_query->the_post(); 
                    if(1>$header_query->current_post){ ?>
                        <div class="col-md-8 col-sm-12 col-xs-12 first-column">
                            <div class="single-item">
                                <div class="single-item-overlay">
                                    <div class="img-box">
                                        <img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title();?>">
                                        <div class="overlay">
                                            <div class="inner-box">
                                                <div class="content blog-content-one">
                                                    <div class="meta-text"><?php the_category( ' ' ); ?></div>
                                                    <div class="title"><h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3></div>
                                                    <div class="date"><span>On</span> <?php echo get_the_date('F m, Y') ?> &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> <?php the_author(); ?></div>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="col-md-4 col-sm-12 col-xs-12 column">  
                            <?php
                            }elseif(3>$header_query->current_post){ ?>
                                <div class="single-item">
                                    <div class="single-item-overlay">
                                        <div class="img-box">
                                            <img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title();?>">
                                            <div class="overlay">
                                                <div class="inner-box">
                                                    <div class="content blog-content-one">
                                                        <div class="meta-text"><?php the_category( ' ' ); ?></div>
                                                        <div class="title"><h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3></div>
                                                        <div class="date"><span>On</span> <?php echo get_the_date('F m, Y') ?> &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> <?php the_author(); ?></div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                            <?php
                            }
                            wp_reset_postdata();
                         ?>
                        </div>
        </div>
    </div>
</section>


<!-- carousel-style-one -->
<section class="carousel-style-one mar-bottom-100">
    <div class="single-item-carousel-overlay owl-control-none">
        <?php 
             $carousel = array(
                'post_type'         => 'post',
                'order'             => 'ASC',
                'posts_per_page'    => 7,

            );
            $carousel = new WP_Query( $carousel );
            while($carousel->have_posts()){
                $carousel->the_post(); ?>
                <div class="single-item">
                    <div class="single-item-overlay">
                        <div class="img-box belfast-carousel-img">
                            <img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title();?>">
                            <div class="overlay">
                                <div class="inner-box">
                                    <div class="content blog-content-one">
                                        <div class="meta-text"><?php the_category( ' ' ); ?></div>
                                        <div class="title"><h6><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h6></div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
             <?php
            }    
            wp_reset_postdata();
        ?>
        
    </div>
</section>
<!-- carousel-style-one end -->


<!-- blog side -->
<section class="blog-side blog-style-one blog-style-three">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12 content-side">
                <div class="blog-details-content">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <?php 
                                $carousel = array(
                                    'post_type'         => 'post',
                                    'order'             => 'DESC',
                                    'posts_per_page'    => 5,

                                );
                                $carousel = new WP_Query( $carousel );
                                while($carousel->have_posts()){
                                    $carousel->the_post(); ?>
                                    <div class="content-box overlay-item">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title();?>"></figure>
                                                <div class="overlay-box">
                                                    <div class="overlay-inner">
                                                        <div class="content">
                                                            <a href="<?php the_permalink();?>"><i class="fa fa-link"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blog-content-one blog-content-two sp-six centred">
                                            <div class="top-content">
                                                <div class="meta-text"><?php the_category( ' ' ); ?></div>
                                                <div class="title"><h4><a href="post1.html"><?php the_title();?></a></h4></div>
                                                <div class="date"><span>On</span>  <?php echo get_the_date('F m, Y') ?> &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> <?php the_author(); ?></div>
                                            </div>
                                            <div class="text">
                                                <p><?php the_excerpt();?></p>
                                            </div>
                                            <ul class="meta-list centred">
                                                <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; <?php echo get_comments_number(); ?></a>  
                                                <?php if(1>get_comments_number()){
                                                    echo "Comment";
                                                    }else{
                                                        echo "Comments";
                                                    } ?></a></li>
                                                <li><a href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" title="Share on Facebook." target="_blank"><i class="fa fa-share-alt" aria-hidden="true"></i> &nbsp;Share</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php
                                }   wp_reset_postdata(); 
                            ?>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <?php 
                                $carousel = array(
                                    'post_type'         => 'post',
                                    'order'             => 'ASC',
                                    'posts_per_page'    => 5,

                                );
                                $carousel = new WP_Query( $carousel );
                                while($carousel->have_posts()){
                                    $carousel->the_post(); ?>
                                    <div class="content-box overlay-item">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title();?>"></figure>
                                                <div class="overlay-box">
                                                    <div class="overlay-inner">
                                                        <div class="content">
                                                            <a href="<?php the_permalink();?>"><i class="fa fa-link"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blog-content-one blog-content-two sp-six centred">
                                            <div class="top-content">
                                                <div class="meta-text"><?php the_category( ' ' ); ?></div>
                                                <div class="title"><h4><a href="post1.html"><?php the_title();?></a></h4></div>
                                                <div class="date"><span>On</span>  <?php echo get_the_date('F m, Y') ?> &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By</span> <?php the_author(); ?></div>
                                            </div>
                                            <div class="text">
                                                <p><?php the_excerpt();?></p>
                                            </div>
                                            <ul class="meta-list centred">
                                                <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; <?php echo get_comments_number(); ?></a>  
                                                <?php if(1>get_comments_number()){
                                                    echo "Comment";
                                                    }else{
                                                        echo "Comments";
                                                    } ?></a></li>
                                                <li><a href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" title="Share on Facebook." target="_blank"><i class="fa fa-share-alt" aria-hidden="true"></i> &nbsp;Share</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php
                                }   wp_reset_postdata(); 
                            ?>
                        </div>
                    </div>
                    <ul class="page-pagination page-pagination centred">
                        <li><a href="#"><i class="fa fa-angle-left"></i>&nbsp;&nbsp;&nbsp;PREV</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#" class="active">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">NEXT&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12 sidebar-side">
                <div class="sidebar-content">
                    <div class="sidebar-about centred">
                        <div class="sidebar-title">ABOUT ME</div>
                        <figure class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/1.png" alt=""></figure>
                        <h5 class="name">Jassy Beula</h5>
                        <div class="text"><p>These days are all share them with me oh baby just sit right back and you will hear a tale a tale of a fateful trip that started.</p></div>
                        <ul class="social-link">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                        </ul>
                    </div>
                    <div class="sidebar-post">
                        <div class="sidebar-title">RECENT POST</div>
                        <div class="single-post">
                            <div class="img-box"><a href="post1.html"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/p1.jpg" alt=""></figure></a></div>
                            <h6><a href="post1.html">Fleeing from the Cylon tyre</a></h6>
                            <div class="text">JULY 09, 2018</div>
                        </div>
                        <div class="single-post">
                            <div class="img-box"><a href="post1.html"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/p2.jpg" alt=""></figure></a></div>
                            <h6><a href="post1.html">Life support systems return</a></h6>
                            <div class="text">MAY 19, 2018</div>
                        </div>
                        <div class="single-post">
                            <div class="img-box"><a href="post1.html"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/p3.jpg" alt=""></figure></a></div>
                            <h6><a href="post1.html">Eoner on a crusade</a></h6>
                            <div class="text">AUGUST 09, 2018</div>
                        </div>
                        <div class="single-post">
                            <div class="img-box"><a href="post1.html"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/p4.jpg" alt=""></figure></a></div>
                            <h6><a href="post1.html">Aboard were expecting you</a></h6>
                            <div class="text">SEPTEMBER 10, 2018</div>
                        </div>
                        <div class="single-post">
                            <div class="img-box"><a href="post1.html"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/p5.jpg" alt=""></figure></a></div>
                            <h6><a href="post1.html">Our dreams come true</a></h6>
                            <div class="text">OCTOBER 09, 2018</div>
                        </div>
                    </div>
                    <div class="sidebar-newsletter centred">
                        <div class="title"><i class="fa fa-envelope-o"></i>&nbsp;&nbsp;NEWSLETTER</div>
                        <div class="text">These days are all share them wit me</div>
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Your Email Address" required="">
                                <button type="submit" class="btn-one">SUBSCRIBE</button>
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-instagram">
                        <div class="sidebar-title">INSTAGRAM</div>
                        <ul class="img-list clearfix"> 
                            <li><figure class="img-box"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/i1.jpg" alt=""></a></figure></li>
                            <li><figure class="img-box"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/i2.jpg" alt=""></a></figure></li>
                            <li><figure class="img-box"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/i3.jpg" alt=""></a></figure></li>
                            <li><figure class="img-box"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/i4.jpg" alt=""></a></figure></li>
                            <li><figure class="img-box"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/i5.jpg" alt=""></a></figure></li>
                            <li><figure class="img-box"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/i6.jpg" alt=""></a></figure></li>
                        </ul>
                    </div>
                    <div class="sidebar-categories">
                        <div class="sidebar-title">CATEGORIES</div>
                        <ul class="categories-list"> 
                            <li><a href="#">Beauty<span>(3)</span></a></li>
                            <li><a href="#">Dressing<span>(8)</span></a></li>
                            <li><a href="#">Fitness <span>(7)</span></a></li>
                            <li><a href="#">Lifestyle<span>(6)</span></a></li>
                            <li><a href="#">Travel<span>(9)</span></a></li>
                        </ul>
                    </div>
                    <div class="sidebar-img-content">
                        <div class="single-item">
                            <figure class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/12.jpg" alt=""></figure>
                                <div class="inner-box">
                                <div class="content">
                                    <div class="meta-text"><a href="#">Travel</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="single-item">
                            <figure class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/13.jpg" alt=""></figure>
                                <div class="inner-box">
                                <div class="content">
                                    <div class="meta-text"><a href="#">MUSIC</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog side end -->


<!-- instagram-section -->
<section class="instagram-section centred">
    <div class="container">
        <div class="instagram-title">FOLLOW @ INSTAGRAM</div>
        <ul class="instagram-img-list clearfix">
            <li><a href="#"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/f1.jpg" alt=""></figure></a></li>
            <li><a href="#"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/f2.jpg" alt=""></figure></a></li>
            <li><a href="#"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/f3.jpg" alt=""></figure></a></li>
            <li><a href="#"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/f4.jpg" alt=""></figure></a></li>
            <li><a href="#"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/f5.jpg" alt=""></figure></a></li>
        </ul>
    </div>
</section>
<!-- instagram-section -->
<?php get_footer(); ?>
