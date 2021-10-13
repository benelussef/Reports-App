<?php 
if(session_status() === PHP_SESSION_DISABLED){
session_start();}
?>
<div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
        <div class="sidebar-brand-icon">
            <img src="img/logo1.png" width="90px" height="50px">
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <?php if(isset($_SESSION['auth'])):?>
    <?php if($_SESSION['auth']["Agence"]==='Admin'):?>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <?php endif?>
    <?php endif?>

    <!-- Nav Item - New report -->
    <li class="nav-item">
        <a class="nav-link" href="Newreport.php">
            <i class="fas fa-fw fa-plus-circle"></i>
            <span>New report</span></a>
    </li>

    <!-- Nav Item - Reports -->
    <li class="nav-item">
        <a class="nav-link" href="reports.php">
            <i class="fas fa-fw fa-file"></i>
            <span>Reports</span></a>
    </li>
    <li class="nav-item">
            <a class="nav-link"  onclick="exportTableToExcel('container', 'report')">
            <i class="fas fa-fw fa-print"></i>
            <span>Print</span></a>
    </li>

    <!-- Nav Item - print -->
    <?php if(isset($_SESSION['auth'])):?>
    <?php if($_SESSION['auth']["Agence"]==='Admin'):?>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Cumulate</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="Weekly.php">Weekly</a>
                <a class="collapse-item" href="Monthly.php">Month</a>
                <a class="collapse-item" href="Annuel.php">Annual</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-folder"></i>
            <span>Comparaison</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="ComparaisonW.php">Weekly</a>
            <a class="collapse-item" href="ComparaisonM.php">Month</a>
            <a class="collapse-item" href="ComparaisonA.php">Annual</a>
            </div>
        </div>
    </li>
    <?php endif?>
    <?php endif?>
    <?php if(isset($_SESSION['auth'])):?>
    <?php if($_SESSION['auth']["Agence"]==='Admin'):?>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item ">
        <a class="nav-link" href="cog.php">
            <i class="fas fa-fw fa-cog"></i>
            <span>User Account</span></a>
    </li>
    <?php endif?>
    <?php endif?>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                    <?php
                     if($_SESSION['auth']["Agence"]==='Admin'){
                       echo"Admin";
                       }    
                       else{
                        echo"User";
                       }
                       ?>
                            </span>
                        <img class="img-profile rounded-circle"
                            src="img/undraw_profile.svg">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">  
                        <a  class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->