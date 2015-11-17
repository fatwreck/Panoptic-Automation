<?php include "inc/head-nav-full.php" ;?>

<section class="main-section">
    <div class="row">
        <div class="small-12 medium-6 large-5 columns text-center">
            <h3>Ready to work with us?</h3>
            <p>You can contact us to talk more about your project.</p>
            <a href="contact" class="small radius button dark">Message Us</a>
        </div>
        <div class="small-12 medium-6 large-7 columns news">
            <h1>News</h1>
            <?php
                $a = new Area('Latest News');
                $a->display($c);
            ?>
<!--
            <p class="date right">September 19, 2015</p>
            
            <p>Panoptic Automation Solutions is a Calgary based consulting firm and has been providing automation, instrumentation and electrical services since its inception in 2012.</p>
            <p class="date right"><a href="">Read More</a></p>
-->
        </div>
    </div>
    <div class="row home-services-bg home-slides">
        <div class="small-12 columns">
            <div class="row animateMeUp">
                <div class="small-12 medium-10 large-8 columns">
                    <h1>Our Services</h1>
                    <div class="slider-service">
                        <div>
                            <?php
                                $a = new Area('Electrical Engineering Slide');
                                $a->display($c);
                            ?>
<!--
                            <h2>Electrical Engineering</h2>
                            <p>Our engineering projects vary from both brownfield and greenfield control system projects, where we specify, design, and procure control panels, to projects with more extensive electrical scope. Our experienced engineers can develop single line diagrams, motor schematics, cable schedules, instrument layout drawings, cause &amp; effect diagrams or whatever else is required to provide our clients the complete engineering solution they require for their facility.</p>
                            <p><a href="#">Read More</a></p>
-->
                        </div>
                        <div>
                            <?php
                                $a = new Area('Instrumentation Engineering Slide');
                                $a->display($c);
                            ?>
<!--
                            <h2>Instrumentation Engineering</h2>
                            <p>Our engineering projects vary from both brownfield and greenfield control system projects, where we specify, design, and procure control panels, to projects with more extensive electrical scope. Our experienced engineers can develop single line diagrams, motor schematics, cable schedules, instrument layout drawings, cause &amp; effect diagrams or whatever else is required to provide our clients the complete engineering solution they require for their facility.</p>
                            <p><a href="#">Read More</a></p>
-->
                        </div>
                        <div>
                            <?php
                                $a = new Area('Control Systems Slide');
                                $a->display($c);
                            ?>
<!--
                            <h2>Control Systems</h2>
                            <p>Our engineering projects vary from both brownfield and greenfield control system projects, where we specify, design, and procure control panels, to projects with more extensive electrical scope. Our experienced engineers can develop single line diagrams, motor schematics, cable schedules, instrument layout drawings, cause &amp; effect diagrams or whatever else is required to provide our clients the complete engineering solution they require for their facility.</p>
                            <p><a href="#">Read More</a></p>
-->
                        </div>
                    </div>
                </div>
                <div class="medium-2 large-4 show-for-medium-up columns">
                    <p class="controls">
                        <button type="button" class="slick-prev" id="prev-services-home">
                            <span class="arrow-left"></span>
                        </button>
                        <button type="button" class="slick-next" id="next-services-home">
                            <span class="arrow-right"></span>
                        </button>
                    </p>
                </div>
            </div>
            <div class="row slides-nav">
                <div class="small-12 columns">
                    <nav>
                        <section class="top-bar-section show-for-large-up sub-nav">
                            <ul class="left">
                                <?php
                                    $a = new Area('Home Page Our Services Nav');
                                    $a->display($c);
                                ?>
<!--
                                <li class="active"><a href="">Electrical Engineering</a></li>
                                <li><a href="">Instrumentation Engineering</a></li>
                                <li><a href="">Control Systems</a></li>
                                <li><a href="">Design &amp; Drafting</a></li>
                                <li><a href="">Project Management</a></li>
-->
                            </ul>
                        </section>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    
<!--
    <div class="row home-solutions-bg home-slides">
        <div class="small-12 columns">
            <div class="row animateMeUp">
                <div class="small-12 medium-10 large-8 columns">
                    <h1>Our Solutions</h1>
                    <div class="slider-solutions">
                        <div>
                            <h2>Electrical Engineering</h2>
                            <p>Our engineering projects vary from both brownfield and greenfield control system projects, where we specify, design, and procure control panels, to projects with more extensive electrical scope. Our experienced engineers can develop single line diagrams, motor schematics, cable schedules, instrument layout drawings, cause &amp; effect diagrams or whatever else is required to provide our clients the complete engineering solution they require for their facility.</p>
                            <p><a href="#">Read More</a></p>
                        </div>
                        <div>
                            <h2>Instrumentation Engineering</h2>
                            <p>Our engineering projects vary from both brownfield and greenfield control system projects, where we specify, design, and procure control panels, to projects with more extensive electrical scope. Our experienced engineers can develop single line diagrams, motor schematics, cable schedules, instrument layout drawings, cause &amp; effect diagrams or whatever else is required to provide our clients the complete engineering solution they require for their facility.</p>
                            <p><a href="#">Read More</a></p>
                        </div>
                        <div>
                            <h2>Control Systems</h2>
                            <p>Our engineering projects vary from both brownfield and greenfield control system projects, where we specify, design, and procure control panels, to projects with more extensive electrical scope. Our experienced engineers can develop single line diagrams, motor schematics, cable schedules, instrument layout drawings, cause &amp; effect diagrams or whatever else is required to provide our clients the complete engineering solution they require for their facility.</p>
                            <p><a href="#">Read More</a></p>
                        </div>
                    </div>
                </div>
                <div class="medium-2 large-4 show-for-medium-up columns">
                    <p class="controls">
                        <button type="button" class="slick-prev" id="prev-services-home">
                            <span class="arrow-left"></span>
                        </button>
                        <button type="button" class="slick-next" id="next-solutions-home">
                            <span class="arrow-right"></span>
                        </button>
                    </p>
                </div>
            </div>
            <div class="row slides-nav">
                <div class="small-12 columns">
                    <nav>
                        <section class="top-bar-section show-for-large-up sub-nav">
                            <ul class="left">
                                <li class="active"><a href="">Electrical Engineering</a></li>
                                <li><a href="">Instrumentation Engineering</a></li>
                                <li><a href="">Control Systems</a></li>
                                <li><a href="">Design &amp; Drafting</a></li>
                                <li><a href="">Project Management</a></li>
                            </ul>
                        </section>
                    </nav>
                </div>
            </div>
        </div>
    </div>    
    
    <div class="row home-testimonials-bg home-slides">
        <div class="small-12 columns">
            <div class="row animateMeUp">
                <div class="small-12 medium-10 large-8 columns">
                    <h1>What People Say About Us</h1>
                    <div class="slider-testimonials">
                        <div>
                            <h2>Spectra Energy</h2>
                            <p>By leveraging existing</p>
                        </div>
                        <div>
                            <h2>Instrumentation Engineering</h2>
                            <p>Our engineering projects vary from both brownfield and greenfield control system projects, where we specify, design, and procure control panels, to projects with more extensive electrical scope. Our experienced engineers can develop single line diagrams, motor schematics, cable schedules, instrument layout drawings, cause &amp; effect diagrams or whatever else is required to provide our clients the complete engineering solution they require for their facility.</p>
                            <p><a href="#">Read More</a></p>
                        </div>
                        <div>
                            <h2>Control Systems</h2>
                            <p>Our engineering projects vary from both brownfield and greenfield control system projects, where we specify, design, and procure control panels, to projects with more extensive electrical scope. Our experienced engineers can develop single line diagrams, motor schematics, cable schedules, instrument layout drawings, cause &amp; effect diagrams or whatever else is required to provide our clients the complete engineering solution they require for their facility.</p>
                            <p><a href="#">Read More</a></p>
                        </div>
                    </div>
                </div>
                <div class="medium-2 large-4 show-for-medium-up columns">
                    <p class="controls">
                        <button type="button" class="slick-prev" id="prev-services-home">
                            <span class="arrow-left"></span>
                        </button>
                        <button type="button" class="slick-next" id="next-testimonials-home">
                            <span class="arrow-right"></span>
                        </button>
                    </p>
                </div>
            </div>
            <div class="row slides-nav">
                <div class="small-12 columns">
                    <nav>
                        <section class="top-bar-section show-for-large-up sub-nav">
                            <ul class="left">
                                <li class="active"><a href="">Electrical Engineering</a></li>
                                <li><a href="">Instrumentation Engineering</a></li>
                                <li><a href="">Control Systems</a></li>
                                <li><a href="">Design &amp; Drafting</a></li>
                                <li><a href="">Project Management</a></li>
                            </ul>
                        </section>
                    </nav>
                </div>
            </div>
        </div>
    </div> 
-->
    <div class="row">
        <div class="small-12 columns">
            <?php
                $a = new Area('Awards');
                $a->display($c);
            ?>    
        </div>
    </div>
</section>

<?php include "inc/footer.php"; ?>