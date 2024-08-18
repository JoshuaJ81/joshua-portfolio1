
<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$mailheader = "From:" .$name."<".$email.">\r\n";

$recipient = "joshua.lavallais@yahoo.com";

mail($recipient, $message, $mailheader)

or die("Error!");

echo'

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Joshua Lavallais | Portfolio</title>
        
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/joshlavalfavicon.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brands" href="index.html"><img class="wordmark" src="assets/img/logos/jlportfolio.png" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                     
                        <a class="btn btn-dark btn-social mx-2" href="https://github.com/JoshuaJ81" aria-label="Github"><i class="fab fa-github"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/joshua-lavallais-2015/" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="mailto:joshua.lavallais@yahoo.com" aria-label="Email"><i class="fa-solid fa-envelope"></i></a>
						
                    </ul>
                </div>
            </div>
        </nav>
         <!-- Masthead-->
         <header class="masthead">
            <div class="container">
                <div class="masthead-heading text-uppercase">THANK YOU FOR YOUR MESSAGE!</div>
                <br>
                
                <div class="masthead-subheading">I will respond at my earliest convenience.</div>
                <div class="masthead-subheading">To return to my portfolio, click the button below.</div>
                <br>
                
                <br>
                <br>
                <a class="btn btn-primary btn-xl text-uppercase" href="index.html">My Portfolio</a>
            </div>
        </header>
       

       
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About Me</h2>
                    <h3 class="section-subheading text-muted">And then some.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/portfolioprofilepic.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4></h4>
                                <h4 class="subheading">Joshua Lavallais, MBA</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">My name is Joshua Lavallais. 
                                My name is Joshua Lavallais. I am a creative spirit, and I have and always will love art. For me, web design is “digital art.” 
                                I work primarily with HTML, CSS, Flexbox, and CSS Grid. I specialize in creating web pages that are mobile responsive 
                                and user-friendly while using the best typography and color schematic. 
                                Like everyone else, I have a story. My web designer journey is as follows...</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/wordpress.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                
                                <h4 class="subheading">Some time ago in the year 2018, it all started with WordPress</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">
                                For years I have loved writing, and I have had opportunities in my current role to showcase my skills as a writer. 
                                Beyond the occasional writing assignments at work, I wanted to build a platform to feature my work on topics of personal interest, 
                                such as business and psychology. 
                                To share my work on said topics, I launched a blog website using the world-renowned content management system WordPress. 
                                With help and guidance from experts, I learned how to build custom web pages using built-in tools, particularly WP Bakery. 
                                I quickly realized that I loved designing and building web pages, such that I could do so for hours. 
                                Case in point, I would sit for hours on the weekends, building my website, page by page, 
                                while often ignoring the hunger pangs in my stomach, as I was too engaged to step away to eat. 
                                I never imagined I could learn to build web pages from scratch. But then, that all changed.  
                            </p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/buildingit.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                
                                <h4 class="subheading">Summer of 2020 - from blogging to designing and building my own custom web pages</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">
                                As I continued writing content for my blog, someone introduced me to a YouTube course that covered the basics of 
                                web design - it was exciting! 
                                I quickly realized I loved designing and building web pages “using code.” Upon finishing the course, 
                                I felt the need to learn more, but from whom or where? Subsequently, I took my time researching different boot camps and programs. 
                                I wanted to do what was best for me. And then... 
                            </p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/codeit.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>January 2022</h4>
                                <h4 class="subheading">Enter CodeCademy</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">At the recommendation of a seasoned web designer, I enrolled in classes provided by 
                            Codecademy. Since then, I have learned many skills. Also, I have learned from outside sources such as W3 Schools, MDN, and Stack Overflow. 
                            Some people may view any continuous learning cycle as a “tedious endeavor,” but in life, each of us must strive to learn and commit to 
                            the role of “lifelong student” in the game of life. Learning and acquiring knowledge are eternal. 
                            My overall goal is to learn and become better at my craft while delivering a product deemed satisfactory by all clients.   

                            </p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src="assets/img/about/learningforever.jpg" alt="..." /></div>
                            
                        </div>
                    </li>
                </ul>
            </div>
        </section>

       

        <section id="branding">
            <img class="footer-favicon" src="assets/endfavicon.png" alt="..." /></a>
        </section>


        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">&copy 2024. Joshua Lavallais. All Rights Reserved</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="https://github.com/JoshuaJ81" aria-label="Github"><i class="fab fa-github"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/joshua-lavallais-2015/" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="mailto:joshua.lavallais@yahoo.com" aria-label="Email"><i class="fa-solid fa-envelope"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        
                    </div>
                </div>
            </div>
        </footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>

';

?>
