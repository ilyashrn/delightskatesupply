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
            <li><a href='#'>Current List</a>
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
      </div>
    </div>

    <!-- With Search -->
    <div class="card-panel">
      <div class="title">
        <h4>Posts list</h4>
        <div class="btn-group right">
          <a href="posts/new_post" class="btn btn-small z-depth-0 btn-rounded"><i class="mdi mdi-content-add"></i> Add new</a>
        </div>
      </div>
      <div class="row">
        <div class="col s12 l12">
          <?php if ($postlist) { 
          ?>
          <table id="table2" class="table table-hover" style="font-size: 13px;">
            <thead>
              <tr>
                <th></th>
                <th>#</th>
                <th>Product Title</th>
                <th>Preview</th>
                <th>Price</th>
                <th>Category</th>
                <th>Modified date</th>
                <th>Added date</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($postlist as $post) {
                $image = $this->post->getImg($post->id_post);
               ?>
                <tr>
                  <td>
                    <a href="posts/delete/<?php echo $post->id_post.'/'.$post->post_title;?>" class="btn btn-small red lighten-1 z-depth-0"><i class="mdi mdi-action-delete"></i></a>
                  </td>
                  <td><?php echo $post->id_post ?></td>
                  <td>
                    <a class="modal-trigger" href="#modal<?php echo $post->id_post;?>" data-dismissible="true"><?php echo $post->post_title?></a><br>
                    <span class="grey-text"><?php echo character_limiter($post->post_content,90)?> </span>
                  </td>
                  <td> 
                    <?php if ($image) { ?>
                      <img style="width:60%" src="<?php echo base_url().'assets/post_images/'.$image['image_file'];?>">
                    <?php } else { 
                      echo '<div class="alert orange lighten-2 white-text"><strong>No photo</strong></div>'; }?>
                  </td>
                  <td><?php echo $post->post_price?>,00</td>
                  <td><?php echo $post->cat_name;?></td>
                  <td><?php echo $post->post_modified;?></td>
                  <td><?php echo $post->post_date;?></td>
                </tr>

                <!-- Modal Structure -->
                <div id="modal<?php echo $post->id_post?>" class="modal">
                  <div class="modal-content">
                    <div class="col m12 l12">
                      <h4>Edit Post</h4>
                      <form enctype="multipart/form-data" data-parsley-validate method="post" action="posts/u_ing/<?php echo $post->id_post.'/'.$post->post_title;?>">
                        <div class="col l6 m5 s12">
                          <div class="input-field">
                            <input name="post_title" id="post_title" type="text" required value="<?php echo $post->post_title; ?>">
                            <label for="post_title">Post Title</label>
                          </div>
                        </div>
                        <div class="col l6 m5 s12">
                          <div class="input-field">
                            <input id="masked-currency" type="text" data-inputmask="'numericInput': true, 'mask': 'IDR 999,999', 'rightAlignNumerics':false" placeholder="Post price in IDR" value="<?php echo $post->post_price;?>" name="post_price" required>
                            <label for="masked-currencys">Price</label>
                          </div>  
                        </div>
                        <div class="col l6 m5 s12">
                          <div class="input-field">
                            <select id="id_cat" name="id_cat" disabled>
                              <?php foreach ($catlist as $cat) { ?>
                                <option disabled value="<?php echo $cat->id_cat; ?>"><?php echo $cat->cat_name?></option>  
                              <?php } ?>
                            </select>
                            <label for="id_cat">Post Category</label>
                          </div>
                        </div>
                        <div class="col l6 m5 s12">
                          <div class="input-field">
                            <input name="post_keyword" id="post_keyword" type="text" required value="<?php echo $post->post_keyword; ?>">
                            <label for="post_keyword">Post Keyword</label>
                          </div>
                        </div>
                        <div class="col l12 m12 s12">
                          <div class="input-field">
                            <textarea class="materialize-textarea" name="post_content"><?php echo $post->post_content;?></textarea>
                            <label for="post_content">Post Description</label>
                          </div>
                        </div>
                        <div class="col l12 m12 s12">
                          <div class="input-field file-field" style="float: none;">
                            <input style="margin-left: 120px;width: 50%;" class="file-path validate" placeholder="add more photos" type="text"/>
                            <div class="btn">
                              <span>Photos</span>
                              <input style="margin-right: 10px;" onchange="makeFileList();" id="filesToUpload" type="file" name="images[]" multiple />
                            </div>
                            <ul id="fileList"></ul>
                          </div>
                        </div>
                        <div class="col l12 m12 s12">
                          <div class="input-field">
                              <?php 
                              if ($this->post->getImgperPost($post->id_post)) {
                                foreach ($this->post->getImgperPost($post->id_post) as $key) { ?>
                                  <?php 
                                  echo '<ul class="col l3 s12" id="img_div">';
                                  echo '<img style="width:100%;float:left;margin-right:10px;margin-bottom:10px;" src="'.base_url().'/assets/post_images/'.$key->image_file.'"><br>';
                                  echo '<input type="hidden" value="'.$key->id_img.'" name="current_img[]">'; ?>
                                  <a href="javascript:void(0);" onclick="$(this).closest('ul').remove();" class="custom" id="trigger'.$post->id_post.'"><i class="fa fa-remove"></i> Delete</a>
                                  <?php echo '</ul>';
                                 }
                              }
                               ?>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col s12">
                            <button type="submit" name="update" class="btn">Update Post</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

              <?php } ?>
            </tbody>
          </table>
          <?php
          } else {
             echo '<div class="alert alert-border-left">Seems you dont have any post in the list at current time. <b>Add new a new one!</b> :)</div>';
          } ?>
        </div>
      </div>
    </div>
    <!-- /With Search -->

  </section>
  <!-- /Main Content -->

  <script type="text/javascript" src="<?php echo base_url()?>assets/dataTables/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript">
    // function delImg() {
    //   var $trigger = $("#trigger<?php echo $post->id_post;?>")
    //     , $container = $("#img<?php echo $post->id_post;?>");
    //   $trigger.on("click", function() {
    //     $container.remove();
    //   });
    // }
  </script>
  <script>
  $('#table2').DataTable({
    "iDisplayLength": 5,
    "aLengthMenu": [
      [5, 10, 25, 50, -1],
      [5, 10, 25, 50, "all"]
    ],
    "paging": true,
    "ordering": true
  });
</script>