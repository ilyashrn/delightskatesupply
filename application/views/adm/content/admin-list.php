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
            <li><a href=''>Administrators</a>  <i class='fa fa-angle-right'></i>
            </li>
            <li><a href='#'>Current list</a>
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
    <div class="col s12 m5 l5">
      <?php if ($this->session->flashdata('msg')) { ?>
        <div class="alert green lighten-4 green-text text-darken-2">
          <?php echo $this->session->flashdata('msg'); ?>
        </div>
      <?php } ?>
      <?php if ($this->session->flashdata('warn')) { ?>
        <div class="alert">
          <?php echo $this->session->flashdata('warn'); ?>
        </div>
      <?php } ?>
      <div class="card-panel">
        <ul class="collection">
          <li class="collection-item avatar">
            <img src="<?php echo ($avatar!=='') ? base_url().'assets/profil_photo/'.$avatar : base_url().'assets/profil_photo/nobody.jpg'?>" alt="" class="circle">
            <span class="title"><b>Current Admin</b></span>
            <p><?php echo $displayname ?> <br>
            <?php echo $username; ?>
            </p>
          </li>
        </ul>
      </div>
    </div>

    <div class="col s12 m6 l6">
        <div class="card <?php echo ($this->session->flashdata('min')) ? '' : 'minimized';?>">
          <div class="title">
            <h5>Add new Administrator</h5>
            <a class="minimize" href="#">
              <i class="mdi-navigation-expand-less"></i>
            </a>
          </div>
          <div class="content">
            <form enctype="multipart/form-data" data-parsley-validate method="post" action="administrators/i_ing">
              <div class="input-field">
                <input name="user_displayname" id="user_displayname" type="text" required value="<?php echo $this->session->flashdata('displayname'); ?>">
                <label for="user_displayname">Display Name</label>
              </div>
              <div class="input-field">
                <input name="user_username" id="user_username" type="text" required value="<?php echo $this->session->flashdata('username'); ?>">
                <label for="user_displayname">Username</label>
              </div>
              <div class="input-field">
                <input name="user_password" id="user_password" type="password" required>
                <label for="user_password">Password</label>
              </div>
              <div class="input-field">
                <input name="conf_pass" id="conf_pass" data-parsley-equalto="#user_password" type="password" required>
                <label for="conf_pass">Confirm Password</label>
              </div>
              <select name="id_prev" required>
                <option value="" disabled selected>Choose user previlege</option>
                <option <?php echo ($this->session->flashdata('id_prev') == '1') ? 'selected' : ''; ?> value="1">Superuser</option>
                <option <?php echo ($this->session->flashdata('id_prev') == '2') ? 'selected' : ''; ?> value="2">User</option>
              </select>
              <div class="file-field input-field">
                <input class="file-path validate" type="text"/>
                <div class="btn btn-small">
                  <span>Avatar</span>
                  <input name="user_avatar" type="file" />
                </div>
              </div>
              <div class="row">
                <div class="col s12">
                  <button class="btn">Regrister new user</button>
                </div>
              </div>
            </form>
          </div>
        </div>

        <div class="card <?php echo ($this->session->flashdata('min')) ? '' : 'minimized';?>">
          <div class="title">
            <h5>Change Passwords</h5>
            <a class="minimize" href="#">
              <i class="mdi-navigation-expand-less"></i>
            </a>
          </div>
          <div class="content">
            <form enctype="multipart/form-data" data-parsley-validate method="post" action="administrators/u_pass/">
              <select name="id_user" required>
                  <option value="" disabled selected>Choose a user</option>
                <?php foreach ($adminlist as $admin) { ?>
                  <option value="<?php echo $admin->id_user;?>"><?php echo $admin->user_username.' - '.$admin->user_displayname ?></option>  
                <?php } ?>
              </select>
              <div class="input-field">
                <input name="user_password" id="user_password1" type="password" required>
                <label for="user_password">New Password</label>
              </div>
              <div class="input-field">
                <input name="conf_pass" id="conf_pass" data-parsley-equalto="#user_password1" type="password" required>
                <label for="conf_pass">Confirm New Password</label>
              </div>
              <div class="row">
                <div class="col s12">
                  <button class="btn">Regrister new password for user</button>
                </div>
              </div>
            </form>
          </div>
        </div>

        <div class="card <?php echo ($this->session->flashdata('min')) ? '' : 'minimized';?>">
          <div class="title">
            <h5>Change Previleges</h5>
            <a class="minimize" href="#">
              <i class="mdi-navigation-expand-less"></i>
            </a>
          </div>
          <div class="content">
            <form enctype="multipart/form-data" data-parsley-validate method="post" action="administrators/u_prev">
              <select name="id_user" required>
                  <option value="" disabled selected>Choose a user</option>
                <?php foreach ($adminlist as $admin) { ?>
                  <option value="<?php echo $admin->id_user;?>"><?php echo $admin->user_username.' - '.$admin->user_displayname ?></option>  
                <?php } ?>
              </select>
              <select name="id_prev2" required>
                  <option value="" disabled selected>Choose a previlege</option>
                  <option value="1">Superuser</option>
                  <option value="2">User</option>
              </select>
              <div class="row">
                <div class="col s12">
                  <button class="btn">Update previlege for this user</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col m12 l12">
        <div class="card-panel">
          <h4>Administrator</h4>
          <table class="table table-stripped table-responsive" style="font-size: 13px;">
            <thead>
              <tr>
                <th></th>
                <th>#</th>
                <th>Display name</th>
                <th>Username</th>
                <th>Previlege</th>
                <th>Last Login</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php 
              foreach ($adminlist as $admin) { ?>
              <tr>
                <td style="width: 20%"><img src="<?php echo ($admin->user_avatar!=='') ? base_url().'assets/profil_photo/'.$admin->user_avatar : base_url().'assets/profil_photo/nobody.jpg'?>" style="width: 30%;"></td>
                <td><?php echo $admin->id_user ?></td>
                <td><a class="modal-trigger" href="#modal<?php echo $admin->id_user;?>" data-dismissible="true"><?php echo $admin->user_displayname ?></a></td>
                <td><?php echo $admin->user_username ?></td>
                <td><div class="alert green lighten-4 green-text text-darken-2 center-align btn-rounded"><b><?php echo $admin->prev_name ?></b></div></td>
                <td><?php echo ($admin->user_last_login=='0000-00-00 00:00:00') ? 'Never login yet' : $admin->user_last_login ?></td>
                <td>
                    <a href="administrators/delete/<?php echo $admin->id_user.'/'.$admin->user_username ?>" class="waves-effect waves-dark btn red lighten-1 btn-small btn-rounded"><i class="small fa fa-remove"></i></a>
                </td>
              </tr> 

                <!-- Modal Structure -->
                <div id="modal<?php echo $admin->id_user?>" class="modal">
                  <div class="modal-content">
                    <div class="col m12 l12">
                      <h4>Edit Profile</h4>
                      <form enctype="multipart/form-data" data-parsley-validate method="post" action="administrators/u_ing/<?php echo $admin->id_user.'/'.$admin->user_username; ?>">
                        <div class="input-field">
                          <input name="id_user" id="id_user" type="text" disabled value="<?php echo $admin->id_user; ?>">
                          <label for="id_cat">User ID</label>
                        </div>
                        <div class="input-field">
                          <input name="user_displayname" id="user_displayname" type="text" required value="<?php echo $admin->user_displayname; ?>">
                          <label for="user_displayname">Display Name</label>
                        </div>
                        <div class="input-field">
                          <input name="user_username" id="user_username" type="text" required value="<?php echo $admin->user_username; ?>">
                          <label for="user_displayname">Username</label>
                        </div>
                        <div class="image-field">
                          <img src="<?php echo ($admin->user_avatar!=='') ? base_url().'assets/profil_photo/'.$admin->user_avatar : base_url().'assets/profil_photo/nobody.jpg'?>" style="width: 30%;float: left;">
                          <?php if ($admin->user_avatar!=='') { ?><a class="custom" href="administrators/del_photo/<?php echo $admin->user_avatar.'/'.$admin->id_user.'/'.$admin->user_username ?>"><i class="fa fa-remove"></i> Delete current</a> <?php } ?>
                          <input type="hidden" name="current_avatar" value="<?php echo $admin->user_avatar ?>"></input>
                        </div>
                        <div class="file-field input-field">
                          <input class="file-path validate" type="text"/>
                          <div class="btn btn-small">
                            <span>Avatar</span>
                            <input name="user_avatar" type="file" />
                          </div>
                        </div>
                        <div class="row">
                          <div class="col s12">
                            <button class="btn">Renew profile</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              <?php }
               ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
  <!-- /Main Content -->