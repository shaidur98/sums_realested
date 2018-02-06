
	<!---slied---->
	<div class="slider-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<!-- Start WOWSlider.com BODY section -->
					<div id="wowslider-container1">
						<div class="ws_images">
							<ul>
								<li>


									<img src="<?php echo site_url();?>data1/images/beauty1.jpg" alt="" title="" id="wows1_0"/></li>
								<li><a href="#"><img src="<?php echo site_url();?>data1/images/beauty2.jpg" alt="bootstrap carousel" title="" id="wows1_1"/></a></li>
								<li><img src="<?php echo site_url();?>data1/images/beauty3.jpg" alt="" title="" id="wows1_2"/></li>
								<li><img src="<?php echo site_url();?>data1/images/beauty1.jpg" alt="" title="" id="wows1_2"/></li>
							</ul>
						</div>
						<div class="ws_bullets">
							<div>
								<a href="#" title=""><span><img src="<?php echo site_url();?>data1/tooltips/13076938_1758328814414418_9203776493216189011_n.jpg" alt=""/>1</span></a>
								<a href="#" title=""><span><img src="<?php echo site_url();?>data1/tooltips/16996339_1903684509878847_8906062087156696636_n.jpg" alt=""/>2</span></a>
								<a href="#" title=""><span><img src="<?php echo site_url();?>data1/tooltips/24862222_2043114685935828_5813468376822477771_n.jpg" alt=""/>3</span></a>
							</div>
						</div>
						<div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com/vi">cssslider</a> by WOWSlider.com v8.7</div>
						<div class="ws_shadow"></div>
					</div>	
					<script type="text/javascript" src="<?php echo site_url();?>engine1/wowslider.js"></script>
					<script type="text/javascript" src="<?php echo site_url();?>engine1/script.js"></script>
				<!-- End WOWSlider.com BODY section -->
				</div>
			</div>
		</div>
	</div>
<!---slied--end-->

<div class="clearfix"></div>

<!---sumary--->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div id="tab_system"><!-- start of tab_system-->

					<ul id="current" class="tab_list">
						<h4 class="project-color">Project Details</h4>
						<table class="table table-bordered">
							<tbody>
								<tr class="#">
								<th class="bg-warning" scope="row">Location</th>
								<td class="location bg-warning"><?php echo $sdata->location;?></td>
								<th class="apartment bg-success">Apartment/Floor</th>
								<td class="number bg-success"><?php echo $sdata->apartment_floor;?></td>
								<th class="Collection bg-info">Collection</th>
								<td class="Classic bg-info"><?php echo $sdata->collection;?></td>
								</tr>
								<tr class="">
								<th class="bg-warning" scope="row">Type of Project</th>
								<td class="location bg-warning"><?php echo $sdata->type_of_project;?></td>
								<th class="apartment bg-success">Size</th>
								<td class="number bg-success"><?php echo $sdata->size;?> sft.</td>
								<th class="Collection bg-info">Launch Date</th>
								<td class="Classic bg-info"><?php echo $sdata->launch_date;?> </td>
								</tr>
								<tr class="">
								<th class="bg-warning" scope="row">Built Up Area</th>
								<td class="location bg-warning"><?php echo $sdata->build_up_area;?></td>
								<th class="apartment bg-success">Bedroom</th>
								<td class="number bg-success"><?php echo $sdata->bed_room;?></td>
								<th class="Collection bg-info">Completion Date</th>
								<td class="Classic bg-info"><?php echo $sdata->completion_date;?></td>
								</tr>
								<tr class="bg-warning">
								<th class="bg-warning" scope="row">Number of Floors</th>
								<td class="location bg-warning"><?php echo $sdata->number_of_floors;?></td>
								<th class="apartment bg-success">Bathroom</th>
								<td class="number bg-success"><?php echo $sdata->bath_room;?></td>
								<th class="Collection bg-info">Status</th>
								<td class="Classic bg-info"><?php echo $sdata->status;?></td>
								</tr>
								
							</tbody>
						</table>
					</ul>
					
				</div><!-- end of tab_system-->
			</div>
		</div>
	</div>
<!---sumary--end-->
