<!-- resources/views/vendor/jetstream/auth/login.blade.php -->
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
<style>

.login_box_area {
    padding: 100px ;
    margin-left: 80px;
    
    background: #f9f9f9;
    display: flex; 
    justify-content: center;
    align-items: center;
    height: 100vh;
}
.logo {
    position: fixed;
    
    left: 50%;
    bottom:80%;
    transform: translateX(-50%);
    max-width: 150px;
}


.login_form_inner {
    background: #ffffff;
    border-radius: 10px;
    
    padding: 40px;
    text-align: center;
    width: 100%;
    max-width: 400px;
}

.login_form_inner h3 {
    margin-bottom: 30px;
    font-size: 24px;
    font-weight: 600;
    color: #333;
}

.form-control {
    border-radius: 0;
    padding: 10px;
    background: #fff;
    border: 1px solid #ddd;
    margin-bottom: 20px;
}

.primary-btn {
    background: linear-gradient(90deg, #ffba00 0%, #ff6c00 100%);
    border: none;
    border-radius: 0;
    color: #fff;
   
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    text-transform: uppercase;
    transition: all 0.3s ease;
    display: block;
    width: 100%;
}

.primary-btn:hover {
    background: #ff6c00;
}

.creat_account label {
    margin: 0;
    color: #333;
    font-size: 14px;
}

.creat_account input[type="checkbox"] {
    margin-right: 10px;
}

.btn-link {
    color: #ff6c00;
    text-decoration: none;
    font-size: 14px;
}

.btn-link:hover {
    color: #ffba00;
    text-decoration: underline;
}

.invalid-feedback {
    display: block;
    color: #e3342f;
    margin-top: -15px;
    margin-bottom: 10px;
}
</style>
</head>

<body>



      <!-- Start Login Box Area -->
      <!-- Start Login Box Area -->
    <section class="login_box_area section_gap">
        <div class="container">
            <div class="row justify-content-center align-items-center min-vh-100">
                <div class="col-lg-6">
                    <div class="background-image">
                        <img src="{{ asset('frontend/img/logo.png') }}" alt="Logo" class="logo">
                    <div class="login_form_inner">
                        <h3>Log in to enter</h3>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Username" value="{{ old('email') }}" required autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <input type="checkbox" id="remember_me" name="remember">
                                    <label for="remember_me">Keep me logged in</label>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="primary-btn">Log In</button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Password?') }}
                                    </a>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
           </div>
        </div>

    </section>
    <!-- End Login Box Area -->
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