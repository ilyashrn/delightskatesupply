    <section id="blogSingle">
        
        <div class="blog-single-background"> 
            <div class="container"> 
                <div class="clearfix">
                    
                </div>
                <div class="row">
                    <h2 style="text-align: center;"><strong><?php echo $product['post_title'] ?></strong> // <i><a href=""><?php echo $product['cat_name'] ?></a></i></h2>
                    <div class="col-md-6 col-xs-12">
                        <p><?php echo $product['post_content'] ?></p>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <h1><i><?php echo $product['post_price'] ?>,-</i></h1>
                        <div class="tags">
                            <ul>
                                <?php 
                                $keywords = explode(',', $product['post_keyword']);
                                foreach ($keywords as $key) { ?>
                                <li><a href="#"><?php echo $key ?></a></li>
                                <?php }
                                 ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="masonryGrid"> 
                    <?php foreach ($this->post->getImgperPost($product['id_post']) as $img) { ?>
                        <div class="image-box category-<?php echo $img->id_img ?>"> 
                            <a class="lightbox" href="#popup-<?php echo $img->id_img ?>">
                                <img src="<?php echo base_url()?>assets/post_images/<?php echo $img->image_file ?>" alt=""> 
                            </a>
                            <div id="popup-<?php echo $img->id_img ?>" class="mfp-hide popup-box"> 
                                <img src="<?php echo base_url()?>assets/post_images/<?php echo $img->image_file ?>" alt=""> 
                            </div>
                        </div>
                    <?php } ?>
                    <!-- <div class="image-box category-2"> 
                        <img src="<?php echo base_url()?>assets/myda/images/portfolio-2.jpg" alt=""> 
                        <div class="image-hover"> 
                            <a class="lightbox" href="#popup-2"> 
                                <div> 
                                    <h3>Project Title</h3> 
                                    <span>Photography</span> 
                                </div>
                            </a> 
                        </div>
                        <div id="popup-2" class="mfp-hide popup-box"> 
                            <img src="<?php echo base_url()?>assets/myda/images/portfolio-2.jpg" alt=""> 
                            <div> 
                                <h3>Project Title</h3> 
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla consequat massa quis enim.</p>
                            </div>
                        </div>
                    </div>
                    <div class="image-box category-1"> 
                        <img src="<?php echo base_url()?>assets/myda/images/portfolio-3.jpg" alt=""> 
                        <div class="image-hover"> 
                            <a class="lightbox" href="#popup-3"> 
                                <div> 
                                    <h3>Project Title</h3> 
                                    <span>Illustrator</span> 
                                </div>
                            </a> 
                        </div>
                        <div id="popup-3" class="mfp-hide popup-box"> 
                            <img src="<?php echo base_url()?>assets/myda/images/portfolio-3.jpg" alt=""> 
                            <div> 
                                <h3>Project Title</h3> 
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla consequat massa quis enim.</p>
                            </div>
                        </div>
                    </div>
                    <div class="image-box category-2"> 
                        <img src="<?php echo base_url()?>assets/myda/images/portfolio-4.jpg" alt=""> 
                        <div class="image-hover"> 
                            <a class="lightbox" href="#popup-4"> 
                                <div> 
                                    <h3>Project Title</h3> 
                                    <span>Photography</span> 
                                </div>
                            </a> 
                        </div>
                        <div id="popup-4" class="mfp-hide popup-box"> 
                            <img src="<?php echo base_url()?>assets/myda/images/portfolio-4.jpg" alt=""> 
                            <div> 
                                <h3>Project Title</h3> 
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla consequat massa quis enim.</p>
                            </div>
                        </div>
                    </div>
                    <div class="image-box category-1"> 
                        <img src="<?php echo base_url()?>assets/myda/images/portfolio-5.jpg" alt=""> 
                        <div class="image-hover"> 
                            <a class="lightbox" href="#popup-5"> 
                                <div> 
                                    <h3>Project Title</h3> 
                                    <span>Illustrator</span> 
                                </div>
                            </a> 
                        </div>
                        <div id="popup-5" class="mfp-hide popup-box"> 
                            <img src="<?php echo base_url()?>assets/myda/images/portfolio-5.jpg" alt=""> 
                            <div> 
                                <h3>Project Title</h3> 
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla consequat massa quis enim.</p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>

        <div class="blog-single-background">
            <div class="container">
                <div class="row">
                    <div class="single-post col-xs-12 col-sm-12 col-md-12">
                        <!-- <div class="post"> <img src="<?php echo base_url()?>assets/myda/images/demo-img-1.jpg" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                            <blockquote>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</blockquote>
                            <p>Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        </div>
                        <div class="tags">
                            <ul>
                                <li><a href="#">Photoshop</a></li>
                                <li><a href="#">HTML/CSS</a></li>
                            </ul>
                        </div>
                        <div class="share">
                            <ul>
                                <li> <a href="#"><i class="fa fa-facebook"></i></a> </li>
                                <li> <a href="#"><i class="fa fa-twitter"></i></a> </li>
                                <li> <a href="#"><i class="fa fa-google-plus"></i></a> </li>
                            </ul>
                        </div> -->
                    </div>
                    <!-- <div class="sidebar col-xs-12 col-sm-5 col-md-4">
                        <div class="box-content">
                            <h4>Categories</h4>
                            <div class="category-list">
                                <ul>
                                    <li><a href="#">Lifestyle</a><span>10</span></li>
                                    <li><a href="#">Business</a><span>5</span></li>
                                    <li><a href="#">Travel</a><span>3</span></li>
                                    <li><a href="#">Photography</a><span>12</span></li>
                                    <li><a href="#">Web Design</a><span>9</span></li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>