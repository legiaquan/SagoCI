<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view('site/home/include/head');?>

    </head>
    <body>
        <!-- HEADER -->
        <header>
            <?php $this->load->view('site/home/include/header');?>
        </header>
        <!-- /HEADER -->

        <!-- NAVIGATION -->
        <nav id="navigation">
            <!-- container -->
            <?php $this->load->view('site/home/include/menu');?>
            <!-- /container -->
        </nav>
        <!-- /NAVIGATION -->

        <!-- BREADCRUMB -->
        <div id="breadcrumb" class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="breadcrumb-header">Regular Page</h3>
                        <ul class="breadcrumb-tree">
                            <li><a href="index.php">Trang chủ</a></li>
                            <li class="active">Liên hệ</li>
                        </ul>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /BREADCRUMB -->
        
        <!-- SECTION -->
        <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2 align="center">SAGOPHONE</h2>
                <p align="center" style="font-style: italic;">"SagoPhone luôn lắng nghe và thấu hiểu khách hàng"</p>
                <hr>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>

                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="<?php echo site_url('login/check_login');?>">
                    <div class="col-sm-5 col-sm-offset-1">
                        <a align="center" style="font-size: 25px">Đăng nhập</a>
                        <hr>

                        <div class="form-group">
                            <label>Tài khoản <a style="color: red">*</a></label>
                            <input type="text" name="u" class="form-control" required="required">
                            
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu <a style="color: red">*</a></label>
                            <input type="password" name="p" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="smuserdangnhap" class="btn btn-primary btn-lg" value="userdangnhap">Gửi</button>
                        </div>                        
                    </div>
                </form>
                <!--dangky
                 <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="module/signup.php">
                    <div class="col-sm-5">
                        <a align="center" style="font-size: 25px">Đăng ký</a>
                        <hr>
                        
                        <div class="form-group">
                            <label>Tên <a style="color: red">*</a></label>
                            <input type="text" name="hoten" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Tài khoản <a style="color: red">*</a></label>
                            <input type="text" name="u" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu <a style="color: red">*</a></label>
                            <input type="password" name="p" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Nhập lại Mật khẩu <a style="color: red">*</a></label>
                            <input type="password" name="pre" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email <a style="color: red">*</a></label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại<a style="color: red"> *</a></label>
                            <input type="sdt" name="sdt" class="form-control" required="required">

                        </div>
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input type="text" name="diachi" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="smuserdangky" class="btn btn-primary btn-lg" required="required" value="userdangnhap">Gửi</button>
                        </div>   
                    </div>
                </form> 
                -->
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
        <!-- /SECTION -->

        <!-- NEWSLETTER -->

        <!-- /NEWSLETTER -->
        
        <!-- FOOTER -->
        <footer id="footer">
            <?php $this->load->view('site/home/include/footer'); ?>
        </footer>
        <!-- /FOOTER -->

        <!-- jQuery Plugins -->
        <script src="<?php echo public_url('site')?>/js/jquery.min.js"></script>
        <script src="<?php echo public_url('site')?>/js/bootstrap.min.js"></script>
        <script src="<?php echo public_url('site')?>/js/slick.min.js"></script>
        <script src="<?php echo public_url('site')?>/js/nouislider.min.js"></script>
        <script src="<?php echo public_url('site')?>/js/jquery.zoom.min.js"></script>
        <script src="<?php echo public_url('site')?>/js/main.js"></script>

    </body>
</html>
