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
            <li><a href=''>Posts</a>  <i class='fa fa-angle-right'></i>
            </li>
            <li><a href='#'>Posts Categories</a>
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
          <h4>Categories</h4>
              <?php 
              if ($catlist) { ?>
          <table class="table table-stripped table-responsive" style="font-size: 13px;">
            <thead>
              <tr>
                <th>#</th>
                <th>Category name</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                <?php foreach ($catlist as $cat) { ?>
                <tr>
                  <td><?php echo $cat->id_cat ?></td>
                  <td><a class="modal-trigger" href="#modal<?php echo $cat->id_cat;?>" data-dismissible="true"><?php echo $cat->cat_name ?></a></td>
                  <td>
                      <a href="categories/delete/<?php echo $cat->id_cat.'/'.$cat->cat_name ?>" class="waves-effect waves-dark btn red lighten-1 btn-small btn-rounded"><i class="small fa fa-remove"></i></a>
                  </td>
                </tr> 

                <!-- Modal Structure -->
                <div id="modal<?php echo $cat->id_cat?>" class="modal">
                  <div class="modal-content">
                    <div class="col m12 l12">
                      <h4>Edit Category</h4>
                      <form data-parsley-validate method="post" action="categories/u_ing/<?php echo $cat->id_cat.'/'.$cat->cat_name; ?>">
                        <div class="input-field">
                          <input name="cat_name1" id="cat_name" type="text" required value="<?php echo $cat->cat_name; ?>">
                          <label for="cat_name">Category name</label>
                        </div>
                        <div class="input-field">
                          <input name="id_cat" id="id_cat" type="text" disabled value="<?php echo $cat->id_cat; ?>">
                          <label for="id_cat">Category ID</label>
                        </div>
                        <div class="row">
                          <div class="col s12">
                            <button class="btn">Renew Category name</button>
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
              <h5>Add new Category</h5>
              <a class="minimize" href="#">
                <i class="mdi-navigation-expand-less"></i>
              </a>
            </div>
            <div class="content">
              <form data-parsley-validate method="post" action="categories/i_ing">
                <div class="alert orange lighten-4 orange-text text-darken-2">
                  <h4>To be noted </h4>
                  <p>please insert a new and unique name for the category.</p>
                </div>
                <div class="input-field">
                  <input name="cat_name" id="cat_name" type="text" required value="<?php echo $this->session->flashdata('cat_name'); ?>">
                  <label for="cat_name">Category name</label>
                </div>
                <div class="row">
                  <div class="col s12">
                    <button class="btn">Add new Category</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- /Main Content -->