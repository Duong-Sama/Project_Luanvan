@extends('master')
@section('menu')
@include('layouts.menu')
@endsection
@section('slider')
@include('layouts.header')
@endsection
@section('content')
 </script>
<section id="page-content" class="page-wrapper">

            <!-- SHOP SECTION START -->
            <div class="shop-section mb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-xs-12">
                            <!-- single-product-area start -->
                            <div class="single-product-area mb-80">
                                <div class="row">
                                    <!-- imgs-zoom-area start -->
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <div class="imgs-zoom-area">
                                            <img id="zoom_03" src="../img/product/{{$data->hinh}}" data-zoom-image="../img/product/{{$data->hinh}}" alt="">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div id="gallery_01" class="carousel-btn slick-arrow-3 mt-30">
                                                        <div class="p-c">
                                                            <a href="#" data-image="../img/product/{{$data->hinh}}" data-zoom-image="../img/product/{{$data->hinh}}">
                                                                <img class="zoom_03" src="../img/product/{{$data->hinh}}" alt="">
                                                            </a>
                                                        </div>
                                                        @foreach($hinhsp as $hsp)
                                                        <div class="p-c">
                                                            <a href="#" data-image="../img/product/slider/{{$hsp->tenhinh}}" data-zoom-image="../img/product/slider/{{$hsp->tenhinh}}">
                                                                <img class="zoom_03" src="../img/product/slider/{{$hsp->tenhinh}}" alt="">
                                                            </a>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- imgs-zoom-area end -->
                                    <!-- single-product-info start -->
                                    <div class="col-md-7 col-sm-7 col-xs-12"> 
                                        <div class="single-product-info">
                                            <h3 class="text-black-1">{{$data->tennhasx}} {{$data->tensp}} </h3>
                                            <!--  hr -->
                                            <hr>
                                            <!-- single-pro-color-rating -->
                                            <div class="single-pro-color-rating clearfix">
                                                <div class="sin-pro-color f-left">
                                                    <p class="color-title f-left">Color</p>
                                                    <div class="widget-color f-left">
                                                        <ul>
                                                            <li class="color-1"><a href="#"></a></li>
                                                            <li class="color-2"><a href="#"></a></li>
                                                            <li class="color-3"><a href="#"></a></li>
                                                            <li class="color-4"><a href="#"></a></li>
                                                        </ul>
                                                    </div>
                                                    <br>
                                                    @if(($data->soluong)>0)
                                                    <p class="color-title f-left"><Strong>Còn Hàng</Strong></p>
                                                     @else
                                                    <p class="color-title f-left"><Strong>Hết Hàng</Strong></p>
                                                     @endif
                                                </div>
                                                <div class="pro-rating sin-pro-rating f-right">
                                                    <a href="#" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="#" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="#" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="#" tabindex="0"><i class="zmdi zmdi-star-half"></i></a>
                                                    <a href="#" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                    <span class="text-black-5">( 50 Rating )</span>
                                                </div>
                                            </div>
                                            <!-- hr -->
                                            <hr>
                                            <!-- plus-minus-pro-action -->
                                            <div class="plus-minus-pro-action clearfix">
                                                <div class="sin-plus-minus f-left clearfix">
                                                    <p class="color-title f-left">SL</p>
                                                    <div class="cart-plus-minus f-left">
                                                        <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                    </div>   
                                                </div>
                                                <div class="sin-pro-action f-right">
                                                    <ul class="action-button">
                                                        <li>
                                                            <a href="#" title="Wishlist" tabindex="0"><i class="zmdi zmdi-favorite"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('view360')}}" data-toggle="modal" target="_blank" title="Xem 360" tabindex="0"><i class="zmdi zmdi-zoom-in"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Compare" tabindex="0"><i class="zmdi zmdi-refresh"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to cart" tabindex="0"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- plus-minus-pro-action end -->
                                            <!-- hr -->
                                            <hr>
                                            <!-- single-product-price -->
                                            <h3 class="pro-price">Giá Tiền: {{number_format($data->gia)}} Đ</h3>
                                            <!--  hr -->
                                            <hr>
                                            <div>
                                                <a href="#" class="button extra-small button-black" tabindex="-1">
                                                    <span class="text-uppercase">Mua Ngay</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-info end -->
                                </div>
                                <!-- single-product-tab -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- hr -->
                                        <hr>
                                        <div class="single-product-tab">
                                            <ul class="reviews-tab mb-20">
                                                <li  class="active"><a href="#description" data-toggle="tab">Mổ tả</a></li>
                                                <li ><a href="#information" data-toggle="tab">Cấu Hình</a></li>
                                                <li ><a href="#360" data-toggle="tab">Ảnh 360</a></li>
                                                <li ><a href="#reviews" data-toggle="tab">Đánh Giá</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="description">
                                                    <p>{{$data->mota1}}</p>
                                                    <p><img src="../img/product/{{$data->hinh1}}" alt=""></p>
                                                    <p>{{$data->mota2}}</p>
                                                    <p><img src="../img/product/{{$data->hinh2}}" alt=""></p>
                                                    <p>{{$data->mota3}}</p>
                                                    <p><img src="../img/product/{{$data->hinh3}}" alt=""></p>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="information">
                                                      <table class="table table-hover">
                                                        <thead>
                                                          <tr>
                                                            <th>Thông Số Kỹ Thuật</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                          <tr>
                                                            <td>Màn Hình</td>
                                                            <td>{{$data->manhinh}}</td>
                                                          </tr>
                                                          <tr>
                                                            <td>Hệ Điều Hành</td>
                                                            <td>{{$data->hdh}}</td>
                                                          </tr>
                                                          <tr>
                                                            <td>Camera</td>
                                                            <td>{{$data->camera}}</td>
                                                          </tr>
                                                          <tr>
                                                            <td>CPU</td>
                                                            <td>{{$data->cpu}}</td>
                                                          </tr>
                                                          <tr>
                                                            <td>RAM</td>
                                                            <td>{{$data->ram}}</td>
                                                          </tr>
                                                          <tr>
                                                            <td>Bộ Nhớ</td>
                                                            <td>{{$data->bonho}}</td>
                                                          </tr>
                                                          <tr>
                                                            <td>Dung Lượng Pin</td>
                                                            <td>{{$data->pin}}</td>
                                                          </tr>
                                                          <tr>
                                                            <td>Công nghệ khác</td>
                                                            <td>{{$data->khac}}</td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="360">
                                                </div>
                                                <a href="" target="_blank" title=""><div role="tabpanel" class="tab-pane" id="reviews"></a>
                                                    <!-- reviews-tab-desc -->
                                                    <div class="reviews-tab-desc">
                                                        <!-- single comments -->
                                                        <div class="media mt-30">
                                                            <div class="media-left">
                                                                <a href="#"><img class="media-object" src="img/author/1.jpg" alt="#"></a>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="clearfix">
                                                                    <div class="name-commenter pull-left">
                                                                        <h6 class="media-heading"><a href="#">Gerald Barnes</a></h6>
                                                                        <p class="mb-10">27 Jun, 2016 at 2:30pm</p>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <ul class="reply-delate">
                                                                            <li><a href="#">Reply</a></li>
                                                                            <li>/</li>
                                                                            <li><a href="#">Delate</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas .</p>
                                                            </div>
                                                        </div>
                                                        <!-- single comments -->
                                                        <div class="media mt-30">
                                                            <div class="media-left">
                                                                <a href="#"><img class="media-object" src="img/author/2.jpg" alt="#"></a>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="clearfix">
                                                                    <div class="name-commenter pull-left">
                                                                        <h6 class="media-heading"><a href="#">Gerald Barnes</a></h6>
                                                                        <p class="mb-10">27 Jun, 2016 at 2:30pm</p>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <ul class="reply-delate">
                                                                            <li><a href="#">Reply</a></li>
                                                                            <li>/</li>
                                                                            <li><a href="#">Delate</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas .</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  hr -->
                                        <hr>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-area end -->
                            <div class="related-product-area">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="section-title text-left mb-40">
                                            <h2 class="uppercase">Sản Phẩm Đánh Giá Cao</h2>
                                            <h6>Những Sản phẩm tốt khuyên dùng</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="active-related-product">
                                         <!-- product-item start -->
                                         @foreach($sanpham as $sp)
                                        <div class="col-xs-12">
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="{{url('sanpham',$sp->masp)}}">
                                                        <img src="../img/product/{{$sp->hinh}}" alt=""/>
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h6 class="product-title">
                                                        <a href="{{url('sanpham',$sp->masp)}}">{{$sp->tensp}}</a>
                                                    </h6>
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                        <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                                    </div>
                                                    <h3 class="pro-price">{{number_format($sp->gia)}} đ</h3>
                                                    <ul class="action-button">
                                                        <li>
                                                            <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-item end -->
                                        @endforeach
                                    </div>   
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-12">
                            <!-- widget-search -->
                            <aside class="widget-search mb-30">
                                <form action="#">
                                    <input type="text" placeholder="Tìm...">
                                    <button type="submit"><i class="zmdi zmdi-search"></i></button>
                                </form>
                            </aside>
                            <!-- widget-categories -->
                            @include('layouts.danhmuc.danhmucsanpham')
                            <!-- operating-system -->
                           
                            <!-- widget-product -->
                            @include('layouts.danhmuc.sanphammorong')
                        </div>
                    </div>
                </div>
            </div>
            <!-- SHOP SECTION END -->             
</section>
@endsection
@section('quickview')
@include('layouts.quickview')
@endsection
@section('footer')
@include('layouts.footer')
@endsection