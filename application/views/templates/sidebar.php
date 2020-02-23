        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('/toko'); ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fab fa-strava"></i>
                </div>
                <div class="sidebar-brand-text mx-3" >One Archery</div>

            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('user/'); ?>">
                        <i class="fas fa-fw fa-user"></i>
                        <span>My Profile</span></a>
                </li>

            <hr class="sidebar-divider">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('user/edit'); ?>">
                        <i class="fas fa-fw fa-user-edit"></i>
                        <span>Edit Profile</span></a>
                </li>

            <hr class="sidebar-divider">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('user/changepassword'); ?>">
                        <i class="fas fa-fw fa-key"></i>
                        <span>Change Password</span></a>
                </li>

            <hr class="sidebar-divider">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
                        <i class="fas fa-fw fa-sign-out-alt"></i>
                        <span>Logout</span></a>
                </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End  of Sidebar --> 

