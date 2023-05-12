<!DOCTYPE html>
<html xmlns:th="https://www.thymeleaf.org" lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="resources/sign/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="resources/sign/css/style.css">
</head>
<body>

    <div class="main">

          <!-- Sing in  Form -->
          <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="resources/sign/images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="{{URL::to('/trang-chu')}}" class="signup-image-link">Home</a>
                    </div>


                    <div class="signin-form">
                        <h2 class="form-title">Sign in</h2>
                        
                            <form  class="register-form" id="login-form" action="{{URL::to('/login-customer')}}" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="your_email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email_account" id="your_name" placeholder="Email"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password_account"  id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="label-agree-term"><span><span></span></span > <a href="{{URL::to('/forgetpass')}}" class="signup-image-link" style="text-align: justify">Forgot password</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit"  id="signin" class="form-submit" />
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <h2 class="form-title" style="text-align: center;">Or</h2>

         <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                       
                            <form class="register-form" action="{{URL::to('/add-customer')}}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text"  name="customer_name"   id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email"  name="customer_email"  id="email" placeholder="Your Email"/>
                            </div>
                          
                            
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="customer_password"  id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="customer_phone"  id="username"    placeholder="Your Phone" />
                            </div>
                            
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                           
                            <div class="form-group form-button">
                                <input type="submit"class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="resources/sign/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="{{URL::to('/trang-chu')}}" class="signup-image-link">Home</a>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="resources/sign/vendor/jquery/jquery.min.js"></script>
    <script src="resources/sign/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>