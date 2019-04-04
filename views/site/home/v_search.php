<?php
	$data_Search = $this->input->get(null);
	if(isset($data_Search['ts']))
		$ten= $data_Search['ts'];
	else
		$ten='';
?>
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
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li><a href="#">All Categories</a></li>
							<li><a href="#">Accessories</a></li>
							<li class="active">Headphones (227,490 Results)</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<?php $this->load->view('site/home/include/catalog')?>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
						<!-- store top filter -->
						<div class="store-filter clearfix">
							<div class="store-sort">
								<label>
									Sort By:
									<select class="input-select">
										<option value="0">Popular</option>
										<option value="1">Position</option>
									</select>
								</label>

								
							</div>
							
						</div>
						<!-- /store top filter -->

						<!-- store products -->
						<?php
							$i=0;
							
							if($dssp==0){
								echo "Không tìm thấy từ khóa <i>'".$ten."'</i>";
							}
							else{
								echo "Kết quả tìm kiếm từ khóa <i>'".$ten."'</i>";
						?>
						<div class="row">
							<?php
								
								
								
								foreach ($dssp as $value) {
										# code...
								$i++;
												
							?>
							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<a href="<?php echo base_url('store/chi_tiet_sp/').'?id='.$value['id_sanpham']; ?>"><img height="258px" width="258px" src="<?php echo public_url()?>site/img/<?php echo $value['hinhsp'];?>" alt=""></a>
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
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
									</div>
								</div>
							</div>
							<!-- /product -->
						<?php }}
							
						
						?>
							
						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						<div class="store-filter clearfix">
							<span class="store-qty">Số sản phẩm tìm được là: <?php echo $i;?></span>
							<!--
							<ul class="store-pagination">
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						-->
						</div>
						<!-- /store bottom filter -->
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->


		
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
