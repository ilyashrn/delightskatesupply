  <aside class="yaybar yay-shrink yay-hide-to-small yay-gestures">

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
        <a href="#!" class="brand-logo">
          <img src="assets/_con/images/logo-white.png" alt="Con">
        </a>
        <!-- /Logo -->
      </div>
    </div>


    <div class="nano">
      <div class="nano-content">
        <ul>
          <li class="<?php echo ($this->uri->segment(2) == 'dashboard' || $this->uri->segment(2) == '') ? 'active' : '';?>">
            <a href="<?php echo base_url()?>adm/dashboard" class="waves-effect waves-blue"><i class="fa fa-dashboard"></i> Dashboards</a>
          </li>
          
          <li class="label">User</li>
          <li class="<?php echo ($this->uri->segment(2) == 'administrators') ? 'active' : '';?>">
            <a href="<?php echo base_url()?>adm/administrators" class="waves-effect waves-blue"><i class="fa fa-user"></i> Administrators<span class="badge">1</span></a>
          </li>
          
          <li class="label">Posts</li>
          <li class="<?php echo ($this->uri->segment(2) == 'posts') ? 'active' : '';?>">
            <a class="yay-sub-toggle waves-effect waves-blue"><i class="mdi-image-grid-on"></i> Posts<span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
            <ul>
              <li class="<?php echo ($this->uri->segment(2) == 'posts' && $this->uri->segment(3) == 'new') ? 'active' : '';?>"><a class="waves-effect waves-blue" href="<?php echo base_url()?>adm/posts/new"><i class="mdi-av-playlist-add"></i> Add new</a>
              </li>
              <li class="<?php echo ($this->uri->segment(2) == 'posts') ? 'active' : '';?>"><a class="waves-effect waves-blue" href="<?php echo base_url()?>adm/posts"><i class="mdi-editor-format-list-bulleted"></i> Current list<span class="badge">1</span></a>
              </li>
            </ul>
          </li>
          <li class="<?php echo ($this->uri->segment(2) == 'categories') ? 'active' : '';?>">
            <a class="yay-sub-toggle waves-effect waves-blue"><i class="mdi-content-filter-list"></i> Post Categories<span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
            <ul>
              <li class="<?php echo ($this->uri->segment(2) == 'categories' && $this->uri->segment(3) == 'new') ? 'active' : '';?>"><a class="waves-effect waves-blue" href="<?php echo base_url()?>adm/categories/new"><i class="mdi-av-playlist-add"></i> Add new</a>
              </li>
              <li class="<?php echo ($this->uri->segment(2) == 'categories') ? 'active' : '';?>"><a class="waves-effect waves-blue" href="<?php echo base_url()?>adm/categories"><i class="mdi-editor-format-list-bulleted"></i> Current list<span class="badge">1</span></a>
              </li>
            </ul>
          </li>

          <li class="label">Media</li>
          <li class="<?php echo ($this->uri->segment(2) == 'gallery') ? 'active' : '';?>">
            <a href="<?php echo base_url()?>adm/gallery" class="waves-effect waves-blue"><i class="fa fa-image (alias)"></i> Gallery<span class="badge">1</span></a>
          </li>
          <li class="<?php echo ($this->uri->segment(2) == 'videos') ? 'active' : '';?>">
            <a href="<?php echo base_url()?>adm/videos" class="waves-effect waves-blue"><i class="fa fa-youtube-play"></i> Youtube link<span class="badge">1</span></a>
          </li>

          <li class="label">Information</li>
          <li class="<?php echo ($this->uri->segment(2) == 'contacts') ? 'active' : '';?>">
            <a href="<?php echo base_url()?>adm/contacts" class="waves-effect waves-blue"><i class="mdi-communication-quick-contacts-mail"></i>Contacts</a>
          </li>
          <li class="<?php echo ($this->uri->segment(2) == 'about') ? 'active' : '';?>">
            <a href="<?php echo base_url()?>adm/about" class="waves-effect waves-blue"><i class="fa fa-meh-o"></i>About</a>
          </li>

          <!-- <li class="label">Stats</li>
          <li class="content">
            <span><i class="fa fa-spinner"></i> Server Load</span>
            <div class="progress small light-green lighten-4">
              <div class="light-green accent-5" style="width: 37%"></div>
            </div>

            <span><i class="fa fa-thumbs-o-up"></i> User Satisfaction</span>
            <div class="progress small">
              <div style="width: 91%"></div>
            </div>
          </li> -->
        </ul>

      </div>
    </div>
  </aside>
  <!-- /Yay Sidebar -->