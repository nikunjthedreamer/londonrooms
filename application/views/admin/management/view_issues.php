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
                                <a href="#">Properties Management</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>View Issues</span>
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
                    <h3 class="page-title"> View Issues
                        
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
		<span class="caption-subject font-red-sunglo bold uppercase">Edit Issues</span>
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
		<div class="portlet-body">
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
      <?php   //print_r($detail);
$attributes = array('class' => 'form-horizontal');   
echo form_open('admin/management/edit_issues/'.$this->uri->segment(4).'', $attributes); ?>
		
		<div class="form-body">
		
		
		
		
		
		<div class="form-group">
	
		<label class="col-md-3 control-label">Status</label>
			<div  class="col-md-4">
			<select class="form-control" name="status"  >
			<option value="">--Select status--</option> 
			<option <?php  if($detail->status=='Pending'){ echo "selected"; }  ?>  value="Pending">Pending</option> 
			<option <?php  if($detail->status=='Resolved'){ echo "selected"; }  ?>  value="Resolved">Resolved</option> 
			
			</select>
			</div>
		</div>
		
		
		<div class="form-actions">
		<div class="row">
		<div class="col-md-offset-3 col-md-9">
		<button type="submit" class="btn green">Submit</button>
		<a href="/index.php/admin/management/" class="btn default">Cancel</a>
		</div>
		</div>
		</div>
		

		<!-- END FORM-->
		</div>		 <?php echo form_close();
?>
		</div>

            <!-- END REGISTRATION FORM -->
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
        <!-- BEGIN SAMPLE FORM PORTLET-->
		<div class="portlet light bordered">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="icon-equalizer font-green-haze"></i>
                                                    <span class="caption-subject font-green-haze bold uppercase">Properties Issues Detail</span>
                                                    <span class="caption-helper">detail...</span>
                                                </div>
                                                <div class="tools">
                                                    <a class="collapse" href="" data-original-title="" title=""> </a>
                                                    <a class="config" data-toggle="modal" href="#portlet-config" data-original-title="" title=""> </a>
                                                    <a class="reload" href="" data-original-title="" title=""> </a>
                                                    <a class="remove" href="" data-original-title="" title=""> </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
				<div class="form-body ">
							
                                                        
		<h3 class="form-section">Properties Issues Detail:</h3>
		<div class="row">
                                                            <div class="col-md-6">
                                                              <div class="form-group">
		<label class="col-md-4 control-label">Tenants Name:</label>
			<div class="col-md-4">
				<?php  echo $detail->tenants_name;  ?>
			</div>
		</div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
		<label class="col-md-4 control-label"> Phone Number:</label>
		<div class="col-md-4">
			<?php  echo $detail->tenants_phone_number  ?>
		</div>
		</div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
		
		<div class="row">
                                                            <div class="col-md-6">
		<div class="form-group">
		<label class="col-md-4 control-label">Tenants Email:</label>
			<div class="col-md-4">
			<?php  echo $detail->tenants_email  ?>
			</div>
		</div></div>
		 <div class="col-md-6">
		<div class="form-group">
		<label class="col-md-4 control-label">Property Address:</label>
			<div class="col-md-6">
				<?php  echo $detail->address  ?>
			</div>
		</div></div></div>
		
		<div class="row">  <div class="col-md-6">
		<div class="form-group">
		<label class="col-md-4 control-label">Room:</label>
			<div  class="col-md-4">
				<?php  echo $detail->room_name  ?>
			</div>
		</div>	</div>
		  <div class="col-md-6">
		<div class="form-group">
		<label class="col-md-4 control-label">Details Of The Issue:</label>
			<div class="col-md-6">
			<?php  echo $detail->detail_issues  ?>
				
			</div>
		</div></div></div>
		<div class="row">
		  <div class="col-md-6">
		<div class="form-group">
		<label class="col-md-4 control-label">Status:</label>
			<div class="col-md-4">
			<?php  echo $detail->status  ?>
				
			</div>
		</div></div></div>
		
		
		 <?php //echo form_close();
?>
		<!-- END FORM-->
		</div></div></div>
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-red-sunglo">
                                        <i class="icon-settings font-red-sunglo"></i>
                                        <span class="caption-subject bold uppercase"> Property Issues</span>
                                    </div>
                                    <div class="actions">
                                        <div class="btn-group">
                                            <a class="btn btn-sm green dropdown-toggle" href="javascript:;" data-toggle="dropdown"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-pencil"></i> Edit </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-trash-o"></i> Delete </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-ban"></i> Ban </a>
                                                </li>
                                                <li class="divider"> </li>
                                                <li>
                                                    <a href="javascript:;"> Make admin </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <form role="form">
                                        <div class="form-body">
                                            
                                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                <textarea id="_detail" class="form-control" name="detail" rows="3" ></textarea>
                                                <label for="form_control_1">Property Management Issues......</label>
                                            </div>
                                            <input type="hidden" id="_id" name="issues_id" value="<?php echo $this->uri->segment(4);   ?>" />
                                        </div>
                                        <div class="form-actions noborder">
                                            <button type="button" onclick="get_timeline();" class="btn blue">Submit</button>
                                            <button type="button" class="btn default">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END SAMPLE FORM PORTLET-->
					
							 <!-- BEGIN TODO CONTENT -->
                                <div class="todo-content col-md-12 col-sm-12">
                                    <div class="portlet light bordered">
                                        <!-- PROJECT HEAD -->
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="icon-bar-chart font-green-sharp hide"></i>
                                                <span class="caption-helper">
												Detail issues:</span> &nbsp;
                                                <span class="caption-subject font-green-sharp bold uppercase">Property Detail issues Timeline...</span>
                                            </div>
                                          
                                        </div>
                                        <!-- end PROJECT HEAD -->
                                        <div class="portlet-body">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div id="timeline_div" class="todo-tasklist">
													
													
                                                       <?php 
													   $color=array('green','red','blue','purple','yellow');
														//print_r($color);
								$i=0;
								
								
								foreach($timeline as $time){ 
								if($i>4){
									
									$i=0;
								}
								  ?>
                                                  <div class="todo-tasklist-item todo-tasklist-item-border-<?php echo $color[$i];    ?>"> 
												  <div class="col-md-12 col-sm-12">
                                                            <div class="todo-tasklist-controls pull-left">
                                                                <span class="todo-tasklist-date">
                                                                    <i class="fa fa-calendar"></i><?php   echo date("j F , Y" ,strtotime($time['timeline_date'])); ?> </span>
                                                                
                                                            </div>
                                                            <div class="todo-tasklist-controls pull-left">
                                                                <span class="todo-tasklist-date">
                                                                    <i class="fa fa-clock-o"></i><?php   echo date("H:m A" ,strtotime($time['timeline_time']));  ?> </span>
                                                                
                                                            </div>
															</div>
                                                          
                                                            <div class="todo-tasklist-item-text"> <?php  echo $time['detail'] ?> </div>
                                                            
                                                        </div>

<?php $i++; }   ?>

                                                    </div>
                                                </div>
                                               
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END TODO CONTENT -->
									
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
		
<script>
function get_timeline(){
	  // stops the jump when an anchor clicked.
		var detail = $("#_detail").val(); // anchors do have text not values.
		var id = $("#_id").val(); // anchors do have text not values.
		 
      $.ajax({
        url: '<?php  echo base_url();   ?>index.php/admin/management/timeline/',
        data: {'detail': detail,'id': id}, // change this to send js object
        type: "GET",
        success: function(data){
			$("#timeline_div").html(data);
			$("#_detail").val(''); 
        }
      });
	}
	function ajaxindicatorstart(text)
	{
		if(jQuery('body').find('#resultLoading').attr('id') != 'resultLoading'){
		jQuery('body').append('<div id="resultLoading" style="display:none"><div><img src="/assets/global/img/ajax-loading.gif"><div>'+text+'</div></div><div class="bg"></div></div>');
		}
		
		jQuery('#resultLoading').css({
			'width':'100%',
			'height':'100%',
			'position':'fixed',
			'z-index':'10000000',
			'top':'0',
			'left':'0',
			'right':'0',
			'bottom':'0',
			'margin':'auto'
		});	
		
		jQuery('#resultLoading .bg').css({
			'background':'#000000',
			'opacity':'0.7',
			'width':'100%',
			'height':'100%',
			'position':'absolute',
			'top':'0'
		});
		
		jQuery('#resultLoading>div:first').css({
			'width': '250px',
			'height':'75px',
			'text-align': 'center',
			'position': 'fixed',
			'top':'0',
			'left':'0',
			'right':'0',
			'bottom':'0',
			'margin':'auto',
			'font-size':'16px',
			'z-index':'10',
			'color':'#ffffff'
			
		});

	    jQuery('#resultLoading .bg').height('100%');
        jQuery('#resultLoading').fadeIn(300);
	    jQuery('body').css('cursor', 'wait');
	}

	function ajaxindicatorstop()
	{
	    jQuery('#resultLoading .bg').height('100%');
        jQuery('#resultLoading').fadeOut(300);
	    jQuery('body').css('cursor', 'default');
	}
jQuery(document).ajaxStart(function () {
   		//show ajax indicator
		ajaxindicatorstart('loading data.. please wait..');
  }).ajaxStop(function () {
		//hide ajax indicator
		ajaxindicatorstop();
  });
</script>		