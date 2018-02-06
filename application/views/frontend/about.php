
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">About Us</h2>
			</div>
		</div>
	</div>
	</section>


	<section id="content">
	<section class="section-padding">
		<div class="container">
			<?php $counter = 0; foreach($top_posts as $row) { $counter++;?>	
			<div class="row showcase-section">
				<div class="col-md-6">

					<img src="<?php echo base_url().'uploads/featured_image/'.$row->featured_image; ?>">
				</div>
				<div class="col-md-6">

					<div class="about-text">
						<h3><span class="color"><?php echo $row->post_title;?></span></h3>
						<p><?php echo $row->post_details; ?></p>
					</div>
				</div>
			</div>
			<?php } ?>

		</div>
	</section>


	<div class="container">
					
					<div class="about">
				
						
						<div class="row">
							<div class="col-md-4">
								<?php $counter = 0; foreach($left_posts as $row) { $counter++;?>	
								<!-- Heading and para -->
								<div class="block-heading-two">
									<h3><span><?php echo $row->post_title;?></span></h3>
								</div>
								<p><?php echo $row->post_details;?></p>
								<?php } ?>
							</div>
							<div class="col-md-4">
								<div class="block-heading-two">
									<h3><span>Our Solution</span></h3>
								</div>		
								<!-- Accordion starts -->
								<div class="panel-group" id="accordion-alt3">
								 <!-- Panel. Use "panel-XXX" class for different colors. Replace "XXX" with color. -->

								<?php $counter = 0; foreach($accordion_posts as $row) { $counter++;
									if ($counter==1){$link="#collapseOne-alt3";} 
									elseif($counter==2){$link="#collapseTwo-alt3";}
									elseif($counter==3){$link="#collapseThree-alt3";}
									elseif($counter==4){$link="#collapseFour-alt3";}

									?>
								  <div class="panel">	
									<!-- Panel heading -->
									 <div class="panel-heading">
										<h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion-alt3" href="<?php echo $link;?>">
											<i class="fa fa-angle-right"></i> <?php echo $row->post_title;?>
										  </a>
										</h4>
									 </div>
									 <div id="<?php echo $link;?>" class="panel-collapse collapse">
										<!-- Panel body -->
										<div class="panel-body">
										  <?php echo $row->post_details;?>
										</div>
									 </div>
								  </div>
								  <?php } ?>




								</div>
								<!-- Accordion ends -->
								
							</div>
							
							<div class="col-md-4">
								<!-- Heading and para -->
								<div class="block-heading-two">
									<h3><span>Why Choose Us?</span></h3>
								</div>
								<p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis<h2>False</h2> et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur. <br/><br/>Sed ut perspiciaatis iste natus error sit voluptatem probably haven't heard of them accusamus.</p>
							</div>
							
						</div>
						
						 		

						

						

					  
						
					</div>
									
				</div>
	</section>
