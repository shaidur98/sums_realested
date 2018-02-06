<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url('admin/index'); ?>">Dashboard</a></li>
                <li class="active">Portfolio List</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <?php $is_exist = $this->db->get('posts')->num_rows();?>
            <a class="btn pull-right" href="<?php echo site_url('admin/posts?a=add'); ?>">Add New Portfolio</a>
        </div>
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Portfolio List <br>
                    <small>All Portfolios of Sums Realestate</small>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                           <tr>
                                <th>SL</th>
                                <th>Title</th>
                                <th>Details</th>
                                <th>Feature</th>
                                <th class="text-center">Action</th>
                            </tr> 
                        </thead>

                        <tbody>
                        <?php if($is_exist > 0){?>
                        <?php $counter = 0; foreach($portfolios as $row) { $counter++;?>
                           <tr>
                                <td><?php echo $counter;?></td>
                                <td><?php echo $row->image_title;?></td>
                                <td><?php echo $row->image_details;?></td>
                                <td class="center"><img src="<?php echo base_url().'uploads/portfolio_image/'.$row->image_name; ?>"width="50" height="50"></td>
                                <td class="text-center">
                                                    <a href="<?php echo site_url('admin/gallery?a=edit&id='.$row->id); ?>" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="fa fa-edit fa-fw"></i>
                                                    </a>
                                                    <a onclick="return confirm('Are you sure you want to delete this portfolio?')" href="<?php echo site_url('admin/gallery?a=delete&id='.$row->id); ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete">
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
