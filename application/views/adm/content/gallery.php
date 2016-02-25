<script type="text/javascript">

  function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
  }

  $("#imgInp").change(function(){
    readURL(this);
  });
</script>
<!-- Main Content -->
  <section class="content-wrap ecommerce-customers">
    <!-- Breadcrumb -->
    <div class="page-title">
      <div class="row">
        <div class="col s12 m9 l10">
          <h1><?php echo $title;?></h1>
          <ul>
            <li>
              <a href="dashboard"><i class="fa fa-home"></i> Dashboard</a>  <i class="fa fa-angle-right"></i>
            </li>
            <li><a href=''>Media</a>  <i class='fa fa-angle-right'></i>
            </li>
            <li><a href='#'><?php echo $title ?></a>
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
        <div class="card <?php echo ($this->session->flashdata('min')) ? '' : 'minimized';?>">
          <div class="title">
            <h5>Add new photo</h5>
            <a class="minimize" href="#">
              <i class="mdi-navigation-expand-less"></i>
            </a>
          </div>
          <div class="content">
            <form enctype="multipart/form-data" data-parsley-validate method="post" action="galleries/i_ing">
              <div class="input-field">
                <textarea class="materialize-textarea" name="gallery_desc"></textarea>
                <label for="gallery_desc">Caption</label>
              </div>
              <div class="file-field input-field">
                <input class="file-path validate" type="text"/>
                <div class="btn btn-small">
                  <span>Photo</span>
                  <input name="gallery" type="file" />
                </div>
                <!-- <img id="blah" src="#" alt="" /> -->
              </div>
              <div class="row">
                <div class="col s12">
                  <button type="submit" name="ins" class="btn">Insert new photo</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <?php 
      if ($galleries) {
        $counter = 0;
        foreach ($galleries as $gal) { ?>
        <div class="col s12 m3 l4">
          <div class="card image-card">
            <div class="image">
              <img src="<?php echo base_url()?>assets/gallery/<?php echo $gal->gallery_file;?>" alt="">
              <a href="" class="link"></a>
            </div>
            <div class="content">
              <h5><a class="modal-trigger" href="#modal<?php echo $gal->id_gal;?>" data-dismissible="true"><?php echo $gal->gallery_desc ?></a></h5>
              <span>Modified: <?php echo $gal->post_modified ?></span>
            </div>
            <div class="col l3 right">
              <a href="galleries/delete/<?php echo $gal->gallery_file.'/'.$gal->id_gal ?>" class="custom"><i class="fa fa-remove"></i> Delete</a>
            </div>
          </div>
        </div>

        <!-- Modal Structure -->
        <div id="modal<?php echo $gal->id_gal?>" class="modal">
          <div class="modal-content">
            <div class="col m12 l12">
              <h4>Edit Caption</h4>
              <form enctype="multipart/form-data" method="post" action="galleries/u_ing/<?php echo $gal->id_gal;?>">
                <div class="col l6 m5 s12">
                  <div class="input-field">
                    <textarea class="materialize-textarea" name="gallery_desc"><?php echo $gal->gallery_desc;?></textarea>
                    <label for="gallery_desc">Caption</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12">
                    <button type="submit" name="update" class="btn">Update Caption</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      <?php } } else{
        echo '<div class="alert alert-border-left">Seems you dont have any photo in the gallery at current time. <b>Add new a new one!</b> :)</div>';
        } ?>
    </div>

  </section>
  <!-- /Main Content -->