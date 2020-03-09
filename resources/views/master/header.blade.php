
    <!-- <div class="item-modal">
  	                <div class="modal-content"> 
  	                    <div class="close-modal">x</div>
  	                    <form>
  						  <div class="form-group">
  						    <label for="exampleInputEmail1">Email address</label>
  						    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  						    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  						  </div>
  						  <div class="form-group">
  						    <label for="exampleInputPassword1">Password</label>
  						    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  						  </div>
  						  <div class="form-check">
  						    <input type="checkbox" class="form-check-input" id="exampleCheck1">
  						    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  						  </div>
  						  <button type="submit" class="btn btn-primary">Submit</button>
  						</form>
  	                </div> 
  	    </div> -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Login</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">
                    <div class="item-modal">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            Chưa có tài khoản: <a href="">Đăng ký.</a>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>

                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <div id="header">
        <div class="jumbotron banner pt-3 pb-3 " style="margin-bottom: 0px;">
            <div class="container jumbotron-content">
                <div class="row pl-2 pr-2">
                    <div class="col-12 col-md-6 col-sm-6 text-left">
                        <b>KHOA ĐIỆN TỬ THÔNG TIN </b>
                        <br> TRƯỜNG ĐẠI HỌC MỞ HÀ NỘI
                    </div>
                    <div class="col-12 col-md-6 col-sm-6 text-right">
                        <a href="#"><i class="fab fa-facebook-square"></i> </a>
                        <a href="#"><i class="far fa-envelope"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- end-header -->
    <div class="body-content">
        <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top navbarTop">
            <div class="container navbar-pd">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#collapse_target" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
                <div class="collapse navbar-collapse justify-content-between" id="collapse_target">
                    <a class="navbar-brand" href=""><img src="{{asset('img/logokhoa.jpg')}}" width="50px"></a>


                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">HOME</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ĐẠI HỌC</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">SAU ĐẠI HỌC</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">E-LEARNING</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">TIN TỨC</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">HỎI ĐÁP</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar-nav">
                    <button type="button" class="btn btn-success btn-login" data-toggle="modal" data-target="#myModal">Đăng nhập</button>
                </div>

            </div>
        </nav>
