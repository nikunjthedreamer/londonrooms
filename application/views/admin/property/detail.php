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
                                <span>Property detail</span>
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
                    <h3 class="page-title"> Property Detail  </h3>
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
                                        <span class="caption-subject bold uppercase"> Managed Property Detail</span>
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
                                   <!-- BEGIN TAB PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-anchor font-green-sharp"></i>
                                        <span class="caption-subject font-green-sharp bold uppercase"><?php echo $property[0]['address'];   ?></span>
                                    </div>
                                    <div class="actions">
                                        <div class="btn-group">
                                            <a class="btn green-haze btn-outline btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li>
                                                    <a href="javascript:;"> Option 1</a>
                                                </li>
                                                <li class="divider"> </li>
                                                <li>
                                                    <a href="javascript:;">Option 2</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Option 3</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Option 4</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body">  
                                    <div class="tabbable tabbable-tabdrop">
									<?php 
										$tab = (isset($_GET['tab'])) ? $_GET['tab'] : 'details'; 
									?> 
                                        <ul class="nav nav-tabs">
                                            <li class="<?php echo ($tab == 'details') ? 'active' : ''; ?>">
                                                <a href="#details" data-toggle="tab">Details</a>
                                            </li>
                                            <li class="<?php echo ($tab == 'rooms') ? 'active' : ''; ?>">
                                                <a href="#rooms" data-toggle="tab">Rooms</a>
                                            </li>
                                            <li class="<?php echo ($tab == 'tenancies') ? 'active' : ''; ?>">
                                                <a href="#tenancies" data-toggle="tab">Tenancies</a>
                                            </li>
                                            <li class="<?php echo ($tab == 'Mortgages') ? 'active' : ''; ?>">
                                                <a href="#Mortgages" data-toggle="tab">Mortgages</a>
                                            </li>
                                            <li class="<?php echo ($tab == 'Notes') ? 'active' : ''; ?>">
                                                <a href="#Notes" data-toggle="tab">Notes</a>
                                            </li>
                                            <li class="<?php echo ($tab == 'Calendar') ? 'active' : ''; ?>">
                                                <a href="#Calendar" data-toggle="tab">Calendar entries</a>
                                            </li>
                                            <li class="<?php echo ($tab == 'Bills') ? 'active' : ''; ?>">
                                                <a href="#Bills" data-toggle="tab">Bills</a>
                                            </li>
                                        </ul>
	<div class="tab-content">
		<div class="tab-pane <?php echo ($tab == 'details') ? 'active' : ''; ?>" id="details">
		  <div class="row">
                        <div class="col-md-6">
                            <!-- BEGIN BASIC PORTLET-->
                            <div class="portlet light portlet-fit bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class=" icon-layers font-red"></i>
                                        <span class="caption-subject font-red bold uppercase">Detail</span>
                                    </div>
                                  </div>
                                <div class="portlet-body">
                        <div id="gmap_basic" class="gmaps portlet light tenat_det" style="min-height:auto"> 
						 <?php 
						/* echo "<pre>";
						print_r($property);  */ ?>
					<span class="profile-desc-text"><label class="ten_det">Address: </label><?php echo $property[0]['address']; ?></span>
					<span class="profile-desc-text"><label class="ten_det">Postcode: </label><?php echo $property[0]['postcode']; ?></span>
					<span class="profile-desc-text"><label class="ten_det">Landlord Name: </label><?php echo $property[0]['landlord_name']; ?></span>
					<span class="profile-desc-text"><label class="ten_det">Landlord Address: </label><?php echo $property[0]['landlord_address']; ?></span>
					<span class="profile-desc-text"><label class="ten_det">Landlord Phone: </label><?php echo $property[0]['landlord_phone']; ?></span>
					<span class="profile-desc-text"><label class="ten_det">Landlord Email: </label><?php echo $property[0]['landlord_email']; ?></span>
					<span class="profile-desc-text"><label class="ten_det">Property Price: </label><?php echo $property[0]['property_price'].'&pound';?> </span>
					<span class="profile-desc-text"><label class="ten_det">Contract Start Date: </label><?php echo date("d-m-Y", strtotime($property[0]['Contract_start_date']));?></span>
					<span class="profile-desc-text"><label class="ten_det">Contract End Date: </label><?php echo date("d-m-Y", strtotime($property[0]['Contract_end_date'])); ?></span>
						
					</div>
				</div>
			</div>
                            <!-- END BASIC PORTLET-->
                        </div>
                        <div class="col-md-6">
                            <!-- BEGIN MARKERS PORTLET-->
                            <div class="portlet light portlet-fit bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class=" icon-layers font-blue"></i>
                                        <span class="caption-subject font-blue bold uppercase">Location</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
<?php
$address=$property[0]['address'].' '.$property[0]['postcode'];
$city = $property[0]['landlord_name']; 
$string = str_replace(' ', '+', $address);

$url = "http://maps.google.com/maps/api/geocode/json?address=".$string."&sensor=false";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$response = curl_exec($ch);
curl_close($ch);

$response = json_decode($response);
if(!empty($response->results)){
$lat = $response->results[0]->geometry->location->lat;
$long = $response->results[0]->geometry->location->lng;	
	
}else{
$lat = '51.507222';
$long = '-0.1275';

}
?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyB-g3wNZEYbIig16eotKC-BxTSgnZF-cpQ&sensor=false"></script>
<script>
var lat=<?php echo $lat; ?>;
	var longt=<?php echo $long; ?>;
	
var myCenter=new google.maps.LatLng(lat,longt);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:15,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("gmap_marker"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);

var infowindow = new google.maps.InfoWindow({
  content:"<?php echo $address; ?></br><?php echo $city; ?>"
  });

google.maps.event.addListener(marker, 'mouseover', function() {
  infowindow.open(map,marker);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
                                    <div id="gmap_marker" class="gmaps"> </div>                                </div>
                            </div>
                            <!-- END MARKERS PORTLET-->
                        </div>
                    </div>
				
				
	</div>
    <div class="tab-pane <?php echo ($tab == 'rooms') ? 'active' : ''; ?>" id="rooms" >
       <div class="portlet-body">
			<div class="table-toolbar">
				<div class="row">
					<div class="col-md-6">
					
						<div class="btn-group">
						 <a href="<?php  echo base_url();   ?>index.php/admin/property/add_room/<?php echo $property[0]['id']; ?>" id="register-btn" class="btn sbold green">New Room <i class="fa fa-plus"></i></a>
							
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
								
	<table class="table dataTable   table-striped table-bordered table-hover table-checkable order-column" id="room">
	<thead>
	<tr>
		
		<th> Room Name </th>
		<th> Tenant </th>
		<th> Actions </th>	
		
	</tr>
	</thead>
	<tbody>
	<?php foreach($rooms as  $room){  ?>
	<tr class="odd gradeX">
	
	<td> 
	<?php echo $room['room_name'] ;   
		if($room['status'] == 'AVAILABLE'){
			?><p style="color:#0F0;">&bull;</p><?php	
		}
	?>
	</td>
	<td> 
	<?php if(!empty($room['property_room_id'])){ echo $room['title'].' '.$room['fname'].' '.$room['surname'];  }else{ echo "No Tenant" ;  }   ?>
	</td>
	<td> 
	<a href="<?php  echo base_url();   ?>index.php/admin/property/edit_room/<?php echo $room['pid']; ?>/<?php echo $room['id']; ?>/" id="register-btn" class="btn btn-info">Edit</a>  
	<a href="<?php  echo base_url();   ?>index.php/admin/property/delete_room/<?php echo $room['pid']; ?>/<?php echo $room['id']; ?>/" onclick="return confirm('Are you sure you want to delete this item?');" id="register-btn" class="btn  btn-danger">Delete</a>  
	</td>
	</tr>
	<?php }  ?>

	</tbody>
	</table>
	</div> 
    </div>
	<div class="tab-pane <?php echo ($tab == 'tenancies') ? 'active' : ''; ?>" id="tenancies">
	   <div class="portlet-body">
			<div class="table-toolbar">
				<div class="row">
					<div class="col-md-6">
					
						<div class="btn-group">
						 <a href="<?php  echo base_url();   ?>index.php/admin/property/add_tenancy/<?php echo $property[0]['id']; ?>" id="register-btn" class="btn sbold green">New Tenancy <i class="fa fa-plus"></i></a>
						
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
						
	<table class="table dataTable   table-striped table-bordered table-hover table-checkable order-column" id="tenancie">
	<thead>
	<tr>
		
				<th> Start date </th>
		<th> Finish date </th>
		<th> Tenant </th>
		<th> Actions </th>	
		
	</tr>
	</thead>
	<tbody>
	<?php foreach($tenancy as  $tenancylist){  ?>
	<tr class="odd gradeX">
	<td> 
	<?php echo date("d-m-Y", strtotime($tenancylist['start_date'])); ?>
	</td>
	<td>
	 <?php echo date("d-m-Y", strtotime($tenancylist['finish_date'])); ?> 
	</td>
	<td>
	 <?php echo $tenancylist['fname'].' '.$tenancylist['surname'] ; ?> 
	</td>
				
	<td> 
	
<a href="<?php  echo base_url();   ?>index.php/admin/tenancy/tenancy_detail/<?php echo $tenancylist['property_id']; ?>/<?php echo $tenancylist['id']; ?>/" id="register-btn" class="btn btn-info">Detail</a>  
		
	<a href="<?php  echo base_url();   ?>index.php/admin/property/edit_tenancy/<?php echo $tenancylist['property_id']; ?>/<?php echo $tenancylist['id']; ?>/" id="register-btn" class="btn btn-info">Edit</a>  
	
	<a href="<?php  echo base_url();   ?>index.php/admin/property/delete_tenancy/<?php echo $tenancylist['property_id']; ?>/<?php echo $tenancylist['id']; ?>/" onclick="return confirm('Are you sure you want to delete this item?');" id="register-btn" class="btn  btn-danger">Delete</a>  
		
	</td>
	</tr>
	<?php }  ?>

	</tbody>
	</table>
	</div> 
</div>
    <div class="tab-pane <?php echo ($tab == 'Mortgages') ? 'active' : ''; ?>" id="Mortgages">
            <div class="portlet-body">
				<div class="table-toolbar">
					<div class="row">
						<div class="col-md-6">
							<div class="btn-group">
								<a href="<?php  echo base_url();   ?>index.php/admin/property/add_mortgage/<?php echo $property[0]['id']; ?>" id="register-btn" class="btn sbold green">New Mortgage <i class="fa fa-plus"></i></a>								 
																	
							</div>										
                        </div>
                        <div class="col-md-6">
                            <div class="btn-group pull-right">
                                <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                 <i class="fa fa-angle-down"></i>
                                </button>                             
                            </div>
                        </div>
                    </div>
                </div>
					<?php
						/* echo "<pre>";
						print_r($tenancy); */ ?>				
				<table class="table dataTable   table-striped table-bordered table-hover table-checkable order-column" id="Mortgage">
				<thead>
				<tr>
					<th> Start Date </th>
					<th> Value </th>
					<th> Notes </th>
					<th> Actions </th>	
					
				</tr>
				</thead>
				<tbody>
				<?php foreach($mortgage as  $mortgagelist){  ?>
				<tr class="odd gradeX">
				<td> 
				<?php echo date("d-m-Y", strtotime($mortgagelist['mrtg_startDate']));  ?>
				</td>
				
				<td>
				 <?php echo $mortgagelist['m_value'] ;   ?> 
				</td>
				<td>
				 <?php echo $mortgagelist['notes'] ;   ?> 
				</td>
							
				<td> 
				<a href="#" id="register-btn" class="btn btn-info">Detail </a>
				
				<a href="<?php  echo base_url();   ?>index.php/admin/property/edit_mortgage/<?php echo $mortgagelist['pid']; ?>/<?php echo $mortgagelist['id']; ?>/" id="register-btn" class="btn btn-info">Edit</a>  
	
				
				<a href="<?php  echo base_url();   ?>index.php/admin/property/delete_mortgage/<?php echo $mortgagelist['pid']; ?>/<?php echo $mortgagelist['id']; ?>/" onclick="return confirm('Are you sure you want to delete this item?');" id="register-btn" class="btn  btn-danger">Delete</a>  
	
				</td>
				</tr>
				<?php }  ?>

				</tbody>
				</table>
         </div>
    </div>
    <div class="tab-pane <?php echo ($tab == 'Notes') ? 'active' : ''; ?>" id="Notes">
        <div class="portlet-body">
				<div class="table-toolbar">
					<div class="row">
						<div class="col-md-6">
							<div class="btn-group">
								<a href="<?php  echo base_url();   ?>index.php/admin/property/add_note/<?php echo $property[0]['id']; ?>" id="register-btn" class="btn sbold green">New Note <i class="fa fa-plus"></i></a>								 
																	
							</div>										
                        </div>
                        <div class="col-md-6">
                            <div class="btn-group pull-right">
                                <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                 <i class="fa fa-angle-down"></i>
                                </button>                             
                            </div>
                        </div>
                    </div>
                </div>
					
				<table class="table dataTable   table-striped table-bordered table-hover table-checkable order-column" id="Note">
				<thead>
				<tr>
					<th> Date </th>
					<th> Note Type </th>
					<th> Note Content </th>
					<th> Actions </th>	
					
				</tr>
				</thead>
				<tbody>
				<?php foreach($notes as  $note){  ?>
				<tr class="odd gradeX">
				<td> 
				<?php echo date("d-m-Y", strtotime($note['note_date'])); ?>
				</td>
				<td>
				 <?php echo $note['note_type'] ;   ?> 
				</td>
				<td>
				 <?php echo $note['content'] ;   ?> 
				</td>
							
				<td> 
				<a href="#" id="register-btn" class="btn btn-info">Detail </a> 
				<a href="<?php  echo base_url();   ?>index.php/admin/property/edit_note/<?php echo $note['pid']; ?>/<?php echo $note['id']; ?>/" id="register-btn" class="btn btn-info">Edit</a>  
	
				<a href="<?php  echo base_url();   ?>index.php/admin/property/delete_note/<?php echo $note['pid']; ?>/<?php echo $note['id']; ?>/" onclick="return confirm('Are you sure you want to delete this item?');" id="register-btn" class="btn  btn-danger">Delete</a>  
	
				</td>
				</tr>
				<?php }  ?>

				</tbody>
				</table>
         </div>
    </div>
        <div class="tab-pane <?php echo ($tab == 'Calendar') ? 'active' : ''; ?>" id="Calendar">
        <div class="portlet-body">
				<div class="table-toolbar">
					<div class="row">
						<div class="col-md-6">
							<div class="btn-group">
								<a href="<?php  echo base_url();   ?>index.php/admin/property/add_calendar/<?php echo $property[0]['id']; ?>" id="register-btn" class="btn sbold green">New Calendar Entry <i class="fa fa-plus"></i></a>								 
																	
							</div>										
                        </div>
                        <div class="col-md-6">
                            <div class="btn-group pull-right">
                                <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                 <i class="fa fa-angle-down"></i>
                                </button>                             
                            </div>
                        </div>
                    </div>
                </div>
					
				<table class="table dataTable   table-striped table-bordered table-hover table-checkable order-column" id="calendar">
				<thead>
				<tr>
					<th> Date </th>
					<th> Event </th>
					<th> Description </th>
					<th> Note </th>
					<th> Actions </th>	
					
				</tr>
				</thead>
				<tbody>
				<?php foreach($calendar as  $calendarEntry){  ?>
				<tr class="odd gradeX">
				<td> 
				<?php echo date("d-m-Y", strtotime($calendarEntry['calender_date'])); ?>
				</td>
				<td>
				 <?php echo $calendarEntry['event'] ;   ?> 
				</td>
				
				<td>
				 <?php echo $calendarEntry['description'] ;   ?> 
				</td>	<td>
				 <?php echo $calendarEntry['Note'] ;   ?> 
				</td>
							
				<td> 
				<a href="#" id="register-btn" class="btn btn-info">Detail </a>  
				
				<a href="<?php  echo base_url();   ?>index.php/admin/property/edit_calender/<?php echo $calendarEntry['pid']; ?>/<?php echo $calendarEntry['id']; ?>/" id="register-btn" class="btn btn-info">Edit</a>  
	
				<a href="<?php  echo base_url();   ?>index.php/admin/property/delete_calendar/<?php echo $calendarEntry['pid']; ?>/<?php echo $calendarEntry['id']; ?>/" onclick="return confirm('Are you sure you want to delete this item?');" id="register-btn" class="btn  btn-danger">Delete</a>  
	
				</td>
				</tr>
				<?php }  ?>

				</tbody>
				</table>
         </div>
    </div>
 
	<div class="tab-pane <?php echo ($tab == 'Bills') ? 'active' : ''; ?>" id="Bills">
        <div class="portlet-body">
				<div class="table-toolbar">
					<div class="row">
						<div class="col-md-6">
							<div class="btn-group">
								<a href="<?php  echo base_url();   ?>index.php/admin/property/add_bill/<?php echo $property[0]['id']; ?>" id="register-btn" class="btn sbold green">New Bill <i class="fa fa-plus"></i></a>								 
																	
							</div>										
                        </div>                       
                    </div>
                </div>
	
				<table class="table dataTable   table-striped table-bordered table-hover table-checkable order-column" id="Bills">
				<thead>
				<tr>
					<th> Service </th>
					<th> Supplier </th>
					<th> Account Number </th>
					<th> Account Holder </th>	
					<th> Payment Method </th>													
					<th> Actions </th>												
				</tr>
				</thead>
				<tbody>
				<?php foreach($bills as  $bill){  ?>
				<tr class="odd gradeX">
				<td> 
				<?php echo $bill['service'] ;   ?>
				</td>
				
				<td>
				 <?php echo $bill['supplier'] ;   ?> 
				</td>
				<td>
				 <?php echo $bill['acc_number'] ;   ?> 
				</td>
				<td>
				 <?php echo $bill['acc_holder'] ;   ?> 
				</td>
				<td>
				 <?php echo $bill['pay_method'] ;   ?> 
				</td>				
				<td> 
				<a href="<?php  echo base_url();   ?>index.php/admin/property/edit_bill/<?php echo $bill['pid']; ?>/<?php echo $bill['id']; ?>/" id="register-btn" class="btn btn-info">Edit</a>  
	
				
				<a href="<?php  echo base_url();   ?>index.php/admin/property/delete_bill/<?php echo $bill['pid']; ?>/<?php echo $bill['id']; ?>/" onclick="return confirm('Are you sure you want to delete this Bill?');" id="register-btn" class="btn  btn-danger">Delete</a>  
	
				</td>
				</tr>
				<?php }  ?>

				</tbody>
				</table>
         </div>
    </div>
                                           
    </div>
                                    </div>
                                    
                                </div>
                            </div>  
							  <!-- END TAB PORTLET-->		
				
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
		