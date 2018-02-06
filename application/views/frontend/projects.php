
    <!-- Slider -->
    <!---sumary--->
    <div class="container">
        <div class="row">
        <div class="aligncenter"><h2 class="aligncenter">Our Projects</h2></div><br/>
            <div class="col-md-12">
                <div id="tab_system"><!-- start of tab_system-->

                    <ul id="current" class="tab_list">
                        <h4 class="project-color">Project Details</h4>
                        <section class="main-project">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="demo">


                                            <div id="owl-demo" class="owl-carousel">

                <?php $counter = 0; foreach($projects as $row) { $counter++;?>

                                                <div class="item">
                                                    <div class="card small">
                                                        <div class="card-image">
                                                            <a href="priosums.html">

                        <img src="<?php echo base_url().'uploads/project_image/'.$row->project_image; ?>" alt="">
</a>   
                                                        </div>
                                                        <div class="card-content"> 
                                                            <p><span class="price">$4.00 Lacs - 8.28 Lacs</span></p>
                                                            <h4><?php echo $row->project_title;?></h4>
                                                            <h5><?php echo $row->location;?></h5>
                                                            <?php echo site_url('admin/projects?a=edit&id='.$row->id); ?>
                                                            <a href="<?php echo site_url('site/project_details?a=edit&id='.$row->id); ?>" class="btn btn-details">Details</a>
                                                            <p></p>
                                                        </div>
                                                    </div>  
                                                </div>

<?php } ?>





  

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </ul>
                    <ul id="favorite" class="tab_list">

                        
                        <div class="container">



                            <div class="row service-v1 margin-bottom-40">
                <?php $counter = 0; foreach($projects as $row) { $counter++;?>                                
                                <div class="col-md-4 md-margin-bottom-40">
                                    <div class="card small">
                                        <div class="card-image">
                                            <img src="<?php echo base_url().'uploads/project_image/'.$row->project_image; ?>" alt="">
                                        </div>
                                        <div class="card-content">
                                            <p>
                                                <span class="price">$4.00 Lacs - 8.28 Lacs</span>
                                                <h4><?php echo $row->project_title;?></h4>
                                                <h5><?php echo $row->location;?></h5>
                                                <a href="<?php echo site_url('site/project_details');?>" class="btn btn-details">Details</a>
                                            </p>
                                        </div>
                                    </div>        
                                </div>
<?php } ?>

                            </div>




                        </div>



                    </ul>





                    <ul id="all_time" class="tab_list">
                    
                    </ul>
                </div><!-- end of tab_system-->
            </div>
        </div>
    </div>
<!---sumary--end-->


<!-- Service Blcoks -->
    <section id="content">
        <div class="container content">     
            <div class="row"> 
                <div class="col-md-12">
                    <div class="about-logo">
                        <?php $counter = 0; foreach($top_posts as $row) { $counter++;?>
                        <h3>Amenities</h3>
                        <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p> 
                        <?php } ?>
                    </div>  
                </div>
            </div>


            <div class="row">
                <?php $counter = 0; foreach($bullet_posts as $row) { $counter++;?>                
                <div class="col-sm-4 info-blocks">
                    <i class="icon-info-blocks fa fa-bell-o"></i>
                    <div class="info-blocks-in">

                        <h3><?php echo $row->post_title;?></h3>
                        <p><?php echo $row->post_details;?></p>
   
                    </div>
                </div>
                     <?php } ?>

              
             
            </div>

        </div>
    </section>
<!-- End Info Blcoks -->
