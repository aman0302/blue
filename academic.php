<?php

include 'initializer.php';
    $index =0;
    $sec = array_keys($academic_nav_items);
    $sec_heading = array_values($academic_nav_items);
?>

<?php
    buildHeader();
?>


<body id="page-top" class="index">

    <?php
        buildNav($academic_nav_items);
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
                        <span class="skills">Web Developer - Graphic Artist - User Experience Designer</span>
                    </div>
                </div>
            </div>
        </div>
    </header>



    <!-- Portfolio Grid Section -->
    <section id="<?php echo $sec[$index]; ?>">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><?php echo $sec_heading[$index]; $index++; ?></h2>
                    <hr class="star-primary">
                </div>
            </div>
            
            <div class="col-lg-3 col-md-3 text-center">
            <ul class="nav nav-pills  nav-stacked">
              <li class="active"><a href="#first" data-toggle="pill">First Year</a></li>
              <li><a href="#second" data-toggle="pill">Second  Year</a></li>
              <li><a href="#tab_c" data-toggle="pill">Third  Year</a></li>
              <li><a href="#tab_d" data-toggle="pill">Fourth Year</a></li>
            </ul>
            </div>
            <div class="col-lg-9 col-md-9 text-center">
            <div class="tab-content">
                
                <div id="first" class="tab-pane active">
                    <div class="panel panel-default">
                    <table class="table table-hover table-striped table-bordered">
                        <thead class="hidden-phone">
                          <tr>
                            <th class="hidden-phone">Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="hidden-phone">John</td>
                            <td>Doe</td>
                            <td>john@example.com</td>
                          </tr>
                          <tr>
                            <td class="hidden-phone">Mary</td>
                            <td>Moe</td>
                            <td>mary@example</td>
                          </tr>
                          <tr>
                            <td class="hidden-phone">July</td>
                            <td>Dooley</td>
                            <td>july@example</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
                </div>
                <div id="second" class="tab-pane">
                    <h4>Pane 2 Content</h4>
                    <p> and so on ...</p>
                </div>
                <div id="pane3" class="tab-pane">
                    <h4>Pane 3 Content</h4>
                </div>
                <div id="pane4" class="tab-pane">
                    <h4>Pane 4 Content</h4>
                </div>
            </div><!-- /.tab-content -->
            
            </div>
            
            
        </div>
        
    </section>
    
    

    <!-- About Section -->
    <section id="<?php echo $sec[$index]; ?>" class="success">
        
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><?php echo $sec_heading[$index]; $index++; ?></h2>
                    <hr class="star-light">
                </div>
            </div>

            <ul class="nav nav-pills nav-justified ">
              <li class="active"><a href="#tab_a" data-toggle="pill">First Year</a></li>
              <li><a href="#tab_b" data-toggle="pill">Second  Year</a></li>
              <li><a href="#tab_c" data-toggle="pill">Third  Year</a></li>
              <li><a href="#tab_d" data-toggle="pill">Fourth Year</a></li>
            </ul>

        </div>
        
    </section>
    

    <!-- Contact Section -->
    <section id="<?php echo $sec[$index]; ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><?php echo $sec_heading[$index]; $index++; ?></h2>
                    <hr class="star-primary">
                </div>
            </div>
            <?php buildTravelIntro();
            ?>
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
