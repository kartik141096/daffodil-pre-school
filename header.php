<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="xmlrpc.php"> -->
    <title>Daffodil Pre-School</title>
    <!-- <meta name='robots' content='max-image-preview:large' />
    <link rel='dns-prefetch' href='http://maps.googleapis.com/' />
    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' /> -->
    <!-- <link rel="alternate" type="application/rss+xml" title="Kiddie &raquo; Feed" href="feed" />
    <link rel="alternate" type="application/rss+xml" title="Kiddie &raquo; Comments Feed" href="comments/feed" />
    <link rel="alternate" type="application/rss+xml" title="Kiddie &raquo; Home Comments Feed" href="home/feed" /> -->


    <!-- <link rel='stylesheet' id='wp-color-picker-css' href='wp-admin/css/color-picker.min5352.css?ver=6.4.4' type='text/css' media='all' /> -->
    <link rel='stylesheet' id='admin_custom-css' href='wp-content/themes/kiddie/css/kiddie-widgets5352.css?ver=6.4.4' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css' href='wp-content/themes/kiddie/css/bootstrap.min5352.css?ver=6.4.4' type='text/css' media='all' />

    <link rel='stylesheet' id='kiddie-style-css' href='wp-content/themes/kiddie/style2f54.css?ver=4.1' type='text/css' media='all' />

    <link rel='stylesheet' id='kiddie-woocommerce-css' href='wp-content/themes/kiddie/css/kiddie-woocommerce2f54.css?ver=4.1' type='text/css' media='all' />
    <link rel='stylesheet' id='kiddie-style-responsive-css' href='wp-content/themes/kiddie/css/kiddie-responsive2f54.css?ver=4.1' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css' href='wp-content/themes/kiddie/css/font-awesome.min2f54.css?ver=4.1' type='text/css' media='all' />
    <link rel='stylesheet' id='pretty-photo-css' href='wp-content/themes/kiddie/css/prettyPhoto2f54.css?ver=4.1' type='text/css' media='all' />
    <link rel='stylesheet' id='kiddie-fonts-css' href='http://fonts.googleapis.com/css?family=Salsa%7COpen+Sans%3A300%2C400%2C600&amp;ver=6.4.4' type='text/css' media='all' />
    <link rel='stylesheet' id='kiddie-flaticon-css' href='wp-content/themes/kiddie/css/kiddie-flaticon2f54.css?ver=4.1' type='text/css' media='all' />
    <link rel='stylesheet' id='kiddie-fonts-Open+Sans-css' href='https://fonts.googleapis.com/css?family=Open+Sans%3A400&amp;ver=6.4.4' type='text/css' media='all' />
    <link rel='stylesheet' id='kiddie-style-owl-carousel-css' href='wp-content/themes/kiddie/css/owl.carousel.min2f54.css?ver=4.1' type='text/css' media='all' />

    <script type="text/javascript" src="wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script>
    <script type="text/javascript" src="wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1" id="jquery-migrate-js"></script>
    <script type="text/javascript" src="wp-content/plugins/revslider/public/assets/js/rbtools.min0660.js?ver=6.6.5" async id="tp-tools-js"></script>
    <script type="text/javascript" src="wp-content/plugins/revslider/public/assets/js/rs6.min0660.js?ver=6.6.5" async id="revmin-js"></script>
    <script type="text/javascript" src="wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min68cf.js?ver=2.7.0-wc.7.7.0" id="jquery-blockui-js"></script>

    <script type="text/javascript" src="wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min4c53.js?ver=7.7.0" id="wc-add-to-cart-js"></script>
    <script type="text/javascript" src="wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart9c09.js?ver=6.11.0" id="vc_woocommerce-add-to-cart-js-js"></script>
    <link rel="stylesheet" href="css/kiddie-style-inline-css.css">
    <!-- <script>
        function setREVStartSize(e) {
            window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
            window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
            try {
                var pw = document.getElementById(e.c).parentNode.offsetWidth,
                    newh;
                pw = pw === 0 || isNaN(pw) || (e.l == "fullwidth" || e.layout == "fullwidth") ? window.RSIW : pw;
                e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
                if (e.layout === "fullscreen" || e.l === "fullscreen")
                    newh = Math.max(e.mh, window.RSIH);
                else {
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl) if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                    e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl) if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                    var nl = new Array(e.rl.length),
                        ix = 0,
                        sl;
                    e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                    for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                    sl = nl[0];
                    for (var i in nl) if (sl > nl[i] && nl[i] > 0) { sl = nl[i]; ix = i; }
                    var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                    newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
                }
                var el = document.getElementById(e.c);
                if (el !== null && el) el.style.height = newh + "px";
                el = document.getElementById(e.c + "_wrapper");
                if (el !== null && el) {
                    el.style.height = newh + "px";
                    el.style.display = "block";
                }
            } catch (e) {
                console.log("Failure at Presize of Slider:" + e)
            }
        };
    </script> -->
</head>

<body>
    <div id="page" class="hfeed site ">
        <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
        <div id="head-frame">
            <header id="masthead" class="site-header">
                <div class="container">
                    <div id="logo" style="width:140px;">
                        <a href="#" rel="home">
                            <img src="images/logo-sqr.png" style="height: 90px; padding-top: 10px; padding-bottom: 10px; border-radius: 10px;" alt="Kiddie" data-rjs="2" />
                        </a>
                    </div>
                    <div id="menu-toggle">
                        <!-- navigation hamburger -->
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div id="nav-mobile-wrapper">
                        <nav id="site-navigation" class="main-navigation">
                            <div class="menu-main-menu-container">
                                <ul id="menu-main-menu" class="menu">
                                    <li style="padding-top:12px;">
                                        <img src="https://cdn-icons-png.freepik.com/512/6597/6597982.png" style="height:50px" alt="">    
                                        <a href="#" aria-current="page">Home</a>
                                    </li>
                                    <li style="padding-top:12px;"> 
                                        <img src="https://cdn-icons-png.freepik.com/256/3745/3745169.png?semt=ais_hybrid" style="height:50px" alt="">    
                                        <a href="#">About</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Daffodil Pre-School</a></li>
                                            <li><a href="#">Philosophy</a></li>
                                            <li><a href="#">Vision & Mission</a></li>
                                            <li><a href="#">Management</a></li>
                                            <li><a href="#">Testimonials</a></li>
                                            
                                        </ul>
                                    </li>
                                    <li style="padding-top:12px;">
                                    <img src="https://cdn-icons-png.freepik.com/256/1010/1010653.png" style="height:50px" alt="">
                                        <a href="#">Academics</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a>Programs <strong style="float: right;">></strong></a>
                                                <ul class="sub-menu">
                                                    <li><a href="#">Play Group</a></li>
                                                    <li><a href="#">Nursery</a></li>
                                                    <li><a href="#">Lower KG</a></li>
                                                    <li><a href="#">Upper KG</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Co-Curricular Activities</a></li>
                                            <li><a href="#">Curriculam</a></li>
                                            <li><a href="#">Learning Methodology</a></li>
                                        </ul>
                                    </li>
                                    <li style="padding-top:12px;">
                                        <img src="https://cdn-icons-png.flaticon.com/512/2387/2387646.png" style="height:50px" alt="">
                                        <a href="#">Admission</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Apply Now</a></li>
                                            <li><a href="#">Admission Form</a></li>
                                            <li><a href="#">Rules & Regulations</a></li>
                                            <li><a href="#">Terms & Conditions</a></li>
                                        </ul>
                                    </li>
                                    <li style="padding-top:12px;">
                                        <img src="https://cdn-icons-png.flaticon.com/512/6316/6316109.png" style="height:50px" alt="">
                                        <a href="#">Gallery</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Photo Gallery</a></li>
                                            <li><a href="#">Video Gallery</a></li>
                                            <li><a href="#">Ecards Gallery</a></li>
                                        </ul>
                                    </li>
                                    <li style="padding-top:12px;">
                                    <img src="https://www.cottageinnfranchise.com/wp-content/uploads/2013/12/icon-corp-team.png" style="height:50px" alt="">
                                        <a href="#">Franchise</a>
                                    </li>
                                </ul>
                            </div>
                        </nav><!-- #site-navigation -->
                        <div class="clear"></div>
                    </div>

                </div>
            </header><!-- #masthead -->
        </div>