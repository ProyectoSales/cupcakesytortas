    <!DOCTYPE html>
    <html>
    <head>
    	<meta charset="utf-8">
    	<title>Sale Cake App</title>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script>
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>

        <link href="css/login_overlay.css" rel='stylesheet' type='text/css' />

        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/estilos.css" type="text/css" media="all" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <!-- Style-CSS -->
        <link rel="stylesheet" href="css/fontawesome-all.css">
    	<link rel="stylesheet" type="text/css" href="css/estilos.css">
    	<link rel="stylesheet" href="css/bootstrap.css">
      	<link rel="stylesheet" href="css/bootstrap-theme.css">

    </head>
    <body>
  <div class="mian-content">
        <!-- header -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="logo text-left">
                    <h1>
                        <a class="navbar-brand" href="index.html">
                            <img src="images/logo.png" alt="" class="img-fluid">Dulce Mania De Lucky</a>
                    </h1>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">

                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto text-lg-right text-center">
                        <li class="nav-item active">
                            <a class="nav-link" href="inicio.php">Inicio
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                     
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                               Servicios
                            </a>
                            <div class="dropdown-menu text-lg-left text-center" aria-labelledby="navbarDropdown">
                               <a class="dropdown-item" href="about.html" title="">Sobre Nosotros</a>
                                <a class="dropdown-item scroll" href="#products" title="">Crea Tu Postre</a>
                                <a class="dropdown-item scroll" href="#news" title="">Productos</a>
                           
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gallery.html">Galeria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contactenos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">Login</a>
                        </li>
                    </ul>
                    <!-- menu button -->
                    <div class="menu">
                        <a href="#" class="navicon"></a>
                        <div class="toggle">
                            <ul class="toggle-menu list-unstyled">
                                <li>
                                    <a href="inicio.php">Inicio</a>
                                </li>
                                <li>
                                    <a class="scroll" href="#products">Productos</a>
                                </li>
                                <li>
                                    <a href="galeria.html">Galeria</a>
                                </li>
                                <li>
                                    <a href="contact.html">Contactenos</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- //menu button -->
                </div>
            </nav>
        </header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="img/Cup1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/5.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/Cup2.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
            <div class="icons-banner-botom">
            <div class="container">
                <ul class="list-unstyled my-4">
                    <li class="icons-mkw3ls">
                        <p class="mb-2">Pastel Chocolate</p>
                        <img src="images/img1.png" class="img-fluid" alt="">
                    </li>
                    <li class="icons-mkw3ls">
                        <p class="mb-2">Fresa</p>
                        <img src="images/img2.png" class="img-fluid" alt="">
                    </li>
                    <li class="icons-mkw3ls">
                        <p class="mb-2">Pista</p>
                        <img src="images/img3.png" class="img-fluid" alt="">
                    </li>
                    <li class="icons-mkw3ls">
                        <p class="mb-2">Vanilla</p>
                        <img src="images/img4.png" class="img-fluid" alt="">
                    </li>
                    <li class="icons-mkw3ls">
                        <p class="mb-2">Cupcakes</p>
                        <img src="images/img5.png" class="img-fluid" alt="">
                    </li>
                </ul>
            </div>
        </div>
    </div>
        <section class="banner-main-agiles py-5">
        <div class="banner-bottom-w3layouts" id="about">
            <div class="container pt-xl-5 pt-lg-3">
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <h3 class="aboutright">Bienvenidos a Dulce Mania</h3>
                        <h4 class="aboutright">Nemo enim ipsam voluptatem quia voluptas dolore magna aliqua</h4>
                        <p>Sit amet when an unknown printer took a galley of type.Vivamus id tempor felis. Cras sagittis mi sit amet
                            malesuada.
                            mollis. Mauris porroinit consectetur cursus tortor vel interdum. Suspendisse interdum velit vel qu dapibus
                            condimentum.</p>
                        <button type="button" class="btn btn-primary button mt-md-5 mt-4" onclick="window.location='about.html'">
                            <span>Leer Más</span>
                        </button>
                    </div>
                    <div class="col-lg-6 about-img text-lg-enter">
                        <img src="images/about.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>


        </div>
        <!-- //banner-bottom-w3layouts -->
        <!-- cake -->
     

        <!-- //cake -->
    </section>
        <!-- services -->
    <div class="serives-agile py-5 bg-light border-top" id="services">
        <div class="container py-xl-5 py-lg-3">
            <div class="row support-bottom text-center">
                <div class="col-md-6 support-grid">
                    <i class="far fa-heart"></i>
                    <h5 class="text-dark text-uppercase mt-4 mb-3">Pasteles A Tu Gusto</h5>
                    <p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
                </div>
                <div class="col-md-6 support-grid my-md-0 my-4">
                    <i class="fas fa-birthday-cake"></i>
                    <h5 class="text-dark text-uppercase mt-4 mb-3">Hecho Con Amor</h5>
                    <p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="featured-section py-5" id="products">
        <div class="container py-xl-5 py-lg-3">
            <div class="title text-center mb-5">
                <h3 class="text-dark mb-2">Productos Nuevos</h3>
            </div>
            <div class="content-bottom-in">
                <ul id="flexiselDemo1">
                    <li>
                        <div class="w3l-specilamk">
                            <div class="row">
                                <div class="col-lg-6 product-name-w3l">
                                    <h4 class="font-weight-bold">Torta De Chocolate</h4>
                                    <p class="dont-inti-w3ls mt-4 mb-2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                        accuslaudantium.</p>
                                    <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto vitae dicta sunt explicabo, Sed ut
                                        perspiciatis
                                        unde omnis iste natus error sit voluptatem accuslaudantium.</p>
                                </div>
                                <div class="col-lg-6 speioffer-agile">
                                    <img src="images/product5.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <footer class="text-center py-sm-4 py-3">
        <div class="container py-xl-5 py-3">
            <div class="w3l-footer footer-social-agile mb-4">
                <ul class="list-unstyled">
                    <li>
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="mx-1">
                        <a href="#">
                          <i class="fab fa-whatsapp"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- copyright -->
            <p class="copy-right-grids text-light my-lg-5 my-4 pb-4">Sale Cake App / Diseñado Por
                Valentina Rociasco-Monica Perez
            </p>
            <!-- //copyright -->
        </div>
        <!-- chef -->
        <img src="images/chef.png" alt="" class="img-fluid chef-style" />
        <!-- //chef -->
    </footer>
        <script src="js/jquery-3.5.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script> 
        <script src="js/jquery.flexisel.js"></script>
    <script>
        $(window).load(function () {
            $("#flexiselDemo1").flexisel({
                visibleItems: 1,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                // responsiveBreakpoints: {
                //  portrait: {
                //      changePoint: 480,
                //      visibleItems: 1
                //  },
                //  landscape: {
                //      changePoint: 640,
                //      visibleItems: 2
                //  },
                //  tablet: {
                //      changePoint: 768,
                //      visibleItems: 2
                //  }
                // }
            });

        });
    </script>
    <!-- //flexisel (for special offers) -->

    <!-- script for tabs -->
    <script>
        $(function () {

            var menu_ul = $('.faq > li > ul'),
                menu_a = $('.faq > li > a');

            menu_ul.hide();

            menu_a.click(function (e) {
                e.preventDefault();
                if (!$(this).hasClass('active')) {
                    menu_a.removeClass('active');
                    menu_ul.filter(':visible').slideUp('normal');
                    $(this).addClass('active').next().stop(true, true).slideDown('normal');
                } else {
                    $(this).removeClass('active');
                    $(this).next().stop(true, true).slideUp('normal');
                }
            });

        });
    </script>
    <!-- script for tabs -->

    <!-- stats -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();
    </script>
    <!-- //stats -->

    <!-- menu-js -->
    <script>
        $('.navicon').on('click', function (e) {
          e.preventDefault();
          $(this).toggleClass('navicon--active');
          $('.toggle').toggleClass('toggle--active');
        });
    </script>
    <!-- //menu-js -->

    <!-- banner slider -->
    <script src="js/image-slider.js"></script>
    <link rel="stylesheet" type="text/css" href="css/image-slider.css">
    <!-- //banner slider -->

    <!-- smooth scrolling -->
    <script src="js/SmoothScroll.min.js"></script>
    <!-- move-top -->
    <script src="js/move-top.js"></script>
    <!-- easing -->
    <script src="js/easing.js"></script>
    <!--  necessary snippets for few javascript files -->
    <script src="js/cakes-bakery.js"></script>

    <script src="js/bootstrap.js"></script>
    </body>
    </html>