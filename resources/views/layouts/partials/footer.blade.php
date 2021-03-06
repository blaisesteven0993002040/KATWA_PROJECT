            <!-- Footer -->
        <footer class="footer">  
            <div class="footer-widgets">   
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">  
                            <div class="widget widget-text">
                                <img src="{{ 'storage/'.Voyager::setting('school_image') }}" alt="image">
                                <ul>
                                    <li class="address">{{ Voyager::setting('school_location_adress') }}</li>
                                    <li class="phone"><a href="#">{{ Voyager::setting('school_contact_phone') }}</a></li>
                                    <li class="email"><a href="#">{{ Voyager::setting('school_contact_email') }}</a></li>
                                </ul> 
                            </div><!-- /.widget -->      
                        </div>

                        <div class="col-md-3">
                            <div class="widget widget_tweets clearfix">
                                <h5 class="widget-title">User Links</h5>
                                <ul class="link-left">
                                    <li>
                                        <a href="#">About Us</a>
                                    </li>
                                    <li>
                                        <a href="#">Blog</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                    <li>
                                        <a href="#">Courses</a>
                                    </li>
                                    <li>
                                        <a href="#">FAQs</a>
                                    </li>
                                      <li>
                                        <a href="#">Events</a>
                                    </li>
                                </ul>
                                <ul class="link-right">
                                    <li>
                                        <a href="#">Become a Teacher</a>
                                    </li>
                                    <li>
                                        <a href="#">Maintenance</a>
                                    </li>
                                    <li>
                                        <a href="#">Language Packs</a>
                                    </li>
                                    <li>
                                        <a href="#">LearnPress</a>
                                    </li>
                                    <li>
                                        <a href="#">Release Status</a>
                                    </li>
                                </ul>
                            </div><!-- /.widget-recent-tweets -->
                        </div><!-- /.col-md-2 -->

                        <div class="col-md-3">
                            <div class="widget widget_recent-courses">
                                <h5 class="widget-title">Recent Courses</h5>
                                <ul class="recent-courses-news clearfix">
                                    <li>
                                        <div class="thumb">
                                            <img src="images/blog/Footer-02.png" alt="image">
                                        </div>
                                        <div class="text">
                                            <a href="#">UI-UX Designer Courses</a>
                                        </div>
                                        <div class="review-rating">
                                            <ul class="flat-reviews">
                                                <li class="star">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </li>
                                                <li class="star">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </li>
                                                <li class="star">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </li>
                                                <li class="star">
                                                    <a href="#"><i class="fa fa-star-half-o"></i></a>
                                                </li>
                                                 <li class="star">
                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                </li>
                                            </ul>
                                            <p>25 Reviews</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb">
                                            <img src="images/blog/Footer-03.png" alt="image">
                                        </div>
                                        <div class="text">
                                            <a href="#">PHP Shopify Courses</a>
                                        </div>
                                        <div class="review-rating">
                                            <ul class="flat-reviews">
                                                <li class="star">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </li>
                                                <li class="star">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </li>
                                                <li class="star">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </li>
                                                <li class="star">
                                                    <a href="#"><i class="fa fa-star-half-o"></i></a>
                                                </li>
                                                 <li class="star">
                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                </li>
                                            </ul>
                                            <p>25 Reviews</p>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- /.widget-quick-contact -->
                        </div><!-- /.col-md-4-->

                        <div class="col-md-3">
                            <div class="widget widget-quick-contact">
                                <h5 class="widget-title">Quick Contact</h5>
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="flat-contact-form" id="contactform" method="post" action="./contact/contact-process.php">

                                            <input type="email" value="" tabindex="2" placeholder="Your Email" name="email" id="email-contact" required="">
                                           
                                            <textarea class="type-input" tabindex="3" placeholder="Message" name="message" id="message-contact" required=""></textarea> 
                                            
                                            <div class="submit-wrap">
                                            <button class="flat-button bg-orange"><i class="fa fa-long-arrow-right"></i></button>
                                            </div>
                                           
                                        </form><!-- /.comment-form -->     
                                    </div><!-- /.col-md-12 -->
                                </div>
                            </div><!-- /.widget .widget-instagram -->
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.footer-widgets -->
        </footer>
