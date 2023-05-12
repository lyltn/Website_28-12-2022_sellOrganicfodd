@extends('shop')
@section('admin_content')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="resources/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="{{URL::to('/')}}">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <form action="{{url('/update-cart')}}" method="POST">
                    @csrf
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                  
                                </tr>
                            </thead>
                            <tbody>
                               
                                @if(Session::get('cart')==true)
                        <?php
                                $total = 0;
                            ?>
                            
                        @foreach(Session::get('cart') as $key => $cart)
                         <?php
                                $subtotal = $cart['product_price']*$cart['product_qty'];
                                $total+=$subtotal;
                            
                            ?>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="{{asset('public/uploads/product/'.$cart['product_image'])}}" width="90" alt="{{$cart['product_name']}}">
                                        <h5>{{$cart['product_name']}}</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        {{number_format($cart['product_price'],0,',','.')}}đ
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                               <input class="cart_quantity" type="number" min="1" name="cart_qty[{{$cart['session_id']}}]" value="{{$cart['product_qty']}}"  >
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                        {{number_format($subtotal,0,',','.')}}đ
                                    </td>
                                    
                                    <td class="cart_delete">
                                <a class="cart_quantity_delete" href="{{url('/del-product/'.$cart['session_id'])}}"><i class="fa fa-times"></i></a>
                            </td>
                                </tr>
                                @endforeach
                                <tr>
                            <td><input type="submit" value="Cập nhật giỏ hàng" name="update_qty" class="check_out site-btn"></td>
                            <td><a class="btn btn-danger check_out" href="{{url('/del-all-product')}}">Xóa tất cả</a></td>
                            <td>
                                @if(Session::get('coupon'))
                                <a class="btn btn-default check_out" href="{{url('/unset-coupon')}}">Xóa mã khuyến mãi</a>
                                @endif
                            </td>

                            <td colspan="2">
                                @if(Session::get('customer_id'))
                                <a class="primary-btn check_out" href="{{url('/checkout')}}">Đặt hàng</a>
                                @else 
                                <a class="primary-btn check_out" href="{{url('/dang-nhap')}}">Đặt hàng</a>
                                @endif
                                
                            </td>

                            
                            <td colspan="3">
                                <div class="shoping__checkout">
                            <li>Tổng tiền :<span>{{number_format($total,0,',','.')}}đ</span></li>
                            @if(Session::get('coupon'))
                            <li>
                                
                                    @foreach(Session::get('coupon') as $key => $cou)
                                        @if($cou['coupon_condition']==1)
                                            Mã giảm : {{$cou['coupon_number']}} %
                                            <p>
                                                @php 
                                                $total_coupon = ($total*$cou['coupon_number'])/100;
                                                echo '<p><li>Tổng giảm:'.number_format($total_coupon,0,',','.').'đ</li></p>';
                                                @endphp
                                            </p>
                                            <p><li>Tổng đã giảm :{{number_format($total-$total_coupon,0,',','.')}}đ</li></p>
                                        @elseif($cou['coupon_condition']==2)
                                            Mã giảm : {{number_format($cou['coupon_number'],0,',','.')}} k
                                            <p>
                                                @php 
                                                $total_coupon = $total - $cou['coupon_number'];
                                
                                                @endphp
                                            </p>
                                            <p><li>Tổng đã giảm :{{number_format($total_coupon,0,',','.')}}đ</li></p>
                                        @endif
                                    @endforeach
                                


                            </li>
                            @endif 
                        {{--    <li>Thuế <span></span></li>
                            <li>Phí vận chuyển <span>Free</span></li> --}}
                            
                           </div> 
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
                        </table>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="{{URL::to('/')}}" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        <!-- <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Upadate Cart</a> -->
                    </div>
                </div>
                @if(Session::get('cart'))
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Discount Codes</h5>
                           <form method="POST" action="{{url('/check-coupon')}}">
                                @csrf
                                <input type="text" name="coupon" placeholder="Enter your coupon code">
                                <button type="submit" name="check_coupon" value="Tính mã giảm giá" class="site-btn">APPLY COUPON</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endif
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                       <!--  <h5>Cart Total</h5>
                        <ul>
                            <li>Subtotal <span>$454.98</span></li>
                            <li>Total <span>$454.98</span></li>
                        </ul>
                        <a href="#" class="primary-btn">PROCEED TO CHECKOUT</a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->

    @endsection   