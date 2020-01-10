<!DOCTYPE html>
<html lang="es-ES" class="scheme_original">

    <head>
        @yield('token')

        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="format-detection" content="telephone=no">

        <title>Iglesia Bautista Hispana de Conroe @yield('title')</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport"  content="width=device-width,initial-scale=1">
		<meta name="keywords" content="iglesia, conroe, tx, texas, houston, isaias martinez, jesus, dios, cristo, 77301, 77304, esperanza, iglesias, evangelicas, evangelica, bautista, hispana, templo, ayuda, biblia, fe, cruz" />
		<meta name="description" content="Bienvenidos a la Iglesia Bautista Hispana de Conroe,TX. Somos una iglesia cristiana bautista que existe para adorar al creador del universo y para ayudar a la comunidad hispana a tener una mejor relacion con Jesucristo" />
		<meta name="robots" content="index,follow" />
		<meta name="author" content="https://ibhconroe.org" />
		<!-- Open graph data -->
		<meta property="og:title" content="Iglesia Bautista Hispana de Conroe" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="https://www.ibhconroe.org/" />
		<meta property="og:image" content="https://www.ibhconroe.org/resources/images/meta-image.jpg" />
		<meta property="og:description" content="Bienvenidos a la Iglesia Bautista Hispana de Conroe,TX. Somos una iglesia cristiana bautista que existe para adorar al creador del universo y para ayudar a la comunidad hispana a tener una mejor relacion con Jesucristo" />
        <!-- Latest compiled and minified CSS -->
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Caveat:400,700|Lato:300,300i,400,400i,700,700i|Raleway:300,300i,400,400i,700,700i&amp;subset=latin-ext">
        <link rel="stylesheet" href="css/plugin.revslider.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/custom-styles.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/core.animation.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/shortcodes.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/shortcodes.css" type="text/css" media="all" />
        <link rel="stylesheet" href="js/vendor/essential-grid/css/settings.css" type="text/css" media="all" />
        <link rel="stylesheet" href="js/vendor/essential-grid/css/lightbox.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/tpl-essential-grids.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/skin.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/responsive.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="js/vendor/magnific/magnific-popup.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="js/vendor/revslider/css/settings.css" type="text/css" media="all" />

     {{--   <link rel="stylesheet" href="css/style.min.css" type="text/css" media="all" />--}}
      {{--  <link rel="stylesheet" href="css/skin.min.css" type="text/css" media="all" /> --}}

        <link rel="stylesheet" href="css/fontello/css/fontello.css" type="text/css" media="all" />
        <link rel="icon" href="http://placehold.it/32x32" />
        <link rel="icon" href="http://placehold.it/32x32" />
        <link rel="apple-touch-icon-precomposed" href="http://placehold.it/32x32" />
        <link rel="stylesheet" href="css/alll.css" type="text/css" media="all" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>

    <body class="@yield('body_class')">
        <a id="toc_home" class="sc_anchor" title="Home" data-description="<i>Return to Home</i> - <br>navigate to home page of the site" data-icon="icon-home" data-url="index.html" data-separator="yes"></a>
        <a id="toc_top" class="sc_anchor" title="To Top" data-description="<i>Back to top</i> - <br>scroll to top of the page" data-icon="icon-double-up" data-url="" data-separator="yes"></a>
        <!-- Body wrap -->
        <div class="body_wrap">
            <!-- Page wrap -->
            <!-- <div class="page_wrap"> -->
                <!-- Header -->

                <!--@yield('top_style')-->
                @include('templates.top')

            <!--</div> -->
                <!-- /Header -->
                <!-- Revolution Slider section -->
               	@yield('pop')

                <!-- /Page Content Wrap -->
                <!-- Footer -->
              	 @include('templates.footer')
                <!-- /Copyright -->
            </div>
            <!-- /Page wrap -->
        </div>
        <!-- /Body wrap -->

        <a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>

        <script type="text/javascript" src="js/jquery/jquery.js"></script>


        <script type="text/javascript" src="js/vendor/photostack/modernizr.min.js"></script>
        <script type="text/javascript" src="js/_main.min.js"></script>


        <script type="text/javascript" src="js/_packed.js"></script>

        <script type="text/javascript" src="js/vendor/essential-grid/js/lightbox.js"></script>
        <script type="text/javascript" src="js/vendor/essential-grid/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="js/vendor/essential-grid/js/jquery.themepunch.essential.min.js"></script>
        <script type="text/javascript" src="js/essential-grid-homepage-2.min.js"></script>

        <script type="text/javascript" src="js/vendor/revslider/jquery.themepunch.revolution.min.js"></script>

        <script type="text/javascript" src="js/vendor/revslider/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="js/vendor/revslider/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="js/vendor/revslider/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="js/vendor/revslider/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="js/vendor/revslider/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="js/revslider-homepage-2.min.js"></script>

         <script type="text/javascript" src="js/superfish.min.js"></script>
        <script type="text/javascript" src="js/core.utils.min.js"></script>


        <script type="text/javascript" src="js/core.init.min.js"></script>




        <script type="text/javascript" src="js/template.init.min.js"></script>

   {{--     <script type="text/javascript" src="js/shortcodes.min.js"></script>   --}}
         <script type="text/javascript" src="js/shortcodes.min.js"></script>


        <script type="text/javascript" src="js/vendor/magnific/jquery.magnific-popup.min.js"></script>


        <script type="text/javascript" src="js/vendor/swiper/swiper.min.js"></script>
        <script type="text/javascript" src="js/vendor/isotope/dist/isotope.pkgd.min.js"></script>
        <script type="text/javascript" src="js/jquery/ui/accordion.min.js"></script>




    </body>

</html>
