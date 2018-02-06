<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url('admin/index'); ?>">Dashboard</a></li>
                <li class="active">Team Members List</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <?php $is_exist = $this->db->get('team_members')->num_rows();?>
            <a class="btn pull-right" href="<?php echo site_url('admin/our_team?a=add'); ?>">Add New Team Member</a>
        </div>
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Member List <br>
                    <small>All Team Members of Sums Realestate</small>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                           <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Email</th>
                                <th>Phone</th> 
                                <th>Photo</th>                                
                                <th class="text-center">Action</th>
                            </tr> 
                        </thead>

                        <tbody>
                        <?php if($is_exist > 0){?>
                        <?php $counter = 0; foreach($team_members as $row) { $counter++;?>
                           <tr>
                                <td><?php echo $counter;?></td>
                                <td><?php echo $row->name;?></td>
                                <td><?php echo $row->designation;?></td>
                                <td><?php echo $row->email;?></td>
                                <td><?php echo $row->phone;?></td>                                
                                <td class="center"><img src="<?php echo base_url().'uploads/member_image/'.$row->photo; ?>"width="50" height="50"></td>
                                <td class="text-center">
                                                    <a href="<?php echo site_url('admin/our_team?a=edit&id='.$row->id); ?>" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="fa fa-edit fa-fw"></i>
                                                    </a>
                                                    <a onclick="return confirm('Are you sure you want to delete this member?')" href="<?php echo site_url('admin/our_team?a=delete&id='.$row->id); ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete">
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
