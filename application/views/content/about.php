        <section id="about"> 
            <div class="about-background"> 
                <div class="container"> 
                    <h2>About</h2> 
                    <div class="row"> 
                        <div class="aboutWrapper col-xs-12 col-sm-12"> 
                            <img src="<?php echo base_url()?>assets/img/square2.png" alt=""> 
                            <div class="about-text"> 
                                <h3>We are Delight Skate Supplies</h3> 
                                <p><?php echo $about['content'] ?></p>
                                <div class="social"> 
                                    <ul>
                                        <?php
                                        echo ($facebook) ? '<li> <a href="http://www.facebook.com/'.$facebook['contact_content'].'" target="blank"><i class="fa fa-facebook"></i></a> </li>' : '';
                                        echo ($twitter) ? '<li> <a href="http://www.twitter.com/'.$twitter['contact_content'].'" target="blank"><i class="fa fa-twitter"></i></a> </li>' : '';
                                        echo ($instagram) ? '<li> <a href="http://www.instagram.com/'.$instagram['contact_content'].'" target="blank"><i class="fa fa-instagram"></i></a> </li>' : '';
                                         ?> 
                                    </ul> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact"> 
            <div class="contact-background"> 
                <div class="container"> 
                    <h2>Get In Touch</h2> 
                    <div class="row"> 
                        <div class="contact-form col-xs-12 col-sm-6"> 
                            <form method="post" id="contactform"> 
                                <div class="input-style"> 
                                    <input type="text" id="name" name="name" placeholder="Name"> 
                                </div>
                                <div class="input-style"> 
                                    <input type="email" id="email" name="email" placeholder="E-Mail"> 
                                </div>
                                <div class="text-style"> 
                                    <textarea name="message" id="message" placeholder="Message"></textarea> 
                                </div>
                                <input type="submit" id="submit" class="submit-style" name="submit" value="Send Message"> 
                                <div class="submit-result"> 
                                    <p id="success">Your Message has been sent!</p>
                                    <p id="error">Something went wrong, go back and try again!</p>
                                </div>
                            </form> 
                        </div>
                        <div class="info col-xs-12 col-sm-6"> 
                            <ul> 
                                <li> <h3>Address</h3> <p><?php echo $address['contact_content'] ?></p></li>
                                <li> <h3>Phone</h3> <p><?php echo $phone['contact_content'] ?></p></li>
                                <li> <h3>Email</h3> <p><?php echo $email['contact_content'] ?></p></li>
                            </ul> 
                        </div>
                    </div>
                </div>
            </div>
        </section>