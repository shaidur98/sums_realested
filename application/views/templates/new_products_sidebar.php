								<div class="blog-popular-post">
								<h3 class="blog-sidebar-title">New Products</h3>
								<ul>
								<?php $counter = 0; foreach($new_products as $row2) { $counter++;?>
									<li>
										<div class="popular-post-img">
											<a href="<?php echo site_url('cs/single_product?id='.$row2->id);?>"><img src="<?php echo base_url().'uploads/product_img/'.$row2->product_img; ?>" alt="" /></a>
										</div>
										<div class="popular-post-content">
											<a href="<?php echo site_url('cs/single_product?id='.$row2->id);?>"><?php echo $row2->product_title; ?></a>
											<div class="product-price">
												<span class="regular-price"><?php echo '$'.$row2->price.'.00' ;?></span>
											</div>
										</div>
									</li>

									<?php if($counter == 5)break; ?>
									<?php } ?>
								</ul>
							</div>