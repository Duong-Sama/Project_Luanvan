@extends('master')
@section('menu')
@include('layouts.menu')
@endsection
@section('slider')
@include('layouts.header')
@endsection
@section('content')
        <section id="page-content" class="page-wrapper">


                        <div class="about-section mb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title text-left ">
                                <h2 class="uppercase">Chính sách</h2>
                                <h6 class="mb-40">Tất cả chính sách được công bố vì lợi ích phục vụ khách hàng một cách tận tâm nhất</h6>
                            </div>
                        </div>
                    </div>                    
                    <div class="row">
                        <div class="col-md-5">
                            <div class="about-photo p-20 bg-img-1">
                                <img src="img/team/shop.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="about-description mt-50">
                            	<h2>TRUNG TÂM BẢO HÀNH SẢN PHẨM TRÊN TOÀN QUỐC</h2>
                                <p>Electric Zone xin lỗi vì sự cố khiến điện thoại của quý khách bị hỏng và phải đi bảo hành. Electric Zone có 2 hỗ trợ dành riêng cho khách hàng mua điện thoại tại ZE trong thời gian đi bảo hành như sau:

								1. Eletric Zone cung cấp cho khách hàng một điện thoại tương tự (đã qua sử dụng) để khách hàng sử dụng tạm thời trong thời gian bảo hành. Chi tiết máy cung cấp quý khách có thể hỏi nhân viên siêu thị hoặc xem trên giấy tiếp nhận bảo hành/sửa chữa dịch vụ.

								2. Nếu máy gửi đi bảo hành quá 15 ngày hãng bảo hành chưa trả máy cho khách hàng, ZE có thể hỗ trợ khách thu lại máy hỏng với mức giá hỗ trợ (đối với các sản phẩm iPhone sẽ áp dụng theo chính sách của Apple).

								Lưu ý: Chỉ áp dụng thu mua cho điện thoại và phải còn trong điều kiện bảo hành.</p>

                                <p>etc</p>

                                <p>etc.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- GOOGLE MAP SECTION START -->
            <div class="google-map-section">
                <div class="container-fluid">
                    <div class="google-map plr-185">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.95520182126!2d106.67572371452817!3d10.737936192347657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752fad027e3727%3A0x2a77b414e887f86d!2zMTgwIENhbyBM4buXLCBwaMaw4budbmcgNCwgUXXhuq1uIDgsIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1526722136069" width="1479" height="211" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <!-- GOOGLE MAP SECTION END -->
            
            <!-- ADDRESS SECTION START -->
            <div class="address-section mb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 col-xs-12">
                            <div class="contact-address box-shadow">
                                <i class="zmdi zmdi-pin"></i>
                                <h6>180 Cao Lỗ Phường 4 Quận 8 TP Hồ Chí Minh</h6>
                                <h6>Trường Đại Học Công Nghệ Sài Gòn, Khoa Công Nghệ Thông Tin</h6>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <div class="contact-address box-shadow">
                                <i class="zmdi zmdi-phone"></i>
                                <h6>(+84) 971 808096</h6>
                                <h6>(+880) 1666 285440</h6>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <div class="contact-address box-shadow">
                                <i class="zmdi zmdi-email"></i>
                                <h6>duongphan599.31@gmail.com</h6>
                                <h6>nguyentrongnhand14.stu@gmail.com</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ADDRESS SECTION END --> 
            <!-- MESSAGE BOX SECTION START -->
            <div class="message-box-section mt--50 mb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="message-box box-shadow white-bg">
                                <form id="contact-form" action="mail.php" method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="blog-section-title border-left mb-30">Hãy Để Lại Lời Nhắn</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="name" placeholder="Tên của bạn">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="email" placeholder="Email">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="subject" placeholder="Tiêu đề">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="phone" placeholder="Số điện Thoại">
                                        </div>
                                        <div class="col-md-12">
                                            <textarea class="custom-textarea" name="message" placeholder="Lời Nhắn"></textarea>
                                            <button class="submit-btn-1 mt-30 btn-hover-1" type="submit">Gửi</button>
                                        </div>
                                    </div>
                                </form>
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MESSAGE BOX SECTION END --> 
        </section>
@endsection
@section('footer')
@include('layouts.footer')
@endsection