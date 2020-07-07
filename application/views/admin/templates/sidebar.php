

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Moveupdigital<sup>id</sup></div>
      </a>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?=base_url()?>dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Overview
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link active" href="<?=base_url();?>login/users" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-users fa-cog"></i>
          <span>Management User</span>
        </a>
       
      </li>
     

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tim" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fa fa-users fa-lg" aria-hidden="true"></i>
          <span>TIM</span>
        </a>
        <div id="tim" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"></h6>
            <a class="collapse-item" href="<?=base_url()?>tim">Daftar Tim </a>
            <a class="collapse-item" href="<?=base_url()?>tim/tambah">Tambah Tim </a>
      
            
          </div>
        </div>
      </li>


      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?=base_url()?>portpolio" data-toggle="collapse" data-target="#portpolio" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fa fa-image" aria-hidden="true"></i>
          <span>Portpolio</span>
        </a>
        <div id="portpolio" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"></h6>
            <a class="collapse-item" href="<?=base_url()?>portpolio">Portpolio</a>
            <a class="collapse-item" href="<?=base_url()?>portpolio/tambah">Tambah Portpolio</a>
            
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePertanyaan" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fa fa-question-circle fa-lg" aria-hidden="true"></i>

          <span>Pertanyaan</span>
        </a>
        <div id="collapsePertanyaan" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"></h6>
            <a class="collapse-item" href="<?=base_url()?>pertanyaan">Daftar Pertanyaan</a>
            <a class="collapse-item" href="<?=base_url()?>pertanyaan/tambah">Tambah pertanyaan</a>
          
            
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fa fa-quote-right" aria-hidden="true"></i>

          <span>Testimoni</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"></h6>
            <a class="collapse-item" href="<?=base_url()?>testimoni">Data Testimony</a>
            <a class="collapse-item" href="<?=base_url()?>testimoni/tambah">Tambah Testimoni</a>
          
            
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Klien
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-envelope fa-fw"></i>
          <span>Pesan </span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
       

            <a class="collapse-item" href="<?= base_url()?>pesan">    <i class="fa fa-inbox" aria-hidden="true"></i> Inbox</a>
         
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
  

      <!-- Nav Item - Tables -->
    

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url()?>login/logout">
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          <span> Logout </span></a>
      </li>


      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content mb-1">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-1 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
        

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

           <!-- Nav Item - User Information -->
           <p>Hi, <?=$this->session->userdata('username');?> </p>
            <li class="nav-item dropdown no-arrow">
           
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-lg fa-fw mr-2"  style="color:firebrick"></i>
                  Logout
                </a>
          
              
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

   
