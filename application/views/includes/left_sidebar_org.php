 <!-- BEGIN CONTAINER -->
        <div class="page-container">
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->

                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
<ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                        <li class="sidebar-toggler-wrapper hide">
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <div class="sidebar-toggler"> </div>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                        </li>

                        <li class="sidebar-search-wrapper">
                            <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->

                            <form class="sidebar-search  " action="page_general_search_3.html" method="POST">
                                <a href="javascript:;" class="remove">
                                    <i class="icon-close"></i>
                                </a>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <a href="javascript:;" class="btn submit">
                                            <i class="icon-magnifier"></i>
                                        </a>
                                    </span>
                                </div>
                            </form>
                            <!-- END RESPONSIVE QUICK SEARCH FORM -->
                        </li>
                        <li class="nav-item start active open">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Dashboard</span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item start active open">
                                    <a href="../admin/dashboard" class="nav-link ">
                                        <i class="icon-bar-chart"></i>
                                        <span class="title">Dashboard</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                                </ul>
                        </li>
						 <li class="nav-item">
                                <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Properties </span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="../admin/property" class="nav-link ">
                                        <i class="icon-bar-chart"></i>
                                        <span class="title">Property List</span>
                                    </a>
                                </li>
</ul>
                 </li>



				 <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Property Management</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">

									<li class="nav-item  ">
                                    <a href="../admin/management" class="nav-link ">
                                        <i class="icon-bar-chart"></i>
                                        <span class="title">Property Manage List</span>
                                    </a>
                                </li>

</ul>
                 </li>


				 <li class="nav-item  ">
						<a href="javascript:;" class="nav-link nav-toggle">
							<i class="icon-user"></i>
							<span class="title">Tenants </span>
							<span class="arrow"></span>
						</a>
						<ul class="sub-menu">
							<li class="nav-item  ">
								<a href="../admin/tenant" class="nav-link ">
									<i class="icon-users"></i>
									<span class="title">Tenant List</span>
								</a>
							</li>
						</ul>
                    </li>

				  <li class="nav-item  ">
						<a href="javascript:;" class="nav-link nav-toggle">
							<i class="icon-home"></i>
							<span class="title">Rooms Available </span>

							<span class="arrow"></span><span class="badge badge-success"><?php  echo $this->data['list'];  ?></span>
						</a>
						<ul class="sub-menu">
							<li class="nav-item  ">
								<a href="../admin/room" class="nav-link ">
									<i class="icon-home"></i>
									<span class="title">Rooms List</span>
								</a>
							</li>
						<li class="nav-item  ">
								<a href="../admin/tenant/offer" class="nav-link ">
									<i class="icon-home"></i>
									<span class="title">Offers List</span>
								</a>
							</li>
						</ul>
                    </li>


                        </li>


					<?php  if($this->session->userdata('role')=="Admin"  ){  ?>

                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-social-dribbble"></i>
                                <span class="title">Settings</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                             <li class="nav-item  ">
                                    <a href="/index.php/admin/comp_logo" class="nav-link ">
                                        <i class="icon-note"></i>
                                        <span class="title">Company Logo</span>
                                    </a>
                                </li>

                            </ul>
                        </li>
					<?php  }  ?>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-settings"></i>
                                <span class="title">System</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="#" class="nav-link " target="_blank">
                                        <span class="title">Coming Soon</span>
                                    </a>
                                </li>





                            </ul>
                        </li>
                       <?php  if($this->session->userdata('role')=="Admin"  ){  ?>
                       <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-user"></i>
                                <span class="title">User</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="/index.php/admin/userlist/" class="nav-link ">
                                        <i class="icon-users"></i>
                                        <span class="title">Users List</span>
                                    </a>
                                </li>
</ul>
                        </li>
						<?php  }  ?>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
			 <!-- END SIDEBAR -->