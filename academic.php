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
              <li class="active"><a href="#notes-first" data-toggle="pill">First Year</a></li>
              <li><a href="#notes-second" data-toggle="pill">Second  Year</a></li>
              <li><a href="#notes-third" data-toggle="pill">Third  Year</a></li>
              <li><a href="#notes-fourth" data-toggle="pill">Fourth Year</a></li>
            </ul>
            </div>
            <div class="col-lg-9 col-md-9 text-center">
            <div class="tab-content">
                
                <div id="notes-first" class="tab-pane active">
                    <div class="panel panel-default">
                    <table class="table table-hover table-striped table-bordered table-white">
                        <thead class="hidden-phone">
                          <tr>
                            <th>Department</th>
                            <th>File Link</th>
 
                          </tr>
                        </thead>
                        <tbody>
                          
                            
      <tr> <td></td> <td><a href="student locker/NOTES/EC First Semester E&C  p-n junction.pdf"><i class="fa fa-rub"></i>  E&C  p-n junction.pdf</a><br /></td> </tr></td>
    
      <tr> <td></td> <td><a href="student locker/NOTES/EC First Semester E&C Basics of electronics.pdf"><i class="fa fa-ruble"></i>EC  E&C Basics of electronics.pdf</a><br /></td> </tr>
    
      <tr> <td></td> <td><a href="student locker/NOTES/EC First Semester E&C Biasing of BJT.pdf"><i class="fa fa-rouble"></i>EC    Biasing of BJT.pdf</a><br /></td> </tr>
    
      <tr> <td></td> <td><a href="student locker/NOTES/EC First Semester E&C BJT characteristics-3.pdf"><i class="fa fa-pagelines"></i>EC   BJT characteristics-3.pdf</a><br /></td> </tr>
    
      <tr> <td></td> <td><a href="student locker/NOTES/EC First Semester E&C BJT.pdf"><i class="fa fa-stack-exchange"></i>EC   BJT.pdf</a><br /></td> </tr>
    
      <tr> <td></td> <td><a href="student locker/NOTES/EC First Semester E&C Characteristic of BJT-1.pdf"><i class="fa fa-arrow-circle-o-right"></i>  E&C Characteristic of BJT-1.pdf</a><br /></td> </tr>
    
      <tr> <td></td> <td><a href="student locker/NOTES/EC First Semester E&C Circuit analysis.pdf"><i class="fa fa-arrow-circle-o-left"></i>EC   Circuit analysis.pdf</a><br /></td> </tr>
    
      <tr> <td></td> <td><a href="student locker/NOTES/EC First Semester E&C Digital Multimeter.pdf"><i class="fa fa-caret-square-o-left"></i>  EC Digital Multimeter.pdf </a><br /></td> </tr>
    
      <tr> <td></td> <td><a href="student locker/NOTES/EC First Semester E&C Diode analysis.pdf"><i class="fa fa-toggle-left"></i>   EC Diode analysis.pdf </a><br /></td> </tr>

      <tr> <td></td> <td><a href="student locker/NOTES/EC First Semester E&C Diode Resistance.pdf"><i class="fa fa-dot-circle-o"></i> EC Diode Resistance.pdf</a></td> </tr>
    
      <tr> <td></td> <td><a href="student locker/NOTES/EC First Semester E&C Electronics Configuration.pdf"><i class="fa fa-wheelchair"></i>  EC Electronics Configuration.pdf </a></td> </tr>
    
      <tr> <td></td> <td><a href="student locker/NOTES/EC First Semester E&C Field Effect Transistor.pdf"><i class="fa fa-vimeo-square"></i>  EC Field Effect Transistor.pdf</a></td> </tr>
    
      <tr> <td></td> <td><a href="student locker/NOTES/EC First Semester E&C OP-AMP.pdf"><i class="fa fa-try"></i>  EC OP-AMP.pdf</a></td> </tr>
    
      <tr> <td></td> <td><a href="student locker/NOTES/EC First Semester E&C Operation of BJT.pdf"><i class="fa fa-turkish-lira"></i>  EC Operation of BJT.pdf <span class="text-muted">(alias)</span></a></td> </tr>
    
      <tr> <td></td> <td><a href="student locker/NOTES/EC First Semester E&C Rectifier.pdf"><i class="fa fa-plus-square-o"></i>  EC Rectifier.pdf</a></td> </tr>
      <tr> <td></td> <td><a href="student locker/NOTES/EC First Semester E&C unregualted power supply(UNIT-V).pdf"><i class="fa fa-dot-circle-o"></i>  EC unregualted power supply.pdf</a></td> </tr>
    
      <tr> <td></td> <td><a href="student locker/NOTES/EC First Semester E&C VI Characteristics.pdf"><i class="fa fa-wheelchair"></i>  EC VI Characteristics.pdf</a></td> </tr>
    
      <tr> <td></td> <td><a href="student locker/NOTES/EC First Semester Three Phase Circuit.pdf"><i class="fa fa-vimeo-square"></i>  Three Phase Circuit.pdf</a></td> </tr>
    
      <tr> <td></td> <td><a href="student locker/NOTES/ELECTRICAL First year Unit 2 AC Fundamentals Electrical engineering part 2.pdf"><i class="fa fa-try"></i> AC Fundamentals  part 2.pdf</a></td> </tr>
    
      <tr> <td></td> <td><a href="student locker/NOTES/ELECTRICAL First year Unit 2 AC Fundamentals Electrical engineering part 3.pdf"><i class="fa fa-turkish-lira"></i> 2 AC Fundamentals EC  part 3.pdf <span class="text-muted">(alias)</span></a></td> </tr>
    
      <tr> <td></td> <td><a href="student locker/NOTES/ELECTRICAL First year Unit 2 AC Fundamentals Electrical engineering.pdf"><i class="fa fa-plus-square-o"></i> AC Fundamentals  EC.pdf </a></td> </tr>


      <tr> <td></td> <td><a href="student locker/NOTES/BASIC COMPONENTS OF COMMUNICATION SATELLITE.pdf"><i class="fa fa-wheelchair"></i>Basic Components of Comm. Satellite.pdf</a></td> </tr>
    
      <tr> <td></td> <td><a href="student locker/NOTES/Manual for the design of reinforced concrete building struct.pdf"><i class="fa fa-vimeo-square"></i>  UPTU  Measuring Instruments.pdf</a></td> </tr>
    
      <tr> <td></td> <td><a href="student locker/NOTES/UPTU First Semester Measuring Instruments.pdf"><i class="fa fa-try"></i>Manual of reinforced concrete building.pdf</a></td> </tr>


                        </tbody>
                      </table>
                </div>
                </div>
                <div id="notes-second" class="tab-pane">
                    <h4>Pane 2 Content</h4>
                    <p> and so on ...</p>
                </div>
                <div id="notes-third" class="tab-pane">
                    <h4>Pane 3 Content</h4>
                </div>
                <div id="notes-fourth" class="tab-pane">
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
              <li class="active"><a href="#first-q" data-toggle="pill">First Year</a></li>
              <li><a href="#second-q" data-toggle="pill">Second  Year</a></li>
              <li><a href="#third-q" data-toggle="pill">Third  Year</a></li>
              <li><a href="#fourth-q" data-toggle="pill">Fourth Year</a></li>
            </ul>
            
            <div class="tab-content">
                
                <div id="first-q" class="tab-pane active">
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
                <div id="second-q" class="tab-pane">
                    <h4>Pane 2 Content</h4>
                    <p> and so on ...</p>
                </div>
                <div id="third-q" class="tab-pane">
                    <h4>Pane 3 Content</h4>
                </div>
                <div id="fourth-q" class="tab-pane">
                    <h4>Pane 4 Content</h4>
                </div>
            </div><!-- /.tab-content -->

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
            <div class="col-lg-3 col-md-3 text-center">
            <ul class="nav nav-pills  nav-stacked">
              <li class="active"><a href="#first-s" data-toggle="pill">First Year</a></li>
              <li><a href="#second-s" data-toggle="pill">Second  Year</a></li>
              <li><a href="#third-s" data-toggle="pill">Third  Year</a></li>
              <li><a href="#fourth-s" data-toggle="pill">Fourth Year</a></li>
            </ul>
            </div>
            <div class="col-lg-9 col-md-9 text-center">
            <div class="tab-content">
                
                <div id="first-s" class="tab-pane active">
                    <div class="panel panel-default">
                    <table class="table table-hover table-striped table-bordered table-white">
                        <thead class="hidden-phone">
                          <tr>
                            <th>Department</th>
                            <th>File Link</th>
 
                          </tr>
                        </thead>
                        <tbody>

                        </tbody>
                      </table>
                </div>
                </div>
                <div id="second-s" class="tab-pane">
                    <h4>Pane 2 Content</h4>
                    <p> and so on ...</p>
                </div>
                <div id="third-s" class="tab-pane">
                    <h4>Pane 3 Content</h4>
                </div>
                <div id="fourth-s" class="tab-pane">
                    <h4>Pane 4 Content</h4>
                </div>
            </div><!-- /.tab-content -->
            
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
                        <ul class="nav nav-pills nav-justified ">
              <li class="active"><a href="#first-r" data-toggle="pill">First Year</a></li>
              <li><a href="#second-r" data-toggle="pill">Second  Year</a></li>
              <li><a href="#third-r" data-toggle="pill">Third  Year</a></li>
              <li><a href="#fourth-r" data-toggle="pill">Fourth Year</a></li>
            </ul>
            
            <div class="tab-content">
                
                <div id="first-r" class="tab-pane active">
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
                <div id="second-r" class="tab-pane">
                    <h4>Pane 2 Content</h4>
                    <p> and so on ...</p>
                </div>
                <div id="third-r" class="tab-pane">
                    <h4>Pane 3 Content</h4>
                </div>
                <div id="fourth-r" class="tab-pane">
                    <h4>Pane 4 Content</h4>
                </div>
            </div><!-- /.tab-content -->
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
