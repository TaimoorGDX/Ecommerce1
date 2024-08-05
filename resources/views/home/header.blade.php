<!-- Start Header Area -->
<header class="header_area sticky-header">
	<div class="main_menu">
		<nav class="navbar navbar-expand-lg navbar-light main_box">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<a class="navbar-brand logo_h" href="{{url('/')}}"><img src="{{url('frontend/img/logo.png')}}" alt=""></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
					<ul class="nav navbar-nav menu_nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="{{url('/')}}">Home</a></li>
						<li class="nav-item submenu dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
							 aria-expanded="false">Shop</a>
							<ul class="dropdown-menu">
								<li class="nav-item"><a class="nav-link" href="{{url('/category')}}">Shop Category</a></li>
								<li class="nav-item"><a class="nav-link" href="{{url('/single_product')}}">Product Details</a></li>
								<li class="nav-item"><a class="nav-link" href="{{url('/checkout')}}">Product Checkout</a></li>
								<li class="nav-item"><a class="nav-link" href="{{url('/cart')}}">Shopping Cart</a></li>
								<li class="nav-item"><a class="nav-link" href="{{url('/confirmation')}}">Confirmation</a></li>
							</ul>
						</li>

						<li class="nav-item submenu dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
							 aria-expanded="false">Pages</a>
							<ul class="dropdown-menu">
								<li class="nav-item"><a class="nav-link" href="{{url('/login')}}">Login</a></li>
								<li class="nav-item"><a class="nav-link" href="{{url('/registration')}}">Registration</a></li>
								<li class="nav-item"><a class="nav-link" href="{{url('/tracking')}}">Tracking</a></li>
								
							</ul>
						</li>
						<li class="nav-item active"><a class="nav-link" href="{{url('/contact')}}">Contact</a></li>
						
						

						<li class="nav-item submenu dropdown">
							
							<select id="location">
								
								<option value="us">United States</option>
								<option value="uk">United Kingdom</option>
								<option value="ca">Canada</option>
								<option value="au">Australia</option>
								<option value="au">India</option>
								<option value="au">Pakistan</option>
								<option value="au">China</option>
								<option value="au">Dubai</option>
							</select>
						</li>
						@if (Route::has('login'))
						@auth
						<li class="nav-item active" style="padding-top: 4px;"><x-app-layout>
    
						</x-app-layout></li>
						@else
						<li class="nav-item active"><a class="btn btn-primary" id="logincss"  href="{{ route('login') }}">Login</a></li>
						<li class="nav-item active"><a class="btn btn-primary" id="registercss"  href="{{ route('register') }}">Register</a></li>
						@endauth
						@endif
						


					</ul>
					
					<ul class="nav navbar-nav navbar-right">
						<li class="nav-item"><a href="{{url('/cart')}}" class="cart"><span class="ti-bag"></span></a></li>
						<li class="nav-item">
							<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
	<div class="search_input" id="search_input_box">
		<div class="container">
			<form class="d-flex justify-content-between">
				<input type="text" class="form-control" id="search_input" placeholder="Search Here">
				<button type="submit" class="btn"></button>
				<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
			</form>
		</div>
	</div>
</header>

	<!-- End Header Area -->

