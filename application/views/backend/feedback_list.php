<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url('admin/index'); ?>">Dashboard</a></li>
                <li class="active">Visitors Feedback</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">

        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Feedback List <br>
                    <small>All Feedbacks to Sums Realestate</small>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                           <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th> 
                                <th>Date</th>
                               <th class="text-center">Action</th>
                            </tr> 
                        </thead>

                        <tbody>

                        <?php $counter = 0; foreach($feedbacks as $row) { $counter++;?>
                           <tr>
                                <td><?php echo $counter;?></td>
                                <td><?php echo $row->name;?></td>
                                <td><?php echo $row->email;?></td>
                                <td><?php echo $row->message;?></td>
                                <td><?php echo $row->created_at;?></td>                                
                                <td class="text-center">
                                                    <a onclick="return confirm('Are you sure you want to delete this feedback?')" href="<?php echo site_url('admin/feedback?a=delete&id='.$row->id); ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="fa fa-trash fa-fw"></i>
                                                    </a>
                                </td>
                            </tr>
                            
 
                        </tbody>
                        <?php }  ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
