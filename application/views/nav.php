<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <nav class="pcoded-navbar">
            <div class="sidebar_toggle"><a href="<?php echo base_url(); ?>/#"><i class="icon-close icons"></i></a>
            </div>
            <div class="pcoded-inner-navbar main-menu">
                <div class="">
                    <div class="main-menu-header">
                        <img class="img-40 img-radius" src="<?php echo base_url(); ?>assets/images/avatar-4.jpg" alt="User-Profile-Image">
                        <div class="user-details"> <span>Admin</span>
                            <!-- <span id="more-details">UX Designer<i class="ti-angle-down"></i></span> -->
                        </div>
                    </div>
                    <div class="main-menu-content">
                        <ul>
                            <li class="more-details"> <a href="<?php echo base_url(); ?>/#"><i class="ti-user"></i>View Profile</a>
                                <a href="<?php echo base_url(); ?>/#!"><i class="ti-settings"></i>Settings</a>
                                <a href="<?php echo base_url(); ?>/auth-normal-sign-in.html"><i class="ti-layout-sidebar-left"></i>Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="pcoded-hasmenu">
                        <a href="#"> <span class="pcoded-micon"><i class="ti-home"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Blogs </span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li >
                                <a href="<?php echo base_url().'blog/blogList'; ?>"> <span>Blogs List</span>
                                </a>
                            </li>  
                            <li >
                                <a href="<?php echo base_url().'blog/viewBlog'; ?>"> <span>View Blogs</span>
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                  
                    <li class="pcoded-hasmenu">
                        <a href="#"> <span class="pcoded-micon"><i class="ti-home"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Masters</span>
                        </a>
                        <ul class="pcoded-submenu">
                            
                          
                            <li>
                                <a href="<?php echo base_url().'master/categoryList'; ?>"> <span>View Category</span>
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    
                </ul>
            </li>
        </ul>
    </div>
</nav>