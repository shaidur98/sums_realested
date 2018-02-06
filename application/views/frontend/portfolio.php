    

    <section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">Portfolio</h2>
            </div>
        </div>
    </div>
    </section>
    <section id="content">
    <div class="container content">  
                        <div class="row"> 
                            <div class="col-md-12">
                 <?php $counter = 0; foreach($top_posts as $row) { $counter++;?>                                  
                                <div class="about-logo">
                                    <h3><span class="color"><?php echo $row->post_title;?></span></h3>
                                    <p><?php echo $row->post_details;?></p>
                                </div> 

                                <?php } ?> 
                            </div>
                        </div> 
                        
    </div>
    </section>  
              <!-- Start Gallery 1-2 -->
    <section id="gallery-1" class="content-block section-wrapper gallery-1">
            <div class="container">

            <div class="editContent">
                <ul class="filter">
                <li class="HillSide"><a href="#" data-filter="*">All</a></li>
                 <?php $counter = 0; foreach($image_categories as $row) { $counter++;?>


                    <li><a class="waves-effect waves-dark" href="#" data-filter=".<?php echo $row->name;?>"><?php echo $row->name;?></a></li>

<?php } ?>

                </ul>
            </div>
            <!-- /.gallery-filter -->
            
            <div class="row">
                <div id="isotope-gallery-container">
                    <?php $counter = 0; foreach($portfolios as $row) { $counter++;

                    $image_category_id=$row->image_category_id;
                    $image_category_name_raw=$this->crud->get_name_by_id("gallery_image_category","name","$image_category_id"); 
                    
                    $image_category_name = strtolower($image_category_name_raw);
                    ?>

                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper <?php echo $image_category_name;?>">
                        <div class="gallery-item">
                            <div class="gallery-thumb">

                                <img src="<?php echo base_url().'uploads/portfolio_image/'.$row->image_name; ?>" class="img-responsive" alt="1st gallery Thumb">
                                
                                <div class="image-overlay"></div>
                                <a href="<?php echo site_url().'uploads/portfolio_image/'.$row->image_name; ?>" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                
                            </div>
                            <div class="gallery-details">
                                <div class="editContent">
                                    <h5><?php echo $row->image_title;?></h5>
                                </div>
                                <div class="editContent">
                                    <p><?php echo $row->image_details;?></p>
                                </div>
                            </div>
                        </div>
                    </div>
<?php } ?>





                    
                </div>
                <!-- /.isotope-gallery-container -->
            </div>
            <!-- /.row --> 
        <!-- /.container -->
        </div>
    </section>
    <!--// End Gallery 1-2 -->  
    </div>
