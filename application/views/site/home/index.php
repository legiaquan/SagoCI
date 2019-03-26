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

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">SẢN PHẨM MỚI</h3>
							
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<?php
											foreach ($ds as  $value) {
												# code...
										?>
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="<?php echo public_url()?>site/img/<?php echo $value['hinhsp'];?>" alt="">
												<div class="product-label">
													<span class="sale">-<?php echo $value['khuyenmai'];?>%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Điện Thoại</p>
												<h3 class="product-name"><a href="<?php echo base_url('store/chi_tiet_sp/').'?id='.$value['id_sanpham']; ?>"><?php echo $value['tensp'];?></a></h3>
												<h4 class="product-price"><?php giamoi($value['gia'],$value['khuyenmai']);?> <del class="product-old-price"><?php dinhdangso($value['gia']);?></del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm Giỏ Hàng</button>
											</div>
										</div>
										<!-- /product -->
									<?php } ?>
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- HOT DEAL SECTION -->
		
		<!-- /HOT DEAL SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">BÁN CHẠY</h3>
							
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										<?php
											foreach ($ds as  $value) {
												# code...
												if($value['seo']==1){
										?>
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="<?php echo public_url()?>site/img/<?php echo $value['hinhsp'];?>" alt="">
												<div class="product-label">
													<span class="sale">-<?php echo $value['khuyenmai'];?>%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Điện Thoại</p>
												<h3 class="product-name"><a href="#"><?php echo $value['tensp'];?></a></h3>
												<h4 class="product-price"><?php giamoi($value['gia'],$value['khuyenmai']);?> <del class="product-old-price"><?php dinhdangso($value['gia']);?></del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>
										<!-- /product -->
									<?php }} ?>

										
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		
		<!-- /SECTION -->

		<!-- SECTION -->
		


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
