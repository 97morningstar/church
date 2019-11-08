


                        <!-- Top panel : Bar -->
                        <div class="top_panel_top">
                            <div class="content_wrap clearfix">
                                <!-- Contacts area -->
                                <div class="top_panel_top_contact_area">
                                    Contáctanos 281 854-7133 o escríbenos a <a href="mailto:ibhconroe@gmail.com">ibhconroe@gmail.com</a>
                                </div>
                                <!-- /Contacts area -->
                                <!-- User area -->
                                <div class="top_panel_top_user_area">
                                    <!-- User login -->
                                    <ul id="menu_user" class="menu_user_nav">

                                    	    @if(auth()->guest())
											      <li class="menu_user_login">
                                            <a href="/login" class="icon-user"></a>
                                      			  </li>
							       		  	@endif
							       		  	@if(auth()->check())
							       		  			<li style="color: #333">{{auth()->user()->name}} <a href="/logout" class="icon-user"> Cerrar Sesion</a></li>
							       		  	@endif                           
                                    </ul>
                                    <!-- /User login -->
                                    <!-- Socials -->
                                    <div class="top_panel_top_socials">
                                        <div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_tiny">
                                            <div class="sc_socials_item">
                                                <a href="https://www.facebook.com/ibhconroe" target="_blank" class="social_icons social_facebook">
                                                    <span class="icon-facebook"></span>
                                                </a>
                                            </div>
                                            <div class="sc_socials_item">
                                                <a href="https://twitter.com/ibhconroe" target="_blank" class="social_icons social_twitter">
                                                    <span class="icon-twitter"></span>
                                                </a>
                                            </div>
                                            <div class="sc_socials_item">
                                                <a href="mailto:ibhconroe@gmail.com" target="_blank" class="social_icons social_gplus">
                                                    <span class="icon-mail"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Socials -->
                                    <!-- Search -->
                                    <div class="top_panel_top_search">
                                        <div class="search_wrap search_style_regular search_state_closed">
                                            <div class="search_form_wrap">
                                                <form role="search" method="get" class="search_form" action="#">
                                                    <button type="submit" class="search_submit icon-search" title="Open search"></button>
                                                    <input type="text" class="search_field" placeholder="Search" value="" name="s" />
                                                </form>
                                            </div>
                                            <div class="search_results widget_area scheme_original">
                                                <a class="search_results_close icon-cancel"></a>
                                                <div class="search_results_content"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Search -->
                                </div>
                                <!-- /User area -->
                            </div>
                        </div>
                        <!-- /Top panel : Bar -->
                        <!-- Menu area -->
                        <div class="top_panel_middle">
                            <div class="content_wrap">
                                <!-- Contact logo -->
                                <div class="contact_logo">
                                    <div class="logo">
                                        <a href="index.html">
                                           {{-- <img src="http://placehold.it/122x60" class="logo_main" alt="">
                                            <img src="http://placehold.it/122x60" class="logo_fixed" alt="">--}}

                                        </a>
                                    </div>
                                </div>
                                <!-- /Contact logo -->
                                <!-- Main Menu -->
                                <div class="menu_main_wrap">
                                    <nav class="menu_main_nav_area">
                                        <ul id="menu_main" class="menu_main_nav">
                                            <!-- Home -->
                                            <li class="">
                                                <a href="/">Menú</a>
                                               {{--<ul class="sub-menu">
                                                    <li class="menu-item">
                                                        <a href="index.html">Home 1</a>
                                                    </li>
                                                    <li class="menu-item current-menu-item">
                                                        <a href="homepage-2.html">Home 2</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="homepage-3.html">Home 3</a>
                                                    </li>
                                                </ul>--}}
                                            </li>
                                            <!-- /Home -->
                                            <!-- Pages -->
                                            <li class="menu-item menu-item-has-children">
                                                <a href="/">Servicios</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item">
                                                        <a href="/horarios">Horarios</a>
                                                    </li>
                                                 
                                                    <li class="menu-item menu-item-has-children">
                                                        <a href="#">Ministerios</a>
                                                        <ul class="sub-menu">
                                                            <li class="menu-item">
                                                                <a href="">Ministerio 1</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="#">Ministerio 2</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                               {{--     <li class="menu-item menu-item-has-children">
                                                        <a href="#">Features</a>
                                                        <ul class="sub-menu">
                                                            <li class="menu-item">
                                                                <a href="typography.html">Typography</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a href="shortcodes.html">Shortcodes</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="page-404.html">404 Page</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="events-calendar.html">Events Calendar</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="shop.html">Shop</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="contacts.html">Contacts</a>
                                                    </li> --}}
                                                </ul>
                                            </li>
                                            <!-- /Pages -->
                                            <!-- Events -->
                                            <li class="menu-item">
                                                <a href="/eventos">Eventos</a>
                                            </li>
                                            <!-- /Events -->
                                            <!-- Sermons -->
                                            <li class="menu-item menu-item-has-children">
                                                <a href="#">Quiénes Somos</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item">
                                                        <a href="/quienessomos">Quiénes Somos</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="/nuestros_principios">Nuestros Principios</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="/vision">Visión</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="/mision">Misión</a>
                                                    </li>
                                                     <li class="menu-item">
                                                        <a href="/valores">Nuestros Valores</a>
                                                    </li>
                                                     <li class="menu-item">
                                                        <a href="/en_que_creemos">En Qué Creemos</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="/lideres">Líderes</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- /Sermons -->
                                            <!-- Gallery -->
                                            <li class="">
                                                <a href="/galeria">Galería</a>
                                           {{--     <ul class="sub-menu">
                                                    <li class="menu-item">
                                                        <a href="gallery-grid.html">Grid Gallery</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="gallery-cobbles.html">Cobbles Gallery</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="gallery-masonry.html">Masonry Gallery</a>
                                                    </li>
                                                </ul>		--}}
                                            </li>
                                            <!-- /Gallery -->
                                            <!-- Blog -->
                                            <li class="menu-item">
                                                <a href="/contactos">Contactos</a>
                                            </li>
                                            <!-- /Blog -->
                                            <!-- Donate -->
                                          
                                            <!-- /Donate -->
                                        </ul>
                                    </nav>
                                </div>
                                <!-- /Main Menu -->
                            </div>
                              <div class="mask"></div>
                        </div>
                        <!-- /Menu area -->
                  