@php
    $cats = App\Models\Category::limit(3)->get();
@endphp
<footer class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="row">
                <div class="col-lg-3">
                    <a href="demo14.html" class="logo-footer">
                        <img src="/users/images/demos/demo14/logo.jpeg" alt="logo-footer" width="154"
                            height="43" />
                    </a>
                    <!-- End FooterLogo -->
                </div>
                <div class="col-lg-9">
                    <div class="widget widget-newsletter form-wrapper form-wrapper-inline">
                        <div class="newsletter-info ml-lg-4 mx-auto">
                            <h4 class="widget-title">Subscribe to our Newsletter</h4>
                            <p>Get all the latest information, Sales and Offers.</p>
                        </div>
                        <form action="#" class="input-wrapper input-wrapper-inline">
                            <input type="email" class="form-control" name="email" id="f-email"
                                placeholder="Email address here..." required />
                            <button class="btn btn-primary btn-md ml-2" type="submit">subscribe<i
                                    class="d-icon-arrow-right"></i></button>
                        </form>
                    </div>
                    <!-- End Newsletter -->
                </div>
            </div>
        </div>
        <!-- End FooterTop -->
        <div class="footer-middle">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="widget widget-contact">
                        <h4 class="widget-title ls-normal">Contact Info</h4>
                        <ul class="widget-body">
                            <li>
                                <label>Phone:</label>
                                <a href="tel:#">Toll Free (123) 456-7890</a>
                            </li>
                            <li>
                                <label>Email:</label>
                                <a href="mailto:riode@mail.com">riode@mail.com</a>
                            </li>
                            <li>
                                <label>Address:</label>
                                <a href="#">123 Street, City, England</a>
                            </li>
                            <li>
                                <label>WORKING DAYS / HOURS</label>
                            </li>
                            <li>
                                <a href="#">Mon - Sun / 9:00 AM - 8:00 PM</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Widget -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget ml-lg-4">
                        <h4 class="widget-title">Products</h4>
                        <ul class="widget-body">
                            <li>
                                <a href="/">Home</a>
                            </li>
                            @foreach ($cats as $cat)
                                <li>
                                    <a href="/gifts/{{ $cat->cat_slug}}">{{ $cat->cat_name}}</a>
                                </li>
                            @endforeach
                            <li>
                                <a href="/gifts">All Pakages</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Widget -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget ml-lg-4">
                        <h4 class="widget-title">Fromme Info</h4>
                        <ul class="widget-body">
                            <li>
                                <a href="/about">About Us</a>
                            </li>
                            <li>
                                <a href="/contact">Contact Us</a>
                            </li>
                            <li>
                                <a href="/register">Sign Up</a>
                            </li>
                            <li>
                                <a href="/login">Sign In</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Widget -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget widget-instagram">
                        <h4 class="widget-title">Instagram</h4>
                        <figure class="widget-body row">
                            <div class="col-3">
                                <img src="/users/images/instagram/01.jpg" alt="instagram 1" width="64" height="64" />
                            </div>
                            <div class="col-3">
                                <img src="/users/images/instagram/02.jpg" alt="instagram 2" width="64" height="64" />
                            </div>
                            <div class="col-3">
                                <img src="/users/images/instagram/03.jpg" alt="instagram 3" width="64" height="64" />
                            </div>
                            <div class="col-3">
                                <img src="/users/images/instagram/04.jpg" alt="instagram 4" width="64" height="64" />
                            </div>
                            <div class="col-3">
                                <img src="/users/images/instagram/05.jpg" alt="instagram 5" width="64" height="64" />
                            </div>
                            <div class="col-3">
                                <img src="/users/images/instagram/06.jpg" alt="instagram 6" width="64" height="64" />
                            </div>
                            <div class="col-3">
                                <img src="/users/images/instagram/07.jpg" alt="instagram 7" width="64" height="64" />
                            </div>
                            <div class="col-3">
                                <img src="/users/images/instagram/08.jpg" alt="instagram 8" width="64" height="64" />
                            </div>
                        </figure>
                    </div>
                    <!-- End Instagram -->
                </div>
            </div>
        </div>
        <!-- End FooterMiddle -->
        <div class="footer-bottom">
            <div class="footer-left">
                <figure class="payment">
                    <img src="/users/images/payment.png" alt="payment" width="159" height="29" />
                </figure>
            </div>
            <div class="footer-center">
                <p class="copyright">Riode eCommerce &copy; 2021 -<?php echo date("Y"); ?>. All Rights Reserved</p>
            </div>
            <div class="footer-right">
                <div class="social-links">
                    <a href="#" title="social-link" class="social-link social-facebook fab fa-facebook-f"></a>
                    <a href="#" title="social-link" class="social-link social-twitter fab fa-twitter"></a>
                    <a href="#" title="social-link" class="social-link social-linkedin fab fa-linkedin-in"></a>
                </div>
            </div>
        </div>
        <!-- End FooterBottom -->
    </div>
</footer>
<!-- End Footer -->
</div>
<!-- Sticky Footer -->
<div class="sticky-footer sticky-content fix-bottom">
<a href="demo14.html" class="sticky-link">
    <i class="d-icon-home"></i>
    <span>Home</span>
</a>
<a href="demo14-shop.html" class="sticky-link">
    <i class="d-icon-volume"></i>
    <span>Categories</span>
</a>
<a href="wishlist.html" class="sticky-link">
    <i class="d-icon-heart"></i>
    <span>Wishlist</span>
</a>
<a href="account.html" class="sticky-link">
    <i class="d-icon-user"></i>
    <span>Account</span>
</a>
<div class="dropdown cart-dropdown dir-up">
    <a href="cart.html" class="sticky-link cart-toggle">
        <i class="d-icon-bag"></i>
        <span>Cart</span>
    </a>
    <!-- End of Cart Toggle -->
    <div class="dropdown-box">
        <div class="product product-cart-header">
            <span class="product-cart-counts">2 items</span>
            <span><a href="cart.html">View cart</a></span>
        </div>
        <div class="products scrollable">
            <div class="product product-cart">
                <div class="product-detail">
                    <a href="product.html" class="product-name">Solid Pattern In Fashion Summer Dress</a>
                    <div class="price-box">
                        <span class="product-quantity">1</span>
                        <span class="product-price">$129.00</span>
                    </div>
                </div>
                <figure class="product-media">
                    <a href="#">
                        <img src="/users/images/cart/product-1.jpg" alt="product" width="90" height="90" />
                    </a>
                    <button class="btn btn-link btn-close">
                        <i class="fas fa-times"></i>
                    </button>
                </figure>
            </div>
            <!-- End of Cart Product -->
            <div class="product product-cart">
                <div class="product-detail">
                    <a href="product.html" class="product-name">Mackintosh Poket Backpack</a>
                    <div class="price-box">
                        <span class="product-quantity">1</span>
                        <span class="product-price">$98.00</span>
                    </div>
                </div>
                <figure class="product-media">
                    <a href="#">
                        <img src="/users/images/cart/product-2.jpg" alt="product" width="90" height="90" />
                    </a>
                    <button class="btn btn-link btn-close">
                        <i class="fas fa-times"></i>
                    </button>
                </figure>
            </div>
            <!-- End of Cart Product -->
        </div>
        <!-- End of Products  -->
        <div class="cart-total">
            <label>Subtotal:</label>
            <span class="price">$42.00</span>
        </div>
        <!-- End of Cart Total -->
        <div class="cart-action">
            <a href="checkout.html" class="btn btn-dark"><span>Checkout</span></a>
        </div>
        <!-- End of Cart Action -->
    </div>
    <!-- End of Dropdown Box -->
</div>
</div>
<!-- Scroll Top -->
<a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="d-icon-arrow-up"></i></a>

<!-- MobileMenu -->
<div class="mobile-menu-wrapper">
<div class="mobile-menu-overlay">
</div>
<!-- End Overlay -->
<a class="mobile-menu-close" href="#"><i class="d-icon-times"></i></a>
<!-- End CloseButton -->
<div class="mobile-menu-container scrollable">
    <form action="#" class="input-wrapper">
        <input type="text" class="form-control" name="search" autocomplete="off"
            placeholder="Search your keyword..." required />
        <button class="btn btn-search" type="submit" title="submit-button">
            <i class="d-icon-search"></i>
        </button>
    </form>
    <!-- End Search Form -->
    <div class="tab tab-nav-simple tab-nav-boxed form-tab">
        <ul class="nav nav-tabs nav-fill" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="#menu">Menu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#categories">Categories</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="menu">
                <ul class="mobile-menu mmenu-anim">
                    <li class="active">
                        <a href="demo14.html">Home</a>
                    </li>
                    <li>
                        <a href="demo14-shop.html">Categories</a>
                        <ul>
                            <li>
                                <a href="#">
                                    Variations 1
                                </a>
                                <ul>
                                    <li><a href="shop-banner-sidebar.html">Banner With Sidebar</a></li>
                                    <li><a href="shop-boxed-banner.html">Boxed Banner</a></li>
                                    <li><a href="shop-infinite-scroll.html">Infinite Ajaxscroll</a></li>
                                    <li><a href="shop-horizontal-filter.html">Horizontal Filter</a></li>
                                    <li><a href="shop-navigation-filter.html">Navigation Filter </a></li>

                                    <li><a href="shop-off-canvas.html">Off-Canvas Filter</a></li>
                                    <li><a href="shop-right-sidebar.html">Right Toggle Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    Variations 2
                                </a>
                                <ul>

                                    <li><a href="shop-grid-3cols.html">3 Columns Mode </a></li>
                                    <li><a href="shop-grid-4cols.html">4 Columns Mode</a></li>
                                    <li><a href="shop-grid-5cols.html">5 Columns Mode</a></li>
                                    <li><a href="shop-grid-6cols.html">6 Columns Mode</a></li>
                                    <li><a href="shop-grid-7cols.html">7 Columns Mode</a></li>
                                    <li><a href="shop-grid-8cols.html">8 Columns Mode</a></li>
                                    <li><a href="shop-list-mode.html">List Mode</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="demo14-product.html">Products</a>
                        <ul>
                            <li>
                                <a href="#">Product Pages</a>
                                <ul>
                                    <li><a href="product-simple.html">Simple Product</a></li>
                                    <li><a href="product-featured.html">Featured &amp; On Sale</a></li>
                                    <li><a href="product.html">Variable Product</a></li>
                                    <li><a href="product-variable-swatch.html">Variation Swatch
                                            Product</a></li>
                                    <li><a href="product-grouped.html">Grouped Product </a></li>
                                    <li><a href="product-external.html">External Product</a></li>
                                    <li><a href="product-in-stock.html">In Stock Product</a></li>
                                    <li><a href="product-out-stock.html">Out of Stock Product</a></li>
                                    <li><a href="product-upsell.html">Upsell Products</a></li>
                                    <li><a href="product-cross-sell.html">Cross Sell Products</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Product Layouts</a>
                                <ul>
                                    <li><a href="product-vertical.html">Vertical Thumb</a></li>
                                    <li><a href="product-horizontal.html">Horizontal Thumb</a></li>
                                    <li><a href="product-gallery.html">Gallery Type</a></li>
                                    <li><a href="product-grid.html">Grid Images</a></li>
                                    <li><a href="product-masonry.html">Masonry Images</a></li>
                                    <li><a href="product-sticky.html">Sticky Info</a></li>
                                    <li><a href="product-sticky-both.html">Left & Right Sticky</a></li>
                                    <li><a href="product-left-sidebar.html">With Left Sidebar</a></li>
                                    <li><a href="product-right-sidebar.html">With Right Sidebar</a></li>
                                    <li><a href="product-full.html">Full Width Layout </a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Product Features</a>
                                <ul>
                                    <li><a href="product-sale.html">Sale Countdown</a></li>
                                    <li><a href="product-hurryup.html">Hurry Up Notification </a></li>
                                    <li><a href="product-attribute-guide.html">Attribute Guide </a></li>
                                    <li><a href="product-sticky-cart.html">Add Cart Sticky</a></li>
                                    <li><a href="product-thumbnail-label.html">Labels on Thumbnail</a>
                                    </li>
                                    <li><a href="product-more-description.html">More Description
                                            Tabs</a></li>
                                    <li><a href="product-accordion-data.html">Data In Accordion</a></li>
                                    <li><a href="product-tabinside.html">Data Inside</a></li>
                                    <li><a href="product-video.html">Video Thumbnail </a>
                                    </li>
                                    <li><a href="product-360-degree.html">360 Degree Thumbnail </a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                        <ul>
                            <li><a href="about-us.html">About</a></li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                            <li><a href="account.html">My Account</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                            <li><a href="faq.html">FAQs</a></li>
                            <li><a href="error-404.html">Error 404</a>
                                <ul>
                                    <li><a href="error-404.html">Error 404</a></li>
                                    <li><a href="error-404-1.html">Error 404-1</a></li>
                                    <li><a href="error-404-2.html">Error 404-2</a></li>
                                    <li><a href="error-404-3.html">Error 404-3</a></li>
                                </ul>
                            </li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="blog-classic.html">Blog</a>
                        <ul>
                            <li><a href="blog-classic.html">Classic</a></li>
                            <li><a href="blog-listing.html">Listing</a></li>
                            <li>
                                <a href="#">Grid</a>
                                <ul>
                                    <li><a href="blog-grid-2col.html">Grid 2 columns</a></li>
                                    <li><a href="blog-grid-3col.html">Grid 3 columns</a></li>
                                    <li><a href="blog-grid-4col.html">Grid 4 columns</a></li>
                                    <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Masonry</a>
                                <ul>
                                    <li><a href="blog-masonry-2col.html">Masonry 2 columns</a></li>
                                    <li><a href="blog-masonry-3col.html">Masonry 3 columns</a></li>
                                    <li><a href="blog-masonry-4col.html">Masonry 4 columns</a></li>
                                    <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Mask</a>
                                <ul>
                                    <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                    <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="post-single.html">Single Post</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="element.html">Elements</a>
                        <ul>
                            <li>
                                <a href="#">Elements 1</a>
                                <ul>
                                    <li><a href="element-accordions.html">Accordions</a></li>
                                    <li><a href="element-alerts.html">Alert &amp; Notification</a></li>

                                    <li><a href="element-banner-effect.html">Banner Effect

                                        </a></li>
                                    <li><a href="element-banner.html">Banner
                                        </a></li>
                                    <li><a href="element-blog-posts.html">Blog Posts</a></li>
                                    <li><a href="element-breadcrumb.html">Breadcrumb
                                        </a></li>
                                    <li><a href="element-buttons.html">Buttons</a></li>
                                    <li><a href="element-cta.html">Call to Action</a></li>
                                    <li><a href="element-countdown.html">Countdown
                                        </a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Elements 2</a>
                                <ul>
                                    <li><a href="element-counter.html">Counter </a></li>
                                    <li><a href="element-creative-grid.html">Creative Grid

                                        </a></li>
                                    <li><a href="element-animation.html">Entrance Effect

                                        </a></li>
                                    <li><a href="element-floating.html">Floating

                                        </a></li>
                                    <li><a href="element-hotspot.html">Hotspot

                                        </a></li>
                                    <li><a href="element-icon-boxes.html">Icon Boxes</a></li>
                                    <li><a href="element-icons.html">Icons</a></li>
                                    <li><a href="element-image-box.html">Image box

                                        </a></li>
                                    <li><a href="element-instagrams.html">Instagrams</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="#">Elements 3</a>
                                <ul>

                                    <li><a href="element-categories.html">Product Category</a></li>
                                    <li><a href="element-products.html">Products</a></li>
                                    <li><a href="element-product-banner.html">Products + Banner

                                        </a></li>
                                    <li><a href="element-product-grid.html">Products + Grid

                                        </a></li>
                                    <li><a href="element-product-single.html">Product Single

                                        </a>
                                    </li>
                                    <li><a href="element-product-tab.html">Products + Tab

                                        </a></li>
                                    <li><a href="element-single-product.html">Single Product

                                        </a></li>
                                    <li><a href="element-slider.html">Slider

                                        </a></li>
                                    <li><a href="element-social-link.html">Social Icons </a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Elements 4</a>
                                <ul>
                                    <li><a href="element-subcategory.html">Subcategory

                                        </a></li>
                                    <li><a href="element-svg-floating.html">Svg Floating

                                        </a></li>
                                    <li><a href="element-tabs.html">Tabs</a></li>
                                    <li><a href="element-testimonials.html">Testimonials
                                        </a></li>
                                    <li><a href="element-titles.html">Title</a></li>
                                    <li><a href="element-typography.html">Typography</a></li>
                                    <li><a href="element-vendor.html">Vendor

                                        </a></li>
                                    <li><a href="element-video.html">Video

                                        </a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="https://d-themes.com/buynow/riodehtml">Buy Riode!</a></li>
                </ul>
            </div>
            <div class="tab-pane" id="categories">
                <ul class="mobile-menu mmenu-anim">
                    <li><a href="demo14-shop.html" class="menu-title">Browse Our Categories</a></li>
                    <li>
                        <a href="demo14-shop.html"><i class="d-icon-camera1"></i>Electronics</a>
                    </li>
                    <li>
                        <a href="demo14-shop.html"><i class="d-icon-officebag"></i>Backpacks &amp;
                            Fashion bags</a>
                    </li>
                    <li>
                        <a href="demo14-shop.html"><i class="d-icon-gamepad1"></i>Gaming &amp;
                            Accessories
                        </a>
                    </li>
                    <li>
                        <a href="demo14-shop.html">
                            <i class="d-icon-t-shirt1"></i>Travel &amp; Clothing</a>
                    </li>
                    <li>
                        <a href="demo14-shop.html"><i class="d-icon-desktop"></i>Computer
                        </a>
                    </li>
                    <li>
                        <a href="demo14-shop.html"><i class="d-icon-cook"></i>Home &amp; Kitchen</a>
                    </li>
                    <li>
                        <a href="demo14-shop.html">
                            <i class="d-icon-card"></i>Backpacks &amp; Fashion bags
                        </a>
                    </li>
                    <li>
                        <a href="demo14-shop.html">
                            <i class="d-icon-card"></i>Daily Deals
                        </a>
                    </li>
                    <li>
                        <a href="demo14-shop.html">
                            <i class="d-icon-basketball1"></i>Sporting Goods
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End MobileMenu -->
    <!-- End MobileMenu -->
</div>
</div>

<!-- newsletter-popup type3 -->
<div class="newsletter-popup newsletter-pop3 mfp-hide" id="newsletter-popup">
<div class="newsletter-content">
    <h2 class="font-weight-bolder text-uppercase">Newsletter Sign up</h2>
    <p class="text-grey">Exclusive access to weekly drops, new arrivals & events.
        Get latest fashion updates & offers.</p>
    <form action="#" method="get" class="input-wrapper input-wrapper-inline input-wrapper-round">
        <input type="email" class="form-control email" name="email" id="email2"
            placeholder="Email address here..." required="">
        <button class="btn btn-dark text-uppercase" type="submit">Sign me up</button>
    </form>
    <div class="d-flex form-check">
        <div class="form-checkbox justify-content-center">
            <input type="checkbox" class="custom-checkbox" id="hide-newsletter-popup"
                name="hide-newsletter-popup" required />
            <label for="hide-newsletter-popup">Don't show this popup again</label>
        </div>
        <a href="#" class="form-privacy">
            Privacy Policy
        </a>
    </div>
</div>
</div>


<!-- sticky icons-->
<div class="sticky-icons-wrapper">
<div class="sticky-icon-links">
    <ul>
        <li><a href="#" class="demo-toggle"><i class="fas fa-home"></i><span>Demos</span></a></li>
        <li><a href="documentation.html"><i class="fas fa-info-circle"></i><span>Documentation</span></a>
        </li>
        <li><a href="https://themeforest.net/downloads/"><i class="fas fa-star"></i><span>Reviews</span></a>
        </li>
        <li><a href="https://d-themes.com/buynow/riodehtml"><i class="fas fa-shopping-cart"></i><span>Buy
                    now!</span></a></li>
    </ul>
</div>
<div class="demos-list">
    <div class="demos-overlay"></div>
    <a class="demos-close" href="#"><i class="close-icon"></i></a>
    <div class="demos-content scrollable scrollable-light">
        <h3 class="demos-title">Demos</h3>
        <div class="demos">
        </div>
    </div>
</div>
</div>
<!-- Plugins JS File -->
<script src="/users/vendor/jquery/jquery.min.js"></script>
<script src="/users/vendor/elevatezoom/jquery.elevatezoom.min.js"></script>
<script src="/users/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<script src="/users/vendor/owl-carousel/owl.carousel.min.js"></script>
<script src="/users/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="/users/vendor/isotope/isotope.pkgd.min.js"></script>
<script src="/users/vendor/sticky/sticky.min.js"></script>
<!-- Main JS File -->
<script src="/users/js/main.min.js"></script>
</body>
</html>