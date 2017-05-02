<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="../images/favicon.ico">

        <title>Abasteça Já!</title>

        <link rel="stylesheet" href="../plugins/magnific-popup/dist/magnific-popup.css"/>
        
        <link href="../plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../css/core.css" rel="stylesheet" type="text/css" />
        <link href="../css/components.css" rel="stylesheet" type="text/css" />
        <link href="../css/icons.css" rel="stylesheet" type="text/css" />
        <link href="../css/pages.css" rel="stylesheet" type="text/css" />
        <link href="../css/menu.css" rel="stylesheet" type="text/css" />
        <link href="../css/responsive.css" rel="stylesheet" type="text/css" />
        <link href="../css/rating.css" rel="stylesheet" type="text/css" />
        <link href="../css/footersub.css" rel="stylesheet" type="text/css" />
        <link href="../css/dropdown-menu.css" rel="stylesheet" type="text/css"/>


        <script src="../js/modernizr.min.js"></script>
        
        <style type="text/css">
            .centraliza{
                text-align: center;
            }
            .usuario{
                margin-right: 600px;
            }
        </style>


    </head>


    <body>

        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="page-user.php" class="logo"><span>Abasteça<span>Já!</span></span></a>
                                </div>
                    <!-- End Logo container-->
                    <!--<div class="topbar-left">
                        <button type="button" class="btn btn-primary navbar-btn"><a target="_self"  href="assets/php/Clientes/listar-clientes.php">Listar Clientes</button>
                    </div>-->


                    <div class="menu-extras">

                        <ul class="nav navbar-nav navbar-right pull-right">
                            <li>
                                <form role="search" class="navbar-left app-search pull-left hidden-xs">
                                     <input type="text" placeholder="Pesquisar..." class="form-control">
                                     
                                </form>
                            </li>
                            
                            <!--<li class="dropdown user-box open">
                                <a class="dropdown-toggle waves-effect waves-light profile " aria-expanded="true" href="" data-toggle="dropdown">
                                    <img  src="../images/gallery/user1.png">
                                    <div class="user-status away"><!--<i class="zmdi zmdi-dot-circle"></i></div>
                                </a>
                                    <!--class="img-circle user-img" alt="user-img"-->
                                <!--<ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> Profile</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-settings m-r-5"></i> Settings</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-lock m-r-5"></i> Lock screen</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                </ul>
                            </li>-->
                        </div>
                            
                        </ul>
                    
                        <div class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div>
                    </div>

                </div>
            </div>
        
        

            <div class="navbar-custom">
                <div class="container">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                            <li>
                                <a href="page.html"><!--i class="zmdi zmdi-view-dashboard"></i--> <span> Posto Shell </span> </a>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><!--i class="zmdi zmdi-invert-colors"></i--> <span> Posto Ipiranga </span> </a>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><!--i class="zmdi zmdi-collection-text"></i--><span> Posto Petrobras </span> </a>                   
                            </li>

                            <li class="has-submenu">
                                <a href="#"><!--i class="zmdi zmdi-view-list"></i--> <span> Posto Texaco </span> </a>
                            </li>
                            
                            <li class="has-submenu">
                                <a href="listar-clientes.php"> <span> Listar Clientes</span></a>
                            </li>
                            
                        </ul>
                        <!-- End navigation menu  -->
                    </div>
                </div>
            </div>
        </header>
        <!-- End Navigation Bar-->

        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <!-- conteúdo -->
                        <div id="world-map-markers" style="height: 500px"></div>
                        <!-- /conteúdo -->
                    </div>
                </div>
                <br>
                <!-- SECTION FILTER
                ================================================== -->
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 ">
                        <div class="portfolioFilter">
                            <a href="#" data-filter="*" class="current waves-effect waves-custom">Todos</a>
                            <a href="#" data-filter=".natural" class="waves-effect waves-custom">Ranking</a>
                            <a href="#" data-filter=".creative" class="waves-effect waves-custom">Recomendado</a>
                        </div>
                    </div>
                </div>

                <div class="row port m-b-20">
                    <div class="portfolioContainer">
                        <div class="col-sm-6 col-lg-3 col-md-4 natural personal">
                            <div class="gal-detail thumb">
                                <a href="assets/images/gallery/1.jpg" class="image-popup" title="Screenshot-1">
                                    <img src="assets/images/gallery/shell.jpeg" class="thumb-img" alt="work-thumbnail">
                                </a>
                                <h4>Posto Shell</h4>
                                    <fieldset class="rating pull-left">
                                        <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                        <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                        <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                        <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                        <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                        <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                        <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                        <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                        <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                        <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                    </fieldset>
                                    <br>
                                    <br>
                                <div class="btn btn-primary btn-lg">Ver</div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3 col-md-4 natural personal">
                            <div class="gal-detail thumb">
                                <a href="assets/images/gallery/1.jpg" class="image-popup" title="Screenshot-1">
                                    <img src="assets/images/gallery/posto%20br.jpg" class="thumb-img" alt="work-thumbnail">
                                </a>
                                <h4>Posto Petrobras</h4>
                                    <fieldset class="rating pull-left">
                                        <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                        <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                        <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                        <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                        <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                        <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                        <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                        <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                        <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                        <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                    </fieldset>
                                    <br>
                                    <br>
                                <div class="btn btn-primary btn-lg">Ver</div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3 col-md-4 natural personal">
                            <div class="gal-detail thumb">
                                <a href="assets/images/gallery/1.jpg" class="image-popup" title="Screenshot-1">
                                    <img src="assets/images/gallery/posto%20texaco1.jpg" class="thumb-img" alt="work-thumbnail">
                                </a>
                                <h4>Posto Texaco</h4>
                                    <fieldset class="rating pull-left">
                                        <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                        <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                        <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                        <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                        <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                        <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                        <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                        <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                        <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                        <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                    </fieldset>
                                    <br>
                                    <br>
                                <div class="btn btn-primary btn-lg">Ver</div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3 col-md-4 natural personal">
                            <div class="gal-detail thumb">
                                <a href="assets/images/gallery/1.jpg" class="image-popup" title="Screenshot-1">
                                    <img src="assets/images/gallery/posto%20ipiranga1.jpg"  class="thumb-img" alt="work-thumbnail">
                                </a>
                                <h4>Posto Ipiranga</h4>
                                    <fieldset class="rating pull-left">
                                        <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                        <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                        <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                        <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                        <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                        <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                        <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                        <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                        <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                        <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                    </fieldset>
                                    <br>
                                    <br>
                                <div class="btn btn-primary btn-lg">Ver</div>
                            </div>
                        </div>

                    </div><!-- end portfoliocontainer-->
                </div> <!-- End row -->

                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <h1>Abasteça Já!</h1>
                                <ul>
                                    <li><a href="#">Sobre</a></li>
                                    <li><a href="#">Ajuda</a></li>
                                    <li><a href="#">Contato</a></li>
                                    <li><a href="#">Suporte</a></li>
                                </ul>
                        </div>
                    </div>
                </div>
                <!-- Footer -->
                <footer class="footer text-right">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-6">
                                2016 © Abasteça Já!
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- End Footer -->

            </div>
            <!-- end container -->



            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="zmdi zmdi-close-circle-o"></i>
                </a>
                <h4 class="">Notifications</h4>
                <div class="notification-list nicescroll">
                    <ul class="list-group list-no-border user-list">
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">Michael Zenaty</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">2 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-info">
                                    <i class="zmdi zmdi-account"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">New Signup</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">5 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-pink">
                                    <i class="zmdi zmdi-comment"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">New Message received</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">1 day ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item active">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-3.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">James Anderson</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">2 days ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item active">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-warning">
                                    <i class="zmdi zmdi-settings"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">Settings</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">1 day ago</span>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>



        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>


        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
        
        <!-- Jvector map js -->
        <script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="assets/plugins/jvectormap/gdp-data.js"></script>
        <script src="assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
        <script src="assets/plugins/jvectormap/jquery-jvectormap-uk-mill-en.js"></script>
        <script src="assets/plugins/jvectormap/jquery-jvectormap-au-mill.js"></script>
        <script src="assets/plugins/jvectormap/jquery-jvectormap-ca-lcc.js"></script>
        <script src="assets/pages/jvectormap.init.js"></script>
        
        <!-- isotope filter plugin -->
        <script type="text/javascript" src="assets/plugins/isotope/dist/isotope.pkgd.min.js"></script>

        <!-- Magnific popup -->
        <script type="text/javascript" src="assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $(window).load(function(){
                var $container = $('.portfolioContainer');
                $container.isotope({
                    filter: '*',
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
                });

                $('.portfolioFilter a').click(function(){
                    $('.portfolioFilter .current').removeClass('current');
                    $(this).addClass('current');

                    var selector = $(this).attr('data-filter');
                    $container.isotope({
                        filter: selector,
                        animationOptions: {
                            duration: 750,
                            easing: 'linear',
                            queue: false
                        }
                    });
                    return false;
                });
            });
            $(document).ready(function() {
                $('.image-popup').magnificPopup({
                    type: 'image',
                    closeOnContentClick: true,
                    mainClass: 'mfp-fade',
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true,
                        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                    }
                });
            });
        </script>

    </body>
</html>