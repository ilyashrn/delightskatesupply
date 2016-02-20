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
            <li><a href='#'>Contacts</a>
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
        <div class="alert alert-border-bottom cyan lighten-4 cyan-text text-darken-2">
          <h4>FYI!</h4>
          These <b>contacts information</b> will appear on your site footer :)
        </div>
        <div class="card-panel">
          <h4>Contacts</h4>
              <?php 
              if ($contlist) { ?>
          <table class="table table-stripped table-responsive" style="font-size: 13px;">
            <thead>
              <tr>
                <th>#</th>
                <th>Current Contacts</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                <?php foreach ($contlist as $cont) { ?>
                <tr>
                  <td><?php echo $cont->id_cont ?></td>
                  <td><a class="modal-trigger" href="#modal<?php echo $cont->id_cont;?>" data-dismissible="true"><?php echo $cont->contact_content ?></a></td>
                  <td>
                    <?php if ($cont->contact_type=='1') {
                      echo '<i class="fa fa-instagram medium"></i>';
                    } elseif ($cont->contact_type=='2') {
                      echo '<i class="fa fa-whatsapp medium"></i>';
                    } elseif($cont->contact_type=='3'){
                      echo '<i class="fa fa-facebook-official medium"></i>';
                    } elseif ($cont->contact_type=='4') {
                      echo '<i class="fa fa-twitter-square medium"></i>';
                    } elseif ($cont->contact_type=='5') {
                      echo 'Snapchat';
                    } else {
                      echo 'BBM';
                    }?>
                    
                  </td>
                  <td>
                      <a href="contacts/delete/<?php echo $cont->cont_type.'/'.$cont->id_cont.'/'.$cont->contact_content ?>" class="waves-effect waves-dark btn red lighten-1 btn-small btn-rounded"><i class="small fa fa-remove"></i></a>
                  </td>
                </tr> 

                <!-- Modal Structure -->
                <div id="modal<?php echo $cont->id_cont?>" class="modal">
                  <div class="modal-content">
                    <div class="col m12 l12">
                      <h4>Edit Contact</h4>
                      <form data-parsley-validate method="post" action="contacts/u_ing/<?php echo $cont->cont_type.'/'.$cont->id_cont.'/'.$cont->contact_content; ?>">
                        <div class="input-field">
                          <input name="contact_content" id="contact_content" type="text" required value="<?php echo $cont->contact_content; ?>">
                          <label for="cat_name">Content</label>
                        </div>
                        <div class="input-field">
                          <input name="contact_type" id="contact_type" type="text" disabled value="<?php echo $cont->cont_type; ?>">
                          <label for="id_cat">Contact type</label>
                        </div>
                        <div class="input-field">
                          <input name="id_cont" id="id_cont" type="text" disabled value="<?php echo $cont->id_cont; ?>">
                          <label for="id_cat">Contact ID</label>
                        </div>
                        <div class="row">
                          <div class="col s12">
                            <button class="btn">Renew Contact</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              <?php } ?>
              </tbody>
          </table>
            <?php } else {
                echo '<div class="alert alert-border-left">Seems you dont have any category in the list at current time. <b>Add new a new one!</b> :)</div>';
              }
             ?>
        </div>
      </div>

      <div class="col s12 m6 l6">
          <div class="card">
            <div class="title">
              <h5>Add new Contact</h5>
              <a class="minimize" href="#">
                <i class="mdi-navigation-expand-less"></i>
              </a>
            </div>
            <div class="content">
              <form data-parsley-validate method="post" action="contacts/i_ing">
                <select name="contact_type" required>
                  <option disabled selected>Choose a contact category</option>
                  <option value="1">Instagram</option>
                  <option value="2">Whatsapp/Phone number</option>
                  <option value="3">Facebook</option>
                  <option value="4">Twitter</option>
                  <option value="5">Snapchat</option>
                  <option value="6">BBM</option>
                </select>
                <div class="alert blue lighten-2 white-text">
                  <h5><b>FYI!</b></h5>Fill Contact content only with your <b>social media username, phone number, or PIN</b>. 
                </div>
                <div class="input-field">
                  <input name="contact_content" id="contact_content" type="text" required value="<?php echo $this->session->flashdata('contact_content'); ?>">
                  <label for="cat_name">Contact content</label>
                </div>
                <div class="row">
                  <div class="col s12">
                    <button class="btn">Add new Contact</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- /Main Content -->