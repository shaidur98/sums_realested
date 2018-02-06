<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url('admin/index'); ?>">Dashboard</a></li>
                <li class="active">Posts List</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <?php $is_exist = $this->db->get('posts')->num_rows();?>
            <a class="btn pull-right" href="<?php echo site_url('admin/posts?a=add'); ?>">Add New Post</a>
        </div>
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Posts List <br>
                    <small>All Posts Sums Realestate</small>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                           <tr>
                                <th>SL</th>
                                <th>Posts</th>
                                <th>Post Position</th>
                                <th>Featured Image</th>
                                <th class="text-center">Action</th>
                            </tr> 
                        </thead>

                        <tbody>
                        <?php if($is_exist > 0){?>
                        <?php $counter = 0; foreach($posts as $row) { $counter++;?>
                           <tr>
                                <td><?php echo $counter;?></td>
                                <td><?php echo $row->post_title;?></td>
                                  <?php $position_id=$row->post_position_id;
                                         $position_name=$this->crud->get_name_by_id("post_positions","position_name","$position_id"); ?>
                                <td><?php echo $position_name;?></td>
                                <td class="center"><img src="<?php echo base_url().'uploads/featured_image/'.$row->featured_image; ?>"width="50" height="50"></td>
                                <td class="text-center">
                                                    <a href="<?php echo site_url('admin/posts?a=edit&id='.$row->id); ?>" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="fa fa-edit fa-fw"></i>
                                                    </a>
                                                    <a onclick="return confirm('Are you sure you want to delete this post?')" href="<?php echo site_url('admin/posts?a=delete&id='.$row->id); ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="fa fa-trash fa-fw"></i>
                                                    </a>
                                </td>
                            </tr>
                            
 
                        </tbody>
                        <?php } } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
