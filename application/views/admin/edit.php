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
                                <a href="#">Users</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Edit User</span>
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
                    <h3 class="page-title"> Edit User
                        
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
		<span class="caption-subject font-red-sunglo bold uppercase">Edit  User</span>
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
           <a class="close" data-dismiss="alert">×</a>
            <strong>Oh snap! </strong><?php echo $this->session->flashdata('flash_message');  ?>
          </div>         
        
    <?php  }
      ?>
      
		<?php 
$attributes = array('class' => 'form-horizontal','enctype'=>'multipart/form-data');   
echo form_open('admin/user/edit/'.$this->uri->segment(4).'', $attributes); ?>
		<div class="form-body">
		<h3 class="form-section">Enter user personal details below:</h3>
		
		<div class="form-group">
		<label class="col-md-3 control-label">Full Name</label>
		<div class="col-md-4">
		<input type="text" value="<?php echo $user[0]['full_name']   ?>" name="full_name" class="form-control" placeholder="Enter Full Name">
		<span class="help-block">  </span>
		</div>
		</div>
		<div class="form-group">
		<label class="col-md-3 control-label">Surname</label>
		<div class="col-md-4">
		<input type="text" value="<?php echo $user[0]['surname']   ?>" name="surname" class="form-control" placeholder="Enter Surname">
		<span class="help-block">  </span>
		</div>
		</div>
		<div class="form-group">
		<label class="col-md-3 control-label">Phone Number</label>
		<div class="col-md-4">
		<input type="text" value="<?php echo $user[0]['phone_number']   ?>" name="phone_number" class="form-control" placeholder="Enter Phone Number">
		<span class="help-block">  </span>
		</div>
		</div>
		<div class="form-group">
		<label class="col-md-3 control-label">Email Address</label>
		<div class="col-md-4">
		<div class="input-group">
		<span class="input-group-addon">
		<i class="fa fa-envelope"></i>
		</span>
		<input type="email" value="<?php echo $user[0]['email_address']   ?>" name="email_address" class="form-control" placeholder="Email Address"> </div>
		</div>
		</div>
		
               
                <div class="form-group">
                    <label class="col-md-3 control-label">Role</label>
                    <div class="col-md-4">
		<select name="role" class="form-control">
                        <option value="">--Select Role--</option>
                        <option <?php if($user[0]['role']=='Negotiator'){ echo "selected='selected'";  }    ?> value="Negotiator">Negotiator</option>
                        <option <?php if($user[0]['role']=='Property Manager'){ echo "selected='selected'";  }    ?> value="Property Manager">Property Manager</option>
                        <option <?php if($user[0]['role']=='Accounts'){ echo "selected='selected'";  }    ?> value="Accounts">Accounts</option>
                       </select>
		 </div>
					
                </div>
				 
				<div class="form-group ">
                                                <label class="control-label col-md-3">User Image</label>
                                                <div class="col-md-9">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> <img src="/uploads/<?php echo $user[0]['user_pic']   ?>" /></div>
                                                        <div>
                                                            <span class="btn red btn-outline btn-file">
                                                                <span class="fileinput-new"> Select image </span>
                                                                <span class="fileinput-exists"> Change </span>
                                                                <input type="file" name="user_pic"> </span>
																<input type="hidden" value="<?php echo $user[0]['user_pic']   ?>" name="user_pic_old">
                                                            <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                        </div>
                                                    </div>
                                                  
                                            </div> </div>
				<div class="form-group">
                    <label class="col-md-3 control-label">Status</label>
                    <div class="col-md-4">
					 <?php if($user[0]['status']=="1"){   ?>
		<input  type="checkbox"   name="status" checked/>
		<?php }else{  ?>
		<input  type="checkbox"   name="status"/>
		
		<?php }  ?>
		 </div>
					
                </div>
				<h3 class="form-section">Enter user account details below:</h3>
		 
                <div class="form-group">
                    <label class="col-md-3 control-label">Username</label>
					<div class="col-md-4">
                    <input value="<?php echo $user[0]['user_name'];   ?>"  class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username" /></div> </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Password</label>
					<div class="col-md-4">
					<div class="input-group">
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="" placeholder="Password" name="password" /><span class="input-group-addon">
		<i class="fa fa-user"></i>
		</span> </div></div></div>
		 <input  type="hidden"  name="password_old" value="<?php echo $user[0]['pass_word'];    ?>" />
                <div class="form-group">
                    <label class="col-md-3 control-label">Re-type Your Password</label>
					<div class="col-md-4">
					<div class="input-group">
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="rpassword" /> <span class="input-group-addon">
		<i class="fa fa-user"></i>
		</span></div></div></div>
               
		</div>
		<div class="form-actions">
		<div class="row">
		<div class="col-md-offset-3 col-md-9">
		<button type="submit" class="btn green">Update</button>
		<a href="/index.php/admin/userlist/" class="btn default">Cancel</a>
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