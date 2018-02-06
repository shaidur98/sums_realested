<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url('admin/index'); ?>">Dashboard</a></li>
                <li class="active">Add Project</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add Project <br>
                    <small>Adding New Project to Sums Realestate</small>
                </div>
                <div class="panel-body">

                    <div class="row">
                        <div class="col-sm-12">
                            <form class="" method="post" action="<?php echo site_url('admin/projects?a=save'); ?>" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Project Title</label>
                                            <input type="text" class="form-control" name="project_title" value="">
                                        </div>
                                        <div class="form-group">
                                            <label>Project Description</label>
                                            <div class="form-group">
                                            <textarea name="project_description" class="form-control add-editor"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Project Overview</label>
                                            <div class="form-group">
                                            <textarea name="project_overview" class="form-control add-editor"></textarea>
                                            </div>
                                        </div>                                        

                                        <div class="form-group">
                                            <label>Location</label>
                                            <input type="text" class="form-control" name="location" value="">
                                        </div>

                                        <div class="form-group">
                                            <label>Type of Project</label>
                                            <select name="type_of_project" class="form-control">
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="A-B">A-B</option>                                            
                                            </select>                                            
                                        </div> 

                                        <div class="form-group">
                                            <label>Build up Area</label>
                                            <input type="text" class="form-control" name="build_up_area" value="">
                                        </div> 

                                        <div class="form-group">
                                            <label>Number of Floors</label>
                                            <input type="text" class="form-control" name="number_of_floors" value="">
                                        </div> 

                                        <div class="form-group">
                                            <label>Apartment Floor</label>
                                            <input type="text" class="form-control" name="apartment_floor" value="">
                                        </div>

                                        <div class="form-group">
                                            <label>Size</label>
                                            <input type="text" class="form-control" name="size" value="">
                                        </div>

                                        <div class="form-group">
                                            <label>Bed Room</label>
                                            <input type="text" class="form-control" name="bed_room" value="">
                                        </div>

                                        <div class="form-group">
                                            <label>Bath Room</label>
                                            <input type="text" class="form-control" name="bath_room" value="">
                                        </div>

                                        <div class="form-group">
                                            <label>Collection</label>
                                            <input type="text" class="form-control" name="collection" value="">
                                        </div>

                                        <div class="form-group">
                                            <label>Launch Date</label>
                                            <input type="text" class="form-control" name="launch_date" value="">
                                        </div>

                                        <div class="form-group">
                                            <label>Completion Date</label>
                                            <input type="text" class="form-control" name="completion_date" value="">
                                        </div>

                                        <div class="form-group">
                                            <label>Project Status</label>
                                            <select name="project_status" class="form-control">
                                            <option value="On Going Project">On Going Project</option>
                                            <option value="Completed Project">Completed Project</option>
                                            <option value="Up-coming Project">Up-coming Project</option>                                            
                                            </select>                                            
                                        </div> 

                                        <div class="form-group">
                                            <label>Floor Plan Image</label>
                                            <input type="file" name="file2">
                                            <p class="help-block">image size</p>
                                        </div> 

                                        <div class="form-group">
                                            <label>Location Details</label>
                                            <div class="form-group">
                                            <textarea name="location_details" class="form-control add-editor"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Add Date</label>
                                            <input type="text" class="form-control" name="created_at" value="">
                                        </div>   

                                        <div class="form-group">
                                            <label>Modification Date</label>
                                            <input type="text" class="form-control" name="modified_at" value="">
                                        </div> 

                                       

                                        <div class="form-group">
                                            <label>Status</label>
                                            <select name="status" class="form-control">
                                            <option value="1">Publish</option>
                                            <option value="0">Unpublish</option>
                                            </select>                                            
                                        </div>                                                                                                                    

                                        <div class="form-group">
                                            <label>Project Image</label>
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
                                                <button class="btn custom-save-btn">ADD PROJECT</button>
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
