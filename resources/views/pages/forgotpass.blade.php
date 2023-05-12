<?php
namespace resources\views\pages;
use Session;
session_start();
?>
<div style="border: groove; margin: 50px 300px; text-align: center;     font-family: fangsong;">
	<h2 style="font-size: 50px;">forgot password: {{$name}}</h2>
	<p style="font-size: 23px;">Mã xác nhận để tạo mật khẩu mới của bạn là: </p>
	<p style="color: blue; font-size: 33px;" >

		<?php
		$a = mt_rand(10000, 99999);
		Session::put('code',$a);
		 echo $a; 

	?></p>
</div>