<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{url('frontend/img/fav.png')}}">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="UTF-8">
    <title>Cartify</title>
    <link rel="stylesheet" href="{{url('frontend/css/linearicons.css')}}"/>
    <link rel="stylesheet" href="{{url('frontend/css/owl.carousel.css')}}"/>
    <link rel="stylesheet" href="{{url('frontend/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{url('frontend/css/themify-icons.css')}}"/>
    <link rel="stylesheet" href="{{url('frontend/css/nice-select.css')}}"/>
    <link rel="stylesheet" href="{{url('frontend/css/nouislider.min.css')}}"/>
    <link rel="stylesheet" href="{{url('frontend/css/bootstrap.css')}}"/>
    <link rel="stylesheet" href="{{url('frontend/css/main.css')}}"/>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>

<body>

    @include('home.header')

	<!-- start banner Area -->
	<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">
					<div class="banner">
						
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
									<h1>Welcome!<br>Get Start Your Favourite Shoping</h1>
									<p>"We're thrilled to have you here. Explore our exclusive collections and discover products that you'll love. Your satisfaction is our priority!.</p>
									<div class="add-bag d-flex align-items-center">
										<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
										<span class="add-text text-uppercase">Add to Bag</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="{{url('frontend/img/banner.png')}}" alt="banner">
								</div>
							</div>
						</div>
						
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- start features Area -->
	<section class="features-area section_gap">
		<div class="container">
			<div class="row features-inner">
				
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="{{url('frontend/img/features/f-icon1.png')}}" alt="">
						</div>
						<h6>Free Delivery</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="{{url('frontend/img/features/f-icon2.png')}}" alt="">
						</div>
						<h6>Return Policy</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="{{url('frontend/img/features/f-icon3.png')}}" alt="">
						</div>
						<h6>24/7 Support</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="{{url('frontend/img/features/f-icon4.png')}}" alt="">
						</div>
						<h6>Secure Payment</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end features Area -->
    <section class="category-area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-12">
					<div class="row">
						<div class="col-lg-8 col-md-8">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="{{url('frontend/img/category/c1.jpg')}}" alt="">
								<a href="{{url('frontend/img/category/c1.jpg')}}" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Sneaker for Sports</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="{{url('frontend/img/category/c2.jpg')}}" alt="">
								<a href="{{url('frontend/img/category/c2.jpg')}}" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Sneaker for Sports</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="{{url('frontend/img/category/c3.jpg')}}" alt="">
								<a href="{{url('frontend/img/category/c3.jpg')}}" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Product for Couple</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-8 col-md-8">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="{{url('frontend/img/category/c4.jpg')}}" alt="">
								<a href="{{url('frontend/img/category/c4.jpg')}}" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Sneaker for Sports</h6>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-deal">
						<div class="overlay"></div>
						<img class="img-fluid w-100" src="{{url('frontend/img/category/c5.jpg')}}" alt="">
						<a href="{{url('frontend/img/category/c5.jpg')}}" class="img-pop-up" target="_blank">
							<div class="deal-details">
								<h6 class="deal-title">Sneaker for Sports</h6>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End category Area -->
    @include('home.product')
    @include('home.exclusive')
    <!-- Start brand Area -->
<section class="brand-area section_gap">
    <div class="container">
        <div class="row">
            <a class="col single-img" href="#">
                <img class="img-fluid d-block mx-auto" src="{{url('frontend/img/brand/1.png')}}" alt="">
            </a>
            <a class="col single-img" href="#">
                <img class="img-fluid d-block mx-auto" src="{{url('frontend/img/brand/2.png')}}" alt="">
            </a>
            <a class="col single-img" href="#">
                <img class="img-fluid d-block mx-auto" src="{{url('frontend/img/brand/3.png')}}" alt="">
            </a>
            <a class="col single-img" href="#">
                <img class="img-fluid d-block mx-auto" src="{{url('frontend/img/brand/4.png')}}" alt="">
            </a>
            <a class="col single-img" href="#">
                <img class="img-fluid d-block mx-auto" src="{{url('frontend/img/brand/5.png')}}" alt="">
            </a>
        </div>
    </div>
</section>
<!-- End brand Area -->

<!-- Start related-product Area -->
<section class="related-product-area section_gap_bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h1>Deals of the Week</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                        <div class="single-related-product d-flex">
                            <a href="#"><img src="{{url('frontend/img/r1.jpg')}}" alt=""></a>
                            <div class="desc">
                                <a href="#" class="title">Black lace Heels</a>
                                <div class="price">
                                    <h6>$189.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                        <div class="single-related-product d-flex">
                            <a href="#"><img src="{{url('frontend/img/r2.jpg')}}" alt=""></a>
                            <div class="desc">
                                <a href="#" class="title">Adidas Techfit Men shirt</a>
                                <div class="price">
                                    <h6>$189.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                        <div class="single-related-product d-flex">
                            <a href="#"><img src="{{url('frontend/img/r3.jpg')}}" alt=""></a>
                            <div class="desc">
                                <a href="#" class="title">bow wrap jumpsuit</a>
                                <div class="price">
                                    <h6>$189.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                        <div class="single-related-product d-flex">
                            <a href="#"><img src="{{url('frontend/img/r5.jpg')}}" alt=""></a>
                            <div class="desc">
                                <a href="#" class="title">tussah playsuit</a>
                                <div class="price">
                                    <h6>$189.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                        <div class="single-related-product d-flex">
                            <a href="#"><img src="{{url('frontend/img/r6.jpg')}}" alt=""></a>
                            <div class="desc">
                                <a href="#" class="title">flat lady shoes</a>
                                <div class="price">
                                    <h6>$189.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                        <div class="single-related-product d-flex">
                            <a href="#"><img src="{{url('frontend/img/r7.jpg')}}" alt=""></a>
                            <div class="desc">
                                <a href="#" class="title">germany football kit</a>
                                <div class="price">
                                    <h6>$189.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-related-product d-flex">
                            <a href="#"><img src="{{url('frontend/img/r9.jpg')}}" alt=""></a>
                            <div class="desc">
                                <a href="#" class="title">Adidas sweatshirt</a>
                                <div class="price">
                                    <h6>$189.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-related-product d-flex">
                            <a href="#"><img src="{{url('frontend/img/r10.jpg')}}" alt=""></a>
                            <div class="desc">
                                <a href="#" class="title">lady black jeans</a>
                                <div class="price">
                                    <h6>$189.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-related-product d-flex">
                            <a href="#"><img src="{{url('frontend/img/r11.jpg')}}" alt=""></a>
                            <div class="desc">
                                <a href="#" class="title">alexander wang shoes</a>
                                <div class="price">
                                    <h6>$189.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ctg-right">
                    <a href="#" target="_blank">
                        <img class="img-fluid d-block mx-auto" src="{{url('frontend/img/category/c5.jpg')}}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End related-product Area -->

@include('home.footer')
<!-- End footer Area -->    
<script src="{{url('frontend/js/vendor/jquery-2.2.4.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="{{url('frontend/js/vendor/bootstrap.min.js')}}"></script>
	<script src="{{url('frontend/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{url('frontend/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{url('frontend/js/jquery.sticky.js')}}"></script>
    <script src="{{url('frontend/js/nouislider.min.js')}}"></script>
	<script src="{{url('frontend/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{url('frontend/js/owl.carousel.min.js')}}"></script>
	<script src="{{url('frontend/js/main.js')}}"></script>
</body>

</html>