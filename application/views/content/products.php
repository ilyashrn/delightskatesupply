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
                                    <li><a href="<?php echo base_url()?>product">All</a><span><?php echo $this->post->count() ?></span></li>
                                    <?php
                                    foreach ($catlist as $cat) { ?>
                                       <li><a href="<?php echo base_url()?>product/category/<?php echo $cat->id_cat.'/'.$cat->cat_name ?>"><?php echo $cat->cat_name ?></a><span><?php echo $this->post->countPerCat($cat->id_cat);?></span></li> 
                                    <?php }
                                     ?>
                                </ul>
                            </div>
                        </div>
                        <div class="box-content">
                            <h4>Popular Post</h4>
                            <div class="popular-post">
                                <?php foreach ($popularlist as $product) {
                                    $img = $this->post->getImg($product->id_post);  ?>
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="<?php echo base_url()?>product/detail/<?php echo $product->id_post.'/'.$product->post_title;?>"> <img class="media-object" src="<?php echo base_url()?>assets/post_images/<?php echo $img['image_file'] ?>" alt=""> </a>
                                        </div>
                                        <div class="media-body">
                                            <p class="media-heading"> <a href="<?php echo base_url()?>product/detail/<?php echo $product->id_post.'/'.$product->post_title;?>"><?php echo $product->post_title ?></a> </p><i><?php echo $product->cat_name ?></i> <span><i class="fa fa-eye"></i><?php echo $product->post_hit ?></span> 
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="blog-page-content col-xs-12 col-sm-7 col-md-8">
                        <?php 
                        $counter = 1;
                        if ($productlist) {
                        foreach ($productlist as $product) {
                            $img = $this->post->getImg($product->id_post);
                            if ($counter == 1 || $counter%3 == 1) {
                                echo '<div class="row">';
                            }
                         ?>
                             <div class="post-content col-md-4"> 
                                <a href="<?php echo base_url()?>product/detail/<?php echo $product->id_post.'/'.$product->post_title;?>"><img src="<?php echo base_url()?>assets/post_images/<?php echo $img['image_file'] ?>" alt=""></a>
                                <span class="post-category"><?php echo $product->post_price ?></span>
                                <span class="post-category"><i class="fa fa-eye"></i><?php echo $product->post_hit ?></span> 
                                <h3><a href="<?php echo base_url()?>product/detail/<?php echo $product->id_post.'/'.$product->post_title;?>"><?php echo $product->post_title ?></a></h3>
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
                         } } else{ ?>
                            <div class="row">
                                <div class="post-content col-md-12">
                                    <p>No posts to view on this category</p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>