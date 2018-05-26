@extends('master')
@section('menu')
@include('layouts.menu')
@endsection
@section('slider')
@include('layouts.header.header2')
@endsection
@section('content')
        <section id="page-content" class="page-wrapper">

            <!-- ABOUT SECTION START -->
            <div class="about-section mb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title text-left ">
                                <h2 class="uppercase">Thông Tin</h2>
                                <h6 class="mb-40">Luận Văn Của Nhóm SV D14_TH03</h6>
                            </div>
                        </div>
                    </div>                    
                    <div class="row">
                        <div class="col-md-5">
                            <div class="about-photo p-20 bg-img-1">
                                <img src="img/team/about.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="about-description mt-50">
                            	<h1>Đề Tài Xậy Dựng Website Bán Hàng Điện Tử Trực Tuyến</h1>
                            	<h2> Đặt vấn đề</h2>
                                <p>Khi truy cập internet là một nhu cầu không thể thiếu của cá nhân mỗi người và các công nghệ phục vụ phát triển cho việc truy cập internet dễ dàng nhanh chóng thuận lợi mọi lúc mọi nơi càng phát triển mạnh thì nhu cầu để mua sắm một thiết bị để truy cập internet là một thứ không thể thiếu như laptop, smartphone, … vốn là những thiết bị được ưa chuộng nhất và một công cụ không thể thiếu trong cuộc sống làm việc và giải trí của từng người. Để gắn với nhu cầu khổng lồ đó thì các dịch vụ mua bán không thể thiếu và phát triển hơn nữa trong thời đại công nghệ 4.0, kinh tế số thì để đáp ứng đủ với mọi người thì mua bán trực tuyến là một phương pháp hàng đầu được đầu tư một cách mạnh mẽ và là lựa chọn số 1 trong cách mở rộng thị trường và tăng doanh thu khi tất cả mọi người chỉ cẩn internet kết nối là có thể mua được hàng với dịch vụ nhanh, bảo mật, tiện lợi và mua ở bất kì đâu.</p>

                                <p>...</p>

                                <p>...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ABOUT SECTION END --> 
            <!-- TEAM SECTION START -->
            <div class="team-section mb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title text-left ">
                                <h2 class="uppercase">Thành Viên</h2>
                                <h6 class="mb-40">Nhóm thực hiện gồm</h6>
                            </div>
                        </div>
                    </div>                
                    <div class="row">
                        <div class="active-team-member">
                            <!-- team-member start -->
                            <div class="col-md-12">
                                <div class="team-member box-shadow bg-shape">
                                    <div class="team-member-photo">
                                        <img src="img/team/duong.png" alt="">
                                    </div>
                                    <div class="team-member-info pt-20">
                                        <h5 class="member-name"><a href="#">Dương Phan</a></h5>
                                        <p class="member-position">Develop Web</p>
                                        <p class="mb-20">Xây dựng giao diện chính, sản phẩm, giỏ hàng,...kèm theo các chức năng </p>
                                        <ul class="footer-social">
                                            <li>
                                                <a class="facebook" href="https://www.facebook.com/s.duongphan" title="Facebook"><i class="zmdi zmdi-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a class="google-plus" href="" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a>
                                            </li>
                                        </ul>                                     
                                    </div>
                                </div>
                            </div>
                            <!-- team-member end -->
                            <!-- team-member start -->
                            <div class="col-md-12">
                                <div class="team-member box-shadow bg-shape">
                                    <div class="team-member-photo">
                                        <img src="img/team/nhan.png" alt="">
                                    </div>
                                    <div class="team-member-info pt-20">
                                        <h5 class="member-name"><a href="#">Trọng Nhân</a></h5>
                                        <p class="member-position">Develop Web</p>
                                        <p class="mb-20">Xậy Dựng Giao Điện Trang Quản Lý, Database,...kèm theo các chức năng</p>
                                        <ul class="footer-social">
                                            <li>
                                                <a class="facebook" href="" title="Facebook"><i class="zmdi zmdi-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a class="google-plus" href="" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a>
                                            </li>
                                        </ul>                                     
                                    </div>
                                </div>
                            </div>
                            <!-- team-member end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- TEAM SECTION END -->             
        </section>
@endsection
@section('footer')
@include('layouts.footer')
@endsection