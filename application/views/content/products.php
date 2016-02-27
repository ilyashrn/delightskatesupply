<section id="blogPage">
        <div class="blog-page-background">
            <div class="container">
                <div class="row">
                    <div class="clearfix"></div>
                </div>
                <div class="row">
                    <div class="sidebar col-xs-12 col-sm-5 col-md-4">
                        <div class="box-content">
                            <h4>Categories</h4>
                            <div class="category-list">
                                <ul>
                                    <li><a href="">All</a><span>90</span></li>
                                    <?php
                                    foreach ($catlist as $cat) { ?>
                                       <li><a href="#"><?php echo $cat->cat_name ?></a><span><?php echo $this->post->countPerCat($cat->id_cat);?></span></li> 
                                    <?php }
                                     ?>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="box-content">
                            <h4>Popular Post</h4>
                            <div class="popular-post">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#"> <img class="media-object" src="<?php echo base_url()?>assets/myda/images/demo-img-1.jpg" alt=""> </a>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"> <a href="#">Blog Post with Image</a> </p><span><i class="fa fa-clock-o"></i>23 Oct, 2015</span> </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#"> <img class="media-object" src="<?php echo base_url()?>assets/myda/images/demo-img-2.jpg" alt=""> </a>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"> <a href="#">Standart Blog Post</a> </p><span><i class="fa fa-clock-o"></i>22 Oct, 2015</span> </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#"> <img class="media-object" src="<?php echo base_url()?>assets/myda/images/demo-img-3.jpg" alt=""> </a>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"> <a href="#">Blog Post with Image</a> </p><span><i class="fa fa-clock-o"></i>21 Oct, 2015</span> </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#"> <img class="media-object" src="<?php echo base_url()?>assets/myda/images/demo-img-4.jpg" alt=""> </a>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"> <a href="#">Standart Blog Post</a> </p><span><i class="fa fa-clock-o"></i>20 Oct, 2015</span> </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#"> <img class="media-object" src="<?php echo base_url()?>assets/myda/images/demo-img-5.jpg" alt=""> </a>
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"> <a href="#">Blog Post with Image</a> </p><span><i class="fa fa-clock-o"></i>19 Oct, 2015</span> </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="blog-page-content col-xs-12 col-sm-7 col-md-8">
                        <?php 
                        $counter = 1;
                        foreach ($productlist as $product) {
                            $img = $this->post->getImg($product->id_post);
                            if ($counter == 1 || $counter%3 == 1) {
                                echo '<div class="row">';
                            }
                         ?>
                             <div class="post-content col-md-4"> 
                                <a href="product/detail/<?php echo $product->id_post.'/'.$product->post_title;?>"><img src="<?php echo base_url()?>assets/post_images/<?php echo $img['image_file'] ?>" alt=""></a>
                                <span class="post-category"><?php echo $product->post_price ?></span>
                                <h3><a href="product/detail/<?php echo $product->id_post.'/'.$product->post_title;?>"><?php echo $product->post_title ?></a></h3>
                                <ul class="post-detail">
                                    <li><b><?php echo $product->cat_name?></b></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                         <?php 
                            if ($counter%3 == 0) {
                                echo '</div>';
                                $counter = 0;
                            }
                            $counter++;
                         } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>