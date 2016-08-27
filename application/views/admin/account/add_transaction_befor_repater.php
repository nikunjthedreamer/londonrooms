<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <!-- BEGIN THEME PANEL -->
        <div class="theme-panel hidden-xs hidden-sm">
            <div class="toggler"></div>
            <div class="toggler-close"></div>
            <div class="theme-options">
                <div class="theme-option theme-colors clearfix">
                    <span> THEME COLOR </span>
                    <ul>
                        <li class="color-default current tooltips" data-style="default" data-container="body"
                            data-original-title="Default"></li>
                        <li class="color-darkblue tooltips" data-style="darkblue" data-container="body"
                            data-original-title="Dark Blue"></li>
                        <li class="color-blue tooltips" data-style="blue" data-container="body"
                            data-original-title="Blue"></li>
                        <li class="color-grey tooltips" data-style="grey" data-container="body"
                            data-original-title="Grey"></li>
                        <li class="color-light tooltips" data-style="light" data-container="body"
                            data-original-title="Light"></li>
                        <li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true"
                            data-original-title="Light 2"></li>
                    </ul>
                </div>
                <div class="theme-option">
                    <span> Theme Style </span>
                    <select class="layout-style-option form-control input-sm">
                        <option value="square" selected="selected">Square corners</option>
                        <option value="rounded">Rounded corners</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span> Layout </span>
                    <select class="layout-option form-control input-sm">
                        <option value="fluid" selected="selected">Fluid</option>
                        <option value="boxed">Boxed</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span> Header </span>
                    <select class="page-header-option form-control input-sm">
                        <option value="fixed" selected="selected">Fixed</option>
                        <option value="default">Default</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span> Top Menu Dropdown</span>
                    <select class="page-header-top-dropdown-style-option form-control input-sm">
                        <option value="light" selected="selected">Light</option>
                        <option value="dark">Dark</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span> Sidebar Mode</span>
                    <select class="sidebar-option form-control input-sm">
                        <option value="fixed">Fixed</option>
                        <option value="default" selected="selected">Default</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span> Sidebar Menu </span>
                    <select class="sidebar-menu-option form-control input-sm">
                        <option value="accordion" selected="selected">Accordion</option>
                        <option value="hover">Hover</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span> Sidebar Style </span>
                    <select class="sidebar-style-option form-control input-sm">
                        <option value="default" selected="selected">Default</option>
                        <option value="light">Light</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span> Sidebar Position </span>
                    <select class="sidebar-pos-option form-control input-sm">
                        <option value="left" selected="selected">Left</option>
                        <option value="right">Right</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span> Footer </span>
                    <select class="page-footer-option form-control input-sm">
                        <option value="fixed">Fixed</option>
                        <option value="default" selected="selected">Default</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- END THEME PANEL -->
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
                    <span>ADD INCOME</span>
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
        <h3 class="page-title"> ADD INCOME

        </h3>
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
                        $attributes = array('class' => 'form-horizontal');
                        echo form_open('admin/account/add_transaction/', $attributes); ?>
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Tenant</label>
                                        <div class="col-md-8">
                                            <select class="form-control" id="TenantID" name="TenantID">
                                                <option value="0">--Select Tenant--</option>
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
                                        <label class="col-md-5 control-label">Property Address</label>
                                        <div class="col-md-7">
                                            <select class="form-control" id="Pid" name="PropertyID">
                                                <option value="0">--Select Property--</option>
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
                            <fieldset>
                                <legend></legend>
                                <div class="repeater-custom-show-hide">
                                    <div data-repeater-list="car">
                                        <div data-repeater-item="">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label">Due Date</label>
                                                        <div class="col-md-8">
                                                            <input type="text" value="" name="DueDate"
                                                                   class="form-control date-picker"
                                                                   placeholder="Due Date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label">Amount Due</label>
                                                        <div class="col-md-8">
                                                            <input type="number" name="AmounteDue" class="form-control"
                                                                   placeholder="Enter Amount Due"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label">Amount Paid</label>
                                                        <div class="col-md-8">
                                                            <input type="number" name="AmountPaid" class="form-control"
                                                                   placeholder="Enter Amount Paid"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label">Description</label>
                                                        <div class="col-md-8">
                                                            <input type="text" name="Descrption" class="form-control"
                                                                   placeholder="Enter Description"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label">Category</label>
                                                        <div id="roomset" class="col-md-8">
                                                            <select class="form-control" name="Category">
                                                                <option value="">--Select Category--</option>
                                                                <option selected="selected" value="1">Rent</option>
                                                                <option value="2">Deposits</option>
                                                                <option value="3">Other income</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label">Status</label>
                                                        <div id="roomset" class="col-md-8">
                                                            <select class="form-control" name="Status">
                                                                <option value="">--Select Status--</option>
                                                                <option value="1">paid</option>
                                                                <option value="2">pending</option>
                                                                <option value="3">unpaid</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-md-6 control-label">Paid</label>
                                                        <div id="roomset" class="col-md-6">
                                                            <select class="form-control" name="Paid">
                                                                <option value="">--Select Paid--</option>
                                                                <option value="1">Bank Transfer</option>
                                                                <option value="2">Cash</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-md-6 control-label">Paid</label>
                                                        <div id="roomset" class="col-md-6">
                                                            <select class="form-control" name="Paid">
                                                                <option value="">--Select Paid--</option>
                                                                <option value="1">Bank Transfer</option>
                                                                <option value="2">Cash</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div

                                <div>+ Add new transaction
                                    <div class="form-group">
                                        <div class="col-sm-offset-1 col-sm-11">
          <span data-repeater-create="" class="btn btn-info btn-md">
            <span class="glyphicon glyphicon-plus"></span> Add
          </span>
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
                            </fieldset>
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
<!-- END CONTAINER -->
<script src="http://briandetering.net/jquery.repeater/jquery.repeater.js"></script>
<script>
    $(document).ready(function () {
        'use strict';

        $('.repeater-default').repeater();

        $('.repeater-custom-show-hide').repeater({
            defaultValues: {
                features: ['abs'],
                make: 'ford',
                model: 'Mustang'
            },
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