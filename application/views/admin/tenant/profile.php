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
                    <h3 class="page-title"> Tenant Profile  </h3>
                    <!-- END PAGE TITLE-->	<?php
      //flash messages
      if($this->session->flashdata('flash_message')){ ?>
       
        <div class="alert <?php echo $this->session->flashdata('Type')   ?>">
           <a class="close" data-dismiss="alert">�</a>
            <?php echo $this->session->flashdata('flash_message');  ?>
          </div>         
        
    <?php  }
      ?>
	  <?php 
				$pdetail = $profiledetail[0];
				$name = $pdetail['title'].' '.$pdetail['fname'].' '.$pdetail['surname'].'';
				$dob=date("d/m/Y", strtotime($pdetail['dob']));
				$agreement=date("d/m/Y", strtotime($pdetail['agreement']));
				$date_commencement=date("d/m/Y", strtotime($pdetail['date_commencement']));
				$rent_payment=date("d/m/Y", strtotime($pdetail['rent_payment']));
				$nxt_pymnt=date("d/m/Y", strtotime($pdetail['nxt_pymnt']));
				$nights_to=date("d/m/Y", strtotime($pdetail['nights_to']));
				$months_to=date("d/m/Y", strtotime($pdetail['months_to']));
?>
                    <!-- END PAGE HEADER-->
                    <div class="profile">
                        <div class="tabbable-line tabbable-full-width">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a data-toggle="tab" href="#tab_1_1"> Overview </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab_1_3"> Account </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab_1_1" class="tab-pane active">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <ul class="list-unstyled profile-nav">
                                                <li>
                                                    <img alt="" class="img-responsive pic-bordered" src="/assets/pages/media/profile/dummy_user.png">
                                                </li>                                               
                                            </ul>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-12 profile-info">
                                                    <h1 class="font-green sbold uppercase"><?php echo $name; ?></h1>                                                    
                                                </div>
												
                                                <!--end col-md-12-->
                                              
                                            </div>
                                            <!--end row-->
                                            <div class="tabbable-line tabbable-custom-profile">
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a data-toggle="tab" href="#tab_1_11"> Personal Details </a>
                                                    </li>
                                                    <li>
                                                        <a data-toggle="tab" href="#tab_1_22"> Contract Detail </a>
                                                    </li>
													<li>
                                                        <a data-toggle="tab" href="#tab_1_33"> Payment Detail </a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div id="tab_1_11" class="tab-pane active">
                                                        <div class="portlet-body">
                                                            <table class="table table-striped table-bordered table-advance table-hover">
                                                               <tbody>
                                                                    <tr>
                                                                        <td class="td_hdng">D.O.B.</td>
                                                                        <td class="hidden-xs"> <?php echo $dob; ?> </td>
                                                                        <td class="td_hdng"> Nationality   </td>
                                                                        <td><?php echo $pdetail['nationality']; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="td_hdng">Mobile No.  </td>
                                                                        <td class="hidden-xs"><?php echo $pdetail['mobile']; ?></td>
                                                                        <td class="td_hdng">Email </td>
                                                                        <td><?php echo $pdetail['email']; ?> </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="td_hdng"> Passport/ID No </td>
                                                                        <td class="hidden-xs"> <?php echo $pdetail['passport_no']; ?> </td>
                                                                        <td class="td_hdng"> Overseas Address</td>
                                                                        <td><?php echo $pdetail['address']; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="td_hdng">Postcode</td>
                                                                        <td class="hidden-xs"> 	<?php echo $pdetail['postcode']; ?> </td>
                                                                        <td class="td_hdng"> City and Country </td>
                                                                        <td><?php echo $pdetail['city_country']; ?></td>
                                                                    </tr>
																</tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <!--tab-pane-->
                                                    <div id="tab_1_22" class="tab-pane">
                                                        <div class="portlet-body">
                                                            <table class="table table-striped table-bordered table-advance table-hover">
                                                               <tbody>
                                                                    <tr>
                                                                        <td class="td_hdng">Property Reference</td>
                                                                        <td class="hidden-xs"><?php echo $pdetail['property_ref']; ?> </td>
                                                                        <td class="td_hdng"> Room No   </td>
                                                                        <td><?php echo $pdetail['room_no']; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="td_hdng">Type Of Room  </td>
                                                                        <td class="hidden-xs"><?php echo $pdetail['room_type']; ?></td>
                                                                        <td class="td_hdng">No of People </td>
                                                                        <td><?php echo $pdetail['no_people']; ?> </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="td_hdng"> Standard Price </td>
                                                                        <td class="hidden-xs"><?php echo $pdetail['price_weekly']; ?><span class="help-inline">per week</span> </td>
                                                                       <td class="td_hdng"> Standard Price </td>
                                                                        <td class="hidden-xs"><?php echo $pdetail['price_monthly']; ?><span class="help-inline">per month</span> </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="td_hdng">Agreement From</td>
                                                                        <td class="hidden-xs"> 	<?php echo $agreement; ?> </td>
                                                                        <td class="td_hdng"> Date of commencement </td>
                                                                        <td><?php echo $date_commencement; ?></td>
                                                                    </tr>
																	<tr>
                                                                        <td class="td_hdng">Nights To End On 1st Or 15th</td>
                                                                        <td class="hidden-xs">	<?php echo $pdetail['nights_to_end']; ?></td>
                                                                        <td class="td_hdng">Nights To</td>
                                                                        <td><?php echo $nights_to; ?></td>
                                                                    </tr>
																	<tr>
                                                                        <td class="td_hdng">Agreement For</td>
                                                                        <td class="hidden-xs"><?php echo $pdetail['agrmnt_for'];?></td>
                                                                        <td class="td_hdng">Months To</td>
                                                                        <td><?php echo $months_to; ?></td>
                                                                    </tr>
																	<tr>
                                                                        <td class="td_hdng">Deposit</td>
                                                                        <td class="hidden-xs"><?php echo $pdetail['deposit'];?></td>
                                                                        <td class="td_hdng">To Pay</td>
                                                                        <td><?php echo $pdetail['deposit_month']; ?></td>
                                                                    </tr>
																	<tr>
                                                                        <td class="td_hdng">Contract Fee</td>
                                                                        <td class="hidden-xs"><?php echo $pdetail['contract_fee'];?> Per Person</td>
                                                                        <td class="td_hdng"></td>
                                                                        <td></td>
                                                                    </tr>
																</tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <!--tab-pane-->
													<div id="tab_1_33" class="tab-pane">
                                                     <div class="portlet-body">
                                                            <table class="table table-striped table-bordered table-advance table-hover">
                                                               <tbody>
                                                                    <tr>
                                                                        <td class="td_hdng">Apportioned rent</td>
                                                                        <td class="hidden-xs"> <?php echo $rent_payment; ?> </td>
                                                                        <td class="td_hdng"> Total Nights   </td>
                                                                        <td><?php echo $pdetail['total_nights']; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="td_hdng">Total Months </td>
                                                                        <td class="hidden-xs"><?php echo $pdetail['total_months']; ?></td>
                                                                        <td class="td_hdng">Next Payment On </td>
                                                                        <td><?php echo $nxt_pymnt; ?> </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="td_hdng"> Other Costs </td>
                                                                        <td class="hidden-xs"><?php echo $pdetail['other_costs']." ".$pdetail['cost_desc']; ?> </td>
                                                                        <td class="td_hdng"> Deposit</td>
                                                                        <td><?php echo $pdetail['deposit2']; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="td_hdng">Contract Fee</td>
                                                                        <td class="hidden-xs"> 	<?php echo $pdetail['contrctfee']; ?> </td>
                                                                        <td class="td_hdng"> Rent Payment </td>
                                                                        <td><?php echo $pdetail['rentpay']; ?></td>
                                                                    </tr>
																</tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <table class="table dataTable   table-striped table-bordered table-hover table-checkable order-column" id="property_list">
                                                    <thead>
                                                    <tr>
                                                        <th> Due Date </th>
                                                        <th> Amount Due </th>
                                                        <th> Amount Paid </th>
                                                        <th> Description </th>
                                                        <th> Balance </th>
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

                                                            <tr class="odd gradeX">
                                                                <td> <?php echo $translist['DueDate'] ;   ?></td>
                                                                <td> <?php echo $translist['AmounteDue'] ;   ?> </td>
                                                                <td> <?php echo $translist['AmountPaid'] ;   ?> </td>
                                                                <td> <?php echo $translist['Category'] ;   ?> </td>
                                                                <td> <?php echo $translist['Balance'] ;   ?> </td>
                                                                <td> <span class="label label-sm <?php if ($status == '3') echo 'label-danger';elseif ($status == '2') echo 'label-success' ;else echo 'label-info';  ?>"> <?php if ($status == '4') echo 'pending';elseif ($status == '2') echo 'paid' ;else echo 'unpaid';  ?></span> </td>
                                                                <td><?php if ($translist['Paid'] == '6') echo 'Bank Transfer';elseif ($translist['Paid']  == '7') echo 'Cash'?></td>
                                                                <td><a href="javascript:;">
                                                                        <i class="fa fa-edit font-red-thunderbird"></i> </a></td>
                                                            </tr>
                                                        <?php  }  ?>

                                                    </tbody>
                                                </table>

                                            </div>
										  <div class="col-md-6">
                                                    <div class="portlet sale-summary">
                                                        <div class="portlet-title">
                                                            <div class="caption font-red sbold"> Payment Summary </div>
                                                            <div class="tools">
                                                                <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                                                            </div>
                                                        </div>
                                                        <div class="portlet-body">
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <span class="sale-info"> Total
                                                                        <i class="fa fa-img-up"></i>
                                                                    </span>
                                                                    <span class="sale-num"><i class="fa fa-gbp"></i> <?php echo $pdetail['net_total'] ?></span>
                                                                </li>
                                                                <li>
                                                                    <span class="sale-info">Holding Deposit To Pay
                                                                        <i class="fa fa-img-down"></i>
                                                                    </span>
                                                                    <span class="sale-num"><i class="fa fa-gbp"></i> <?php echo $pdetail['holding_deposit']; ?> </span>
                                                                </li>
                                                                <li>
                                                                    <span class="sale-info"> Outstanding Balance </span>
                                                                    <span class="sale-num"><i class="fa fa-gbp"></i> <?php echo $pdetail['holding_deposit']; ?> </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <!--tab_1_2-->
                                <div id="tab_1_3" class="tab-pane">
                                    <div class="row profile-account">
                                        <div class="col-md-3">
                                            <ul class="ver-inline-menu tabbable margin-bottom-10">
                                                <li class="active">
                                                    <a href="#tab_1-1" data-toggle="tab">
                                                        <i class="fa fa-cog"></i> Personal info </a>
                                                    <span class="after"> </span>
                                                </li>
                                                <li>
                                                    <a href="#tab_2-2" data-toggle="tab">
                                                        <i class="fa fa-picture-o"></i> Change Avatar </a>
                                                </li>
                                                <li>
                                                    <a href="#tab_3-3" data-toggle="tab">
                                                        <i class="fa fa-lock"></i> Change Password </a>
                                                </li>
                                                <li>
                                                    <a href="#tab_4-4" data-toggle="tab">
                                                        <i class="fa fa-eye"></i> Privacity Settings </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab_1-1">
                                                    <form action="#" role="form">
                                                        <div class="form-group">
                                                            <label class="control-label">First Name</label>
                                                            <input type="text" class="form-control" placeholder="John"> </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Last Name</label>
                                                            <input type="text" class="form-control" placeholder="Doe"> </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Mobile Number</label>
                                                            <input type="text" class="form-control" placeholder="+1 646 580 DEMO (6284)"> </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Interests</label>
                                                            <input type="text" class="form-control" placeholder="Design, Web etc."> </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Occupation</label>
                                                            <input type="text" class="form-control" placeholder="Web Developer"> </div>
                                                        <div class="form-group">
                                                            <label class="control-label">About</label>
                                                            <textarea placeholder="We are KeenThemes!!!" rows="3" class="form-control"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Website Url</label>
                                                            <input type="text" class="form-control" placeholder="http://www.mywebsite.com"> </div>
                                                        <div class="margiv-top-10">
                                                            <a class="btn green" href="javascript:;"> Save Changes </a>
                                                            <a class="btn default" href="javascript:;"> Cancel </a>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane" id="tab_2-2">
                                                    <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                                        </p>
                                                    <form role="form" action="#">
                                                        <div class="form-group">
                                                            <div data-provides="fileinput" class="fileinput fileinput-new">
                                                                <div style="width: 200px; height: 150px;" class="fileinput-new thumbnail">
                                                                    <img alt="" src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image"> </div>
                                                                <div style="max-width: 200px; max-height: 150px;" class="fileinput-preview fileinput-exists thumbnail"> </div>
                                                                <div>
                                                                    <span class="btn default btn-file">
                                                                        <span class="fileinput-new"> Select image </span>
                                                                        <span class="fileinput-exists"> Change </span>
                                                                        <input type="file" name="..."> </span>
                                                                    <a data-dismiss="fileinput" class="btn default fileinput-exists" href="javascript:;"> Remove </a>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix margin-top-10">
                                                                <span class="label label-danger"> NOTE! </span>
                                                                <span> Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
                                                            </div>
                                                        </div>
                                                        <div class="margin-top-10">
                                                            <a class="btn green" href="javascript:;"> Submit </a>
                                                            <a class="btn default" href="javascript:;"> Cancel </a>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane" id="tab_3-3">
                                                    <form action="#">
                                                        <div class="form-group">
                                                            <label class="control-label">Current Password</label>
                                                            <input type="password" class="form-control"> </div>
                                                        <div class="form-group">
                                                            <label class="control-label">New Password</label>
                                                            <input type="password" class="form-control"> </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Re-type New Password</label>
                                                            <input type="password" class="form-control"> </div>
                                                        <div class="margin-top-10">
                                                            <a class="btn green" href="javascript:;"> Change Password </a>
                                                            <a class="btn default" href="javascript:;"> Cancel </a>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane" id="tab_4-4">
                                                    <form action="#">
                                                        <table class="table table-bordered table-striped">
                                                            <tbody><tr>
                                                                <td> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus.. </td>
                                                                <td>
                                                                    <label class="uniform-inline">
                                                                        <div class="radio"><span><input type="radio" value="option1" name="optionsRadios1"></span></div> Yes </label>
                                                                    <label class="uniform-inline">
                                                                        <div class="radio"><span class="checked"><input type="radio" checked="" value="option2" name="optionsRadios1"></span></div> No </label>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                                <td>
                                                                    <label class="uniform-inline">
                                                                        <div class="checker"><span><input type="checkbox" value=""></span></div> Yes </label>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                                <td>
                                                                    <label class="uniform-inline">
                                                                        <div class="checker"><span><input type="checkbox" value=""></span></div> Yes </label>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td> Enim eiusmod high life accusamus terry richardson ad squid wolf moon </td>
                                                                <td>
                                                                    <label class="uniform-inline">
                                                                        <div class="checker"><span><input type="checkbox" value=""></span></div> Yes </label>
                                                                </td>
                                                            </tr>
                                                        </tbody></table>
                                                        <!--end profile-settings-->
                                                        <div class="margin-top-10">
                                                            <a class="btn green" href="javascript:;"> Save Changes </a>
                                                            <a class="btn default" href="javascript:;"> Cancel </a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                </div>
                                <!--end tab-pane-->
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
		
		