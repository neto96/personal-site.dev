<!DOCTYPE html>
<html lang="en">
<?php require "header.php" ?>
  <body>
<?php require 'navbar.php' ?>
    <!-- About Me Section -->
    <div id="about-me">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title">
                        <h2>About Me</h2>
                        <hr>
                    </div>
                    <p>31 year old software developer (in progress...) with a background in banking. Passionate for football (soccer), video games and food. Married to a wonderful woman that makes waking up every day worth it. </p>
                    <a href="#experience" class="down-btn page-scroll">
                        <span class="fa fa-angle-down"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--Video Resume Section -->
    <div id="overview-video">
        <div class="overlay">
            <div class="container">
<!--                <a href="/img/rolled.mp4" target="_blank">-->
<!--                    <span class="fa fa-play"></span>-->
<!--                </a>-->
            </div>
        </div>
    </div>

    <!-- Experience Section -->
    <div id="experience">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title">
                        <h2>Work Experience</h2>
                        <hr>
                    </div>
                    <p>Over 9 years of experience in the banking industry. Performed almost every role in a regular bank branch. Experience in sales, relationship development, leadership and operations.</p>
                </div>
            </div>

            <div class="space"></div>

            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="service">
                        <span class="fa fa-credit-card fa-3x"></span>
                        <h4>Teller</h4>
                        <p>Oct 2005-Dec 2009.</p>
                        <p>Processed consumer and business transactions (deposits, withdrawals, account transfers, payments, cash advances and monetary instrument purchases).</p> 
                        <p>Built rapport with customers to identify opportunities for referral of new products and services.</p> 
                        <p>Supported Assistant Branch Manager with branch operations assignments (teller cash drawer and vault audits, maintenance of keys and combination records, new account document review, etc.).</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="service">
                        <span class="fa fa-money fa-3x"></span>
                        <h4>Relationship Banker</h4>
                        <p>Sep 2012-Oct 2013</p>
                        <p>Built and deepened relationships with personal and small business customers to understand financial situation and goals and provide a recommendation of products and services.</p>
                        <p>Set up a variety of products and services for new and existing customers (checking and savings accounts, CD's, IRA's, loans, lines of credit, credit cards).</p>
                        <p>Assisted in the branch as a back-up Branch Manager. Supported Assistant Branch Manager with operational tasks and concerns.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="service">
                        <span class="fa fa-cog fa-3x"></span>
                        <h4>Assistant Branch Manager</h4>
                        <p>Dec 2009-Aug 2012 (Operations)<br>Oct 2013-Jun 2015(Sales)</p>
                        <p>Oversaw branch operations and controls to ensure compliance with company policies and procedures and with federal regulations.</p>
                        <p>Supervised, coached, and developed tellers to ensure transaction accuracy, avoid cash outages and increase teller customer referrals.</p>
                        <p>Supervised, coached, and developed bankers to improve customer profiling, deepening skills, relationship building, and overall customer experience.</p>
                    </div>
                </div>
            </div>
            <a href="#portfolio" class="down-btn page-scroll">
                <span class="fa fa-angle-down"></span>
            </a>
        </div>
    </div>

    <!-- PDF Resume Section -->
    <div id="cta">
        <div class="container text-center">
            <a href="/resume/techresume.pdf" class="btn go-to-btn" download>PDF Resume</a>
        </div>
    </div>

    <!-- Portfolio Section -->
    <div id="portfolio">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title">
                        <h2>Portfolio</h2>
                        <hr>
                    </div>
                    <p>Below are some of the projects that were done during my time at Codeup. These projects showcase some of the concepts learned in HTML, CSS, JavaScript, jQuery, PHP, MySQL & Laravel.</p>
                </div>
            </div>
            <div class="space"></div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-6 nopadding">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="calculator.html">
                                <div class="hover-text">
                                    <h5>JavaScript</h5>
                                    <p class="lead">Calculator</p>
                                    <div class="hline"></div>
                                </div>
                                <img src="img/calculator.png" class="img-responsive" id="p-image" alt="..." style="margin: auto">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 nopadding">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="/simplesimon/index.html">
                                <div class="hover-text">
                                    <h5>JavaScript</h5>
                                    <p class="lead">Simple Simon</p>
                                    <div class="hline"></div>
                                </div>
                                <img src="img/simplesimon.png" class="img-responsive" id="p-image" alt="..." style="margin: auto">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 nopadding">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="http://adlister.TheErnestoGarza.com" target="_blank">
                                <div class="hover-text">
                                    <h5>MVC/MySQL</h5>
                                    <p class="lead">Pokemon Black Market</p>
                                    <div class="hline"></div>
                                </div>
                            </a>
                            <img src="img/pbm.jpg" class="img-responsive" id="p-image" alt="..." style="margin: auto; padding-top: 10%">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 nopadding">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="https://210hopper.com">
                                <div class="hover-text">
                                    <h5>Capstone Project</h5>
                                    <p class="lead">210 Hopper</p>
                                    <div class="hline"></div>
                                </div>
                            </a>
                            <img src="img/210hopper.png" class="img-responsive" id="p-image" alt="..." style="margin: auto">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="space"></div>
        <div class="text-center">
            <a href="https://github.com/neto96" class="btn read-more-btn">Check out my Github</a>
            <br>
            <a href="#about-us" class="down-btn page-scroll"><span class="fa fa-angle-down"></span></a>
        </div>
    </div>

    <!-- Clients Section -->
    <div id="clients">
        <div class="overlay">
            <div class="container text-center">
                <div class="section-title">
                    <h2>Some Thoughts</h2>
                    <hr>
                </div>
                <ul class="clients">
                <a class="twitter-timeline" data-width="740" data-height="300" data-theme="dark" data-chrome="nofooter noborders transparent" href="https://twitter.com/TheErnestoGarza">Tweets by TheErnestoGarza</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script><br>
                <a href="https://twitter.com/TheErnestoGarza" class="twitter-follow-button" data-show-count="false">Follow @TheErnestoGarza</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                    <!-- <li><a href="#"><img src="" class="img-responsive" alt="..."></a></li> -->
                    <!-- <li><a href="http://codeup.com" target="_blank"><img src="img/clients/codeup.png" class="img-responsive" alt="..."></a></li> -->
                    <!-- <li><a href="#"><img src="" class="img-responsive" alt="..."></a></li> -->
                    <!-- <li><a href="#"><img src="" class="img-responsive" alt="..."></a></li> -->
                </ul>
            </div>
        </div>
    </div>

    <!-- About Us Section -->
    <div id="about-us">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title">
                        <h2>A little more about me!</h2>
                        <hr>
                    </div>
                    <p>When I'm not writing awesome code I like to spend my time on some of my other passions: fútbol, video games, traveling, and last, but not least, my wonderful wife.</p>
                </div>
            </div>
            <div class="space"></div>
            <div class="row">

                            <div class="team">
                                <img src="img/ErnestoGarza1.jpg" class="img-responsive img-circle" alt="...">
                                <br>
                                <h4>Ernesto Garza</h4>
                                <p class="small">Web Developer</p>
                                <hr>
                            </div>


            </div>

            <div class="text-center">
                <a href="#contact" class="page-scroll down-btn">
                    <span class="fa fa-angle-down"></span>
                </a>
            </div>

        </div>
    </div>

        <!-- Testimonial Section -->
    <div id="testimonials">
        <div class="overlay">
            <div class="container">
                <div class="section-title">
                    <h2>What my classmates say...</h2>
                    <hr>
                </div>

                <div id="testimonial" class="owl-carousel owl-theme">
                  <div class="item">
                    <h3>Why do you have to be always right?</h3>
                    <br>
                    <h6>Gavin Vaught</h6>
                  </div>

                  <div class="item">
                    <h3>Nesto, can you help me out with this darn databases?</h3>
                    <br>
                    <h6>Eddie Knight</h6>
                  </div>

                  <div class="item">
                    <h3>Your 210 Hopper idea is fantastic!<br>Now I don't have to spend much time looking for a bar <br>and use that time to drink more beers.</h3>
                    <br>
                    <h6>Cameron Holland</h6>
                  </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div id="contact">
        <div class="container">
            <div class="section-title text-center">
                <h2>Contact Me</h2>
                <hr>
            </div>
            <div class="space"></div>

            <div class="row">
                <div class="col-md-3">
                    <address>
                        <strong>Follow me</strong><br>
<!--                        <br>-->
<!--                        Codeup<br>-->
<!--                        <a href="https://goo.gl/maps/rJo1qDUhrpz" id="cont-add">600 Navarro Street<br>-->
<!--                        San Antonio, TX 78205<br></a>-->
<!--                        Phone: (123) 456-7890-->
                        <ul class="social">
                            <li><a href="https://www.linkedin.com/in/ernesto-garza-3383a651"><span class="fa fa-linkedin"></span></a></li>
                            <li><a href="https://github.com/neto96"><span class="fa fa-github"></span></a></li>
                            <li><a href="http://twitter.com/TheErnestoGarza" target="_blank"><span class="fa fa-twitter"></span></a></li>
<!--                            <li><a href="#"><span class="fa fa-dribbble"></span></a></li>-->
                          </ul>
                    </address>
                </div>

                <div class="col-md-9">
                    <form autocomplete="off">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Your Name">
                                <input type="text" class="form-control" placeholder="Phone No.">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Email">
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                        <textarea class="form-control" rows="4" placeholder="Message"></textarea>
                        <div class="text-right">
                            <a href="#" class="btn send-btn">Send</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php require 'footer.php' ?>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/jasny-bootstrap.min.js"></script>

    <script src="js/owl.carousel.js"></script>
    <script src="js/typed.js"></script>
    <script>
      $(function(){
          $("#head-title").typed({
            strings: ["I\'m the developer...^1000", "...you've been looking for...^1000" ,"...until now.^1000"],
            typeSpeed: 100,
            loop: true,
            startDelay: 100
          });
      });
    </script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="js/main.js"></script>

  </body>
</html>