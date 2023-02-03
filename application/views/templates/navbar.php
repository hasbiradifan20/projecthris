<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #d4d4d4;">
        <ul class="navbar-nav ml-2 ">
            <!-- Title -->
            <h1 class="mr-5">PT. SAHAWARE TEKNOLOGI INDONESIA</h1>
            <!-- /Title -->
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 medium ml-5">Admin</span>
                    <img class="img-profile rounded-circle" src="<?= base_url() ?>dist/img/user.jpg" alt="admin" height="40px" width="40px">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                    </a>
                    <a class="dropdown-item" href="">
                        <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i>
                        Ubah Password
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
            </li>
         </div>
        </ul>

    </nav>
    <!-- /.navbar -->