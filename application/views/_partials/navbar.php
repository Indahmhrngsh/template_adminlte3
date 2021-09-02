<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    
<!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown open" style="padding-left: 15px;">
            <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
              <!-- <img src="<?= base_url()?>assets/images/admin.jpg" class="img-circle elevation-2" alt=""> -->
              Admin
            </a>
            <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item"  href="javascript:;"> Profile</a>
                <a class="dropdown-item"  href="<?= site_url('Auth/logout') ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
            </div>
        </li>
    </ul>
  </nav>
  <!-- /.navbar -->