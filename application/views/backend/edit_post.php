<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url('admin/index'); ?>">Dashboard</a></li>
                <li class="active">Edit Post</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit Post <br>
                    <small>Editing Post to Sadia Blog</small>
                </div>
                <div class="panel-body">

                    <div class="row">
                        <div class="col-sm-12">
                            <form class="" method="post" action="<?php echo site_url('admin/posts?a=update&id='.$sdata->id); ?>" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Post Title</label>
                                            <input type="text" class="form-control" name="post_title" value="<?php echo $sdata->post_title;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Details</label>
                                            <div class="form-group">
                                            <textarea name="post_details" class="form-control add-editor"><?php echo $sdata->post_details;?></textarea>
                                            </div>
                                        </div>

                                        <?php $position_id=$sdata->post_position_id;
                                         $position_name=$this->crud->get_name_by_id("post_positions","position_name","$position_id"); ?>


                                        <div class="form-group">
                                            <label>Post Position</label>
                                            <select name="post_position_id" class="form-control">
                                            <option value="<?php echo $sdata->post_position_id;?>"><?php echo $position_name; ?></option>

                                         
                                            
                                            <?php foreach($post_positions as $position) { ?>

                                            <option value="<?php echo $position->id;?>"><?php echo $position->position_name; ?></option>

                                            <?php } ?>
                                            </select>
                                        </div>                                         






                                        <div class="form-group">
                                            <label>Creation Date</label>
                                            <input type="text" class="form-control" name="created_at" value="<?php echo $sdata->created_at;?>">
                                        </div>   

                                        <div class="form-group">
                                            <label>Modification Date</label>
                                            <input type="text" class="form-control" name="modified_at" value="<?php echo date('Y-m-d');?>">
                                        </div>                                                                               

                                        <div class="form-group">
                                            <label>Status</label>
                                            <select name="post_status" class="form-control">
                                            <option value="<?php echo $sdata->status; ?>"><?php if ($sdata->status=="1"){echo "Published";} else {echo "Unpublished";}?> </option>
                                            <option value="0">Unpublished</option>
                                            <option value="1">Published</option>
                                            </select>                                            
                                        </div>                                                                                                                    

                                        <div class="form-group">
                                            <label>Photo</label>
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
                                                <button class="btn custom-save-btn">UPDATE</button>
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
