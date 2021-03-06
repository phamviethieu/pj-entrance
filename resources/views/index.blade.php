@extends('master.master')
@section('title','Đây là index')
@section('content')
<!-- slider -->
<div class="slider">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 slider" src="{{asset('img/slide/slide.png')}}"alt="First slide">
                <div class="container">


                    <div class="carousel-caption d-none d-md-block l-align">

                        <p>Cách mạng công nghiệp 4.0<br> "Cùng <span style="color:#22003c"><b>KHOA ĐIỆN TỬ THÔNG TIN - ĐẠI HỌC MỞ HÀ NỘI </b></span>"<br>
                            <small>Đăng nhập hoặc đăng ký tại đây:</small>
                        </p>
                        <button type="button" class="btn btn-success btn-login" data-toggle="modal" data-target="#myModal">Đăng nhập</button> &nbsp; hoặc &nbsp;
                        <button type="button" class="btn btn-danger">Đăng ký</button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 slider" src="{{asset('img/slide/slide2.png')}}" alt="Second slide">

                <div class="carousel-caption d-none d-md-block caption-white">

                    <div class="container">
                        <h5><span style="padding:0.2em; background-color:#d05858;"></span> &nbsp TUYỂN SINH! </h5>
                        <p><span style="background-color: #4028c14f; padding:0.2em">2020 - 2021 </span><br> Kỷ nguyên công nghệ 4.0<br> Đăng ký tư vấn chọn ngành phù hợp ngay!<br>
                            <br>
                            <button type="button" class="btn btn-danger">ĐĂNG KÝ TƯ VẤN</button>
                        </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 slider" src="{{asset('img/slide/slide3.jpg')}}" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <div class="container">
                        <!--code content here-->
                    </div>

                </div>
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!-- end-slider -->

</div>
<!-- end head -->

<div class="container">
    <div class="title">
        <h5>VÌ SAO NÊN CHỌN KHOA ĐTTT ?</h5>
        <img src="{{asset('img/line.png')}}" width="150px" />
    </div>
    <div class="row pt-5 pb-5 top-manga ">
        <div class="col-6 col-md-3 col-sm-2  d-flex justify-content-around form-group item-top">
            <div class="manga-item"><i class="fas fa-university"></i>
                <p>E-Learning đầu tiên trên cả nước</p>
            </div>
        </div>
        <div class="col-6 col-md-3 col-sm-2  d-flex justify-content-around form-group">
            <div class="manga-item"><i class="fas fa-user-graduate"></i>
                <br>
                <p>99% Tỷ lệ sinh viên có việc làm ngay</p>
            </div>
        </div>

        <div class="col-6 col-md-3 col-sm-2  d-flex justify-content-around form-group">
            <div class="manga-item"><i class="fas fa-handshake"></i>
                <p>Kết nối doanh nghiệp với sinh viên</p>
            </div>

        </div>
        <div class="col-6 col-md-3 col-sm-2  d-flex justify-content-around form-group">
            <div class="manga-item"><i class="fas fa-building"></i>
                <p>Cơ sở vật chất hiện đại phòng lab konca</p>
            </div>
        </div>


    </div>

</div>
<!--Major list-->
<div class="row major">
    <div class="container">
        <div class="title">
            <h5>CHUYÊN NGÀNH CHÍNH</h5><img src="{{asset('img/line.png')}}" width="150px" />
        </div>
        <div class="row pb-2 ">
            <div class="col-12 col-sm-4 justify-content-center text-center pt-5 pb-5 ">
                <div style="position: relative; ">
                    <a href=" " class="major-title ">ĐIỆN TỬ VIỄN THÔNG</a>
                    <img class="major-img " src="{{asset('img/tdh.jpg')}} " width="100% " height="90% "><br>
                </div>
            </div>
            <div class="col-12 col-sm-4 justify-content-center text-center pt-5 pb-5 ">
                <div style="position: relative; ">
                    <a href=" " class="major-title ">ĐIỀU KHIỂN TỰ ĐỘNG HÓA</a>
                    <img class="major-img " src="{{asset('img/tdh.jpg')}} " width="100% " height="90% "><br>
                </div>
            </div>
            <div class="col-12 col-sm-4 justify-content-center text-center pt-5 pb-5 ">
                <div style="position: relative; ">
                    <a href=" " class="major-title ">CÔNG NGHỆ THÔNG TIN</a>
                    <img class="major-img " src="{{asset('img/tdh.jpg')}} " width="100% " height="90% "><br>
                </div>
            </div>
        </div>
        <div class="row pb-5 justify-content-center ">
            <button type="button " class="btn btn-primary btn-detail ">Xem chi tiết</button>
        </div>
    </div>

</div>
<!--end majorlist -->
<!--teacher list-->
<div class="container ">
    <div class="title ">
        <h5>ĐỘI NGŨ GIẢNG VIÊN?</h5>
        <img src="{{asset('img/line.png')}}" width="150px " />
    </div>
    <div class="container ">
        <div class="row pt-5 pb-5 list-teacher ">
            <div class="col-12 col-md-3 d-flex justify-content-around form-group item-teacher ">

                <img src="{{asset('img/teacher/1.jpg')}} " class="img-teachers float-left " width="70px " height="70px " />

                <p>
                    <span class="name-teachers ">"Phạm Viết Hiếu</span>
                    <span class="name-teachers">Phó Khoa</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates officia natus rerum. Aut harum laborum expedita, animi doloribus dolor mollitia, beatae ullam odit iste in facere blanditiis!
                    Dolorum, atque error! Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates officia natus rerum. Aut harum laborum expedita, animi doloribus dolor mollitia, beatae ullam odit iste in facere blanditiis! Dolorum, atque
                    error!
                </p>


            </div>
            <div class="col-12 col-md-3  d-flex justify-content-around form-group item-teacher">

                <img src="{{asset('img/teacher/1.jpg')}}" class="img-teachers float-left" width="70px" height="70px" />

                <p>"99% Tỷ lệ sinh viên có việc làm ngay" -Jack Ma - Cựu sinh viên</p>

            </div>

            <div class="col-12 col-md-3  d-flex justify-content-around form-group item-teacher">

                <img src="{{asset('img/teacher/1.jpg')}}" class="img-teachers float-left" width="70px" height="70px" />
                <p>"Kết nối doanh nghiệp với sinh viên"</p>
            </div>
            <div class="col-12 col-md-3  d-flex justify-content-around form-group item-teacher">

                <img src="{{asset('img/teacher/1.jpg')}}" class="img-teachers float-left" width="70px" height="70px" />
                <p>"Kết nối doanh nghiệp với sinh viên"</p>
            </div>

        </div>
    </div>


</div>

</div>
<!--msg fixed bottom-->
<div class="fixed-bottom text-left pl-5 pb-3 msg-icon">
    <a href=""><img src="{{asset('img/ms.png')}}" width="50px" /></a>

</div>
<!--end msg...-->

<!-- end teacher list -->
<!--row news-->
<div class="row news">

    <div class="container">
        <div class="title">
            <h5>TIN TỨC</h5>
            <img src="{{asset('img/line.png')}}" width="150px" />
        </div>
        <div class="row">
            <div class="col-md-4 grid-news">
                <a href="#"><img src="../img/1.jpg" class="img-news" width="100%" height="90%" /></a>
            </div>
            <div class="col-md-8 grid-news">
                <div class="row sub-grid-news">
                    <div class="col-md-6">
                        <a href="#"><img src="../img/truong.jpg" width="100%" height="80%"></a>
                    </div>
                    <div class="col-md-6">
                        <a href="#"><img src="../img/truong.jpg" width="100%" height="80%"></a>
                    </div>
                </div>
                <div class="row sub-grid-news">
                    <div class="col-md-6">
                        <a href="#"><img src="../img/truong.jpg" width="100%" height="80%"></a>
                    </div>
                    <div class="col-md-6">
                        <a href="#"><img src="../img/truong.jpg" width="100%" height="80%"></a>
                    </div>
                </div>

            </div>
        </div>
        <a href="" class="float-right">Xem thêm>></a>

    </div>
</div>

<!--end row news-->

<!--row logo business-->
<div class="row business-logo pb-5">

    <div class="container">
        <div class="title">
            <h5>DOANH NGHIỆP</h5>
            <img src="{{asset('img/line.png')}}" width="150px" />
        </div>
        <div class="row pb-5 pt-5">
            <div class="col-md-2">
                <img src="../img/business/vnpt.png" width="100%" />
            </div>
            <div class="col-md-2">
                <img src="../img/business/fpt.png" width="100%" />
            </div>
            <div class="col-md-2">
                <img src="../img/business/vnpt.png" width="100%" />
            </div>
            <div class="col-md-2">
                <img src="../img/business/viettel.png" width="100%" />
            </div>
            <div class="col-md-2">
                <img src="../img/business/vnpt.png" width="100%" />
            </div>
            <div class="col-md-2">
                <img src="../img/business/cmc.png" width="100%" />
            </div>
        </div>
    </div>

    <!--end row business-->
    <!-- end-header-content -->

    <!-- end-container -->
</div>
<!--end row business-->
<!-- end-bodycontent -->
@endsection