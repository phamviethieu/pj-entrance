@extends('master.master')
@section('titile','Đăng kí')
@section('content')
        <!--wrapper-->
        <div class="container">
            <div class="row pt-5 pb-5">
                <div class="col-md-9 col-sm-9 l-content">
                    <div class="modal-content signUpFrm">
                        <div class="modal-header">
                            <h4 class="modal-title">Đăng ký tài khoản</h4>

                        </div>
                        <div class="modal-body">
                            <div class="item-modal ">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Địa chỉ mail</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        <small id="emailHelp" class="form-text text-muted">Chúng tôi sẽ không chia sẻ email của bạn!</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Mật khẩu</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>

                                    Có tài khoản: <a href=""> Đăng nhập </a>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>

                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

             @include('master.sidebar')
            </div>

        </div>

        <!--end wrapper-->
@endsection