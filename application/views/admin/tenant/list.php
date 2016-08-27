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
                                <span>Tenancy detail</span>
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
                    <h3 class="page-title"> Tenancy Detail  </h3>
                    <!-- END PAGE TITLE-->	<?php
      //flash messages
      if($this->session->flashdata('flash_message')){ ?>
       
        <div class="alert <?php echo $this->session->flashdata('Type')   ?>">
           <a class="close" data-dismiss="alert">×</a>
            <?php echo $this->session->flashdata('flash_message');  ?>
          </div>         
        
    <?php  }
      ?>
                    <!-- END PAGE HEADER-->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject bold uppercase"> Tenant List</span>
                                    </div>
                                    <div class="actions">
                                        <div class="btn-group btn-group-devided" data-toggle="buttons">
                                            <label class="btn btn-transparent dark btn-outline btn-circle btn-sm active">
                                                <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                                            <label class="btn btn-transparent dark btn-outline btn-circle btn-sm">
                                                <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body">
							 <div class="table-toolbar">
									<div class="row">
										<div class="col-md-6">
										
											<div class="btn-group">
											<?php  if($this->session->userdata('role')=="Admin" ){  ?>
											 <a href="<?php  echo base_url();   ?>index.php/admin/tenant/add" id="register-btn" class="btn sbold green">Add New <i class="fa fa-plus"></i></a>
											<?php  }  ?>
											</div>
										</div>
										<div class="col-md-6">
											<div class="btn-group pull-right">
												<button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
													<i class="fa fa-angle-down"></i>
												</button>
												<ul class="dropdown-menu pull-right">
													<li>
														<a href="javascript:;">
															<i class="fa fa-print"></i> Print </a>
													</li>
													<li>
														<a href="javascript:;">
															<i class="fa fa-file-pdf-o"></i> Save as PDF </a>
													</li>
													<li>
														<a href="javascript:;">
															<i class="fa fa-file-excel-o"></i> Export to Excel </a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
                            </div>  
							  <!-- END TAB PORTLET-->		
				<table class="table dataTable   table-striped table-bordered table-hover table-checkable order-column" id="property_list">
					<thead>
						<tr>
											
						<th> Name </th>
						<th> Email </th>
						
						<th> Property </th>
						<th> Rent </th>
						
						<th> Status </th>						
						<th> Action </th>
						</tr>
					</thead>
						<tbody>
						<?php 
						$i=0;
						/* echo "<pre>";
						print_r($tenantlist);
						echo "</pre>"; */
						foreach($tenantlist as  $tenant)
						{  
						$status = $tenant['status'];
						$status_tenant = count($tenant['status_tenant']);
						$i++; 

if($status!='pending') {						?>
						
						<tr class="odd gradeX">
					
						
						<td> <?php echo $tenant['title']." ".$tenant['fname']." ".$tenant['surname'] ;   ?></td>
						<td> <?php echo $tenant['email'] ;   ?> </td>
						<td> <?php echo $tenant['property_ref'] ;   ?> </td>
						
						<td> <?php echo $tenant['rentpay'] ;   ?> </td>
						<td> <span class="label label-sm <?php echo ($status == 'pending')? 'label-danger': 'label-success' ;  ?>"><?php  if($status_tenant > 0){ echo "Active" ; }else{  echo  $status ; }   ?></span> </td>
						<td> <?php if($status=='pending') { ?><a href="<?php  echo base_url();   ?>index.php/admin/tenant/approve/<?php echo $tenant['id']; ?>" class="btn btn-info"> Approve </a><?php } ?>
						<?php  if($this->session->userdata('role')=="Admin" || $this->session->userdata('role')=="Negotiator" || $this->session->userdata('role')=="Property Manager" ){  ?>
						<a href="<?php  echo base_url();   ?>index.php/admin/tenant/detail/<?php echo $tenant['id']; ?>" id="register-btn" class="btn btn-info " >View </a>
                        <a href="<?php  echo base_url();   ?>index.php/admin/tenant/profile/<?php echo $tenant['id']; ?>" id="register-btn" class="btn btn-info " >Profile </a>
                        <?php } if($this->session->userdata('role')=="Admin" ){  ?><a href="<?php  echo base_url();   ?>index.php/admin/tenant/tenant_delete/<?php echo $tenant['id']; ?>" id="register-btn" class="btn btn-danger " onclick="return confirm('Are you sure you want to delete this item?');" >Delete </a>
                        <?php }  ?></td>
						</tr>
						<?php  } }  ?>

						</tbody>
				</table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                   
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            
        </div>
        <!-- END CONTAINER -->
		
		