@include('users/includes/header_')
        <main class="main">
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="/"><i class="d-icon-home"></i></a>Home</li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </nav>
            <div class="page-header" style="background-image: url(/users/images/page-header/contact-us.jpg)">
                <h1 class="page-title font-weight-bold text-capitalize ls-l">Contact Us</h1>
            </div>
            <div class="page-content mt-10 pt-7">
                <section class="contact-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-6 ls-m mb-4">
                                <div class="grey-section d-flex align-items-center h-100">
                                    <div>
                                        <h4 class="mb-2 text-capitalize">Headquarters</h4>
                                        <p>1600 Amphitheatre Parkway<br>New York WC1 1BA</p>

                                        <h4 class="mb-2 text-capitalize">Phone Number</h4>
                                        <p>
                                            <a href="tel:#">1.800.458.56</a><br>
                                            <a href="tel:#">1.800.458.56</a>
                                        </p>

                                        <h4 class="mb-2 text-capitalize">Support</h4>
                                        <p class="mb-4">
                                            <a href="#">support@your-domain.com</a><br>
                                            <a href="#">help@your-domain.com</a><br>
                                            <a href="#">Sale</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-6 d-flex align-items-center mb-4">
                                <div class="w-100">
                                    <form class="pl-lg-2" action="#">
                                        <h4 class="ls-m font-weight-bold">Let’s Connect</h4>
                                        <p>Your email address will not be published. Required fields are
                                            marked *</p>
                                        <div class="row mb-2">
                                            <div class="col-12 mb-4">
                                                <textarea class="form-control" required
                                                    placeholder="Comment*"></textarea>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <input class="form-control" type="text" placeholder="Name *" required>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <input class="form-control" type="email" placeholder="Email *" required>
                                            </div>
                                        </div>
                                        <button class="btn btn-dark btn-rounded">Post Comment<i
                                                class="d-icon-arrow-right"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End About Section-->
            </div>
        </main>
        <!-- End Main -->
@include('users/includes/footer')