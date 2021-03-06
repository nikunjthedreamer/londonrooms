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
                                <a href="#">Properties</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Add Property</span>
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
                    <h3 class="page-title"> Add Property
                        
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
		<span class="caption-subject font-red-sunglo bold uppercase">Add Property</span>
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
$attributes = array('class' => 'form-horizontal');   
echo form_open('admin/property/edit/'.$this->uri->segment(4).'', $attributes); ?>
		<div class="form-body">
		<h3 class="form-section">Enter property details below:</h3>
		
		<div class="form-group">
		<label class="col-md-3 control-label">Address</label>
		<div class="col-md-4">
		<input type="text"  value="<?php echo $property[0]['address']; ?>" name="address" class="form-control" placeholder="Enter Address" />
		<p class="help-block">Required  </p>
		</div>
		</div>
		<div class="form-group">
		<label class="col-md-3 control-label">Postcode</label>
		<div class="col-md-4">
		<input type="text" value="<?php echo $property[0]['postcode']; ?>" name="postcode" class="form-control" placeholder="Enter Postcode">
		<span class="help-block">  </span>
		</div>
		</div>
		<h3 class="form-section">Landlord and Tenancy Details :</h3>
		<div class="form-group">
			<label class="col-md-3 control-label">Landlord /Agent Name</label>
			<div class="col-md-4">
			<input type="text" value="<?php echo $property[0]['landlord_name']; ?>" name="landlord_name" class="form-control" placeholder="Enter Landlord Name">
			<span class="help-block">  </span>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">Landlord Address</label>
			<div class="col-md-4">
			<input type="text" value="<?php echo $property[0]['landlord_address']; ?>" name="landlord_address" class="form-control" placeholder="Enter Landlord Address">
			<span class="help-block">  </span>
			</div>
		</div>		
        <div class="form-group">
			<label class="col-md-3 control-label">Landlord Phone No</label>
			<div class="col-md-4">
			<input type="text" value="<?php echo $property[0]['landlord_phone']; ?>" name="landlord_phone" class="form-control" placeholder="Enter Landlord Phone No">
			<span class="help-block">  </span>
			</div>
		</div>       
		 <div class="form-group">
			<label class="col-md-3 control-label">Landlord Email</label>
			<div class="col-md-4">
			<input type="text" value="<?php echo $property[0]['landlord_email']; ?>" name="landlord_email" class="form-control" placeholder="Enter Landlord Email">
			<span class="help-block">  </span>
			</div>
		</div> 
        <div class="form-group">
			<label class="col-md-3 control-label">Property Price (PCM)</label>
			<div class="col-md-4">
			<div class="input-group">
			<span class="input-group-addon">
			<i class="fa fa-gbp"></i>
			</span>
			<input type="number" value="<?php echo $property[0]['property_price']; ?>" name="property_price" class="form-control" >
			</div>
			 </div>
					
        </div>       
        <div class="form-group">
		<label class="col-md-3 control-label">Contract Start Date</label>
		<div class="col-md-4">
		<input type="text" value="<?php echo date('m/d/Y',strtotime($property[0]['Contract_start_date'])); ?>" name="Contract_start_date" class="form-control date-picker" placeholder="Enter Purchase date">
		<span class="help-block">  </span>
		</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">Contract End Date</label>
			<div class="col-md-4">
			
			<input type="text" value="<?php echo date('m/d/Y',strtotime($property[0]['Contract_end_date'])); ?>" name="Contract_end_date" class="form-control date-picker" placeholder=" Disposal date">
			</div>
		</div>       
		
		<div class="form-actions">
		<div class="row">
		<div class="col-md-offset-3 col-md-9">
		<button type="submit" class="btn green">Submit</button>
		<a href="/index.php/admin/property/" class="btn default">Cancel</a>
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
        <!-- END CONTAINER -->
