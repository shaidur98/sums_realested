<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url('admin/index'); ?>">Dashboard</a></li>
                <li class="active">Edit Project</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit Project <br>
                    <small>Editing Project to Sums Realestate</small>
                </div>
                <div class="panel-body">

                    <div class="row">
                        <div class="col-sm-12">
                            <form class="" method="post" action="<?php echo site_url('admin/projects?a=update&id='.$sdata->id); ?>" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-12">

                                        <div class="form-group">
                                        <img src="<?php echo base_url().'uploads/project_image/'.$sdata->project_image; ?>" width="400" height="300"> 
                                        </div> 

                                        <div class="form-group">
                                            <label>Change Project Image</label>
                                            <input type="file" name="file">
                                            <p class="help-block">image size</p>
                                        </div> 

                                        <div class="form-group">
                                            <label>Project Title</label>
                                            <input type="text" class="form-control" name="project_title" value="<?php echo $sdata->project_title;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Project Description</label>
                                            <div class="form-group">
                                            <textarea name="project_description" class="form-control add-editor"><?php echo $sdata->project_description;?></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Project Overview</label>
                                            <div class="form-group">
                                            <textarea name="project_description" class="form-control add-editor"><?php echo $sdata->project_overview;?></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Location</label>
                                            <input type="text" class="form-control" name="location" value="<?php echo $sdata->location;?>">
                                        </div> 

                                       <div class="form-group">
                                            <label>Type of Project</label>
                                            <select name="type_of_project" class="form-control">
                                            <option value="<?php echo $sdata->type_of_project;?>"><?php echo $sdata->type_of_project;?></option>                  
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="A-B">A-B</option>                                            
                                            </select>                                            
                                        </div> 

                                        <div class="form-group">
                                            <label>Build up Area</label>
                                            <input type="text" class="form-control" name="build_up_area" value="<?php echo $sdata->build_up_area;?>">
                                        </div> 

                                        <div class="form-group">
                                            <label>Number of Floors</label>
                                            <input type="text" class="form-control" name="number_of_floors" value="<?php echo $sdata->number_of_floors;?>">
                                        </div> 

                                        <div class="form-group">
                                            <label>Apartment Floor</label>
                                            <input type="text" class="form-control" name="apartment_floor" value="<?php echo $sdata->apartment_floor;?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Size</label>
                                            <input type="text" class="form-control" name="size" value="<?php echo $sdata->size;?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Bed Room</label>
                                            <input type="text" class="form-control" name="bed_room" value="<?php echo $sdata->bed_room;?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Bath Room</label>
                                            <input type="text" class="form-control" name="bath_room" value="<?php echo $sdata->bath_room;?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Collection</label>
                                            <input type="text" class="form-control" name="collection" value="<?php echo $sdata->collection;?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Launch Date</label>
                                            <input type="text" class="form-control" name="launch_date" value="<?php echo $sdata->launch_date;?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Completion Date</label>
                                            <input type="text" class="form-control" name="completion_date" value="<?php echo $sdata->completion_date;?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Project Status</label>
                                            <select name="project_status" class="form-control">
                                            <option value="<?php echo $sdata->project_status;?>"><?php echo $sdata->project_status;?></option>                                                
                                            <option value="On Going Project">On Going Project</option>
                                            <option value="Completed Project">Completed Project</option>
                                            <option value="Up-coming Project">Up-coming Project</option>                                            
                                            </select>                                            
                                        </div> 

                                         <div class="form-group">
                                        <img src="<?php echo base_url().'uploads/floor_plan_image/'.$sdata->floor_plan_image; ?>" width="200" height="200"> 
                                        </div>                                        

                                        <div class="form-group">
                                            <label>Change Floor Plan Image</label>
                                            <input type="file" name="file2">
                                            <p class="help-block">image size</p>
                                        </div> 

                                        <div class="form-group">
                                            <label>Location Details</label>
                                            <div class="form-group">
                                            <textarea name="location_details" class="form-control add-editor"><?php echo $sdata->location_details;?></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Add Date</label>
                                            <input type="text" class="form-control" name="created_at" value="<?php echo $sdata->created_at;?>">
                                        </div>   

                                        <div class="form-group">
                                            <label>Modification Date</label>
                                            <input type="text" class="form-control" name="modified_at" value="<?php echo $sdata->modified_at;?>">
                                        </div> 

                                       

                                        <div class="form-group">
                                            <label>Status</label>
                                            <select name="status" class="form-control">
                                             <option value="<?php echo $sdata->status;?>"><?php $p_status=$sdata->status; if($p_status==0){echo "Published";}else{echo "Unpublished";} ?></option>            
                                            <option value="1">Publish</option>
                                            <option value="0">Unpublish</option>
                                            </select>                                            
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
