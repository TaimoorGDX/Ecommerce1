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
    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Order Tracking</h1>
                    <nav class="d-flex align-items-center">
                        <a href="{{url('/')}}">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="{{url('/category')}}">Fashon Category</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--Tracking Box Area -->
    <section class="tracking_box_area section_gap">
        <div class="container">
            <div class="tracking_box_inner">
                <p>To track your order please enter your Order ID in the box below and press the "Track" button. This
                    was given to you on your receipt and in the confirmation email you should have received.</p>
                <form class="row tracking_form" action="#" method="post" novalidate="novalidate">
                    <div class="col-md-12 form-group">
                        <input type="text" class="form-control" id="order" name="order" placeholder="Order ID" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Order ID'">
                    </div>
                    <div class="col-md-12 form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Billing Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Billing Email Address'">
                    </div>
                    <div class="col-md-12 form-group">
                        <button type="submit" value="submit" class="primary-btn">Track Order</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--End Tracking Box Area -->
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