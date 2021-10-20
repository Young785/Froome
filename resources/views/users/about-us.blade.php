@include('users/includes/header_')
        <main class="main">
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="/"><i class="d-icon-home"></i></a>Home</li>
                        <li>About Us</li>
                    </ul>
                </div>
            </nav>
            <div class="page-header pl-4 pr-4" style="background-image: url(/users/images/page-header/about-us.jpg)">
                <h3 class="page-subtitle font-weight-bold">Welcome to Riode</h3>
                <h1 class="page-title font-weight-bold lh-1 text-white text-capitalize">Our Services</h1>
                <p class="page-desc text-white mb-0">Lorem quis bibendum auctor, nisi elit consequat ipsum,<br> nec
                    sagittis sem nibh id elit.</p>
            </div>
            <div class="page-content mt-10 pt-10">
                <section class="customer-section pb-10 appear-animate">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-7 mb-4">
                                <figure>
                                    <img src="/users/images/subpages/customer.jpg" alt="Happy Customer" width="580"
                                        height="507" class="banner-radius" style="background-color: #BDD0DE;" />
                                </figure>
                            </div>
                            <div class="col-md-5 mb-4">
                                <h5 class="section-subtitle lh-2 ls-md font-weight-normal">02. Happy Customer</h5>
                                <h3 class="section-title lh-1 font-weight-bold">Provide fashionable and<br>qualifed
                                    products</h3>
                                <p class="section-desc text-grey">
                                    Already millions of people are very satisfied by thi.<br>
                                    s page builder and the number is growing more and more. Technolog<br>
                                    developing, requirements are increasing. Riode has brought.
                                </p>
                                <a href="#" class="btn btn-dark btn-link btn-underline ls-m">Visit Our Store<i
                                        class="d-icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Customer Section -->

                <section class="team-section pt-8 mt-10 pb-10 mb-6 appear-animate">
                    <div class="container">
                        <h5 class="section-subtitle lh-2 ls-md font-weight-normal mb-1 text-center">04. Our Leaders</h5>
                        <h3 class="section-title lh-1 font-weight-bold text-center mb-5">Meet our team</h3>
                        <div class="row cols-sm-2 cols-md-4">
                            <div class="member appear-animate" data-animation-options="{'name': 'fadeInLeftShorter'}">
                                <figure class="banner-radius">
                                    <img src="/users/images/subpages/team1.jpg" alt="team member" width="280" height="280"
                                        style="background-color: #EEE;">
                                    <div class="overlay social-links">
                                        <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                                        <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                                        <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                                    </div>
                                </figure>
                                <h4 class="member-name">Tomasz Treflerzan</h4>
                                <h5 class="member-job">Ceo / Founder</h5>
                            </div>
                            <div class="member appear-animate"
                                data-animation-options="{'name': 'fadeInLeftShorter', 'delay': '.3s'}">
                                <figure class="banner-radius">
                                    <img src="/users/images/subpages/team2.jpg" alt="team member" width="280" height="280"
                                        style="background-color: #121A1F;">
                                    <div class="overlay social-links">
                                        <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                                        <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                                        <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                                    </div>
                                </figure>
                                <h4 class="member-name">Dylan Chavez</h4>
                                <h5 class="member-job">Support manager / founder</h5>
                            </div>
                            <div class="member appear-animate"
                                data-animation-options="{'name': 'fadeInLeftShorter', 'delay': '.4s'}">
                                <figure class="banner-radius">
                                    <img src="/users/images/subpages/team3.jpg" alt="team member" width="280" height="280"
                                        style="background-color: #E8E7E3;">
                                    <div class="overlay social-links">
                                        <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                                        <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                                        <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                                    </div>
                                </figure>
                                <h4 class="member-name">Viktoriia Demianenko</h4>
                                <h5 class="member-job">Designer</h5>
                            </div>
                            <div class="member appear-animate"
                                data-animation-options="{'name': 'fadeInLeftShorter', 'delay': '.5s'}">
                                <figure class="banner-radius">
                                    <img src="/users/images/subpages/team4.jpg" alt="team member" width="280" height="280"
                                        style="background-color: #465D7F;">
                                    <div class="overlay social-links">
                                        <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                                        <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                                        <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                                    </div>
                                </figure>
                                <h4 class="member-name">Mikhail Hnatuk</h4>
                                <h5 class="member-job">Support</h5>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Team Section -->
            </div>
        </main>
        <!-- End Main -->
        @include('users/includes/footer')