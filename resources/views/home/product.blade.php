
	
	<!-- start product Area -->
	<section class="product-area">
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Latest Products</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
								dolore
								magna aliqua.</p>
						</div>
					</div>
				</div>
				<div class="row">
					@foreach($product as $products)
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
						<img class="img-fluid" src="product/{{$products->image}}" alt="" 		style="width: 150px;height: 130px;">
								<div class="product-details">
									<h6>{{$products->title}}</h6>
									<div class="price">
										<h6>${{$products->price}}</h6>
										@if($products->discount_price!=null)
										<h6 class="l-through">${{$products->discount_price}}</h6>
										@endif
									</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a href="" class="social-info"> 
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->

					
					@endforeach

					<span style="padding-top: 10px">
						{!!$product->withQueryString()->links('pagination::bootstrap-5')!!}
					</span>
				</div>
			</div>
		</div> 
		<!-- single product slide -->
		
	</section>
	<!-- end product Area -->
