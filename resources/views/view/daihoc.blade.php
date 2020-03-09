@extends('master.master')
@section('title','Đại học')
@section('content')
<!--wrapper-->
@include('master.title')

        <div class="container">
            <div class="row pt-5 pb-5">
                <div class="col-md-9 col-sm-9 l-content">
                    <h2 class="main-title">ĐẠI HỌC <br>
                        <img src="{{asset('img/line.png')}}" width="150px" /></h2>

                    <div class="row news-item mt-3 pb-3 mr-3">
                        <div class="col-md-4 col-sm-4">
                            <img src="{{asset('img/truong.jpg')}}" width="100%">
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <a href="tin.html">
                                <h4>Khoa Công nghệ Điện tử - Thông tin Tuyển sinh chuyên ngành kỹ thuật điện tử viễn thông 2020</h4>
                            </a>
                            <p>Ngành Kỹ thuật điện là gì? Với hai hướng chuyên môn sâu là Hệ thống điện và Thiết bị điện – điện tử, ngành Kỹ thuật điện tập trung vào nghiên cứu và ứng dụng các kiến thức liên quan đến lĩnh vực điện, điện tử và điện từ với
                                nhiều chuyên ngành nhỏ như năng lượng, điện tử học, hệ thống điều khiển, xử lý tín hiệu....
                            </p>
                        </div>
                    </div>
                    <div class="row news-item mt-3 pb-3 mr-3">
                        <div class="col-md-4 col-sm-4">
                            <img src="{{asset('img/banner.jpg')}}" width="100%">
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <a href="tin.html">
                                <h4>Đây là title của bản tin, tiếp theo là title thứ 2</h4>
                            </a>
                            <p>Ngành Kỹ thuật điện là gì? Với hai hướng chuyên môn sâu là Hệ thống điện và Thiết bị điện – điện tử, ngành Kỹ thuật điện tập trung vào nghiên cứu và ứng dụng các kiến thức liên quan đến lĩnh vực điện, điện tử và điện từ với
                                nhiều chuyên ngành nhỏ như năng lượng, điện tử học, hệ thống điều khiển, xử lý tín hiệu....
                            </p>
                        </div>
                    </div>
                </div>
                
               @include('master.sidebar')


            </div>

        </div>

        <!--end wrapper-->
@endsection