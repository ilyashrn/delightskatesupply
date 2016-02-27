        <div class="loader-wrapper">
            <div class="loader">
                <div class="cube1"></div>
                <div class="cube2"></div>
            </div>
        </div>

        <div class="go-top"> 
            <div>
                <i class="fa fa-angle-up"></i>
            </div>
        </div>

        <header> 
            <button class="toggle-btn"> 
                <span class="lines"></span> 
            </button> 
            <div class="menu"> 
                <div class="col-md-2 col-xs-12">
                    <img style="width: 80%;margin-top: 5px;" src="<?php echo base_url()?>assets/img/logo_b.png">
                </div>
                <ul class="nav"> 
                    <li <?php echo ($this->uri->segment(1) == 'index' || $this->uri->segment(1) == '') ? 'class="active"' : ''; ?>> <a href="<?php echo base_url()?>">Home</a> </li>
                    <li <?php echo ($this->uri->segment(1) == 'about') ? 'class="active"' : ''; ?>> <a href="<?php echo base_url()?>about">About</a> </li>
                    <li <?php echo ($this->uri->segment(1) == 'product') ? 'class="active"' : ''; ?>> <a href="<?php echo base_url()?>product">Products</a> </li>
                    <li <?php echo ($this->uri->segment(1) == 'media') ? 'class="active"' : ''; ?>> <a href="<?php echo base_url()?>media">Media</a> </li>
                </ul> 
            </div>
        </header> 