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
        <div class="alert alert-border-bottom cyan lighten-4 cyan-text text-darken-2">
          <h4>FYI!</h4>
          <blockquote>To add a youtube link, <b>go to youtube.com's video page</b>. Click <b>share</b> button under the video description, go to <b>embed</b> tab, and go copy the youtube link inside embed field.</blockquote> 
          <blockquote>Link example: <b>https://www.youtube.com/embed/HDpCv71r-0U</b> (there's /embed/ tag inside the link)</blockquote>
        </div>
      </div>
      <div class="col s12 m5 l5">
        <div class="card">
          <div class="title">
            <h5>Add new youtube link</h5>
            <a class="minimize" href="#">
              <i class="mdi-navigation-expand-less"></i>
            </a>
          </div>
          <div class="content">
            <form data-parsley-validate method="post" action="videos/i_ing">
              <div class="input-field">
                <input type="url" class="materialize-textarea" name="gallery_file" required>
                <label for="gallery_file">Youtube link</label>
              </div>
              <div class="row">
                <div class="col s12">
                  <button type="submit" name="ins" class="btn">Insert new link</button>
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
        $counter = 1;
        $counter2 = 1;
        foreach ($galleries as $gal) {
        if ($counter == 1 || $counter%3 == 1) {
           echo '<div class="row">';
        } 
         ?>
        <div class="col s12 m4 l4">
          <div class="card image-card">
            <iframe width="100%" height="300px" src="<?php echo $gal->gallery_file;?>" frameborder="0" allowfullscreen></iframe>
            <!-- <div class="image">
              <img src="<?php echo base_url()?>assets/gallery/<?php echo $gal->gallery_file;?>" alt="">
              <a href="" class="link"></a>
            </div> -->
            <div class="content">
              <span>Added: <?php echo $gal->post_modified ?></span>
            </div>
            <div class="col l3 right">
              <a href="videos/delete/<?php echo $gal->id_gal ?>" class="custom"><i class="fa fa-remove"></i> Delete</a>
            </div>
          </div>
        </div>

        <!-- Modal Structure -->
        <div id="modal<?php echo $gal->id_gal?>" class="modal">
          <div class="modal-content">
            <div class="col m12 l12">
              <h4>Edit Caption</h4>
              <form data-parsley-validate enctype="multipart/form-data" method="post" action="galleries/u_ing/<?php echo $gal->id_gal;?>">
                <div class="col l6 m5 s12">
                  <div class="input-field">
                    <textarea class="materialize-textarea" name="gallery_desc" required><?php echo $gal->gallery_desc;?></textarea>
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
      <?php 
      // $counter2++;
      if ($counter%3 == 0) {
        echo '</div>';
        $counter = 0;
      }
      $counter++; 
      } } else{
        echo '<div class="alert alert-border-left">Seems you dont have any photo in the gallery at current time. <b>Add new a new one!</b> :)</div>';
        } ?>
    </div>

  </section>
  <!-- /Main Content -->