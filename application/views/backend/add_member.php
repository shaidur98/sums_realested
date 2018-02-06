<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url('admin/index'); ?>">Dashboard</a></li>
                <li class="active">Add Member information</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add Member Information <br>
                    <small>Adding Member Information to Sums Realested</small>
                </div>
                <div class="panel-body">

                    <div class="row">
                        <div class="col-sm-12">
                            <form class="" method="post" action="<?php echo site_url('admin/our_team?a=save'); ?>" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" class="form-control" name="name" value="">
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" name="email" value="">
                                        </div>

                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" class="form-control" name="phone" value="">
                                        </div> 

                                        <div class="form-group">
                                            <label>Designation</label>
                                            <input type="text" class="form-control" name="designation" value="">
                                        </div>                                                                               

                                        <div class="form-group">
                                            <label>Creation Date</label>
                                            <input type="text" class="form-control" name="created_at" value="<?php echo date('Y-m-d');?>">
                                        </div>   

                                                                            

                                        <div class="form-group">
                                            <label>Status</label>
                                            <select name="status" class="form-control">

                                            <option value="1">Publish</option>
                                            <option value="0">Unpublish</option>                                            
                                            </select>                                            
                                        </div> 

                                        <div class="form-group">
                                            <label>Upload Image</label>
                                            <input type="file" name="file">
                                            <p class="help-block">image size</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 style="border-bottom: 1px solid #2A56C6;margin-bottom: 30px;padding-bottom: 5px;color:#2A56C6; margin-top:30px;"></h4>
                                        <div class="col-md-12 col-sm-12 text-right">
                                            <div class="form-group">
                                                <button class="btn custom-save-btn">SAVE</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
