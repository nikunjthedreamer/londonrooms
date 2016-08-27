    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper page-container-bg-solid">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <!-- BEGIN PAGE BAR -->
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <a href="">Home</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <span>Dashboard</span>
                    </li>
                </ul>
                <div class="page-toolbar">
                    <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                        <i class="icon-calendar"></i>&nbsp;
                        <span class="thin uppercase hidden-xs"></span>&nbsp;
                        <i class="fa fa-angle-down"></i>
                    </div>
                </div>
            </div>
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title">
                <small></small>
            </h3>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="dashboard-stat2">
                        <div class="row">
                            <div class="col-lg-2 col-md-2">
                                <span class="font-green-meadow bold uppercase">
                                    $ <?php echo $get_price_unpaid?>
                                    <br>
                                    <?php echo $unpaid_transaction?> total unpaid</span>
                            </div>
                            <div class="col-lg-2 col-md-2">
                                <span class="font-red bold uppercase">
                                    $ <?php echo $get_price_overdue?><br>
                                    <?php echo $get_count_overdue?> total overdue</span>
                            </div>
                            <div class="col-lg-2 col-md-2">
                                <span class="font-purple bold uppercase">
                                    $<?php echo $get_price_paid;?>
                                    <br>
                                    <?php echo $get_count_paid;?> paid last 30 days</span>
                            </div>
                            <div class="col-lg-3 col-md-2">
                                <div class="btn-group">
                                    <button class="btn green-jungle btn-lg dropdown-toggle"
                                            type="button" data-toggle="dropdown" aria-expanded="false"> + money in
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="<?php echo base_url();?>index.php/admin/account/add_transaction"> Income </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-2">
                                <div class="btn-group">
                                    <button class="btn red btn-lg dropdown-toggle"
                                            type="button" data-toggle="dropdown" aria-expanded="false"> + money out
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="<?php echo base_url();?>index.php/admin/account/add_out_transaction"> expense </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption font-green">
                                <span class="caption-subject bold uppercase">CSV</span>
                            </div>
                            <div class="actions">
                                <a class="btn btn-circle btn-icon-only btn-default"
                                   href="#">
                                    <i class="icon-calendar"></i>
                                </a>
                                <span> transactions for all period</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="row">
                            <div class="col-md-12">
                                <table class="table dataTable   table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                    <thead>
                                    <tr>
                                        <th> Due Date </th>
                                        <th> Description </th>
                                        <th> Property </th>
                                        <th> Name </th>
                                        <th> Amount Paid </th>
                                        <th> Status </th>
                                        <th> Paid </th>
                                        <th> Action </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i=0;
                                    foreach($transactionlist as  $translist)
                                    {
                                        $status=$translist['Status']
                                        ?>

                                        <tr class="">
                                            <td> <?php echo $translist['DueDate'] ;   ?></td>
                                            <td> <?php echo $translist['ConsName'] ;   ?> </td>
                                            <td> <?php echo $translist['address'] ;   ?> </td>
                                            <td> <?php echo $translist['fname'].' '.$translist['surname'];   ?> </td>
                                            <td> <?php echo $translist['AmountPaid'] ;   ?> </td>
                                            <td> <span class="label label-sm <?php if ($status == '3') echo 'label-danger';elseif ($status == '2') echo 'label-success' ;else echo 'label-info';  ?>">
                                                    <?php if ($status == '4') echo 'pending';elseif ($status == '2') echo '&nbsp;&nbsp;&nbsp;&nbsp;paid&nbsp;&nbsp;&nbsp;' ;else echo '&nbsp;unpaid&nbsp;';  ?></span> </td>
                                            <td><?php if ($translist['Paid'] == '6') echo 'Bank Transfer';elseif ($translist['Paid']  == '7') echo 'Cash'?></td>
                                            <td><a href="javascript:;">
                                                    <i class="fa fa-edit font-red-thunderbird"></i> </a></td>
                                        </tr>
                                    <?php  }  ?>

                                    </tbody>
                                </table>

                            </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
