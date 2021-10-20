@include('users/includes/header')
		<main class="main shop">
			<div class="page-content">
				<div class="container">
					<div class="row mb-10 pb-2">
						<aside class="col-xl-3 col-lg-4 sidebar sidebar-fixed sticky-sidebar-wrapper">
							<div class="sidebar-overlay">
								<a class="sidebar-close" href="#"><i class="d-icon-times"></i></a>
							</div>
							<a href="#" class="sidebar-toggle"><i class="fas fa-chevron-right"></i></a>
							<div class="sidebar-content">
								<div class="sticky-sidebar pb-8" data-sticky-options="{'top': 67}">
									<div class="banner banner-newsletter mb-4">
										<div class="banner-content text-center">
											<p class="banner-subtitle">Premium Brand</p>
											<h3 class="banner-title">Sale</h3>
											<form action="#" class="">
												<input type="email" class="form-control" name="email" id="h-email"
													placeholder="Email address here..." required />
												<button class="btn btn-dark" type="submit">Subscribe<i
														class="d-icon-arrow-right"></i></button>
											</form>
										</div>
									</div>
									<div class="banner banner-fixed banner-sale mb-4" style="background-color: #333359">
										<figure>
											<img src="/users/images/demos/demo14/banner/4.jpg" width="280" height="312"
												alt="banner" />
										</figure>
										<div class="banner-content w-100">
											<h4 class="banner-subtitle mb-2 text-uppercase text-white">Special Offer
											</h4>
											<h3 class="banner-title text-white mb-4">
												Black Friday Sale</h3>
											<a href="demo14-shop.html" class="btn btn-link btn-underline btn-white">Shop
												Now<i class="d-icon-arrow-right"></i></a>
										</div>
									</div>
									<div class="widget widget-posts">
										<h4 class="widget-title">Latest Blog</h4>
										<div class="widget-body">
											<div class="owl-carousel owl-nav-top" data-owl-options="{
                                                'items': 1,
                                                'nav': false,
                                                'dots': false
                                            }">
												<div class="post-col">
													<div class="post post-list-sm">
														<figure class="post-media">
															<a href="post-single.html">
																<img src="/users/images/demos/demo14/blog/1.jpg" width="84"
																	height="84" alt="post" />
															</a>
														</figure>
														<div class="post-details">
															<div class="post-meta">
																<a href="#" class="post-date">September 11, 2020</a>
															</div>
															<h4 class="post-title"><a href="post-single.html">Inside out
																	trucker jacket in indigo stone</a></h4>
														</div>
													</div>
													<div class="post post-list-sm">
														<figure class="post-media">
															<a href="post-single.html">
																<img src="/users/images/demos/demo14/blog/2.jpg" width="84"
																	height="84" alt="post" />
															</a>
														</figure>
														<div class="post-details">
															<div class="post-meta">
																<a href="#" class="post-date">September 11, 2020</a>
															</div>
															<h4 class="post-title"><a href="post-single.html">Frame knit
																	cap in Navy</a></h4>
														</div>
													</div>
													<div class="post post-list-sm">
														<figure class="post-media">
															<a href="post-single.html">
																<img src="/users/images/demos/demo14/blog/3.jpg" width="84"
																	height="84" alt="post" />
															</a>
														</figure>
														<div class="post-details">
															<div class="post-meta">
																<a href="#" class="post-date">September 11, 2020</a>
															</div>
															<h4 class="post-title"><a href="post-single.html">Narrow
																	jeans in blue moonlight</a></h4>
														</div>
													</div>
												</div>
												<div class="post-col">
													<div class="post post-list-sm">
														<figure class="post-media">
															<a href="post-single.html">
																<img src="/users/images/demos/demo14/blog/1.jpg" width="84"
																	height="84" alt="post" />
															</a>
														</figure>
														<div class="post-details">
															<div class="post-meta">
																<a href="#" class="post-date">Feb 11, 2020</a>
															</div>
															<h4 class="post-title"><a href="post-single.html">Inside out
																	trucker jacket in indigo stone</a></h4>
														</div>
													</div>
													<div class="post post-list-sm">
														<figure class="post-media">
															<a href="post-single.html">
																<img src="/users/images/demos/demo14/blog/2.jpg" width="84"
																	height="84" alt="post" />
															</a>
														</figure>
														<div class="post-details">
															<div class="post-meta">
																<a href="#" class="post-date">Jan 11, 2020</a>
															</div>
															<h4 class="post-title"><a href="post-single.html">Frame knit
																	cap in Navy</a></h4>
														</div>
													</div>
													<div class="post post-list-sm">
														<figure class="post-media">
															<a href="post-single.html">
																<img src="/users/images/demos/demo14/blog/3.jpg" width="84"
																	height="84" alt="post" />
															</a>
														</figure>
														<div class="post-details">
															<div class="post-meta">
																<a href="#" class="post-date">Feb 11, 2020</a>
															</div>
															<h4 class="post-title"><a href="post-single.html">Narrow
																	jeans in blue moonlight</a></h4>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</aside>
						<div class="col-xl-9 col-lg-8">
							<div class="shop-banner banner"
								style="background-image: url('/users/images/demos/demo14/shop-banner.jpg'); background-color: #f2f2f3;">
								<div class="banner-content">
									<h1 class="banner-title text-uppercase font-weight-bold ls-m">{{ $cates->cat_name}}</h1>
									<p class="font-primary lh-1 ls-m mb-0">{{ count($products)}} Products</p>
								</div>
							</div>
							<nav class="toolbox toolbox-horizontal sticky-toolbox sticky-content fix-top">
								<aside class="top-sidebar sidebar-fixed shop-sidebar">
									<div class="sidebar-overlay">
										<a class="sidebar-close" href="#"><i class="d-icon-times"></i></a>
									</div>
									<div class="sidebar-content toolbox-left">
										<div class="toolbox-item select-menu">
											<a class="select-menu-toggle" href="#">Select Size</a>
											<ul class="filter-items">
												<li><a href="#">Small</a></li>
												<li><a href="#">Medium</a></li>
												<li><a href="#">Large</a></li>
												<li><a href="#">Extra Large</a></li>
											</ul>
										</div>
										<div class="toolbox-item select-menu">
											<a class="select-menu-toggle" href="#">Select Color</a>
											<ul class="filter-items">
												<li><a href="#">Black</a></li>
												<li><a href="#">Blue</a></li>
												<li><a href="#">Green</a></li>
											</ul>
										</div>
										<div class="toolbox-item select-menu">
											<a class="select-menu-toggle" href="#">Select Price</a>
											<ul class="filter-items">
												<li><a href="#">$0.00 - $50.00</a></li>
												<li><a href="#">$50.00 - $100.00</a></li>
												<li><a href="#">$100.00 - $200.00</a></li>
												<li><a href="#">$200.00+</a></li>
											</ul>
										</div>
									</div>
								</aside>
								<div class="toolbox-left">
									<a href="#"
										class="toolbox-item top-sidebar-toggle btn btn-sm btn-outline btn-primary btn-rounded btn-icon-right d-lg-none">
										Filter<i class="d-icon-arrow-right"></i></a>
									<div class="toolbox-item toolbox-sort select-menu">
										<select name="orderby" class="form-control">
											<option value="default" selected="selected">Default Sorting</option>
											<option value="popularity">Most Popular</option>
											<option value="rating">Average rating</option>
											<option value="date">Latest</option>
											<option value="price-low">Sort forward price low</option>
											<option value="price-high">Sort forward price high</option>
											<option value="">Clear custom sort</option>
										</select>
									</div>
								</div>
								<div class="toolbox-right mr-0">
									<div class="toolbox-item toolbox-show select-box">
										<label>Show :</label>
										<select name="count" class="form-control">
											<option value="12">12</option>
											<option value="24">24</option>
											<option value="36">36</option>
										</select>
									</div>
									<div class="toolbox-item toolbox-layout">
										<a href="shop-list-mode.html" class="d-icon-mode-list btn-layout"></a>
										<a href="shop.html" class="d-icon-mode-grid btn-layout active"></a>
									</div>
								</div>
							</nav>
							<div class="select-items">
								<a href="#" class="filter-clean text-primary">Clean All</a>
							</div>
							<div class="row cols-2 cols-sm-3 product-wrapper">
								@if ($products == null)
									@foreach ($products as $item)
										<div class="product product-classic">
											<figure class="product-media">
												<a href="demo14-product.html">
													<img src="/users/images/demos/demo14/products/1-1.jpg" alt="product" width="300"
														height="338">
													<img src="/users/images/demos/demo14/products/1-2.jpg" alt="product" width="300"
														height="338">
												</a>
											</figure>
											<div class="product-details">
												<h3 class="product-name">
													<a href="demo14-product.html">{{ $item->product_name}}</a>
												</h3>
												<div class="product-price">
													<span class="price">{{ $item->product_product}}</span>
												</div>
												<div class="ratings-container">
													<div class="ratings-full">
														<span class="ratings" style="width:100%"></span>
														<span class="tooltiptext tooltip-top"></span>
													</div>
												</div>
												<div class="product-action">
													<a href="#" class="btn-product btn-cart" data-toggle="modal"
														data-target="#addCartModal" title="Add to cart"><i
															class="d-icon-bag"></i><span>Add to cart</span></a>
													<a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
															class="d-icon-heart"></i></a>
													<a href="#" class="btn-product-icon btn-quickview" title="Quick View"><i
															class="d-icon-search"></i></a>
												</div>
											</div>
										</div>
									@endforeach
									@else
								@endif
							</div>
							<nav class="toolbox toolbox-pagination">
								<p class="show-info">Showing <span>12 of 56</span> Products</p>
								<ul class="pagination">
									<li class="page-item disabled">
										<a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1"
											aria-disabled="true">
											<i class="d-icon-arrow-left"></i>Prev
										</a>
									</li>
									<li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a>
									</li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item page-item-dots"><a class="page-link" href="#">6</a></li>
									<li class="page-item">
										<a class="page-link page-link-next" href="#" aria-label="Next">
											Next<i class="d-icon-arrow-right"></i>
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
			
		</main>
		<!-- End Main -->
@include('users/includes/footer')