<!DOCTYPE html>
<html xmlns:th="https://www.thymeleaf.org" lang="en"></html>
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


        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Enter your email</h2>
                        <form  class="register-form"  action="{{URL::to('/createnewpass')}}" method="POST">
                             {{csrf_field()}}
                             <?php
    $message = Session::get('mess');
    if($message){
        echo '<span class="text-alert">'.$message.'</span>';
        Session::put('mess',null);
    }
    ?>
                        
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email"  name="email" id="email" placeholder="Your Email"/>
                            </div>
         
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="ok"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img style="height: 223px;" src="resources/sign/images/signup-image.jpg" alt="sing up image"></figure>
                  
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