  <aside class="yaybar yay-light yay-shrink yay-hide-to-small yay-gestures">

    <div class="top">
      <div>
        <!-- Sidebar toggle -->
        <a href="#" class="yay-toggle">
          <div class="burg1"></div>
          <div class="burg2"></div>
          <div class="burg3"></div>
        </a>
        <!-- Sidebar toggle -->

        <!-- Logo -->
        <!-- <a href="#!" class="brand-logo">
          <img src="assets/_con/images/logo-white.png" alt="Con">
        </a> -->
        <!-- /Logo -->
      </div>
    </div>


    <div class="nano">
      <div class="nano-content">
        <ul>
          <li class="<?php echo ($this->uri->segment(2) == 'dashboard' || $this->uri->segment(2) == '') ? 'active' : '';?>">
            <a href="<?php echo base_url()?>adm/dashboard" class="waves-effect waves-blue"><i class="fa fa-dashboard"></i> Dashboards</a>
          </li>
          <?php 
          if ($this->session->userdata('previlege') == '1') { ?>
            <li class="label">User</li>
            <li class="<?php echo ($this->uri->segment(2) == 'administrators') ? 'active' : '';?>">
              <a href="<?php echo base_url()?>adm/administrators" class="waves-effect waves-blue"><i class="fa fa-user"></i> Administrators<span class="badge"><?php echo $this->administrator->count() ?></span></a>
            </li>
          <?php }
           ?>
          <li class="label">Posts</li>
          <li class="<?php echo ($this->uri->segment(2) == 'posts') ? 'open' : '';?>">
            <a class="yay-sub-toggle waves-effect waves-blue"><i class="mdi-image-grid-on"></i> Posts<span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
            <ul>
              <li class="<?php echo ($this->uri->segment(2) == 'posts' && $this->uri->segment(3) == 'new_post') ? 'active' : '';?>"><a class="waves-effect waves-blue" href="<?php echo base_url()?>adm/posts/new_post"><i class="mdi-av-playlist-add"></i> Add new</a>
              </li>
              <li class="<?php echo ($this->uri->segment(2) == 'posts') ? 'active' : '' && $this->uri->segment(3) == '';?>"><a class="waves-effect waves-blue" href="<?php echo base_url()?>adm/posts"><i class="mdi-editor-format-list-bulleted"></i> Current list<span class="badge"><?php echo $this->post->count() ?></span></a>
              </li>
            </ul>
          </li>
          <li class="<?php echo ($this->uri->segment(2) == 'categories') ? 'active' : '';?>">
            <a href="<?php echo base_url()?>adm/categories" class="waves-effect waves-blue"><i class="mdi-content-filter-list"></i> Post Categories</a>
          </li>

          <li class="label">Media</li>
          <li class="<?php echo ($this->uri->segment(2) == 'galleries') ? 'active' : '';?>">
            <a href="<?php echo base_url()?>adm/galleries" class="waves-effect waves-blue"><i class="fa fa-image (alias)"></i> Gallery<span class="badge"><?php echo $this->gallery->count('1') ?></span></a>
          </li>
          <li class="<?php echo ($this->uri->segment(2) == 'videos') ? 'active' : '';?>">
            <a href="<?php echo base_url()?>adm/videos" class="waves-effect waves-blue"><i class="fa fa-youtube-play"></i> Youtube link<span class="badge"><?php echo $this->gallery->count('2') ?></span></a>
          </li>
          <li class="<?php echo ($this->uri->segment(2) == 'homes') ? 'active' : '';?>">
            <a href="<?php echo base_url()?>adm/homes" class="waves-effect waves-blue"><i class="fa fa-image (alias)"></i> Home</a>
          </li>

          <li class="label">Information</li>
          <li class="<?php echo ($this->uri->segment(2) == 'contacts') ? 'active' : '';?>">
            <a href="<?php echo base_url()?>adm/contacts" class="waves-effect waves-blue"><i class="mdi-communication-quick-contacts-mail"></i>Contacts</a>
          </li>
          <li class="<?php echo ($this->uri->segment(2) == 'about') ? 'active' : '';?>">
            <a href="<?php echo base_url()?>adm/about" class="waves-effect waves-blue"><i class="fa fa-meh-o"></i>About</a>
          </li>
        </ul>

      </div>
    </div>
  </aside>
  <!-- /Yay Sidebar -->