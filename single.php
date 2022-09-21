<?php 
    get_header();
    global $post;
    $user = wp_get_current_user();
    $author_id = $post->post_author;
    $author_social_repeater = get_field('author_social_repeater', 'user_'. $author_id )
                           
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

<!-- blog side -->
<section class="blog-side sp-seven blog-style-one standard-post sec-pad">
<div class="container">
    <div class="row">
        <div class="col-md-9 col-sm-12 col-xs-12 content-side">
            <div class="blog-details-content">
                <figure><img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title();?>"></figure>
                <div class="blog-content-one sp-three">
                    <div class="top-content centred">
                        <div class="meta-text"><?php the_category( ' ' ); ?></div>
                        <div class="title"><h3><?php the_title();?></h3></div>
                        <div class="date"><span>On</span> <?php echo get_the_date('F m, Y') ?> &nbsp;&nbsp;<i class="flaticon-circle"></i>&nbsp;&nbsp;<span>By </span> &nbsp;<a href="<?php echo get_the_author_meta( 'user_url', $author_id ); ?>"><?php echo get_the_author_meta( 'first_name', $author_id ); ?></a></div>  
                    </div>
                    <div>
                        <?php the_content(); ?>
                    </div>
                    <ul class="meta-list centred">
                        <li><a href="<?php the_permalink();?>"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp; <?php echo get_comments_number(); ?></a>  
                            <?php                            
                                if(get_comments_number()>1){
                                    echo "Comments";
                                }else{
                                    echo "Comment";
                                } 
                            ?>
                            </a> &nbsp; <i class="flaticon-circle"></i> &nbsp; 
                        </li>
                        <li><a href="<?php the_permalink();?>"><i class="flaticon-substract"></i> &nbsp; CONTINUE READING &nbsp; <i class="flaticon-substract"></i></a></li>
                        <li><a href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>"><i class="fa fa-share-alt" aria-hidden="true"></i> &nbsp;Share</a></li>
                    </ul>
                </div>
                <div class="single-authore">
                    <div class="authore-img"><figure><img src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" alt="<?php echo get_the_author_meta( 'display_name',$author_id );?>"></figure></div>
                    <div class="authore-title margin-l-5"><?php echo get_the_author_meta( 'display_name', $author_id ); ?> - <span>Author</span></div>
                    <div class="text margin-l-5"><p><?php echo get_the_author_meta( 'description', $author_id ); ?></p></div>
                    <ul class="social-link margin-l-5">
                        <?php
                           foreach( $author_social_repeater as $author_signle_social){ ?>
                            <li><a href="<?php echo $author_signle_social['author_social_link']; ?>"><i class="<?php echo $author_signle_social['author_social_icon']; ?>"></i></a></li>
                            <?php
                           }
                        ?>
                    </ul>
                </div>
                <?php 
                    $related_post_single_page = get_field('related_post_single_page');
                    if($related_post_single_page){ ?>
                        <div class="related-post centred">
                            <div class="title-text-two">RELATED POSTS</div>
                            <div class="carousel-style-four nav-style-none dots-style-one relation-post-single-img">
                                <?php 
                                    foreach($related_post_single_page as $single_related_post){ 
                                    $single_related_featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $single_related_post->ID ), 'full' );
                                        ?>
                                        <div class="carousel-style-one">
                                            <figure><img src="<?php echo $single_related_featured_image[0]; ?>" alt="<?php echo $single_related_post->post_title; ?>"></figure>
                                            <div class="lower-content">
                                                <div class="meta-text"><a href="#">Travel</a></div>
                                                <div class="title"><h6><a href="<?php echo $single_related_post->guid; ?>"><?php echo $single_related_post->post_title; ?></a></h6></div>
                                            </div>
                                        </div>                           
                                    <?php
                                    }
                                ?>    
                            </div>
                        </div>
                      <?php
                    }
                ?>
                <div class="comment-area">
                    <div class="title-text-two"><?php echo get_comments_number(); ?> 
                        <?php                            
                            if(get_comments_number()>1){
                                echo "Comments";
                            }else{
                                echo "Comment";
                            } 
                        ?>
                    </div>
                    <div class="single-comment">
                        <div class="img-box"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/news/c1.jpg" alt=""></figure></div>
                        <div class="comment-title">ADAM GILGRIST</div>
                        <div class="replay"><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i>&nbsp;Reply</a></div>
                        <div class="comment-time">8 MINS AGO</div>
                        <div class="text">
                            <p>The days are all Happy and Free these days you wanna be where everybody knows your name fish do to no burn on the grill took a whole lotta trying just to get up that wet floor.</p>
                        </div>
                    </div>
                    <div class="single-comment replay">
                        <div class="img-box"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/news/c2.jpg" alt=""></figure></div>
                        <div class="comment-title">MARIA WILLIAMS</div>
                        <div class="replay"><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i>&nbsp;Reply</a></div>
                        <div class="comment-time">2 MINS AGO</div>
                        <div class="text">
                            <p>The days are all Happy and Free these days you wanna be where everybody knows your as  on the grill took a whole lotta trying just to get up that wet floor.</p>
                        </div>
                    </div>
                    <div class="single-comment">
                        <div class="img-box"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/news/c3.jpg" alt=""></figure></div>
                        <div class="comment-title">NIA JASS</div>
                        <div class="replay"><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i>&nbsp;Reply</a></div>
                        <div class="comment-time">5 MINS AGO</div>
                        <div class="text">
                            <p>The days are all Happy and Free these days you wanna be where everybody knows your name fish do to no burn on the grill took a whole lotta trying just to get up that wet floor.</p>
                        </div>
                    </div>
                    <div class="single-comment replay">
                        <div class="img-box"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/news/c4.jpg" alt=""></figure></div>
                        <div class="comment-title">JASON ROY</div>
                        <div class="replay"><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i>&nbsp;Reply</a></div>
                        <div class="comment-time">1 WEEK AGO</div>
                        <div class="text">
                            <p>The days are all Happy and Free these days you wanna be where everybody knows your as  on the grill took a whole lotta trying just to get up that wet floor.</p>
                        </div>
                    </div>
                </div>
                <div class="comment-form">
                    <div class="title-text-two">WRITE YOUR COMMENTS</div>
                    <form action="#" method="post">
                        <div class="row">
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <textarea placeholder="Enter your comments here..." name="message" required=""></textarea>
                            </div>
                            <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                <input type="text" name="name" value="" placeholder="Name" required="">
                            </div>
                            <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                <input type="email" name="email" value="" placeholder="Email" required="">
                            </div>
                            <div class="form-group col-md-4 col-sm-12 col-xs-12">
                                <input type="text" name="subject" value="" placeholder="Website" required="">
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <button type="submit" class="btn-one">POST COMMENT</button>
                            </div>
                        </div>
                    </form>
                </div>
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
