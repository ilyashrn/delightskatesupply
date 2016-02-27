        <section id="portfolio"> 
            <div class="portfolio-background"> 
                <div class="container"> 
                    <div> 
                        <h2>Gallery</h2> 
                        <ul id="button-group"> 
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".category-1">Photos</li>
                            <li data-filter=".category-2">Videos</li>
                        </ul> 
                    </div>
                    <div class="clearfix">
                        
                    </div>
                    <div id="masonryGrid"> 
                        <?php foreach ($gallery as $key ) { 
                            if ($key->gallery_type == 1) { ?>
                                
                            
                            <div class="image-box category-1"> 
                                <img src="<?php echo base_url()?>assets/gallery/<?php echo $key->gallery_file ?>" alt=""> 
                                <div class="image-hover"> 
                                    <a class="lightbox" href="#popup-<?php echo $key->id_gal?>"> 
                                        <div> 
                                            <h3><?php echo $key->gallery_desc ?></h3> 
                                        </div>
                                    </a> 
                                </div>
                                <div id="popup-<?php echo $key->id_gal?>" class="mfp-hide popup-box"> 
                                    <img src="<?php echo base_url()?>assets/gallery/<?php echo $key->gallery_file ?>" alt=""> 
                                    <div> 
                                        <h3><?php echo $key->gallery_desc ?></h3> 
                                    </div>
                                </div>
                            </div>
                            <?php } else{ ?>
                                <div class="image-box category-2">
                                    <iframe width="100%" height="300px" src="<?php echo $key->gallery_file ?>" frameborder="0" allowfullscreen></iframe>
                                </div>
                            <?php } ?>
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
                        </div>
                        <div class="image-box category-2">
                            <iframe width="100%" height="300px" src="https://www.youtube.com/embed/_jgIMEk19JM" frameborder="0" allowfullscreen></iframe>
                        </div> -->

                    </div>
                </div>
            </div>
        </section> 
        