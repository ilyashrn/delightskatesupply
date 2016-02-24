

<!-- Main Content -->
  <section class="content-wrap ecommerce-product-single">
    <!-- Breadcrumb -->
    <div class="page-title">

      <div class="row">
        <div class="col s12 m9 l10">
          <h1><?php echo $title;?></h1>
          <ul>
            <li>
              <a href="../dashboard"><i class="fa fa-home"></i> Dashboard</a>  <i class="fa fa-angle-right"></i>
            </li>
            <li><a href='./'>Posts</a>  <i class='fa fa-angle-right'></i>
            </li>
            <li><a href='#'>Add new</a>
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

    <form enctype="multipart/form-data" data-parsley-validate method="post" action="i_ing">
        <!-- Save and Cancel buttons -->
        <p class="right-align">
          <button class="btn btn-rounded" type="submit"><i class="mdi-content-save"></i> Save</button>
          <a class="btn btn-rounded" href="./">Cancel</a>
        </p>
        <!-- /Save and Cancel buttons -->

    <div class="row">
      <div class="col s12 m6 l6">
        <!-- General -->
        <div class="card">
          <div class="title">
            <h5>General Info</h5>
            <a class="minimize" href="#">
              <i class="mdi-navigation-expand-less"></i>
            </a>
          </div>
          <div class="content">
            <!-- Post title -->
            <div class="row no-margin-top">
              <div class="col s12 l3">
                <label for="ecommerce-product-name" class="setting-title">
                  Post title
                </label>
              </div>
              <div class="col s12 l9">
                <div class="input-field no-margin-top">
                  <input id="post_title" type="text" placeholder="Post title/Product name" value="" name="post_title" required>
                </div>
              </div>
            </div>
            <!-- /Post title -->
            <!-- Post price -->
            <div class="row no-margin-top">
              <div class="col s12 l3">
                <label for="post_price" class="setting-title">
                  Product price
                </label>
              </div>
              <div class="col s12 l9">
                <div class="input-field no-margin-top">
                  <input id="masked-currency" type="text" data-inputmask="'numericInput': true, 'mask': 'IDR 999,999', 'rightAlignNumerics':false" placeholder="Post price in IDR" value="" name="post_price" required>
                </div>
              </div>
            </div>
            <!-- /Post price -->
            <!-- Post category -->
            <div class="row no-margin-top">
              <div class="col s12 l3">
                <label for="ecommerce-product-name" class="setting-title">
                  Product category
                </label>
              </div>
              <div class="col s12 l9">
                  <select name="id_cat" required>
                      <option disabled selected>select your product category</option>
                    <?php foreach ($catlist as $cat) { ?>
                      <option value="<?php echo $cat->id_cat; ?>"><?php echo $cat->cat_name?></option>
                    <?php } ?>
                  </select>
              </div>
            </div>
            <!-- /Post title -->
            <!-- Product Photos -->
            <div class="row product-photos">
              <div class="col s12 l3">
                <label for="ecommerce-product-photos" class="setting-title">
                  Photos
                </label>
              </div>
              <div class="col s12 l9">
                <div class="file-field">
                  <input style="margin-left: 120px;" class="file-path validate" placeholder="multiple images allowed" type="text"/>
                  <div class="btn">
                    <span>Photos</span>
                    <input style="margin-right: 10px;" onchange="makeFileList();" id="filesToUpload" type="file" name="images[]" multiple />
                  </div>
                  <ul id="fileList"></ul>
                </div>
              </div>
            </div>
            <!-- /Product Photos -->
          </div>
        </div>
        <!-- /General -->
      </div>
      <!-- col s12 m6 l6 -->
      <div class="col s12 m6 l6">
        <!-- Meta -->
        <div class="card">
          <div class="title">
            <h5>Meta</h5>
            <a class="minimize" href="#">
              <i class="mdi-navigation-expand-less"></i>
            </a>
          </div>
          <div class="content">

            <!-- Keywords -->
            <div class="row no-margin-top">
              <div class="col s12 l3">
                <label for="post_keyword" class="setting-title">
                  Keywords
                </label>
              </div>
              <div class="col s12 l9">
                <div class="input-field no-margin-top">
                  <input id="post_keyword" type="text" placeholder="Seperate your keywords with commas" value="" name="post_keyword">
                </div>
              </div>
            </div>
            <!-- /Keywords -->

            <!-- Description -->
            <div class="row no-margin-top">
              <div class="col s12 l3">
                <label for="post_content" class="setting-title">
                  Description
                </label>
              </div>
              <div class="col s12 l9">
                <div class="input-field no-margin-top">
                  <textarea name="post_content" id="post_content" placeholder="Product description" class="materialize-textarea"></textarea>
                </div>
              </div>
            </div>
            <!-- /Description -->
          </div>
        </div>
        <!-- /Meta -->
      </div>
      </form>
    </div>
    <!-- row -->
    

  </section>
  <!-- /Main Content -->

  