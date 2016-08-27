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
                                <span> Edit Tenancy</span>
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
                    <h3 class="page-title"> Edit Tenancy
                        
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
		<span class="caption-subject font-red-sunglo bold uppercase">Edit Tenancy</span>
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
       
        <div class="alert <?php echo $this->session->flashdata('Type');  ?>">
           <a class="close" data-dismiss="alert">×</a>
            <strong>Oh snap! </strong><?php echo $this->session->flashdata('flash_message');  ?>
          </div>         
        
    <?php  }
      ?>
      
		<?php 
$attributes = array('class' => 'form-horizontal');   
echo form_open('admin/property/edit_tenancy/'.$this->uri->segment(4).'/'.$this->uri->segment(5).'', $attributes); ?>
		<div class="form-body">
		<h3 class="form-section">Enter Tenancy details below:</h3>
		<div class="form-group">
		<label class="col-md-3 control-label">Property Room</label>
		<div class="col-md-4">
		
		<select name="property_room_id">
		<?php foreach($rooms as $room){   ?>
			<option value="<?php echo $room['id']; ?>" <?php if($tenancy->property_room_id==$room['id']) echo "selected='selected'"; ?> ><?php echo $room['room_name']; ?> @ <?php echo $property['0']['address']; ?></option>
		<?php  }   ?>
		</select>
		<span class="help-block">  </span>
		</div>
		
		</div>
		
		<div class="form-group">
		<label class="col-md-3 control-label">Tenant</label>
		<div class="col-md-4">
		<select name="tenant">
			<?php foreach($tenantlist  as $list){
			$name = $list['fname']." ".$list['surname'];	?>
			<option value="<?php echo $list['id'] ?>"><?php echo $name; ?></option>			
		<?php  }  ?>
		</select>
		<span class="help-block">  </span>
		</div>
		Or <a href="#">Add New Tenant</a>
		</div>
		<div class="form-group">
		<label class="col-md-3 control-label">Start date</label>
		<div class="col-md-4">
		<input type="text" value="<?php echo date('m/d/Y',strtotime($tenancy->start_date));   ?>" name="start_date" class="form-control date-picker" placeholder="Enter Start date">
		<span class="help-block">  </span>
		</div>
		</div>
		<div class="form-group">
            <label class="col-md-3 control-label">Initial Rent</label>
            <div class="col-md-4">
			<div class="input-group">
			<span class="input-group-addon">
			<i class="fa fa-gbp"></i>
			</span>
			<input type="number" value="<?php echo $tenancy->initial_rent;   ?>" name="initial_rent" class="form-control" >
			</div>
			</div>
			<select name="rent_plan">
				<option <?php echo ($tenancy->rent_plan=='weekly')? 'selected' : '' ; ?> value="weekly">per week</option>
				<option <?php echo ($tenancy->rent_plan=='2weekly')? 'selected' : '' ; ?> value="2weekly">every 2 weeks</option>
				<option <?php echo ($tenancy->rent_plan=='4weekly')? 'selected' : '' ; ?> value="4weekly">every 4 weeks</option>
				<option <?php echo ($tenancy->rent_plan=='monthly')? 'selected' : '' ; ?> value="monthly">per month</option>
				<option  <?php echo ($tenancy->rent_plan=='quarterly')? 'selected' : '' ; ?> value="quarterly">quarterly</option>
				<option  <?php echo ($tenancy->rent_plan=='6monthly')? 'selected' : '' ; ?> value="6monthly">every 6 months</option>
				<option <?php echo ($tenancy->rent_plan=='annually')? 'selected' : '' ; ?> value="annually">per year</option>
		</select>
					
        </div>
		<h3 class="form-section">Optional Details:</h3>
			<div class="form-group">
				<label class="col-md-3 control-label">Finish Date</label>
				<div class="col-md-4">
				<input type="text" value="<?php echo date('m/d/Y',strtotime($tenancy->finish_date));   ?>" name="finish_date" class="form-control date-picker" placeholder="Enter Finish date">
				<span class="help-block">Leave this blank if the finish date is not known</span>
				</div>
			</div>
			<div class="form-group">
                <label class="col-md-3 control-label"></label>
                <div class="col-md-4">
				<span>Furnished residential letting</span>
				<input  type="checkbox" <?php echo ($tenancy->furnished_letting==1)? 'checked' : '' ; ?>   name="furnished_letting"/>
				</div>				
            </div>
			<div class="form-group">
                <label class="col-md-3 control-label"></label>
                <div class="col-md-4">
				<span>Assured shorthold tenancy</span>
				<input  type="checkbox" <?php echo ($tenancy->assured_tenancy==1)? 'checked' : '' ; ?>   name="assured_tenancy"/>
				</div>				
            </div>
							
		    <div class="form-group">
				<label class="col-md-3 control-label">AST duration</label>
				<div class="col-md-4">
				<input type="number" value="<?php echo $tenancy->ast_duration;   ?>" name="ast_duration" class="form-control" placeholder="Enter AST Duration">
				<span class="help-block">  </span>
				</div>
			</div>
		<div class="form-group">
		<label class="col-md-3 control-label">Deposit</label>
		<div class="col-md-4">
			<div class="input-group">
			<span class="input-group-addon">
			<i class="fa fa-gbp"></i>
			</span>
			<input type="number" value="<?php echo $tenancy->deposit;   ?>" name="deposit" class="form-control" >
			</div>
			</div>
		</div>		
        
		<div class="form-actions">
			<div class="row">
				<div class="col-md-offset-3 col-md-9">
					<button type="submit" class="btn green">Update</button>
					<a href="/index.php/admin/property/detail/<?php echo $this->uri->segment(4);  ?>?tab=tenancies" class="btn default">Cancel</a>
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