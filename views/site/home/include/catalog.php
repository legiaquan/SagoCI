<div id="aside" class="col-md-3">
						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Danh Mục</h3>
							<div class="checkbox-filter">

								
								<div class="input-checkbox">
									<input type="checkbox" id="category-2">
									<label for="category-2">
										<span></span>
										<a href="<?php echo base_url('store/bo_loc_hang');?>?id=0">Iphone</a>
										
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-3">
									<label for="category-3">
										<span></span>
										<a href="<?php echo base_url('store/bo_loc_hang');?>?id=1">Samsung</a>
										
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-3">
									<label for="category-3">
										<span></span>
										<a href="<?php echo base_url('store/bo_loc_hang');?>?id=3">Nokia</a>
										
									</label>
								</div>

							</div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						
						<div class="aside">
							<h3 class="aside-title">Giá</h3>
							<div class="price-filter">
								<form action="<?php echo site_url('store/loc_gia_max_min');?>" method="get">
								<div class="input-number price-min">
									<input  type="number" name="giamin" value="<?php
										if(isset($_GET['giamin']))
											echo $_GET['giamin']
									?>" placeholder="₫ Từ">
									
								</div>
								<span>-</span>
								<div class="input-number price-max">
									<input  type="number" name="giamax" value="<?php
										if(isset($_GET['giamax']))
											echo $_GET['giamax']
									?>" placeholder="₫ Đến">
									
								</div>
								
								
								<br>
						
								<div class="input-number price-max">
									<input  type="submit" class="primary-btn order-submit" value="Áp dụng">
									
								</div>

								</form>
							</div>
						</div>
					
						<!-- /aside Widget -->

						

						
					</div>