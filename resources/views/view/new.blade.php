@extends('master.master')
@section('title','Đại học')
@section('content')
@include('master.title')
<div class="container ">
    <div class="row pt-5 pb-5">
        <!--left -content-->
        <div class="col-md-9 col-sm-9 l-content pl-3 pr-5 mt-5">
            <h5 class="new-title"><b>
            5 LỢI ÍCH KHI THAM GIA HỌC BỔNG TÀI NĂNG ĐẠI HỌC MỞ, CHẬM CHÂN LÀ THIỆT!
        </b></h5>
            <hr> Thời gian: <i class="time-create">26/02/2020</i>
            <img src=" ../img/truong.jpg " width="90%" height="40%" class="img-tin" />
            <p align="justify">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam perferendis est incidunt placeat neque, officiis sit assumenda blanditiis iste quis et alias dolor fugit voluptate praesentium eum voluptas ea pariatur. Lorem, ipsum dolor sit amet consectetur
                adipisicing elit. Molestiae quibusdam fugit ad aliquid, incidunt, ut voluptatem porro vitae atque officiis voluptatum ducimus velit cum, harum nisi aperiam asperiores beatae officia. Lorem ipsum dolor sit, amet consectetur adipisicing
                elit. Soluta odio molestias rerum voluptatem recusandae saepe in officiis, modi culpa quibusdam libero perspiciatis quas. Perferendis laboriosam, ab quisquam dolorum quam reprehenderit?
            </p>
            <i class="author">Phạm Viết Hiếu</i>
        </div>
        <!--end-left-content-->
        @include('master.sidebar')
    </div>

</div>
@endsection

