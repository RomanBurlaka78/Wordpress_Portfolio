<?php
 /*

Template Name: home

 */
?>

<?php get_header(); ?>




<!-- Home Section -->

<section id="home" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-6 col-sm-6">
                    <div class="home-img" ></div>
               </div>

               <div class="col-md-6 col-sm-6">
                    <div class="home-thumb">
                         <div class="section-title">
                              <h4 class="wow fadeInUp" data-wow-delay="0.3s"> welcome to my website</h4>
                              <h1 class="wow fadeInUp" data-wow-delay="0.6s">Hello, I am <strong>Roman Burlaka</strong> currently based in Turek, Poland.</h1>
                              <p class="wow fadeInUp" data-wow-delay="0.9s">Donec auctor arcu at efficitur lacinia. Praesent bibendum efficitur ipsum, et mattis tellus interdum in. Ut a dictum purus. Vestibulum non pellentesque felis, sed dignissim urna. Vestibulum id accumsan quam.</p>
                              
                              <a href="#about" class="wow fadeInUp smoothScroll section-btn btn btn-success" data-wow-delay="1.4s">Get Started</a>
                              
                         </div>
                    </div>
               </div>


          </div>
     </div>
</section>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php bloginfo('template_url'); ?>/assets/images/home-img.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php bloginfo('template_url'); ?>/assets/images/education-img.jpg" class="d-block w-100" alt="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php bloginfo('template_url'); ?>/assets/images/-img.jpg" class="d-block w-100" alt="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<!-- About Section -->

<section id="about" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-6 col-sm-12">
                    <div class="about-thumb">
                         <div class="wow fadeInUp section-title" data-wow-delay="0.4s">
                              <h1>Donec auctor</h1>
                              <p class="color-yellow">Sed vulputate vitae diam quis bibendum</p>
                         </div>
                         <div class="wow fadeInUp" data-wow-delay="0.8s">
                              <p>Phasellus vulputate tellus nec tortor varius elementum. Curabitur at pulvinar ante. Duis dui urna, faucibus eget felis eu, iaculis congue sem. Mauris convallis eros massa.</p>
                              <p>Quisque viverra iaculis aliquam. Etiam volutpat, justo non aliquam bibendum, sem nibh mollis erat, quis porta odio odio at velit.</p>
                         </div>
                    </div>
               </div>

               <div class="col-md-3 col-sm-6">
    
                    <div class="background-image about-img"  ></div>
               </div>

               <div class="bg-yellow col-md-3 col-sm-6">
                    <div class="skill-thumb">
                         <div class="wow fadeInUp section-title color-white" data-wow-delay="1.2s">
                              <h1>My Skills</h1>
                              <p class="color-white">Photoshop . HTML CSS JS . Web Design</p>
                         </div>

                         <div class=" wow fadeInUp skills-thumb" data-wow-delay="1.6s">
                         <strong>Frontend Design</strong>
                              <span class="color-white pull-right">90%</span>
                                   <div class="progress">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                   </div>

                         <strong>Backend processing</strong>
                              <span class="color-white pull-right">70%</span>
                                   <div class="progress">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                                   </div>

                         <strong>HTML5 & CSS3</strong>
                              <span class="color-white pull-right">80%</span>
                                   <div class="progress">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                   </div>
                         </div>

                    </div>
               </div>

          </div>
     </div>
</section>


<!-- Service Section -->

<section id="service" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="bg-yellow col-md-3 col-sm-6">
               <img src="<?php bloginfo('template_url'); ?>/assets/images/html.png" width ="350" alt="Html">
                    <div class="wow fadeInUp color-white service-thumb" data-wow-delay="0.8s">
                         <i class="fa fa-desktop"></i>
                      
                              <h3>Interface Design</h3>
                              <p class="color-white">Phasellus vulputate tellus nec tortor varius elementum. Curabitur at pulvinar ante.</p>
                    </div>
               </div>

               <div class="col-md-3 col-sm-6">
                    <div class="wow fadeInUp color-white service-thumb" data-wow-delay="1.2s">
                         <i class="fa fa-paper-plane"></i>
                              <h3>Media Strategy</h3>
                              <p class="color-white">Curabitur at pulvinar ante. Duis dui urna, faucibus eget felis eu, iaculis congue sem.</p>
                    </div>
               </div>

               <div class="bg-dark col-md-3 col-sm-6">
                    <div class="wow fadeInUp color-white service-thumb" data-wow-delay="1.6s">
                         <i class="fa fa-table"></i>
                              <h3>Mobile App</h3>
                              <p class="color-white">Mauris convallis eros massa, vitae euismod arcu tempus ut. Quisque viverra iaculis.</p>
                    </div>
               </div>

               <div class="bg-white col-md-3 col-sm-6">
                    <div class="wow fadeInUp service-thumb" data-wow-delay="1.8s">
                         <i class="fa fa-html5"></i>
                              <h3>Coding</h3>
                              <p>Mauris convallis eros massa, vitae euismod arcu tempus ut. Quisque viverra iaculis.</p>
                    </div>
               </div>

          </div>
     </div>
</section>


<!-- Experience Section -->

<section id="experience" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-6 col-sm-6">
                    <div class="background-image experience-img"  ></div>
               </div>

               <div class="col-md-6 col-sm-6">
                    <div class="color-white experience-thumb">
                         <div class="wow fadeInUp section-title" data-wow-delay="0.8s">
                              <h1>My Experiences</h1>
                              <p class="color-white">Previous companies and my tasks</p>
                         </div>

                         <div class="wow fadeInUp color-white media" data-wow-delay="1.2s">
                              <div class="media-object media-left">
                                   <i class="fa fa-laptop"></i>
                              </div>
                              <div class="media-body">
                                   <h3 class="media-heading">Graphic Designer <small>2014 Jul - 2015 Sep</small></h3>
                                   <p class="color-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                              </div>
                         </div>

                         <div class="wow fadeInUp color-white media" data-wow-delay="1.6s">
                              <div class="media-object media-left">
                                   <i class="fa fa-laptop"></i>
                              </div>
                              <div class="media-body">
                                   <h3 class="media-heading">Web Designer <small>2015 Oct - 2017 Jan</small></h3>
                                   <p class="color-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                              </div>
                         </div>

                    </div>
               </div>

          </div>
     </div>
</section>


<!-- Education Section -->

<section id="education" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-6 col-sm-6">
                    <div class="color-white education-thumb">
                         <div class="wow fadeInUp section-title" data-wow-delay="0.8s">
                              <h1>My Education</h1>
                              <p class="color-white">In cursus orci non ipsum gravida dignissim</p>
                         </div>

                         <div class="wow fadeInUp color-white media" data-wow-delay="1.2s">
                              <div class="media-object media-left">
                                   <i class="fa fa-laptop"></i>
                              </div>
                              <div class="media-body">
                                   <h3 class="media-heading">Master in Design <small>2012 Jan - 2014 May</small></h3>
                                   <p class="color-white">Etiam iaculis elit in mauris ullamcorper auctor. Proin a sapien id orci ullamcorper dignissim eu in neque. </p>
                              </div>
                         </div>

                         <div class="wow fadeInUp color-white media" data-wow-delay="1.6s">
                              <div class="media-object media-left">
                                   <i class="fa fa-laptop"></i>
                              </div>
                              <div class="media-body">
                                   <h3 class="media-heading">Bachelor of Arts <small>2008 May - 2011 Dec</small></h3>
                                   <p class="color-white">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                              </div>
                         </div>

                    </div>
               </div>

               <div class="col-md-6 col-sm-6">
                    <div class="background-image education-img"></div>
               </div>

          </div>
     </div>
</section>


<!-- Quotes Section -->

<section id="quotes" class="parallax-section" style = "background: url(' <?php bloginfo('template_url'); ?>/assets/images/quotes-bg.jpg') no-repeat;"  >
     <div class="overlay"></div>
     <div class="container">
          <div class="row">

               <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <i class="wow fadeInUp fa fa-star" data-wow-delay="0.6s"></i>
                    <h2 class="wow fadeInUp" data-wow-delay="0.8s">Proin lobortis eu diam et facilisis. Fusce nisi nibh, molestie in vestibulum quis, auctor et orci.</h2>
                    <p class="wow fadeInUp" data-wow-delay="1s">Curabitur at pulvinar ante. Duis dui urna, faucibus eget felis eu, iaculis congue sem.</p>
               </div>

          </div>
     </div>
</section>


<!-- Contact Section -->

<section id="contact"  style = "background:  #E9724C;" class="parallax-section">  
     <div class="container">
          <div class="row">

               <div class="col-md-6 col-sm-12">
                    <div class="contact-form">
                         <div class="wow fadeInUp section-title" data-wow-delay="0.2s">
                              <h1 class="color-white">Say hello..</h1>
                              <p class="color-white">Integer ut consectetur est. In cursus orci non ipsum gravida dignissim.</p>
                         </div>

                         <div id="contact-form" style = "background: transparent;
                            border: none;
                            border-bottom: 1px solid #E3AE57;
                            border-radius: 0px;
                            box-shadow: none;
                            font-size: 18px;
                            margin-top: 10px;
                            margin-bottom: 25px;
                            transition: all 0.4s ease-in-out; ">
                              <form action="#template-mo" method="post">
                                   <div class="wow fadeInUp" data-wow-delay="1s">
                                        <input name="fullname" type="text" class="form-control" id="fullname" placeholder="Your Name">
                                   </div>
                                   <div class="wow fadeInUp" data-wow-delay="1.2s">
                                        <input name="email" type="email" class="form-control" id="email" placeholder="Your Email">
                                   </div>
                                   <div class="wow fadeInUp" data-wow-delay="1.4s">
                                        <textarea name="message" rows="5" class="form-control" id="message" placeholder="Write your message..."></textarea>
                                   </div>
                                   <div class="wow fadeInUp col-md-6 col-sm-8" data-wow-delay="1.6s">
                                        <input name="submit" type="submit" class="form-control" id="submit" value="Send">
                                   </div>
                              </form>
                         </div>

                    </div>
               </div>

               <div class="col-md-3 col-sm-6">
                    <div class="background-image contact-img"  style = "background: url(' <?php bloginfo('template_url'); ?>/assets/images/contact-img.jpg') no-repeat;"></div>
               </div>

               <div class="bg-dark col-md-3 col-sm-6">
                    <div class="contact-thumb">
                         <div class="wow fadeInUp contact-info" data-wow-delay="0.6s">
                              <h3 class="color-white">Visit my office</h3>
                              <p>456 New Street 22000, New York City, USA</p>
                         </div>

                         <div class="wow fadeInUp contact-info" data-wow-delay="0.8s">
                              <h3 class="color-white">Contact.</h3>
                              <p><i class="fa fa-phone"></i> 01-0110-0220</p>
                              <p><i class="fa fa-envelope-o"></i> <a href="mailto:hello@company.co">hello@company.co</a></p>
                              <p><i class="fa fa-globe"></i> <a href="#">company.co</a></p>
                         </div>

                    </div>
               </div>

          </div>
     </div>
</section>






<?php get_footer();   ?>