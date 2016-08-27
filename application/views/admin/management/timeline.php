
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
