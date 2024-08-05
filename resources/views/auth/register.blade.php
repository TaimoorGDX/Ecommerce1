<!-- Start Registration Box Area -->
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
/* Remove the banner area */
.banner-area {
    display: none;
}
.login_box_area {
    padding: 100px;
    margin-left: 80px;
    background: #f9f9f9;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.login_form_inner {
    background: #ffffff;
    border-radius: 10px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
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
.logo {
    position: fixed;
    top: 20px;
    left: 50%;
    transform: translateX(-50%);
    max-width: 150px;
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

.min-vh-100 {
    min-height: 100vh;
}
</style>
<section class="login_box_area section_gap">
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-lg-6">
                <div class="background-image">
                    <img src="{{ asset('frontend/img/logo.png') }}" alt="Logo" class="logo">
                    <div class="login_form_inner">
                        <h3>Create an Account</h3>
                        <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Name" value="{{ old('name') }}" required autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="col-md-12 form-group">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="col-md-12 form-group">
                            <input type="number" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Phone" value="{{ old('phone') }}" required>
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" placeholder="Address" value="{{ old('address') }}" required>
                            @error('address')
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
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required>
                        </div>
                        
                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <input type="checkbox" id="terms" name="terms" required>
                                    <label for="terms">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </label>
                                </div>
                            </div>
                        @endif
                        
                        <div class="col-md-12 form-group">
                            <button type="submit" class="primary-btn">Register</button>
                        </div>
                        
                        <div class="col-md-12 form-group">
                            <a class="btn btn-link" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>
                        </div>
                    </form>
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