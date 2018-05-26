@extends('master')
@section('menu')
@include('layouts.menu')
@endsection
@section('slider')
@include('layouts.header')
@endsection
@section('content')
<!--  -->
<link href="personal/css/font.css" rel="stylesheet" type="text/css">
<link href="personal/css/fontello.css" rel="stylesheet" type="text/css">
<link href="personal/css/base.css" rel="stylesheet" type="text/css">
<link href="personal/css/skeleton.css" rel="stylesheet" type="text/css">
<link href="personal/css/main.css" rel="stylesheet" type="text/css">
<link href="personal/css/magnific-popup.css" rel="stylesheet"  />
<link href="personal/css/flexslider.css" rel="stylesheet" />
<!--  -->
<!--  -->
		<section id="about" class="  bgGrey">
		
				
					<!--Container-->
					<div class="container clearfix">
						
						<!--Intro-->
						<div class="one-third column intro">
							<h1>Lịch Sử Mua Hàng</h1>
							<ul>
								<li><span>Mã Đơn Hàng</span> : 123456</li>
								<li><span>Sản Phẩm</span> : S8, S9</li>
								<li><span>Số lượng</span> : 8</li>
								<li><span>Tổng Tiền</span> : 2,000,000 vnd</li>
								<li><span>Tình Trạng</span> : Đã giao</li>
								<li>...</li>
								<hr>
								<li><a href="#" title="" class="btn" data-toggle="modal" data-target="#myModal"><p class="text-uppercase">Xem Thêm</p></a></li>
								  <div class="modal fade" id="myModal" role="dialog">
								    <div class="modal-dialog">
								    
								      <!-- Modal content-->
								      <div class="modal-content">
								        <div class="modal-header">
								          <button type="button" class="close" data-dismiss="modal">&times;</button>
								          <h4 class="modal-title">Đơn Hàng Của Tôi</h4>
								        </div>
								        <div class="modal-body">
								        <!--  -->
										<table class="table table-condensed">
										    <thead>
										      <tr>
										        <th>Mã Đơn Hàng</th>
										        <th>Sản Phẩm</th>
										        <th>Số Lượng</th>
										        <th>Tổng Tiền</th>
										        <th>Tình Trạng</th>
										      </tr>
										    </thead>
										    <tbody>
										      <tr>
										        <td>01</td>
										        <td>ABc Abc</td>
										        <td>8</td>
										        <td>2,000,000</td>
										        <td>Đã Giao</td>
										      </tr>
										    </tbody>
										  </table>        
								        <!--  -->
								        </div>
								        <div class="modal-footer">
								          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								        </div>
								      </div>
								      
								    </div>
								  </div>
							</ul>
						</div>
						<!--End intro-->
						
						<!--Profile-->
						<div class="one-third column profile tCenter">
							<div class="innerProfile">
						<h1 class="prfTitle">Hi! Name member <span>iam member in Electric Zone</span></h1>
						<div class="imgProfile">
							<img width="220" height="200" alt="" src="personal/images/conmeo.jpg">
						</div>
						
						
						
						
						<div class="doubleBtn profileBtn">
						<a class="doubleLeft scroll" href="#portfolio" data-toggle="modal" data-target="#myModal1">Update</a>
						<!-- from update -->
						<div class="modal fade" id="myModal1" role="dialog">
					    <div class="modal-dialog">
					    
					      <!-- Modal content update-->
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title">Chỉnh Sửa Thông Tin Cá Nhân</h4>
					        </div>
					        <div class="modal-body">
					        <!-- content modal1 -->
							<form class="form-inline" action="#">
							    <div class="form-group">
							      <label for="name">Tên 	 :</label>
							      <input type="text" class="form-control" id="name" placeholder="nhập tên của bạn" name="name">
							    </div>
							    <br>
							    <div class="form-group">
							      <label for="name">Ngày Sinh  :</label>
							      <input type="date" class="form-control" id="ngaysinh" placeholder="nhập ngày sinh của bạn" name="ngaysinh">
							    </div>
							    <br>
							  	<div class="form-group">
							      <label for="name">Số Điện Thoại  :</label>
							      <input type="text" class="form-control" id="phone" placeholder="nhập số điện thoại" name="phone">
							    </div>
							    <br>
							   	<div class="form-group">
							      <label for="name">Địa Chỉ  :</label>
							      <input type="text" class="form-control" id="diachi" placeholder="nhập địa chỉ của bạn" name="diachi">
							    </div>
							    <br>
							    <div class="form-group">
							      <label for="pwd">Password:</label>
							      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
							    </div>
							  </form>
					        <!-- end content modal1-->
					        </div>
					        <div class="modal-footer">
					        	<button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
					          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        </div>
					      </div>
					      
					    </div>
					  </div>
						<!-- end form update -->
						<span class="choose"><i>or</i></span>
						<a class="doubleRight scroll" href="#contact">Exit</a>
						</div>
						
						
	
						</div>
						</div>
						<!--End profile-->
						
						<!--Info-->
						<div class="one-third column info">
							<h1>Thông Tin Cá Nhân</h1>
							<ul>
								<li><span>Ngày Sinh</span> : 09/04/1994</li>
								<li><span>Số Điện Thoại</span> : + 123-456-789-456</li>
								<li><span>Email</span> : abc@xyz.com</li>
								<li><span>Giới Tính</span> Nữ</li>
								<li><span>Địa CHỉ</span> : Dong Nai, Viet Nam.</li>
							</ul>
							
							
							<div class="infoSocial">
									<ul>
										<li><a href="#"><i class="icon-twitter"></i></a></li>
										<li><a href="#"><i class="icon-facebook"></i></a></li>
										<li><a href="#"><i class="icon-gplus"></i></a></li>
									</ul>
							</div>
							
							
						</div>
						<!--End info-->	
						
					</div>
					<!--End container-->
			
			
		</section>
<!--  -->
<script src="personal/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="personal/js/jquery-migrate-1.2.1.js" type="text/javascript"></script>
<script src="personal/js/jquery.flexslider-min.js" type="text/javascript"></script>
<script src="personal/js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="personal/js/jquery.smooth-scroll.js" type="text/javascript"></script>
<script src="personal/js/jquery.quicksand.js" type="text/javascript"></script>
<script src="personal/js/modernizr.custom.js" type="text/javascript"></script>
<script src="personal/js/jquery.magnific-popup.js" type="text/javascript"></script>
<script src="personal/js/Placeholders.min.js" type="text/javascript"></script>
<script src="personal/js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
<script src="personal/js/script.js" type="text/javascript"></script>

@endsection
@section('footer')
@include('layouts.footer')
@endsection