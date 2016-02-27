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
        <div class="alert alert-border-bottom orange lighten-4 cyan-text text-darken-2">
          <h4>FYI!</h4>
          It is <b>strongly recommended</b> for you to: 
          <blockquote>Upload <b>similar-sized</b> photos on your gallery, to create a tidy and clean gallery on frontend website.</blockquote>
          <blockquote>Upload <b>maximum-1 MB-sized</b> photos on your gallery, to save up storage usage.</blockquote>
          <blockquote>Upload <b>white-background-ed</b> or <b>.PNG-formatted</b> photos.</blockquote>
        </div>
      </div>
      <div class="col s12 m5 l5">
        <div class="card">
          <div class="title">
            <h5>Add new photo for home</h5>
            <a class="minimize" href="#">
              <i class="mdi-navigation-expand-less"></i>
            </a>
          </div>
          <div class="content">
            <form enctype="multipart/form-data" data-parsley-validate method="post" action="homes/i_ing">
              <div class="file-field input-field">
                <input class="file-path validate" type="text"/>
                <div class="btn btn-small">
                  <span>Photo</span>
                  <input required name="gallery" type="file" />
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
        $counter = 1;
        $counter2 = 1;
        foreach ($galleries as $gal) {
        if ($counter == 1 || $counter%3 == 1) {
           echo '<div class="row">';
        } 
         ?>
        <div class="col s12 m3 l4">
          <div class="card image-card">
            <div class="image">
              <img src="<?php echo base_url()?>assets/home/<?php echo $gal->pict_file;?>" alt="">
              <a href="" class="link"></a>
            </div>
            <div class="content">
              <span>Added date: <?php echo $gal->post_date ?></span>
            </div>
            <div class="col l3 right">
              <a href="homes/delete/<?php echo $gal->pict_file.'/'.$gal->id_pict ?>" class="custom"><i class="fa fa-remove"></i> Delete</a>
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