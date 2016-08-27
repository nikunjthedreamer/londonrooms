<!--<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- BEGIN SIDEBAR -->
          <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
              <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-closed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                <li class="sidebar-toggler-wrapper hide">
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <div class="sidebar-toggler"> </div>
                    <!-- END SIDEBAR TOGGLER BUTTON -->
                </li>
                <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
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
                <li class="nav-item start ">
                    <a href="<?php echo base_url();?>index.php/admin/dashboard" class="nav-link">
                        <i class="icon-home font-white"></i> <span class="title menu-text-display">Dashboard</span>
                    </a>
                </li>
               <li class="nav-item  ">
                    <a href="<?php echo base_url();?>index.php/admin/property" class="nav-link nav-toggle">
                        <i class="icon-diamond font-white"></i>
                        <span class="title menu-text-display">Properties</span>
                    </a>
                </li>

                  <li class="nav-item">
                      <a href="<?php echo base_url();?>index.php/admin/management" class="nav-link nav-toggle">
                          <i class="icon-wrench font-white"></i>
                          <span class="title menu-text-display">Property Management</span>
                      </a>
                  </li>
                  <li class="nav-item  ">
                      <a href="<?php echo base_url();?>index.php/admin/transactions" class="nav-link nav-toggle">
                          <i class="icon-layers font-white"></i>
                          <span class="title menu-text-display">Accounting</span>
                      </a>
                  </li>
                  <li class="nav-item  ">
                      <a href="<?php echo base_url();?>index.php/admin/tenant" class="nav-link nav-toggle">
                          <i class="icon-user font-white"></i>
                          <span class="title menu-text-display">Tenants</span>
                      </a>
                  </li>

                  <li class="nav-item  ">
                      <a href="<?php echo base_url();?>index.php/admin/room" class="nav-link nav-toggle">
                          <i class="icon-grid font-white"></i>
                          <span class="title menu-text-display">Rooms Available </span>
                      </a>
                  </li>
                  <li class="nav-item  ">
                              <a href="<?php echo base_url();?>index.php/admin/tenant/offer" class="nav-link ">
                                  <i class="icon-list font-white"></i>
                                  <span class="title menu-text-display">Offers List</span>
                              </a>
                  </li>
                  <?php /* if($this->session->userdata('role')=="Admin"  ){  */?>
                      <li class="nav-item  ">
                          <a href="<?php echo base_url();?>index.php/admin/comp_logo" class="nav-link nav-toggle">
                              <i class="icon-note font-white"></i>
                              <span class="title menu-text-display">Settings</span>
                          </a>
                      </li>
                  <?php /* }  */?>
                  <li class="nav-item  ">
                      <a href="#" class="nav-link nav-toggle">
                          <i class="icon-settings font-white"></i>
                          <span class="title menu-text-display">System</span>
                      </a>
                  </li>

                  <?php /* if($this->session->userdata('role')=="Admin"  ){  */?>
                      <li class="nav-item  ">
                          <a href="<?php echo base_url();?>index.php/admin/userlist/" class="nav-link nav-toggle">
                              <i class="icon-user font-white"></i>
                              <span class="title menu-text-display">Users</span>
                          </a>
                      </li>
                  <?php /* }  */?>



            </ul>
            <!-- END SIDEBAR MENU -->
            <!-- END SIDEBAR MENU -->
        </div>
        <!-- END SIDEBAR -->