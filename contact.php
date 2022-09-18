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
<!-- contact section -->
<section class="contact-section sp-eight">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12 content-side">
                <div class="blog-details-content">
                    <div class="contact-info">
                        <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/contact.jpg" alt=""></figure>
                        <div class="lower-content">
                            <div class="title-top centred">
                                <h3>Contact me</h3>
                                <div class="text"><span>Address:</span>  BELFAST ST, DOWNTOWN VIA, SAN ANTANIO, USA.<br />
                                <span>Phone:</span>  +20 - 993 - 5678 - 378</div>
                            </div>
                            <div class="text">
                                <p>The need no welfare states starship enterprise the Brady Bunch that's the way we all be came the Brady Bunch these to days are all Happy and Free these days you wanna be where everybody knows your name fish do not fry in the artist kitchen and beans do not burn on the grill took a whole lotta trying just to get up that hill.</p>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form-area">
                        <div class="title-text-two">FILL THE FORM</div>
                        <form method="post" action="sendemail.php" id="contact-form">
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="username" placeholder="Name" required>
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>
                                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                    <input type="text" name="subject" placeholder="Website" required>
                                </div>
                                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                    <input type="text" name="phone" placeholder="Phone" required="">
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <textarea placeholder="Message" name="message"></textarea>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <button class="btn-one" type="submit" name="submit-form">Send Message</button>
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
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact section end -->


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