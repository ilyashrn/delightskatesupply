<nav class="navbar-top">
    <div class="nav-wrapper">

      <!-- Sidebar toggle -->
      <a href="#" class="yay-toggle">
        <div class="burg1"></div>
        <div class="burg2"></div>
        <div class="burg3"></div>
      </a>
      <!-- Sidebar toggle -->

      <!-- Logo -->
      <a href="#!" class="brand-logo">
        <img src="<?php echo base_url()?>assets/img/logo2.png" alt="Con">
      </a>
      <!-- /Logo -->

      <!-- Menu -->
      <ul>
        </li>
        <li class="user">
          <a class="dropdown-button" href="#!" data-activates="user-dropdown">
            <img src="<?php echo ($avatar!=='') ? base_url().'assets/_con/images/user.jpg' : base_url().'assets/profil_photo/nobody.jpg' ?>" alt="John Doe" class="circle"><?php echo $displayname; ?><i class="mdi-navigation-expand-more right"></i>
          </a>

          <ul id="user-dropdown" class="dropdown-content">
            <li><a href="profile"><i class="fa fa-user"></i> Profile</a>
            </li>
            <li><a href="setting"><i class="fa fa-cogs"></i> Settings</a>
            </li>
            <li class="divider"></li>
            <li><a href="logout"><i class="fa fa-sign-out"></i> Logout</a>
            </li>
          </ul>
        </li>
      </ul>
      <!-- /Menu -->

    </div>
  </nav>
  <!-- /Top Navbar -->