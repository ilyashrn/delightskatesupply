<section id="sign-in">

    <!-- Background Bubbles -->
    <canvas id=""></canvas>
    <!-- /Background Bubbles -->
    <!-- Sign In Form -->
    <!-- <form data-parsley-validate method="post" action="adm/login/process"> -->
    <?php echo form_open('adm/login/process'); ?>
      <div class="row links">
        <div class="col s6 logo">
          <img src="<?php echo base_url()?>assets/img/logo_w.png" alt="">
        </div>
        <div class="col s6 right-align"><strong>Sign In</strong>
        </div>
      </div>

      <div class="card-panel">
        <?php 
        if ($this->session->flashdata('msg')) { ?>
          <div class="alert alert-danger"><?php echo $this->session->flashdata('msg'); ?></div>
        <?php }
        ?>
        <!-- Username -->
        <div class="input-field">
          <i class="fa fa-user prefix"></i>
          <input id="username-input" type="text" class="validate" name="username" required value="<?php echo $this->session->flashdata('username'); ?>">
          <label for="username-input">Username</label>
        </div>
        <!-- /Username -->

        <!-- Password -->
        <div class="input-field">
          <i class="fa fa-unlock-alt prefix"></i>
          <input id="password-input" type="password" class="validate" name="password" required>
          <label for="password-input">Password</label>
        </div>
        <!-- /Password -->

        <div class="switch">
          <label>
            <input name="remember_me" type="checkbox" checked />
            <span class="lever"></span>
            Remember
          </label>
        </div>

        <button type="submit" class="waves-effect waves-light btn-large z-depth-0 z-depth-1-hover">Sign In</button>
      </div>

      <!-- <div class="links right-align">
        <a href="page-forgot-password.html">Forgot Password?</a>
      </div> -->

    </form>
    <!-- /Sign In Form -->

  </section>