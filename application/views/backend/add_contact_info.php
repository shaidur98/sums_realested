        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Contact Info Add</a></li>
                        
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Contact Information
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                   <form class="form-horizontal" method="post" action="<?php echo site_url('admin/contact?a=save'); ?>" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Title</label>
                                            <div class="col-sm-6">
                                              <input type="text" class="form-control" name="title" placeholder="Type Contact Info Title">
                                            </div>
                                        </div>    

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Details</label>
                                            <div class="col-sm-6">
                                              <textarea class="form-control add-editor" name="details" placeholder="Type Product Info Details"></textarea>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Upload Image</label>
                                            <div class="col-sm-9">
                                                <input type="file" name="file">
                                                <p>25px x 25px image size</p>
                                            </div>
                                        </div>

                                         <div class="form-group">
                                            <label class="col-sm-3 control-label">Created At</label>
                                            <div class="col-sm-6">
                                              <input type="text" class="form-control" name="created_at" placeholder="Type Price" value="">
                                            </div>
                                        </div>                                        
                                        
                                         <div class="form-group">
                                            <label class="col-sm-3 control-label">Modified At</label>
                                            <div class="col-sm-6">
                                              <input type="text" class="form-control" name="modified_at" placeholder="Type Price" value="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Status"</label>
                                            <div class="col-sm-6">
                                            <select name="status" class="form-control">    
                                            <option value="1">Publish</option>
                                            <option value="0">Unpublish</option>
                                            </select>
                                              
                                            </div>
                                        </div>                                        
                             
                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-6">
                                              <button type="submit" class="btn btn-default pull-right">Add Contact Info</button>
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