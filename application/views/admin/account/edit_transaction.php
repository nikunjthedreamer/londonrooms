 <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->
                    <div class="theme-panel hidden-xs hidden-sm">
                        <div class="toggler"> </div>
                        <div class="toggler-close"> </div>
                        <div class="theme-options">
                            <div class="theme-option theme-colors clearfix">
                                <span> THEME COLOR </span>
                                <ul>
                                    <li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default"> </li>
                                    <li class="color-darkblue tooltips" data-style="darkblue" data-container="body" data-original-title="Dark Blue"> </li>
                                    <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue"> </li>
                                    <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey"> </li>
                                    <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light"> </li>
                                    <li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true" data-original-title="Light 2"> </li>
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
                                <a href="#">Property</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <a href="#">Property detail</a>
                                <i class="fa fa-circle"></i>
                            </li>
                             <li>
                                <a href="#">Tenancies</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Add transaction</span>
                            </li>
                        </ul>
                        <div class="page-toolbar">
                            <div class="btn-group pull-right">
                                <button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown"> Actions
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
                                    <li class="divider"> </li>
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
                    <h3 class="page-title"> Add Transaction
                        
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
		<span class="caption-subject font-red-sunglo bold uppercase">Add New Transaction</span>
		<span class="caption-helper"></span>
		</div>
		<div class="actions">
		<div class="portlet-input input-inline input-small">
		<div class="input-icon right">
		<i class="icon-magnifier"></i>
		<input type="text" class="form-control input-circle" placeholder="search..."> </div>
		</div>
		</div>
		</div>
		<div class="portlet-body form">
		<!-- BEGIN FORM-->
		<?php
      //flash messages
      if($this->session->flashdata('flash_message')){ ?>
       
        <div class="alert alert-error">
           <a class="close" data-dismiss="alert">�</a>
            <strong>Oh snap! </strong><?php echo $this->session->flashdata('flash_message');  ?>
          </div>         
        
    <?php  }
      ?>
      
		<?php
$attributes = array('class' => 'form-horizontal register-form');   
echo form_open('admin/account/edit_transaction/', $attributes); ?>
		<div class="form-body">
            
		<div class="form-group">
		<label class="col-md-3 control-label">Date</label>
		<div class="col-md-4">
		<input type="text" name="transaction_date" class="form-control" >
		<span class="help-block">  </span>
		</div>
		</div>
		<div class="form-group">
		<label class="col-md-3 control-label">Category</label>
		<div class="col-md-4">
		<select name="category_id" aria-describedby="ui-tooltip-0">

<optgroup label="Money in">
<option selected="selected" value="1">Rent</option>
<option value="10">Deposits</option>
<option value="16">Other income</option>
</optgroup>
<optgroup label="Money out">
<option value="2">Rates, insurance</option>
<option value="3">Property repairs, maintenance and renewals</option>
<option value="15">Mortgage interest</option>
<option value="14">Mortgage capital repayment</option>
<option value="4">Other finance costs</option>
<option value="5">Legal &amp; professional</option>
<option value="6">Services &amp; wages</option>
<option value="12">Tax deductible capital expenditure</option>
<option value="13">Non-tax-deductible expenditure</option>
<option value="8">Buying, selling, improving</option>
<option value="7">Other</option>
<option value="11">Transfer to deposit protection scheme</option>
</optgroup>
<optgroup label="Other">
<option value="write_off">Bad debt write-off</option>
<option value="return_deposit">Return deposit to tenant</option>
</optgroup>
</select><span class="help-block">  </span>
		</div>
		</div>
	
		
                
                
             
               
		</div>
		<div class="form-actions">
		<div class="row">
		<div class="col-md-offset-3 col-md-9">
		<!--button type="submit" class="btn green">Submit</button-->
		<a href="/index.php/admin/userlist/" class="btn default">Cancel</a></div>
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
        <!-- END CONTAINER -->