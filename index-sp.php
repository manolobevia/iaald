<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <!-- CSS -->
        <link rel="stylesheet" href="css/normalize.css" type="text/css" />
        <!-- HTML5-ready alternative to CSS resets -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico" />
        <!-- iOS -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <link rel="apple-touch-icon" href="apple-touch-icon.png" />
        <link rel="apple-touch-icon-precomposed" href="apple-touch-icon.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-ipad.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-iphone4.png" />
        <!-- Goodness -->
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <!--[if (gte IE 6)&(lte IE 8)]><script type="text/javascript" src="js/selectivizr-min.js"></script><![endif]-->
        <!--[if IE 7]>
        <link rel="stylesheet" href="css/ie7.css" />
        <![endif]-->
        <!--[if IE 8]>
        <link rel="stylesheet" href="css/ie8.css" />
        <![endif]-->
        <!-- Include the jQuery library  -->
        <script src="js/jquery-1.8.2.min.js"></script>
        <!-- Load ScrollTo -->
        <script src="js/jquery.scrollTo-1.4.2-min.js"></script>
        <!-- Load LocalScroll -->
        <script src="js/jquery.localscroll-1.2.7-min.js"></script>
        <!-- Add fancyBox main JS and CSS files -->
        <script type="text/javascript" src="fancybox/jquery.fancybox.js?v=2.1.2"></script>
        <link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css?v=2.1.2" media="screen" />
        <!-- slider -->
        <script src="js/bjqs-1.3.min.js"></script>
        <!-- utils -->
        <script src="js/utils.js"></script>
    </head>
    <body>
        <ul id="mobile-nav">
            <li><a class="active" href="#intro">Inicio</a></li>
            <li><a href="#speakers">Ponentes</a></li>
            <li><a class="incall" href="#schedule">Agenda</a></li>
            <li><a href="#location" title="">Ubicación</a></li>
            <li><a href="#sponsors">Patrocinadores</a></li>
            <li><a href="#about">Acerca</a></li>
        </ul>
        <section>
            <nav id="co-brand">
                <ul>
                    <li><a href="http://www.cornell.edu/"><img src="images/cu-logo.png" /></a><a href="http://www.library.cornell.edu/"><img src="images/cu-library.png" /></a></li>
                    <li class="lang-switcher"><a href="index.php" title="Spanish language"><img src="images/btn_english.png" /></a></li>
                    <li><a href="http://www.iaald.org" title="International Association of Agricultural Information Specialists"><img src="images/iaald-logo.png" /></a></li>
                </ul>
            </nav>
        </section>
        <header>
            <h1 title="IAALD Congreso Mundial 2013">
                <img class="logo" alt="" src="images/iaald-congress-logo.png" />
            </h1>
            <section id="when-where">
                <p>July 22-24, 2013<br />Ithaca, NY USA</p>
            </section>
            <a class="fancybox" href="#inline-registration" title=""><img class="btn-register-header" alt="" src="images/btn-register-now-sp.png" /></a>
            <div id="inline-registration" style="display: none;">
                <h3 class="lbox">coming soon!</h3>
            </div>
            <nav id="main-nav">
                <ul id="left-nav">
                    <li><a class="active" href="#intro">Inicio</a></li>
                    <li><a href="#speakers">Ponentes</a></li>
                    <li><a class="incall" href="#schedule">Agenda</a></li>
                </ul>
                <ul id="right-nav">
                    <li><a href="#location" title="">Ubicación</a></li>
                    <li><a href="#sponsors">Sponsors</a></li>
                    <li><a href="#about">Acerca</a></li>
                </ul>
            </nav>
        </header>
        <section id="intro">
            <h2>
                <img alt="" src="images/IAALD-header.png" />
            </h2>
        </section>
        <section id="intro2">
            <h3>
               Prioridades Emergentes para la Información Científica <strong>Agrícola</strong>
            </h3>
            <p>An opportunity for participants to explore, share, and discuss emerging priorities in discovery and access systems, content-management tools, and institutional or individual collaborations, in a content-rich era that is shaped by open-source technology, user-driven content, and partnership.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi elementum elementum euismod. Donec blandit consectetur porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean elementum dignissim mattis. Ut ultrices velit quis odio semper ac porttitor ipsum egestas. Curabitur et nibh non odio laoreet feugiat. arcu at laoreet fringilla, risus ante posuere lacus, ut aliquam lorem nulla eget est. Donec ornare ultrices lorem, id feugiat magna dapibus sodales. In porttitor, ipsum eu vestibulum laoreet, lorem quam faucibus magna, ut ultrices tellus dui non felis. Sed id iaculis nunc. In et tincidunt ipsum. Maecenas nec sem libero.  
            </p>
            <section id="call-to-actions">
                <a id="btn-register" class="fancybox" href="#inline-registration2" title=""><img alt="" src="images/btn-register-now-sp.png" /></a>
                <div id="inline-registration2" style="display: none;">
                    <h3 class="lbox">coming soon!</h3>
                </div>
                <form id="updates">
                    <label for="Updates">Updates</label>
                    <input id="email_updates" name="email_updates" type="text" value="your email" />
                    <input name="language-feedback" type="hidden" value="english" />
                    <a class="btn-signup" href="#"><img alt="" src="images/sign-up-sp.png" /></a>
                </form>
                <div id="feedback"></div>
            </section>
        </section>
        <section id="speakers">
            <div class="top-wrapper"></div>
            <div class="bottom-wrapper">
                <section class="header">
                    <h3>Speakers</h3>
                    <ul class="context-nav">
                        <li><a href="#schedule">Schedule</a></li>
                        <li>
                            <a id="btn-register" class="fancybox" href="#inline-registration3" title="">Register</a>
                            <div id="inline-registration3" style="display: none;">
                                <h3 class="lbox">coming soon!</h3>
                            </div>
                        </li>
                    </ul>
                </section>
                <ul id="speakers-panel">
                    <li>
                        <a class="fancybox-speaker" href="#speaker-name-1" title=""><img class="speaker-photo" src="images/speaker2.jpg" /></a>
                        <p class="speaker-name">Emilia<br />Smith</p>
                        <p class="speaker-blurb">Ut enim ad minim veniam, quis nostrud laboris nisi ut aliquip ex.</p>
                        <div id="speaker-name-1" style="display: none;">
                            <p class="lbox-speaker-photo"><img src="images/speaker2.jpg" width="75px" /></p>
                            <h2 class="lbox-speaker-name">Emilia Smith</h2>
                            <p class="lbox-speaker-bio">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi elementum elementum euismod. Donec blandit consectetur porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean elementum dignissim mattis. Ut ultrices velit quis odio semper ac porttitor ipsum egestas. Curabitur et nibh non odio laoreet feugiat.
                            </p>
                        </div>
                    </li>
                    <li>
                        <a class="fancybox" href="#speaker-name-2" title=""><img class="speaker-photo" src="images/speaker3.jpg" /></a>
                        <p class="speaker-name">Albert<br />Jonston</p>
                        <p class="speaker-blurb">Ut enim ad minim veniam, quis nostrud laboris nisi ut aliquip ex.</p>
                        <div id="speaker-name-2" style="display: none;">
                            <p class="lbox-speaker-photo"><img src="images/speaker3.jpg" width="75px" /></p>
                            <h2 class="lbox-speaker-name">Name</h2>
                            <p class="lbox-speaker-bio">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi elementum elementum euismod. Donec blandit consectetur porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean elementum dignissim mattis. Ut ultrices velit quis odio semper ac porttitor ipsum egestas. Curabitur et nibh non odio laoreet feugiat.
                            </p>
                        </div>
                    </li>
                    <li>
                        <a class="fancybox" href="#speaker-name-3" title=""><img class="speaker-photo" src="images/speaker4.jpg" /></a>
                        <p class="speaker-name">Lu<br />Lee</p>
                        <p class="speaker-blurb">Ut enim ad minim veniam, quis nostrud laboris nisi ut alquip ex.</p>
                        <div id="speaker-name-3" style="display: none;">
                            <p class="lbox-speaker-photo"><img src="images/speaker4.jpg" width="75px" /></p>
                            <h2 class="lbox-speaker-name">Name</h2>
                            <p class="lbox-speaker-bio">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi elementum elementum euismod. Donec blandit consectetur porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean elementum dignissim mattis. Ut ultrices velit quis odio semper ac porttitor ipsum egestas. Curabitur et nibh non odio laoreet feugiat.
                            </p>
                        </div>
                    </li>
                    <li>
                        <a class="fancybox" href="#speaker-name-4" title=""><img class="speaker-photo" src="images/speaker3.jpg" /></a>
                        <p class="speaker-name">Pete<br />Northon</p>
                        <p class="speaker-blurb">Ut enim ad minim veniam, quis nostrud laboris nisi ut aliquip ex.</p>
                        <div id="speaker-name-4" style="display: none;">
                            <p class="lbox-speaker-photo"><img src="images/speaker3.jpg" width="75px" /></p>
                            <h2 class="lbox-speaker-name">Name</h2>
                            <p class="lbox-speaker-bio">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi elementum elementum euismod. Donec blandit consectetur porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean elementum dignissim mattis. Ut ultrices velit quis odio semper ac porttitor ipsum egestas. Curabitur et nibh non odio laoreet feugiat.
                            </p>
                        </div>
                    </li>
                    <li>
                        <a class="fancybox" href="#speaker-name-5" title=""><img class="speaker-photo" src="images/speaker2.jpg" /></a>
                        <p class="speaker-name">Esperanza<br />Perez</p>
                        <p class="speaker-blurb">Ut enim ad minim veniam, quis nostrud laboris nisi ut aliquip ex.</p>
                        <div id="speaker-name-5" style="display: none;">
                            <p class="lbox-speaker-photo"><img src="images/speaker2.jpg" width="75px" /></p>
                            <h2 class="lbox-speaker-name">Name</h2>
                            <p class="lbox-speaker-bio">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi elementum elementum euismod. Donec blandit consectetur porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean elementum dignissim mattis. Ut ultrices velit quis odio semper ac porttitor ipsum egestas. Curabitur et nibh non odio laoreet feugiat.
                            </p>
                        </div>
                    </li>
                    <li>
                        <a class="fancybox" href="#speaker-name-6" title=""><img class="speaker-photo" src="images/speaker4.jpg" /></a>
                        <p class="speaker-name">Lea<br />Bonichi</p>
                        <p class="speaker-blurb">Ut enim ad minim veniam, quis nostrud laboris nisi ut aliquip ex.</p>
                        <div id="speaker-name-6" style="display: none;">
                            <p class="lbox-speaker-photo"><img src="images/speaker4.jpg" width="75px" /></p>
                            <h2 class="lbox-speaker-name">Name</h2>
                            <p class="lbox-speaker-bio">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi elementum elementum euismod. Donec blandit consectetur porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean elementum dignissim mattis. Ut ultrices velit quis odio semper ac porttitor ipsum egestas. Curabitur et nibh non odio laoreet feugiat.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section id="schedule">
            <section class="header">
                <h3 class="color">Schedule</h3>
                <ul class="context-nav color">
                    <li class="month">July</li>
                    <li>22</li>
                    <li>23</li>
                    <li>24</li>
                </ul>
                <h4>July</h4>
            </section>
            <div class="coming-soon">Coming soon!</div>
        </section>
        <section id="location">
            <div class="top-wrapper"></div>
            <div class="bottom-wrapper">
                <section class="header">
                    <h3>Location</h3>
                    <ul class="context-nav">
                        <!--<li>Book hotel</li>-->
                    </ul>
                </section>
                <ul id="location-content">
                    <li class="cornell">
                        <h4>Cornell University</h4>
                        <p>Albert R. Mann Library
                            237 Mann Drive, 
                            Cornell University
                            Ithaca, NY 14853 
                            USA
                            <span><a class="mann-lib" href="http://mannlib.cornell.edu/">Mann Library</a> is a state-of-the-art teaching and research facility. All of the conference presentations, workshops and vendor exhibits will take place in Mann Library.</span>
                        </p>
                        <p><a href="https://maps.google.com/maps?q=Albert+R.+Mann+Library+237+Mann+Drive,+Cornell+University+Ithaca,+NY+14853+USA&amp;hl=en&amp;ll=42.461207,-76.47377&amp;spn=0.075224,0.101452&amp;sll=42.746632,-75.770041&amp;sspn=4.792126,6.49292&amp;hq=Albert+R.+Mann+Library+237+Mann+Drive,+Cornell+University+Ithaca,+NY+14853+USA&amp;radius=15000&amp;t=m&amp;z=13&amp;iwloc=A">view map</a></p>
                    </li>
                    <li class="hotel">
                        <h4>Where to stay?</h4>
                        <p>Hotel dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.
                        </p>
                        <p><img class="" src="images/hotel.png" /></p>
                    </li>
                    <li class="ithaca">
                        <h4>Ithaca, New York</h4>
                        <div id="banner-fade">
                            <!-- start Basic Jquery Slider -->
                            <ul class="bjqs">
                                <li><img title="here goes caption photo 1" class="ithaca-photos" src="images/ithaca1.png" title="Automatically generated caption" /></li>
                                <li><img title="here goes caption photo 2" class="ithaca-photos" src="images/ithaca2.png" title="Automatically generated caption" /></li>
                            </ul>
                            <!-- end Basic jQuery Slider -->
                        </div>
                        <!-- End outer wrapper -->
                    </li>
                </ul>
            </div>
        </section>
        <section id="sponsors">
            <section class="header">
                <h3 class="color">Sponsors</h3>
                <ul class="context-nav color">
                    <li><a href="mailto:iaald@cornell.edu">Become our sponsor</a></li>
                </ul>
                <ul class="sponsors">
                    <li><img src="images/sponsors.jpg" /></li>
                    <li><img src="images/sponsors.jpg" /></li>
                    <li><img src="images/sponsors.jpg" /></li>
                    <li><img src="images/sponsors.jpg" /></li>
                    <li><img src="images/sponsors.jpg" /></li>
                    <li><img src="images/sponsors.jpg" /></li>
                    <li><img src="images/sponsors.jpg" /></li>
                    <li><img src="images/sponsors.jpg" /></li>
                </ul>
            </section>
        </section>
        <section id="about">
            <div class="top-wrapper"></div>
            <div class="bottom-wrapper">
                <section class="header">
                    <h3>About</h3>
                    <ul class="context-nav">
                        <li><a href="mailto:iaald@cornell.edu">Contact Us</a></li>
                    </ul>
                </section>
                <p><img src="images/about-image.png" />About dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw.
                    Aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable esperanza Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad 
                </p>
            </div>
        </section>
        <footer>
            <nav id="iaald-cornell">
                <p class="iaald"><a href="http://www.iaald.org/"><img src="images/iaald-logo-2.png" /></a></p>
                <ul>
                    <li><a href="http://www.iaald.org/member-categories-rates">Join IAALD</a></li>
                    <li><a href="http://iaald.blogspot.com/">Blog</a></li>
                    <li><a href="http://www.iaald.org/news/en">News</a></li>
                    <li><a href="http://www.iaald.org/videoall">Media</a></li>
                </ul>
                <p class="cornell-university"><a href="http://cornell.edu"><img src="images/cornell-logo.jpg" /></a></p>
            </nav>
            <nav id="conference">
                <ul>
                    <li><a href="#about">About</a></li>
                    <li>
                        <a class="fancybox" href="#privacy">Privacy Policy</a>
                        <div id="privacy" style="width:400px;display: none;">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            </p>
                        </div>
                    </li>
                    <li>
                        <a class="fancybox" href="#terms">Terms & Conditions</a>
                        <div id="terms" style="width:400px;display: none;">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            </p>
                        </div>
                    </li>
                    <li><a href="mailto:iaald@cornell.edu">Contact Us</a></li>
                    </li>
                    <li><a href="#">Register</a></li>
                </ul>
                <p>&copy; Copyright 2012 IAALD</p>
                <ul id="social-links">
                    <li><a href="http://www.facebook.com/iaald.congress"><img src="images/social-link-facebook.png" /></a></li>
                    <li><a href="https://twitter.com/IAALD2013"><img src="images/social-link-twitter.png" /></a></li>
                    <li><img class="disable" src="images/social-link-youtube.png" /></li>
                    <li><img class="disable" src="images/social-link-googleplus.png" /></li>
                </ul>
            </nav>
        </footer>
    </body>
</html>