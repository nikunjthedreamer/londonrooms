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
                                <span>Tenant Detail</span>
                            </li>
                        </ul>
                        
                    </div>
					<h3 class="page-title"> Tenant Detail
                        <small>tenant detail....</small>
                    </h3>
 <?php 
				$tdetail = $tenantdetail[0];
				$name = $tdetail['title'].' '.$tdetail['fname'].' '.$tdetail['surname'].'';
				$dob=date("d/m/Y", strtotime($tdetail['dob']));
				$agreement=date("d/m/Y", strtotime($tdetail['agreement']));
				$date_commencement=date("d/m/Y", strtotime($tdetail['date_commencement']));
				$rent_payment=date("d/m/Y", strtotime($tdetail['rent_payment']));
				$nxt_pymnt=date("d/m/Y", strtotime($tdetail['nxt_pymnt']));
				$nights_to=date("d/m/Y", strtotime($tdetail['nights_to']));
				$months_to=date("d/m/Y", strtotime($tdetail['months_to']));
?>                   
                    
<div class="row">
<div class="col-md-12">
	<div class="portlet box yellow">
			<div class="portlet-title">
			<div class="caption">
			<i class="fa fa-gift"></i>Tenant Detail: </div>
			<div class="tools">
			<a class="collapse" href="javascript:;" data-original-title="" title=""> </a>
			<a class="config" data-toggle="modal" href="#portlet-config" data-original-title="" title=""> </a>
			<a class="reload" href="javascript:;" data-original-title="" title=""> </a>
			<a class="remove" href="javascript:;" data-original-title="" title=""> </a>
			</div>
			</div>
			<div class="portlet-body form">
			<!-- BEGIN FORM-->


			<div class="form-body horizontal-form">
			<div class="row">
			<div class="form-group">
			<label class="col-md-1 control-label">Name:</label>
			<div class="col-md-3">
			<?php echo $name; ?>
			<span class="help-block">  </span>
			</div>
			<label class="col-md-1 control-label"></label>
			<div class="col-md-3">

			<span class="help-block">  </span>
			</div>
			</div>

			<div class="form-group">
			<label class="col-md-2 control-label">D.O.B.</label>
			<div class="col-md-4">
			<?php echo $dob; ?>
			</div>
			<label class="col-md-2 control-label">Nationality</label>
			<div class="col-md-4">
			<?php echo $tdetail['nationality']; ?>
			</div>
			</div>
			<div class="form-group">
			<label class="col-md-2 control-label">Mobile No.</label>
			<div class="col-md-4">
			<?php echo $tdetail['mobile']; ?>
			</div>
			<label class="col-md-2 control-label">Email</label>
			<div class="col-md-4">
			<?php echo $tdetail['email']; ?>
			</div>
			</div>		
			<div class="form-group">
			<label class="col-md-2 control-label">Passport/ID No</label>
			<div class="col-md-4">
			<?php echo $tdetail['passport_no']; ?>
			</div>
			<label class="col-md-2 control-label">Overseas Address</label>
			<div class="col-md-4">
			<?php echo $tdetail['address']; ?>
			</div>
			</div> 

			<div class="form-group">
			<label class="col-md-2 control-label">Postcode</label>
			<div class="col-md-4">
			<?php echo $tdetail['postcode']; ?> 
			</div>
			<label class="col-md-2 control-label">City and Country</label>
			<div class="col-md-4">
			<?php echo $tdetail['city_country']; ?>
			</div>
			</div> </div> 
			</div>

			<!-- END FORM-->
			</div>
	</div>



	<div class="portlet box red">
		<div class="portlet-title">
		<div class="caption">
		<i class="fa fa-gift"></i>Contract Detail: </div>
		<div class="tools">
		<a class="collapse" href="javascript:;" data-original-title="" title=""> </a>
		<a class="config" data-toggle="modal" href="#portlet-config" data-original-title="" title=""> </a>
		<a class="reload" href="javascript:;" data-original-title="" title=""> </a>
		<a class="remove" href="javascript:;" data-original-title="" title=""> </a>
		</div>
		</div>
		<div class="portlet-body form">
		<!-- BEGIN FORM-->


		<div class="form-body horizontal-form">
		<div class="row">
		<div class="form-group">
		<label class="col-md-2 control-label">Property Reference</label>
		<div class="col-md-4">
		<?php echo $tdetail['property_ref']; ?>
		</div>
		<label class="col-md-2 control-label">Room No</label>
		<div class="col-md-4">
		<?php echo $tdetail['room_no']; ?>
		</div>
		</div>
		<div class="form-group">			
		<label class="col-md-2 control-label">Type Of Room</label>
		<div class="col-md-4">
		<?php echo $tdetail['room_type']; ?>
		</div>
		<label class="col-md-2 control-label">No of People</label>
		<div class="col-md-4">
		<?php echo $tdetail['no_people']; ?>
		</div>
		</div>
		<div class="form-group">
		<label class="col-md-2 control-label">Standard Price</label>
		<div class="col-md-4">
		<?php echo $tdetail['price_weekly']; ?><span class="help-inline">per week</span>
		</div>
		<label class="col-md-2 control-label">Standard Price</label>
		<div class="col-md-4">
		<?php echo $tdetail['price_monthly']; ?><span class="help-inline">per month</span>
		</div>
		</div>
		<div class="form-group">
		<label class="col-md-2 control-label">Agreement From</label>
		<div class="col-md-4">
		<?php echo $agreement; ?>
		</div>
		<label class="col-md-2 control-label" style="padding-left:2px">Date of commencement</label>
		<div class="col-md-4">
		<?php echo $date_commencement; ?>
		</div>
		</div>
		<div class="form-group">
		<label class="col-md-2 control-label">Nights To End On 1st Or 15th</label>
		<div class="col-md-4">
		<?php echo $tdetail['nights_to_end']; ?>
		</div>
		<label class="col-md-2 control-label">Nights To</label>
		<div class="col-md-4">
		<?php echo $nights_to; ?>
		</div>
		</div>
		<div class="form-group">
		<label class="col-md-2 control-label">Agreement For</label>
		<div class="col-md-4">
		<?php echo $tdetail['agrmnt_for'];?>
		</div>
		<label class="col-md-2 control-label">Months To</label>
		<div class="col-md-4">
		<?php echo $months_to; ?>
		</div>
		</div>
		<div class="form-group">
		<label class="col-md-2 control-label">Deposit</label>
		<div class="col-md-4">
		<?php echo $tdetail['deposit']; ?>
		</div>
		<label class="col-md-2 control-label">To Pay</label>
		<div class="col-md-4">
		<?php echo $tdetail['deposit_month']; ?>
		</div>
		</div>
		<div class="form-group">
		<label class="col-md-2 control-label">Contract Fee</label>
		<div class="col-md-4">
		<?php echo $tdetail['contract_fee']; ?>Per Person</span>
		</div>
		</div> </div> 
	</div>
	</div>
	</div>
	
	<div class="portlet box green">
		<div class="portlet-title">
		<div class="caption">
		<i class="fa fa-gift"></i>Payment Details: </div>
		<div class="tools">
		<a class="collapse" href="javascript:;" data-original-title="" title=""> </a>
		<a class="config" data-toggle="modal" href="#portlet-config" data-original-title="" title=""> </a>
		<a class="reload" href="javascript:;" data-original-title="" title=""> </a>
		<a class="remove" href="javascript:;" data-original-title="" title=""> </a>
		</div>
		</div>
		<div class="portlet-body form">
		<!-- BEGIN FORM-->


		<div class="form-body horizontal-form">
		<div class="row">
		<div class="form-group">
<label class="col-md-2 control-label">Apportioned rent</label>
<div class="col-md-4">
<?php echo $rent_payment; ?> 
</div>
<label class="col-md-2 control-label">Total Nights</label>
<div class="col-md-4">
<?php echo $tdetail['total_nights']; ?>
</div>
</div>
<div class="form-group">				
<label class="col-md-2 control-label">Total Months</label>
<div class="col-md-4">
<?php echo $tdetail['total_months']; ?>
</div>
<label class="col-md-2 control-label">Next Payment On</label>
<div class="col-md-4">
<?php echo $nxt_pymnt; ?>
</div>
</div>
<div class="form-group">				
<label class="col-md-2 control-label">Other Costs</label>
<div class="col-md-4">
<?php echo $tdetail['other_costs']." ".$tdetail['cost_desc']; ?>
</div>
<label class="col-md-2 control-label">Description</label>
<div class="col-md-4">
<?php echo $tdetail['deposit2']; ?>
</div>
</div>
<div class="form-group">
<label class="col-md-2 control-label">Deposit</label>
<div class="col-md-4">
<?php echo $tdetail['deposit2']; ?>
</div>
<label class="col-md-2 control-label">Contract Fee</label>
<div class="col-md-4">
<?php echo $tdetail['contrctfee']; ?>
</div>
</div>

<div class="form-group">
<label class="col-md-2 control-label">Rent Payment</label>
<div class="col-md-4">
<?php echo $tdetail['rentpay']; ?>
</div>
<label class="col-md-2 control-label">Total</label>
<div class="col-md-4">
<?php echo $tdetail['net_total']; ?>
</div>
</div>
<div class="form-group">
<label class="col-md-2 control-label">Holding Deposit To Pay</label>
<div class="col-md-4">
<?php echo $tdetail['holding_deposit']; ?>
</div>
<label class="col-md-2 control-label">Outstanding Balance</label>
<div class="col-md-4">
<?php echo $tdetail['holding_deposit']; ?>
</div>
</div>
<div class="form-group">
<label class="col-md-2 control-label">Tenant's Signature</label>
<div class="col-md-4">
<img src="<?php  echo base_url()."/uploads/".$tdetail['signature'];   ?>"/><?php ; ?>
</div>
	</div></div></div>

	<!-- END FORM-->
	</div>
	</div>
	<div class="form-actions">
<div class="row">
<div class="col-md-offset-3 col-md-9">
<input id="register-btn" class="btn sbold green" type="button" value="Print this form" onClick="window.print()">
<a id="register-btn" class="btn sbold green" href="/index.php/admin/tenant/" class="btn default">Back</a>
</div>
</div>
</div>
<!-- BEGIN EXAMPLE TABLE PORTLET-->
<!-- BEGIN REGISTRATION FORM -->










<!-- END REGISTRATION FORM -->
<!-- END EXAMPLE TABLE PORTLET-->



</div>

                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
           
           
        </div></div>
        <!-- END CONTAINER -->
		
<script>
    	
	function updatePrice()
    {
		var stdrate = ($("#std_rate").val() ) == ""  ? 0 : parseFloat($("#std_rate").val() );
		var contrctfee = ($("#contrctfee").val() ) == ""  ? 0 : parseFloat($("#contrctfee").val() );
        var rentpay = ($("#rentpay").val() ) == ""  ? 0 : parseFloat($("#rentpay").val() );
		var otherCosts = ($("#other_costs").val() ) == ""  ? 0 : parseFloat($("#other_costs").val() );
		var deposit = 2*stdrate;
		
        var total = (deposit + +contrctfee + +rentpay + +otherCosts);
        var total = Math.round(total.toFixed(2));
        var deposit = Math.round(deposit.toFixed(2));		
		
        $("#nettotal").val(total);
        $("#holddeposit").val(deposit);
		
		var holddeposit = parseFloat($("#holddeposit").val() );
		var balance = (total - holddeposit); 
		var balance = balance.toFixed(2);
		$("#balance").val(balance);
    }
	function updateBal()
	{
		var total=  parseFloat($("#nettotal").val() );
		var deposit =  ($("#holddeposit").val() ) == ""  ? 0 : parseFloat($("#holddeposit").val() );
		
		var bal = (total - deposit); 
		var bal = bal.toFixed(2);
		$("#balance").val(bal);
		
	}
	function updateMonthlyRate()
	{
		 var stdRate = ($("#std_rate").val() ) == ""  ? 0 : parseFloat($("#std_rate").val() );
		 var mnthRate = (stdRate*52)/12;
		 var mnthRate = Math.round(mnthRate.toFixed(2));
		 $("#mnth_rate").val(mnthRate);		 
	}
	function getnewdate() {
		var noOfDays =  parseFloat($("#nightsEnd").val() );
		var tt = document.getElementById('agrmntFrom').value;
		var array = new Array();
		array = tt.split('/');
		var nDate = (array[1] + "/" + array[0] + "/" + array[2]);
		
		var date = new Date(nDate);
		var newdate = new Date(date);
		
		newdate.setDate(newdate.getDate() + noOfDays);
		
		var dd = newdate.getDate();
		var mm = newdate.getMonth() + 1;
		var y = newdate.getFullYear();

		var someFormattedDate = dd + '/' + mm + '/' + y;
		$('#nightsTo').val(someFormattedDate);
	}
	function getMnthsTo(noOfMnths) {
		var selectedValue = noOfMnths.value;
		
		var mnths =  parseFloat(selectedValue);
		var currentDt = document.getElementById('agrmntFrom').value;
		var array = new Array();
		array = currentDt.split('/');
		var nDate = (array[1] + "/" + array[0] + "/" + array[2]);
		
		var date = new Date(nDate);		
		var newDt = new Date(date);		
		
		newDt.setMonth(newDt.getMonth() + mnths);
		
		var dd = newDt.getDate();
		var mm = newDt.getMonth() + 1;
		var y = newDt.getFullYear();

		var newFormattedDate = dd + '/' + mm + '/' + y;
		$('#mnthsTo').val(newFormattedDate);
	}
	function getDeposit(duration){
		var selectedValue = duration.value;
		var stdrate = ($("#std_rate").val() ) == ""  ? 0 : parseFloat($("#std_rate").val() );
		var stdrateMonth = ($("#mnth_rate").val() ) == ""  ? 0 : parseFloat($("#mnth_rate").val() );
		
		 
		if(selectedValue == 1) 
		{
			 var deposit = stdrate;
		}
		else if (selectedValue == 4){
			 var deposit = stdrateMonth;
		}
		else {			
			var noDays = selectedValue*7;			
			var deposit = (stdrate/7)*noDays;
		}		
		 var deposit = deposit.toFixed(2);
		 $("#mnthDeposit").val(deposit);	
		 $("#deposit").val(deposit);	
		
	}
	function getFee()
	{
		var people = ($("#no_people").val() ) == ""  ? 0 : parseFloat($("#no_people").val() );
		var fee = ($("#fee").val() ) == ""  ? 0 : parseFloat($("#fee").val() );
		
		var totalFee = (people*fee);
		var totalFee = totalFee.toFixed(2);
		
		$("#contrctfee").val(totalFee);	
	}
	function getRent()
	{
		 var nights = document.getElementById('totalNights').value;
		 var oneDayPrice = (parseFloat($("#mnth_rate").val())*12)/365;
		 var rent	= nights*oneDayPrice;
		 var rent	= Math.round(rent.toFixed(2));
		
		
		/*  var stdrateMonth = ($("#mnth_rate").val() ) == ""  ? 0 : parseFloat($("#mnth_rate").val() );
				
		if(agrmntDate == rentPayFrom){
			
			var rent = stdrateMonth;
			var rent = Math.round(rent.toFixed(2));
					
		}
		else{
			var aF 		= $('#agrmntFrom').val();
			var rPF 	= $('#rentPayFrom').val();
			
			var smdy 	= aF.split('/')
			var startDate = new Date(smdy[1] + "/" + smdy[0] + "/" + smdy[2]);			
			
			var emdy 	= rPF.split('/')
			var endDate = new Date(emdy[1] + "/" + emdy[0] + "/" + emdy[2]);
			var nights 	= daydiff(startDate, endDate);
			
			var rent	= nights*oneDayPrice;
			var rent	= Math.round(rent.toFixed(2));
		}
		
		$("#totalNights").val(nights);	*/	
		$("#rentpay").val(rent); 
		
		updatePrice();
	}
	
	function daydiff(agrmntFrom, rentPayFrom) {
		return (rentPayFrom-agrmntFrom)/(1000*60*60*24)
	}	
</script>