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
                                <span>Setting</span>
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
                    <h3 class="page-title"> Compeny Detail
                        <small>compeny detail .....</small>
                    </h3>
					<?php //echo get_gv('comp_address');   ?>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->

                    <div class="c-content-feedback-1 c-option-1">
                        <div class="row">
                            
                            <div class="col-md-6">
                                <div class="c-contact">
                                    <div class="c-content-title-1">
                                        <h3 class="uppercase">Company detail .....</h3>
                                        <div class="c-line-left bg-dark"></div>
                                        
                                    </div>
                                  <?php 
$attributes = array('class' => '','enctype'=>'multipart/form-data');   
echo form_open('admin/comp_logo', $attributes); ?>
                                        <div class="form-group">
										<label>Company  Address :</label>
                                            <input type="text" name="comp_address" value="<?php echo $comp_info['comp_address'] ; ?>" placeholder="Company  Address" class="form-control input-md"> </div>
                                        <div class="form-group">
										<label>Company Phone number :</label>
                                            <input type="text" value="<?php  echo $comp_info['comp_phone'] ; ?>" name="comp_phone" placeholder="Company Phone number" class="form-control input-md"> </div>
                                      	<div class="form-group ">
                                                
                                               
                                                   <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> <img src="/uploads/<?php echo $comp_info['comp_logo']   ?>" /></div>
                                                        <div>
														<input type="hidden" value="<?php echo $comp_info['comp_logo']   ?>" name="comp_logo_old">
                                                            <span class="btn red btn-outline btn-file">
                                                                <span class="fileinput-new"> Select Company Logo </span>
                                                                <span class="fileinput-exists"> Change </span>
                                                                <input type="file" name="comp_logo"> </span>
																
                                                            <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                        </div>
                                                    </div>
                                                  
                                            </div>
                                        
                                        <button type="submit" class="btn grey">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
					                    <div class="c-content-contact-1 c-opt-1">
                        <div class="row" data-auto-height=".c-height">
                            <div class="col-lg-8 col-md-6 c-desktop"></div>
                            <div class="col-lg-4 col-md-6">
                                <div class="c-body">
                                    <div class="c-section">
                                        <h3>Rent tracker .</h3>
                                    </div>
									<input type="hidden" value="<?php echo $comp_info['comp_address']   ?>" id="comp_address_js">
                                   <input type="hidden" value="<?php echo $comp_info['comp_phone']   ?>" id="comp_phone_js">
                                    <div class="c-section">
                                        <div class="c-content-label uppercase bg-blue">Address</div>
                                        <p><?php echo get_gv('comp_address');    ?>
                                            </p>
                                    </div>
                                    <div class="c-section">
                                        <div class="c-content-label uppercase bg-blue">Contacts</div>
                                        <p>
                                            <strong>T</strong> <?php echo get_gv('comp_phone');    ?>
                                           
                                            </p>
                                    </div>
                                    <div class="c-section">
                                        <div class="c-content-label uppercase bg-blue">Social</div>
                                        <br/>
                                        <ul class="c-content-iconlist-1 ">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-youtube-play"></i>
                                                </a>
                                            </li>
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="gmapbg" class="c-content-contact-1-gmap" style="height: 615px;"></div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>