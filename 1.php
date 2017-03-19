
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>CropBid - Connecting Farmers to Industry</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/plugins/prism/prism.css">
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll">

<!---//Facebook button code-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- ******HEADER****** -->
<header id="header" class="header">
    <div class="container">
        <h1 class="logo pull-left">
            <a class="scrollto" href="#promo">
                <span class="logo-title">farmHub</span>
            </a>
        </h1><!--//logo-->
        <nav id="main-nav" class="main-nav navbar-right" role="navigation">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button><!--//nav-toggle-->
            </div><!--//navbar-header-->
            <div class="navbar-collapse collapse" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active nav-item sr-only"><a class="scrollto" href="#promo">Home</a></li>
                    <li class="nav-item"><a class="scrollto" href="#about">About</a></li>
                    <li class="nav-item"><a class="scrollto" href="#features">Features</a></li>
                    <li class="nav-item"><a class="scrollto" href="#contact">Support</a></li>
                    <li class="nav-item last"><a href="account">Account</a></li>


                </ul><!--//nav-->
            </div><!--//navabr-collapse-->
        </nav><!--//main-nav-->
    </div>
</header><!--//header-->

<!-- ******PROMO****** -->
<section id="promo" class="promo section offset-header" style="height: 100vh;">
    <div class="container text-center">
        <h2 class="title notranslate">Farm<span class="highlight notranslate">Hub</span></h2>
        <p class="intro">Connecting farmers and Food Industries</p>
        <div class="btns">
            <a class="btn btn-cta-secondary" href="account">Login</a>
            <a class="btn btn-cta-primary" href="account/register.php">Register</a>
        </div>
        <ul class="meta list-inline">
            <li><a href="#" target="_blank">Know More?</a></li>
            <li><a href="https://github.com/twbs/bootstrap" target="_blank">Full Documentation</a></li>

        </ul><!--//meta-->
    </div><!--//container-->
    <div class="social-media">
        <div class="social-media-inner container text-center">
            <ul class="list-inline">

                You are from <div>State: <span id="state"></span></div>
                <div>City: <span id="city"></span></div>
                <div>Postal: <span id="postal"></span></div>
                <li class="twitter-follow"><a href="https://twitter.com/3rdwave_themes" class="twitter-follow-button" data-show-count="false">Follow @3rdwave_themes</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                </li><!--//twitter-follow-->
                <li class="twitter-tweet">
                    <a href="https://twitter.com/share" class="twitter-share-button" data-via="3rdwave_themes" data-hashtags="bootstrap">Tweet</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                </li><!--//twitter-tweet-->
                <li class="facebook-like">
                    <div class="fb-like" data-href="http://themes.3rdwavemedia.com/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
                </li><!--//facebook-like-->
                <!--// Generate github buttons: https://github.com/mdo/github-buttons -->
                <li class="github-star"><iframe src="http://ghbtns.com/github-btn.html?user=mdo&repo=github-buttons&type=watch&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="110" height="20"></iframe></li>
                <li class="github-fork"><iframe src="http://ghbtns.com/github-btn.html?user=mdo&repo=github-buttons&type=fork" allowtransparency="true" frameborder="0" scrolling="0" width="53" height="20"></iframe></li>
                <!--//
                <li class="github-follow"><iframe src="http://ghbtns.com/github-btn.html?user=mdo&type=follow&count=true"
allowtransparency="true" frameborder="0" scrolling="0" width="165" height="20"></iframe></li>
                -->
            </ul>
        </div>
    </div>
</section><!--//promo-->

<!-- ******ABOUT****** -->
<section id="about" class="about section">
    <div class="container">
        <h2 class="title text-center">What is FarmHub?</h2>
        <p class="intro text-center">Explain your project in detail. Ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
        <div class="row">
            <div class="item col-md-4 col-sm-6 col-xs-12">
                <div class="icon-holder">
                    <i class="fa fa-heart"></i>
                </div>
                <div class="content">
                    <h3 class="sub-title">Designed for developers</h3>
                    <p>Outline a benefit here. Tell users what your plugin/software can do for them. You can change the icon above to any of the 400+ <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome</a> icons available.</p>
                </div><!--//content-->
            </div><!--//item-->
            <div class="item col-md-4 col-sm-6 col-xs-12">
                <div class="icon-holder">
                    <i class="fa fa-clock-o"></i>
                </div>
                <div class="content">
                    <h3 class="sub-title">Time saver</h3>
                    <p>Outline a benefit here. Tell users what your plugin/software can do for them. You can change the icon above to any of the 400+ <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome</a> icons available.</p>
                </div><!--//content-->
            </div><!--//item-->
            <div class="item col-md-4 col-sm-6 col-xs-12">
                <div class="icon-holder">
                    <i class="fa fa-crosshairs"></i>
                </div>
                <div class="content">
                    <h3 class="sub-title">UX-centred</h3>
                    <p>Outline a benefit here. Tell users what your plugin/software can do for them. You can change the icon above to any of the 400+ <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome</a> icons available.</p>
                </div><!--//content-->
            </div><!--//item-->
            <div class="clearfix visible-md"></div>
            <div class="item col-md-4 col-sm-6 col-xs-12">
                <div class="icon-holder">
                    <i class="fa fa-tablet"></i>
                </div>
                <div class="content">
                    <h3 class="sub-title">Mobile-friendly</h3>
                    <p>Outline a benefit here. Tell users what your plugin/software can do for them. You can change the icon above to any of the 400+ <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome</a> icons available.</p>
                </div><!--//content-->
            </div><!--//item-->
            <div class="item col-md-4 col-sm-6 col-xs-12">
                <div class="icon-holder">
                    <i class="fa fa-code"></i>
                </div>
                <div class="content">
                    <h3 class="sub-title">Easy to customise</h3>
                    <p>Outline a benefit here. Tell users what your plugin/software can do for them. You can change the icon above to any of the 400+ <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome</a> icons available.</p>
                </div><!--//content-->
            </div><!--//item-->
            <div class="item col-md-4 col-sm-6 col-xs-12">
                <div class="icon-holder">
                    <i class="fa fa-coffee"></i>
                </div>
                <div class="content">
                    <h3 class="sub-title">LESS files included</h3>
                    <p>Outline a benefit here. Tell users what your plugin/software can do for them. You can change the icon above to any of the 400+ <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">FontAwesome</a> icons available.</p>
                </div><!--//content-->
            </div><!--//item-->
        </div><!--//row-->
    </div><!--//container-->
</section><!--//about-->

<!-- ******FEATURES****** -->
<section id="features" class="features section">
    <div class="container text-center">
        <h2 class="title">Features</h2>





        <ul class="feature-list list-unstyled">
            <li><i class="fa fa-check"></i> Fully responsive</li>
            <li><i class="fa fa-check"></i> HTML5 + CSS3</li>
            <li><i class="fa fa-check"></i> Built on <a href="http://getbootstrap.com/" target="_blank">Bootstrap 3.3</a></li>
            <li><i class="fa fa-check"></i> 400+ FontAwesome icons</li>
            <li><i class="fa fa-check"></i> 4 colour schemes</li>
            <li><i class="fa fa-check"></i> LESS files included</li>
            <li><i class="fa fa-check"></i> Compatible with all modern browsers</li>
        </ul>
    </div><!--//container-->
</section><!--//features-->



<!-- ******LICENSE****** -->
<section id="license" class="license section">
    <div class="container">
        <div class="license-inner">
            <h2 class="title text-center">License</h2>
            <div class="info">
                <p>This Bootstrap theme is made by UX designer <a href="https://www.linkedin.com/in/xiaoying" target="_blank">Xiaoying Riley</a> at 3rd Wave Media for developers and is <strong>100% FREE</strong> under the <a href="https://creativecommons.org/licenses/by/3.0/" target="_blank">Creative Commons Attribution 3.0 License (CC BY 3.0)</a></p>
                <p><strong>[Tip for developers]:</strong> If your project is open source, you might want to put a <a href="https://www.paypal.com/us/cgi-bin/?cmd=_donate-intro-outside" target="_blank">PayPal "Donate" button</a> below so your users can express their gratitude. If your project is commercial, you can put a <a href="https://www.paypal.com/us/cgi-bin/webscr?cmd=_singleitem-intro-outside" target="_blank">PayPal "Buy Now" button</a> instead.</p>
            </div><!--//info-->
            <div class="cta-container">
                <div class="speech-bubble">
                    <p class="intro">If you are feeling generous and want to show your support to Xiaoying, you can buy her a beer or coffee via the PayPal donate button below. :)</p>
                    <div class="icon-holder  text-center"><i class="fa fa-smile-o"></i></div>
                </div><!--//speech-bubble-->
                <div class="btn-container  text-center">
                    <!--//You need to generate your own PayPal button - https://www.paypal.com/us/cgi-bin/?cmd=_donate-intro-outside -->
                    <!--PayPal generated code starts-->
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="Y46LJNXGAVVWW">
                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
                    </form>
                    <!--//PayPal generated code ends-->

                </div><!--//btn-container-->
            </div><!--//cta-container-->
        </div><!--//license-inner-->
    </div><!--//container-->
</section><!--//how-->

<!-- ******CONTACT****** -->
<section id="contact" class="contact section has-pattern">
    <div class="container">
        <div class="contact-inner">
            <h2 class="title  text-center">Contact</h2>
            <p class="intro  text-center">I hope you find this Bootstrap template useful. <br />Feel free to get in touch if you have any questions or suggestions.</p>
            <div class="author-message">
                <div class="profile">
                    <img class="img-responsive" src="assets/images/profile.png" alt="" />
                </div><!--//profile-->
                <div class="speech-bubble">
                    <h3 class="sub-title">Want to get more freebies in the future?</h3>
                    <p>I tweet about #UX and #webdev related resources/content at <a href="https://twitter.com/3rdwave_themes" target="_blank">@3rdwave_themes</a>
                    <p>If you like what I do, you can follow me on twitter and I will keep you informed about my next free template there :)</p>
                    <p><strong>[Tip for developers]:</strong> If you take on freelance work you can put a tailored message here about your availability to attract potential clients. Be creative and good luck!</p>
                    <div class="source">
                        <span class="name"><a href="https://twitter.com/3rdwave_themes" target="_blank">Xiaoying Riley</a></span>
                        <br />
                        <span class="title">UX/UI Designer</span>
                    </div><!--//source-->
                </div><!--//speech-bubble-->
            </div><!--//author-message-->
            <div class="clearfix"></div>
            <div class="info text-center">
                <h4 class="sub-title">Get Connected</h4>
                <ul class="social-icons list-inline">
                    <li><a href="https://twitter.com/3rdwave_themes" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.facebook.com/3rdwavethemes" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/xiaoying"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="http://instagram.com/xyriley"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://dribbble.com/Xiaoying"><i class="fa fa-dribbble"></i></a></li>
                    <li class="last"><a href="mailto: hello@3rdwavemedia.com"><i class="fa fa-envelope"></i></a></li>
                </ul>
            </div><!--//info-->
        </div><!--//contact-inner-->
    </div><!--//container-->
</section><!--//contact-->

<!-- ******FOOTER****** -->


<footer class="footer">
    <div class="container text-center">
        <small class="copyright">Designed with <i class="fa fa-heart"></i> in India</small>  <div id="google_translate_element"></div><script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'bn,en,fr,gu,hi,kn,ml,mr,pa,ta,te,ur', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
            }
        </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    </div>
</footer>


<!-- Javascript -->
<script type="text/javascript" src="assets/plugins/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="assets/plugins/prism/prism.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
</body>

<body>
<div>Country: <span id="country"></span></div>
<div>State: <span id="state"></span></div>
<div>City: <span id="city"></span></div>
</body>
<script>

    var country = document.getElementById('country');
    var state = document.getElementById('state');
    var city = document.getElementById('city');
    var postal = document.getElementById('postal');
    var latitude = document.getElementById('latitude');
    var longitude = document.getElementById('longitude');
    var ip = document.getElementById('ipv4');

    function callback(data)
    {
        country.innerHTML = data.country_name;
        state.innerHTML = data.state;
        city.innerHTML = data.city;
        postal.innerHTML = data.postal;
        latitude.innerHTML = data.latitude;
        longitude.innerHTML = data.longitude;
        ip.innerHTML = data.IPv4;
    }

    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = 'https://geoip-db.com/json/geoip.php?jsonp=callback';
    var h = document.getElementsByTagName('script')[0];
    h.parentNode.insertBefore(script, h);

</script>



</html>

