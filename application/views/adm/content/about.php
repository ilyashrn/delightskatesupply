  <!-- Main Content -->
  <section class="content-wrap">


    <!-- Breadcrumb -->
    <div class="page-title">
      <div class="row">
        <div class="col s12 m9 l10">
          <h1><?php echo $title;?></h1>
          <ul>
            <li>
              <a href="dashboard"><i class="fa fa-home"></i> Dashboard</a>  <i class="fa fa-angle-right"></i>
            </li>
            <li><a href=''>Information</a>  <i class='fa fa-angle-right'></i>
            </li>
            <li><a href='#'>About</a>
            </li>
          </ul>
        </div>
        <div class="col s12 m3 l2 right-align">
          <a href="#!" class="btn grey lighten-3 grey-text z-depth-0 chat-toggle"><i class="fa fa-comments"></i></a>
        </div>
      </div>
    </div>
    <!-- /Breadcrumb -->
    
    <div class="row">
      <div class="col s12 l12 m12">
        <div class="card-panel">
          <h4>Current About Information</h4>
          <form data-parsley-validate method="post" action="abouts/u_ing/">
            <textarea name="content" class="markItUp"><?php echo $about['content'] ?></textarea>
            <div class="row">
              <div class="col s12">
                <button class="btn">Renew About</button>
              </div>
            </div>
          </form>
          <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/markitup/skins/_con/style.css" />
          <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/markitup/sets/default/style.css" />
          <script type="text/javascript" src="<?php echo base_url()?>assets/markitup/sets/default/set.js"></script>
          <script type="text/javascript" src="<?php echo base_url()?>assets/markitup/jquery.markitup.js"></script>
        </div>
      </div>
    </div>
  </section>
  <!-- /Main Content -->

