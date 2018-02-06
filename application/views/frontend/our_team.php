
	
	<section class="transparent-bg">
        <div class="container">
           <div class="get-started center wow fadeInDown">
                <h2>Symbol of Faith, Ability & Cordiality</h2>
                <p class="lead"></p>
                <div class="request">
                    <h4><a href="#">Our Team</a></h4>
                </div>
            </div>
			
            <div class="row">

                <?php $counter = 0; foreach($team_members as $row) { $counter++;?>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <img src="<?php echo base_url().'uploads/member_image/'.$row->photo; ?>" class="img-circle" alt="">

                        <h4><span><?php echo $row->name;?></span></h4>
						<h3><?php echo $row->designation;?></h3>
						Cell: <?php echo $row->phone;?>
                    </div>
                </div>
                <?php } ?>




 
           </div>

        </div><!--/.container-->
    </section>
