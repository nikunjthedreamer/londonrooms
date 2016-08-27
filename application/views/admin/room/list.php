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
                                <a href="#">Rooms Available</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Rooms List</span>
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
                    <h3 class="page-title"> Rooms List
                        
                    </h3>
                    <!-- END PAGE TITLE-->	<?php
      //flash messages
      if($this->session->flashdata('flash_message')){ ?>
       
        <div class="alert <?php echo $this->session->flashdata('Type')   ?>">
           <a class="close" data-dismiss="alert">�</a>
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
                                        <span class="caption-subject bold uppercase"> Managed Rooms</span>
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
												<?php if($this->session->userdata('role')=="Admin"){  ?>
												<a href="<?php  echo base_url();   ?>index.php/admin/room/add" id="register-btn" class="btn sbold green">Add New Available Room <i class="fa fa-plus"></i></a><?php  }  ?>
                                                    
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
									
				<table class="table dataTable   table-striped table-bordered table-hover table-checkable order-column" id="property_list">
				<thead>
				<tr>
				<th> Room </th>
				<th>Property Address </th>			
				<th>Price PCM </th>			
				<th>Date Available </th>			
				<th>Status</th>			
				<th>Action</th>			
				</tr>
				</thead>
				<tbody>
				<?php 
				$i=0;
				//echo "<pre>";
				//print_r($roomlist);
				//die;
				foreach($roomlist as  $room){  $i++; ?>
				<tr class="odd gradeX">
				<td> <?php echo $room['room_name'] ;   ?></td>
				<td><?php echo $room['address'] ;   ?></td>
				<td><?php if(!empty($room['price'])){ echo $room['price'].'&pound' ; }  ?></td>
			     <td><?php if($room['finish_date']==""){ echo date("j F , Y");     }else{    echo date("j F , Y" ,strtotime($room['finish_date']));    }    ?></td>
				 <td><?php  if($room['status']=="AVAILABLE" ){  ?> <span class='label label-sm label-danger'> &nbsp;<?php echo $room['status']?> </span>  <?php
				 }   ?><?php  if($room['status']=="" ){  ?>  <span class='label label-sm label-info '> <?php echo "EMPTY"   ?> </span>  <?php
				 }   ?><?php  if($room['status']=="LET" ){  ?> <span class='label label-sm label-success width_btn'> <?php echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$room['status'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';   ?> </span> <?php
				 }   ?><?php  if($room['status']=="EXTENDING" ){  ?>  <span class='label label-sm label-warning'> <?php echo $room['status']   ?> </span>  <?php
				 }   ?>
                 </td>
			     <td>
                     <?php  if($this->session->userdata('role')=="Admin" ||  $this->session->userdata('role')=="Negotiator" || $this->session->userdata('role')=="Property Manager" ){  ?>
                     <a href="<?php  echo base_url();   ?>index.php/admin/tenant/add" class="btn btn-info">Offers</a>
                     <?php } if($this->session->userdata('role')=="Admin" ){  ?>
                         <a href="<?php  echo base_url();   ?>index.php/admin/room/price/<?php echo $room['id']; ?>" class="btn btn-info">Set Price</a>
                     <?php } if($this->session->userdata('role')=="Admin"){  ?>
                     <a href="<?php  echo base_url();   ?>index.php/admin/room/status/<?php echo $room['id']; ?>" class="btn btn-info">Set Status</a><?php  } ?>
                     <?php if($this->session->userdata('role')=="Admin"){  ?>
                     <a id="ref2_<?php echo $room['tid']; ?>" class="edit" data-toggle="modal" href='#interval' onclick="GET_CONTRACT_NO(<?php echo $room['tid']; ?>)" >
                         <i id="extended_icon" class="btn btn-info">Extended</i>
                     </a>
                     <?php  }?>
                 </td>
				</tr>
				<?php  }  ?>

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

 <div id="interval" class="modal fade" tabindex="-1" aria-hidden="true" >

     <div class="modal-content" >
         <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
             <h4 class="modal-title">Extended Contract</h4>
         </div>
         <div class="modal-body">
             <form  name="interval_form" id="interval_form" role="form" action="#"  method="post" class="form-horizontal">
                 <div class="scroller" style="height:100px" data-always-visible="1" data-rail-visible="1">
                     <div class="row">
                         <div class="form-group">
                             <label class="col-md-3 control-label">To Date</label>
                             <div class="col-md-4">
                                 <div class="input-group">
                                     <div class="input-group input-medium date date-picker"  data-date-format="dd-mm-yyyy">
                                         <input class="form-control " type="text" id="to_date" name="to_date" value="<?php echo date('d-m-Y',strtotime('+1 year')); ?>"  readonly="readonly" size="35"  />
                                            <span class="input-group-btn">
                                                <button type="button" class="btn default">
                                                    <i class="fa fa-calendar"></i>
                                                </button>
                                            </span>
                                         <input type="hidden" name="CONTRACT_NO_P" id="CONTRACT_NO_P" value="ss" />
                                     </div>
                                 </div>
                             </div>






                         </div>

                     </div>


                 </div>
             </form>

             <div class="modal-footer">
                 <button type="button" class="btn blue-chambray" id="CONTRACT_EXTEND" onclick="CONTRACT_EXTEND();">Save</button>
                 <button type="button" data-dismiss="modal" class="btn default close_modal" id="close_edit_modal">Cancel</button>

             </div>
         </div>
     </div>




 </div>

 <script>
     function GET_CONTRACT_NO(CONTRACT_NO_P){
         //alert(CONTRACT_NO_P);
         $('#CONTRACT_NO_P').val(CONTRACT_NO_P);
     }

     function CONTRACT_EXTEND(){
         //alert('dd');
         var CONTRACT_NO_P = $('#CONTRACT_NO_P').val();
         //alert(CONTRACT_NO_P);
         var to_date = $('#to_date').val();
         //alert(to_date);
         //alert ('admin/room/extend_contract/'+CONTRACT_NO_P+'/'+to_date);
         $.ajax({
             url : 'room/extend_contract/'+CONTRACT_NO_P+'/'+to_date,
             type : 'GET', //the way you want to send data to your URL
             success : function(data){ //probably this request will return anything, it'll be put in var "data"
                 //var container = $('#container'); //jquery selector (get element by id)
                 //alert(data);
                 if(data > -1){
                     //alert('sss');
                     //alert('تم الاعتماد بنجاح واحتساب نسبة الخصم');

                     /* $('#assist_icon2_'+SCIT_NO_P).attr("class", 'font-green-jungle fa fa-check-circle');
                      $('#ref2_'+SCIT_NO_P).removeAttr( "onclick" )
                      $('#value_'+SCIT_NO_P).html(data);
                      $('#Ques_'+SCIT_NO_P).css('visibility','hidden');*/
                 }
             }
         });


     }

 </script>
