<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('resources/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('resources/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('resources/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('resources/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('resources/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('resources/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('resources/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('resources/css/style.css')}}" type="text/css">
    <link href="{{asset('public/frontend/css/sweetalert.css')}}" rel="stylesheet">
    
   

</head>

<body>
    <!-- Page Preloder -->
   <!--  <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="{{asset('resources/img/logo.png')}}" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="{{asset('resources/img/language.png')}}" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./shop-grid.html">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> lyltn.21it@vku.udn.vn</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> lyltn.21it@vku.udn.vn</li>
                                <li>Free Shipping for all Order of $99</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="{{asset('resources/img/language.png')}}" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Spanis</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <?php
                                   $customer_id = Session::get('customer_id');
                                   if($customer_id!=NULL){ 
                                 ?>
                                 <div class="header__top__right__auth">
                                <a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-user"></i> Logout</a>
                                </div>
                                   <?php
                            }else{
                                 ?>
                            <div class="header__top__right__auth">
                                <a href="{{URL::to('/dang-nhap')}}"><i class="fa fa-user"></i> Login</a>

                            </div>
                             <?php 
                             }
                                 ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="{{asset('resources/img/logo.png')}}" alt=""></a>
                    </div>
                </div>
                <!-- hghj -->
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="{{URL::to('/')}}">Home</a></li>
                            <li><a href="#">Shop</a>
                                <ul class="header__menu__dropdown">
                                     @foreach($category as $key => $cate)
                                     <li><a  href="{{URL::to('/danh-muc/'.$cate->slug_category_product)}}">{{$cate->category_name}}</a></li>
                                     @endforeach
                                    
                                </ul>
                            </li>
                            <li><a href="{{URL::to('/blog')}}">Blog</a></li>
                            <li><a href="{{URL::to('/contact')}}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <?php
                        $total = 0;
                        $count = 0;
                        if(Session::get('cart')!=NULL){
                        ?>
                        @foreach(Session::get('cart') as $key => $cart)
                         <?php
                                $subtotal = $cart['product_price']*$cart['product_qty'];
                                $total+=$subtotal;
                                $count+=1;
                            
                            ?>
                            @endforeach
                            <?php } ?>
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                             <?php
                                   $customer_id = Session::get('customer_id');
                                   $shipping_id = Session::get('shipping_id');
                                   if($customer_id!=NULL && $shipping_id==NULL){ 
                                 ?>
                            <li><a href="{{URL::to('/gio-hang')}}"><i class="fa fa-shopping-bag"></i> <span>{{$count}}</span></a></li>
                            <?php
                                 }elseif($customer_id!=NULL && $shipping_id!=NULL){
                                 ?>
                                 <li><a href="{{URL::to('/gio-hang')}}"><i class="fa fa-shopping-bag"></i> <span>{{$count}}</span></a></li>
                              <?php 
                                }else{
                                ?> 
                                 <li><a href="{{URL::to('/dang-nhap')}}"><i class="fa fa-shopping-bag"></i> <span>{{$count}}</span></a></li>
                               <?php
                                 }
                                ?>     

                        </ul>
                        
                        <div class="header__cart__price">item: <span>{{number_format($total,0,',','.')}}đ</span></div>
                         
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Danh mục sản phẩm</span>
                        </div>
                        <ul>
                            @foreach($category as $key => $cate)
                            <li><a href="{{URL::to('/danh-muc/'.$cate->slug_category_product)}}">{{$cate->category_name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="{{URL::to('/tim-kiem')}}" method="POST">
                                {{csrf_field()}}
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" name="keywords_submit" placeholder="What do yo u need?">
                                <button type="submit" name="search_items" value="Tìm kiếm" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="resources/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Checkout</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <div class="shopper-informations">
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click here</a> to enter your code
                    </h6>
                </div>
            </div>
            <div class="checkout__form bill-to">
                <h4>Billing Details</h4>
                
               <form method="POST">
                                    @csrf
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row ">
                                <div class="col-lg-6">

                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text" name="shipping_email" class="shipping_email " placeholder="Điền email">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p> Name<span>*</span></p>
                                        <input type="text" name="shipping_name" class="shipping_name" placeholder="Họ và tên người gửi">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Address<span>*</span></p>
                                 <input type="text" name="shipping_address" class="shipping_address" placeholder="Apartment, suite, unite ect (optinal)">
                            </div>
                            <div class="checkout__input">
                                <p>Phone<span>*</span></p>
                                <input type="text" name="shipping_phone" class="shipping_phone" placeholder="Số điện thoại">
                            </div>
                            <div class="checkout__input">
                                <p>Note<span>*</span></p>
                                <textarea style="    width: 100%;
    height: 46px;
    border: 1px solid #ebebeb;
    padding-left: 20px;
    font-size: 16px;
    color: #b2b2b2;
    border-radius: 4px;" name="shipping_notes" class="shipping_notes checkout__input" placeholder="Ghi chú đơn hàng của bạn" rows="5"></textarea>
                            </div>
                            
                                @if(Session::get('fee'))
                                        <input type="hidden" name="order_fee" class="order_fee" value="{{Session::get('fee')}}">
                                    @else 
                                        <input type="hidden" name="order_fee" class="order_fee" value="10000">
                                    @endif

                                      @if(Session::get('coupon'))
                                        @foreach(Session::get('coupon') as $key => $cou)
                                            <input type="hidden" name="order_coupon" class="order_coupon" value="{{$cou['coupon_code']}}">
                                        @endforeach
                                    @else 
                                        <input type="hidden" name="order_coupon" class="order_coupon" value="no">
                                    @endif
                           
                            <div class="row" style="  background: #f5f5f5; padding: 20px; padding-bottom: 0px;
  ">
                             
                                <div class="col-lg-6">

                              <div class="checkout__input__checkbox">
                                    <label for="payment">
                                        
                                        <select name="payment_select" style="    width: 100%;
    height: 46px;
    border: 1px solid #ebebeb;
    padding-left: 20px;
    font-size: 16px;
    color: #b2b2b2;
    border-radius: 4px;"   class="form-control input-sm m-bot15 payment_select">
                                                    <option value="0">Qua chuyển khoản</option>
                                                    <option value="1">Tiền mặt</option>   
                                            </select>
                                    </label>
                                </div>
                                </div>
                                <div class="col-lg-6">
                                 
                                 <input type="button" value="Xác nhận đơn hàng" name="send_order" class="site-btn  send_order">
                             </div>
                             </div>
                             
                              
                        </div>
 </form>
                        <div class="col-lg-4 col-md-6">
                            <div class="row"></div>
                             <div class="" style="    margin-top: 200px;">
                            <form>
                                    @csrf 
                             
                               <div class="form-group">
                                    <label for="exampleInputPassword1">Chọn thành phố</label>
                                      <select name="city" id="city" class="form-control input-sm m-bot15 choose city">
                                    
                                            <option value="">--Chọn tỉnh thành phố--</option>
                                        @foreach($city as $key => $ci)
                                            <option value="{{$ci->matp}}">{{$ci->name_city}}</option>
                                        @endforeach
                                            
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Chọn quận huyện</label>
                                      <select name="province" id="province" class="form-control input-sm m-bot15 province choose">
                                            <option value="">--Chọn quận huyện--</option>
                                           
                                    </select>
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Chọn xã phường</label>
                                      <select name="wards" id="wards" class="form-control input-sm m-bot15 wards">
                                            <option value="">--Chọn xã phường--</option>   
                                    </select>
                                </div>
                               
                               
                                <input type="button" value="Tính phí vận chuyển" name="calculate_order" class="btn btn-primary btn-sm calculate_delivery" style=" margin-left: 100px;">


                                </form>
                                 </div>
                              
                        </div>
                        </div>
                           @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {!! session()->get('message') !!}
                                </div>
                            @elseif(session()->has('error'))
                                 <div class="alert alert-danger">
                                    {!! session()->get('error') !!}
                                </div>
                            @endif
                    
              
                

                              




            </div>
            <div class="table-responsive cart_info">

                            
                            <table class="table table-condensed">
                                <form action="{{url('/update-cart')}}" method="POST">
                                @csrf
                                <thead>
                                    <tr class="cart_menu">
                                        <td class="image">Hình ảnh</td>
                                        <td class="description">Tên sản phẩm</td>
                                        <td class="price">Giá sản phẩm</td>
                                        <td class="quantity">Số lượng</td>
                                        <td class="total">Thành tiền</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(Session::get('cart')==true)
                                    @php
                                            $total = 0;
                                    @endphp
                                    @foreach(Session::get('cart') as $key => $cart)
                                        @php
                                            $subtotal = $cart['product_price']*$cart['product_qty'];
                                            $total+=$subtotal;
                                        @endphp

                                    <tr>
                                        <td class="cart_product">
                                            <img src="{{asset('public/uploads/product/'.$cart['product_image'])}}" width="90" alt="{{$cart['product_name']}}" />
                                        </td>
                                        <td class="cart_description">
                                            <h4><a href=""></a></h4>
                                            <p>{{$cart['product_name']}}</p>
                                        </td>
                                        <td class="cart_price">
                                            <p>{{number_format($cart['product_price'],0,',','.')}}đ</p>
                                        </td>
                                        <td class="cart_quantity">
                                            <div class="cart_quantity_button">
                                            
                                            
                                                <input class="cart_quantity" type="number" min="1" name="cart_qty[{{$cart['session_id']}}]" value="{{$cart['product_qty']}}"  >
                                            
                                                
                                            </div>
                                        </td>
                                        <td class="cart_total">
                                            <p class="cart_total_price">
                                                {{number_format($subtotal,0,',','.')}}đ
                                                
                                            </p>
                                        </td>
                                        <td class="cart_delete">
                                            <a class="cart_quantity_delete" href="{{url('/del-product/'.$cart['session_id'])}}"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                    
                                    @endforeach
                                    <tr>
                                        <td><input type="submit" value="Cập nhật giỏ hàng" name="update_qty" class="check_out btn btn-default btn-sm"></td>
                                        <td><a class="btn btn-default check_out" href="{{url('/del-all-product')}}">Xóa tất cả</a></td>
                                        <td>
                                            @if(Session::get('coupon'))
                                            <a class="btn btn-default check_out" href="{{url('/unset-coupon')}}">Xóa mã khuyến mãi</a>
                                            @endif
                                        </td>

                                        
                                        <td colspan="2">
                                        <li>Tổng tiền :<span>{{number_format($total,0,',','.')}}đ</span></li>
                                        @if(Session::get('coupon'))
                                        <li>
                                            
                                                @foreach(Session::get('coupon') as $key => $cou)
                                                    @if($cou['coupon_condition']==1)
                                                        Mã giảm : {{$cou['coupon_number']}} %
                                                        <p>
                                                            @php 
                                                            $total_coupon = ($total*$cou['coupon_number'])/100;
                                                        
                                                            @endphp
                                                        </p>
                                                        <p>
                                                        @php 
                                                            $total_after_coupon = $total-$total_coupon;
                                                        @endphp
                                                        </p>
                                                    @elseif($cou['coupon_condition']==2)
                                                        Mã giảm : {{number_format($cou['coupon_number'],0,',','.')}} k
                                                        <p>
                                                            @php 
                                                            $total_coupon = $total - $cou['coupon_number'];
                                                        
                                                            @endphp
                                                        </p>
                                                        @php 
                                                            $total_after_coupon = $total_coupon;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                            
                                            

                                        </li>
                                        @endif

                                        @if(Session::get('fee'))
                                        <li>    
                                            <a class="cart_quantity_delete" href="{{url('/del-fee')}}"><i class="fa fa-times"></i></a>

                                            Phí vận chuyển <span>{{number_format(Session::get('fee'),0,',','.')}}đ</span></li> 
                                            <?php $total_after_fee = $total + Session::get('fee'); ?>
                                        @endif 
                                        <li>Tổng còn:
                                        @php 
                                            if(Session::get('fee') && !Session::get('coupon')){
                                                $total_after = $total_after_fee;
                                                echo number_format($total_after,0,',','.').'đ';
                                            }elseif(!Session::get('fee') && Session::get('coupon')){
                                                $total_after = $total_after_coupon;
                                                echo number_format($total_after,0,',','.').'đ';
                                            }elseif(Session::get('fee') && Session::get('coupon')){
                                                $total_after = $total_after_coupon;
                                                $total_after = $total_after + Session::get('fee');
                                                echo number_format($total_after,0,',','.').'đ';
                                            }elseif(!Session::get('fee') && !Session::get('coupon')){
                                                $total_after = $total;
                                                echo number_format($total_after,0,',','.').'đ';
                                            }

                                        @endphp
                                        </li>
                                        
                                    </td>
                                    </tr>
                                    @else 
                                    <tr>
                                        <td colspan="5"><center>
                                        @php 
                                        echo 'Làm ơn thêm sản phẩm vào giỏ hàng';
                                        @endphp
                                        </center></td>
                                    </tr>
                                    @endif
                                </tbody>

                                

                            </form>
                                @if(Session::get('cart'))
                                <tr><td>

                                        <form method="POST" action="{{url('/check-coupon')}}">
                                            @csrf
                                                <input type="text" class="form-control" name="coupon" placeholder="Nhập mã giảm giá"><br>
                                                <input type="submit" class="site-btn  check_coupon" name="check_coupon" value="Tính mã giảm giá">
                                            
                                            </form>
                                        </td>
                                </tr>
                                @endif

                            </table>

                        </div>
        </div>

    </section>
    </div>
    <!-- Checkout Section End -->

  <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="{{asset('resources/img/logo.png')}}" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: lyltn.21it@vku.udn.vn</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="footer__copyright__payment"><img src="{{asset('resources/img/payment-item.png')}}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{asset('resources/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('resources/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('resources/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('resources/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('resources/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('resources/js/mixitup.min.js')}}"></script>
    <script src="{{asset('resources/js/owl.carousel.min.js')}}"></script>
    <!-- <script src="{{asset('resources/js/alo.js')}}"></script> -->
    <!-- <script src="{{asset('resources/js/main.js')}}"></script> -->


     <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
    <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>


    <script src="{{asset('public/frontend/js/sweetalert.min.js')}}"></script>
   {{--  <script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
    <script>paypal.Buttons().render('body');</script> --}}
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0&appId=2339123679735877&autoLogAppEvents=1"></script>


    <script type="text/javascript">

          $(document).ready(function(){
            $('.send_order').click(function(){
                swal({
                  title: "Xác nhận đơn hàng",
                  text: "Đơn hàng sẽ không được hoàn trả khi đặt,bạn có muốn đặt không?",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Cảm ơn, Mua hàng",

                    cancelButtonText: "Đóng,chưa mua",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function(isConfirm){
                     if (isConfirm) {
                        var shipping_email = $('.shipping_email').val();
                        var shipping_name = $('.shipping_name').val();
                        var shipping_address = $('.shipping_address').val();
                        var shipping_phone = $('.shipping_phone').val();
                        var shipping_notes = $('.shipping_notes').val();
                        var shipping_method = $('.payment_select').val();
                        var order_fee = $('.order_fee').val();
                        var order_coupon = $('.order_coupon').val();
                        var _token = $('input[name="_token"]').val();

                        $.ajax({
                            url: '{{url('/confirm-order')}}',
                            method: 'POST',
                            data:{shipping_email:shipping_email,shipping_name:shipping_name,shipping_address:shipping_address,shipping_phone:shipping_phone,shipping_notes:shipping_notes,_token:_token,order_fee:order_fee,order_coupon:order_coupon,shipping_method:shipping_method},
                            success:function(){
                               swal("Đơn hàng", "Đơn hàng của bạn đã được gửi thành công", "success");
                            }
                        });

                        window.setTimeout(function(){ 
                            location.reload();
                        } ,3000);

                      } else {
                        swal("Đóng", "Đơn hàng chưa được gửi, làm ơn hoàn tất đơn hàng", "error");

                      }
              
                });

               
            });
        });
    

    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.add-to-cart').click(function(){

                var id = $(this).data('id_product');
                // alert(id);
                var cart_product_id = $('.cart_product_id_' + id).val();
                var cart_product_name = $('.cart_product_name_' + id).val();
                var cart_product_image = $('.cart_product_image_' + id).val();
                var cart_product_quantity = $('.cart_product_quantity_' + id).val();
                var cart_product_price = $('.cart_product_price_' + id).val();
                var cart_product_qty = $('.cart_product_qty_' + id).val();
                var _token = $('input[name="_token"]').val();
                if(parseInt(cart_product_qty)>parseInt(cart_product_quantity)){
                    alert('Làm ơn đặt nhỏ hơn ' + cart_product_quantity);
                }else{

                    $.ajax({
                        url: '{{url('/add-cart-ajax')}}',
                        method: 'POST',
                        data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token,cart_product_quantity:cart_product_quantity},
                        success:function(){

                            swal({
                                    title: "Đã thêm sản phẩm vào giỏ hàng",
                                    text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
                                    showCancelButton: true,
                                    cancelButtonText: "Xem tiếp",
                                    confirmButtonClass: "btn-success",
                                    confirmButtonText: "Đi đến giỏ hàng",
                                    closeOnConfirm: false
                                },
                                function() {
                                    window.location.href = "{{url('/gio-hang')}}";
                                });

                        }

                    });
                }

                
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.choose').on('change',function(){
            var action = $(this).attr('id');
            var ma_id = $(this).val();
            var _token = $('input[name="_token"]').val();
            var result = '';

            if(action=='city'){
                result = 'province';
            }else{
                result = 'wards';
            }
            $.ajax({
                url : '{{url('/select-delivery-home')}}',
                method: 'POST',
                data:{action:action,ma_id:ma_id,_token:_token},
                success:function(data){
                   $('#'+result).html(data);     
                }
            });
        });
             $('.set-bg').each(function () {
        var bg = $(this).data('setbg');
        $(this).css('background-image', 'url(' + bg + ')');
    });
        });
          
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.calculate_delivery').click(function(){
                var matp = $('.city').val();
                var maqh = $('.province').val();
                var xaid = $('.wards').val();
                var _token = $('input[name="_token"]').val();
                if(matp == '' && maqh =='' && xaid ==''){
                    alert('Làm ơn chọn để tính phí vận chuyển');
                }else{
                    $.ajax({
                    url : '{{url('/calculate-fee')}}',
                    method: 'POST',
                    data:{matp:matp,maqh:maqh,xaid:xaid,_token:_token},
                    success:function(){
                       location.reload(); 
                    }
                    });
                } 
        });
    });
    </script>
</body>

</html>