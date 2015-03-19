<?php
    include 'initializer.php';
    $index =0;
    $sec = array_keys($parent_nav_items);
    $sec_heading = array_values($parent_nav_items);
?>

<?php
    buildHeader();
?>


<body id="page-top" class="index">

    <?php
        buildNav($parent_nav_items);
    ?>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/profile.png" alt="">
                    <div class="intro-text">
                        <span class="name">Strictly Students</span>
                        <hr class="star-light">
                        <span class="skills">Everything You Need</span>
                    </div>
                </div>
            </div>
        </div>
    </header>



    <!-- Academics -->
    <section id="<?php echo $sec[$index]; ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><?php echo $sec_heading[$index]; $index++; ?></h2>
                    <hr class="star-primary">
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12 col-sm-12 portfolio-item">
                        <img src="img/front/books-large.jpg" class="img-responsive img-rounded " alt="">



                </div>
            </div>
                





            <div class="row">
				

					<!-- service item -->
					<div class="col-md-4 wow fadeInLeft animated" data-wow-duration="500ms" style="visibility: visible; -webkit-animation-duration: 500ms;">
						<div class="service-item">

							<div class="service-icon">
								<i class="fa fa-pencil fa-4x"></i>
                                
							</div>
							
							<div class="service-desc">
								<h3>Notes and Syllabus</h3>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
							</div>
						</div>
					</div>
					<!-- end service item -->
					
					<!-- service item -->
					<div class="col-md-4 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="5000ms" style="visibility: visible; -webkit-animation-duration: 500ms; -webkit-animation-delay: 500ms;">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-file-text fa-4x"></i>
                                
							</div>
							
							<div class="service-desc">
								<h3>Question Papers</h3>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
							</div>
						</div>
					</div>
					<!-- end service item -->
					
					<!-- service item -->
					<div class="col-md-4 wow fadeInRight animated" data-wow-duration="500ms" data-wow-delay="9000ms" style="visibility: visible; -webkit-animation-duration: 500ms; -webkit-animation-delay: 900ms;">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-graduation-cap fa-4x"></i>
							</div>
							
							<div class="service-desc">
								<h3>Other Stuff</h3>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
							</div>
						</div>
					</div>
					<!-- end service item -->
						
				</div>

<div class="row">
             <div class="col-lg-4 col-lg-offset-4 text-center">
                    <a href="academic.php" class="btn btn-lg btn-blue-outline">
                        <i class="fa fa-tags"></i> Go to Academic Genie
                    </a>
                </div>
            </div>

        </div>
    </section>
    
    

    <!-- Rent-->
    <section id="<?php echo $sec[$index]; ?>" class="success">
        
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><?php echo $sec_heading[$index]; $index++; ?></h2>
                    <hr class="star-light">
                </div>
            </div>

            <?php buildEvents();
            ?>
            
            <div class="col-lg-4 col-lg-offset-4 text-center">
                    <a href="rent.php" class="btn btn-lg btn-outline">
                        <i class="fa fa-download"></i> Go to Rent Space
                    </a>
                </div>
            </div>
        </div>
    </section>
    

    <!-- Travel -->
    <section id="<?php echo $sec[$index]; ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><?php echo $sec_heading[$index]; $index++; ?></h2>
                    <hr class="star-primary">
                </div>
            </div>
             
           
            
                
           
            
            
            <div class="row">
                <div class="col-md-4 col-sm-4 portfolio-item">
                        <img src="img/bg.jpg" class="img-responsive img-rounded " alt="">

                </div>
            
            
                <div class="col-md-4 col-sm-4 portfolio-item">
                        <img src="img/bg.jpg" class="img-responsive img-rounded " alt="">

                </div>
            
            
                <div class="col-md-4 col-sm-4 portfolio-item">
                        <img src="img/bg.jpg" class="img-responsive img-rounded " alt="">

                </div>
            </div>

            
             <div class="row two-column-text">
                <div class="col-md-6 col-sm-6 text-center-aligned">
                    <p>Ever wanted to plan a trip but did not know how to start. Doesnt matter if you are a seach junkie, a trekking freak, a snow lover or just a casual traveller, we have something for everybody. </p>
                 </div>

                
                
                 <div class="col-md-6 col-sm-6 text-center-aligned">
                    <p>We know you want the best bang for your buck so we bring you the most fun packed and well worth trips. Just pack your bags and tell us where. Let us take care of the rest.  </p>
                 </div>
            </div>

            
            
            <div class="col-lg-4 col-lg-offset-4 text-center">
                    <a href="travel.php" class="btn btn-lg btn-blue-outline">
                        <i class="fa fa-rocket"></i>  Plan Trip
                    </a>
                </div>
            
        </div>
    </section>


    <!-- About Section2 -->
    <section id="<?php echo $sec[$index]; ?>" class="success">
        
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><?php echo $sec_heading[$index]; $index++; ?></h2>
                    <hr class="star-light">
                </div>
            </div>
            <?php buildRentIntro();
            ?>
        </div>
    </section>
    
        <!-- Portfolio Grid Section 2 -->
    <!-- About Section -->
    <section id="<?php echo $sec[$index]; ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><?php echo $sec_heading[$index]; $index++; ?></h2>
                    <hr class="star-primary">
                </div>
                </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2009-2011</h4>
                                    <h4 class="subheading">Our Humble Beginnings</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>March 2011</h4>
                                    <h4 class="subheading">An Agency is Born</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>December 2012</h4>
                                    <h4 class="subheading">Transition to Full Service</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>July 2014</h4>
                                    <h4 class="subheading">Phase Two Expansion</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be Part
                                    <br>Of Our
                                    <br>Story!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <?php
        buildFooter();
    ?>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>

</body>

</html>
