<!-- BEGIN CONTENT -->
<div class="page-content-wrapper" xmlns="http://www.w3.org/1999/html">
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
                    <a href="#">Accounting</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Add Income</span>
                </li>
            </ul>
            <div class="page-toolbar">
                <div class="btn-group pull-right">
                    <button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown">
                        Actions
                        <i class="fa fa-angle-down"></i>
                    </button>
                    <ul class="dropdown-menu pull-right" role="menu">
                        <li>
                            <a href="#">
                                <i class="icon-bell"></i> Action</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-shield"></i> Another action</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-user"></i> Something else here</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <i class="icon-bag"></i> Separated link</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END PAGE BAR -->
        <!-- BEGIN PAGE TITLE-->
        <h3 class="page-title"></h3>
        <!-- END PAGE TITLE-->
        <!-- END PAGE HEADER-->

        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <!-- BEGIN REGISTRATION FORM -->
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-equalizer font-red-sunglo"></i>
                            <span class="caption-subject font-red-sunglo bold uppercase">Add Income</span>
                            <span class="caption-helper"></span>
                        </div>
                        <div class="actions">
                            <div class="portlet-input input-inline input-small">
                                <div class="input-icon right">
                                    <i class="icon-magnifier"></i>
                                    <input type="text" class="form-control input-circle" placeholder="search..."></div>
                            </div>
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <?php
                        //flash messages
                        if ($this->session->flashdata('flash_message')) { ?>

                            <div class="alert alert-error">
                                <a class="close" data-dismiss="alert">×</a>
                                <strong>Oh snap! </strong><?php echo $this->session->flashdata('flash_message'); ?>
                            </div>

                        <?php }
                        ?>

                        <?php
                        $attributes = array('class' => 'form-horizontal form-label-stripped','id'=>'form_sample_1');
                        echo form_open('admin/account/add_transaction/', $attributes); ?>
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Tenant <span class="required"> * </span></label>
                                        <div class="col-md-8">
                                            <select class="form-control" id="TenantID" name="TenantID">
                                                <option value="">--Select Tenant--</option>
                                                <?php foreach ($tenantlist as $tenant) { ?>
                                                    <option
                                                        value="<?php echo $tenant['id']; ?>"><?php echo $tenant['fname'] . ' ' . $tenant['surname']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-md-5 control-label">Property Address <span class="required" aria-required="true"> * </span></label>
                                        <div class="col-md-7">
                                            <select class="form-control" id="Pid" name="PropertyID">
                                                <option value="">--Select Property--</option>
                                                <?php foreach ($propertylist as $peroperty) { ?>
                                                    <option
                                                        value="<?php echo $peroperty['id']; ?>"><?php echo $peroperty['address']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Room</label>
                                        <div id="roomset" class="col-md-8">
                                            <select class="form-control" name="room">
                                                <option value="">--Select Room--</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <hr>
                                <div class="repeater-custom-show-hide">
                                    <div data-repeater-list="income">
                                            <div data-repeater-item="" class="bg-grey-steel">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">Due Date</label>
                                                            <div class="col-md-8">
                                                                <input type="text" value="" name="income[0][DueDate]"
                                                                       class="form-control date-picker"
                                                                       placeholder="Due Date">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">Amount Due</label>
                                                            <div class="col-md-8">
                                                                <input type="text" name="income[0][AmounteDue]"
                                                                       class="form-control"
                                                                       placeholder="Enter Amount Due">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">Amount Paid</label>
                                                            <div class="col-md-8">
                                                                <input type="text" name="income[0][AmountPaid]"
                                                                       class="form-control"
                                                                       placeholder="Enter Amount Paid">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">Description</label>
                                                            <div class="col-md-8">
                                                                <input type="text" name="income[0][Descrption]"
                                                                       class="form-control"
                                                                       placeholder="Enter Description"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">Category</label>
                                                            <div id="roomset" class="col-md-8">
                                                                <select class="form-control" name="income[0][Category]">
                                                                    <option value="">--Select Category--</option>
                                                                    <option selected="selected" value="9">Rent</option>
                                                                    <option value="10">Deposits</option>
                                                                    <option value="11">Other income</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">Status</label>
                                                            <div id="roomset" class="col-md-8">
                                                                <select class="form-control" name="income[0][Status]">
                                                                    <option value="">--Select Status--</option>
                                                                    <option value="2">paid</option>
                                                                    <option value="3">pending</option>
                                                                    <option value="4">unpaid</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">Paid</label>
                                                            <div id="roomset" class="col-md-8">
                                                                <select class="form-control" name="income[0][Paid]">
                                                                    <option value="">--Select Paid--</option>
                                                                    <option value="6">Bank Transfer</option>
                                                                    <option value="7">Cash</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6"></div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                         <span data-repeater-delete="" class="btn btn-danger btn-sm">
                                                                <span class="glyphicon glyphicon-remove"></span> Delete
                                                         </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                    </div>
                                    <div>
                                        <div class="form-group">
                                            <div class="col-sm-11">
                                    <span  data-repeater-create="" class="btn font-green-meadow bold uppercase">
                                                    + Add new transaction
                                                </span>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="btn green">Submit</button>
                                            <a href="/index.php/admin/account/" class="btn default">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            <?php echo form_close();
                            ?>
                            <!-- END FORM-->
                        </div>
                    </div>




                    <!-- END REGISTRATION FORM -->
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>

        </div>

        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->


</div>


</div>
<!-- END CONTAINER -->
<script src="http://briandetering.net/jquery.repeater/jquery.repeater.js"></script>
<script>
    $(document).ready(function () {
        'use strict';

        $('.repeater-default').repeater();

        $('.repeater-custom-show-hide').repeater({
            /* defaultValues: {
             features: ['abs'],
             make: 'ford',
             model: 'Mustang'
             },*/
            show: function () {
                $(this).slideDown();
            },
            hide: function (remove) {
                if (confirm('Are you sure you want to remove this item?')) {
                    $(this).slideUp(remove);
                }
            }
        });

        $('.repeater-default-values').repeater({
            defaultValues: {
                features: ['abs'],
                make: 'ford',
                model: 'Mustang'
            }
        });
    });
</script>

<?PHP ECHO BASE_URL(); ?>
<script>
    $('#Pid').on('change', function () {
        var pid = $(this).val();
        $("#roomset").load('../management/pid_room/' + pid);
    });
    $('nav').click(function () {//element to be click to load the page in the div
        //$(your_div_element).load('controller/method');

    });

</script>