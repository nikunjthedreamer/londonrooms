<?php if(isset($rid)){ ?>
<select class="form-control" name="room"  >
			<option value="">--Select Room--</option> 

<?php foreach($room_id as $room){	?>
			<option <?php  if($room['id']==$rid){ echo "selected='selected'"; }  ?>  value="<?php echo $room['id'];  ?>"><?php echo $room['room_name'];  ?></option> 	
			<?php	}   ?>
			</select>	
	
<?php }else{  ?>
	
<select class="form-control" name="room"  >
			<option value="">--Select Room--</option> 

<?php foreach($room_id as $room){	?>
			<option value="<?php echo $room['id'];  ?>"><?php echo $room['room_name'];  ?></option> 	
			<?php	}   ?>
			</select>	
	
<?php }  ?>



