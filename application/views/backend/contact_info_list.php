        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Contact Info List</a></li>
                        
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
 
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            News List
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive text-center">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Feature</th>
                                            <th>Title</th>                                           
                                            <th>Details</th>
                                            <th>Created</th>
                                            <th>Modified</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $counter = 0; foreach($contact_info as $row) { $counter++;?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $counter;?></td>
                                            <td>
                                            <img src="<?php echo base_url().'uploads/contact_img/'.$row->contact_img; ?>"width="50" height="50">
                                            </td>                                            
                                            <td><?php echo $row->title; ?></td>
                                            <td><?php echo $row->details; ?></td>
                                            <td><?php echo $row->created_at; ?></td>
                                            <td><?php echo $row->modified_at; ?></td> 
                                            <td><?php echo $row->status; ?></td>                                                                                        
                                            
                                            
                                            
                                            <td class="center">
                                                    <a href="<?php echo site_url('admin/contact?a=view&id='.$row->id); ?>" class="btn btn-info" data-toggle="tooltip" data-placement="top" title="View">
                                                        <i class="fa fa-eye fa-fw"></i>
                                                    </a>                                            
                                                    <a href="<?php echo site_url('admin/contact?a=edit&id='.$row->id); ?>" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="fa fa-edit fa-fw"></i>
                                                    </a>
                                                    <a onclick="return confirm('Are you sure you want to delete this Contact Information?')" href="<?php echo site_url('admin/contact?a=delete&id='.$row->id); ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="fa fa-trash fa-fw"></i>
                                                    </a>
                                            </td>
                                        </tr>
                                       
                                       <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>