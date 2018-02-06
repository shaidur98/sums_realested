        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Contact Info Edit</a></li>
                        
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Contact Info
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                <form class="form-horizontal" method="post" action="<?php echo site_url('admin/contact?a=update&id='.$sdata->id); ?>" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Title</label>
                                            <div class="col-sm-6">
                                              <input type="text" class="form-control" name="title" placeholder="Type Contact Info Title" value="<?php echo $sdata->title;?>">
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Details</label>
                                            <div class="col-sm-6">
                                              <textarea class="form-control add-editor" name="details" placeholder="Type Contact Details"><?php echo $sdata->details;?></textarea>
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="col-sm-3 control-label">Created At</label>
                                            <div class="col-sm-6">
                                              <input type="text" class="form-control" name="created_at" placeholder="Type Price" value="<?php echo $sdata->created_at;?>">
                                            </div>
                                        </div>                                        
                                        
                                         <div class="form-group">
                                            <label class="col-sm-3 control-label">Modified At</label>
                                            <div class="col-sm-6">
                                              <input type="text" class="form-control" name="modified_at" placeholder="Type Price" value="<?php echo $sdata->modified_at;?>">
                                            </div>
                                        </div>


                                         <div class="form-group">
                                            <label class="col-sm-3 control-label">Status</label>
                                            <div class="col-sm-6">
                                              <input type="text" class="form-control" name="status" placeholder="Type Price" value="<?php echo $sdata->status;?>">
                                            </div>
                                        </div>




                                      
                                       
                                      
                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-6">
                                              <button type="submit" class="btn btn-default pull-right">Update</button>
                                            </div>
                                        </div>
                                    </form> 
                                </div>
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->