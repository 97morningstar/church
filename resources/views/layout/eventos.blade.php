        <link rel="stylesheet" href="js/vendor/the-events-calendar/bootstrap-datepicker/css/datepicker.css" type="text/css" media="all" />
        <link rel="stylesheet" href="js/vendor/the-events-calendar/css/tribe-events-full.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="js/vendor/the-events-calendar/css/tribe-events-full-mobile.min.css" type="text/css" media="only screen and (max-width: 768px)" />
        <link rel="stylesheet" href="css/plugin.tribe-events.min.css" type="text/css" media="all" />




  @extends('layout.app')

 @section('title')
 - Eventos
 @endsection

  @section('top_style')
  <header class="top_panel_wrap top_panel_style_3 scheme_original">
                    <div class="top_panel_wrap_inner top_panel_inner_style_3 top_panel_position_above">
 @endsection

 @section('body_class')
 archive body_style_wide body_filled article_style_stretch scheme_original top_panel_show top_panel_above sidebar_hide events-list events-archive tribe-events-page-template
 @endsection

 @section('pop')

                <div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
                    <div style="background-image: url(/images/o/pp.jpg);"  class="top_panel_title_inner top_panel_inner_style_3 breadcrumbs_block_bg3">
                        <div class="content_wrap">
                            <h1 class="page_title" style="color: #000;">Próximos Eventos</h1>
                            <div class="breadcrumbs" >
                                <a class="breadcrumbs_item home" href="index.html" style="color: #000;">Menú</a>
                                <span class="breadcrumbs_delimiter"></span>
                                <span class="breadcrumbs_item current" style="color: #000;">Todos los eventos</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Breadcrumbs -->
                <!-- Page Content Wrap -->
               <div class="page_content_wrap page_paddings_yes">
                    <div class="content_wrap">
                        <!-- Content -->
                        <div class="content">
                            <section class="post tribe_events_wrapper">
                                <article class="post_content">
                                    <div id="tribe-events-pg-template">
                                        <div id="tribe-events" class="tribe-no-js" data-live_ajax="1" data-datepicker_format="0" data-category="">
                                            <div class="tribe-events-before-html"></div>
                                            <span class="tribe-events-ajax-loading">
                                                <img class="tribe-events-spinner-medium" src="js/vendor/the-events-calendar/images/tribe-loading.gif" alt="Loading Events" />
                                            </span>
                                            <div id="tribe-events-content-wrapper" class="tribe-clearfix">
                                                <input type="hidden" id="tribe-events-list-hash" value="">
                                                <!-- Tribe Bar -->
                                                <div id="tribe-events-bar">
                                                    <form id="tribe-bar-form" class="tribe-clearfix" name="tribe-bar-form" method="post" action="#">
                                                        <!-- Mobile Filters Toggle -->
                                                        <div id="tribe-bar-collapse-toggle">
                                                            Buscar Eventos<span class="tribe-bar-toggle-arrow"></span>
                                                        </div>
                                                        <!-- Views -->
                                                        <div id="tribe-bar-views">
                                                            <div class="tribe-bar-views-inner tribe-clearfix">
                                                                <h3 class="tribe-events-visuallyhidden">Navegacion de Eventos</h3>
                                                                <label>Ver como</label>
                                                                <select class="tribe-bar-views-select tribe-no-param" name="tribe-bar-view">
                                                                    <option selected value="#" data-view="list">
                                                                        Lista </option>
                                                                    <option value="#" data-view="month">
                                                                        Mes </option>
                                                                    <option value="#" data-view="day">
                                                                        Día </option>
                                                                </select>
                                                            </div>
                                                         </div>

                                                        <div class="tribe-bar-filters">
                                                            <div class="tribe-bar-filters-inner tribe-clearfix">
                                                                <div class="tribe-bar-date-filter">
                                                                    <label class="label-tribe-bar-date" for="tribe-bar-date">Eventos desde</label>
                                                                    <input type="text" name="tribe-bar-date" class="position_relative" id="tribe-bar-date" value="" placeholder="Date">
                                                                    <input type="hidden" name="tribe-bar-date-day" id="tribe-bar-date-day" class="tribe-no-param" value=""> </div>
                                                                <div class="tribe-bar-search-filter">
                                                                    <label class="label-tribe-bar-search" for="tribe-bar-search">Buscar</label>
                                                                    <input type="text" name="tribe-bar-search" id="tribe-bar-search" value="" placeholder="Search"> </div>
                                                                <div class="tribe-bar-submit">
                                                                    <input class="tribe-events-button tribe-no-param" type="submit" name="submit-bar" value="Find Events" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- Main Events Content -->
                                                <div id="tribe-events-content" class="tribe-events-list">
                                                    <!-- List Title -->
                                                    <h2 class="tribe-events-page-title">Próximos eventos</h2>
                                                    <!-- Notices -->


                                                    <ul class="event-list large" style="list-style: none;">
                                    <li>
                                        <h3 class="event-title"><a href="#">Reunión de primavera en la Iglesia Bautista de Tallowood</a></h3>
                                        <span class="event-meta">
                                            <span><i class="fa fa-calendar"></i> 7 Febrero 2018</span>
                                            <span><i class="fa fa-map-marker"></i> Iglesia Bautista de Tallowood</span>
                                        </span>
                                        <p>Balance del trabajo de la iglesia en los primeros 6 meses. </p>
                                        {{--<a href="#" class="button">Unirte</a>--}}
                                        <a href="/contactos" class="button secondary">Haz una pregunta</a>
                                     
                                    </li>

                                    <li>
                                        <h3 class="event-title"><a href="#">Primer convivio en el barrio de Las Trailas</a></h3>
                                        <span class="event-meta">
                                            <span><i class="fa fa-calendar"></i> 18 marzo 2018</span>
                                            <span><i class="fa fa-map-marker"></i> Las Trailas</span>
                                        </span>
                                        <p>Tiempo de esparcimiento con todas las familias de esa comunidad a fin de mostrarles confianza, ayudarles en sus necesidades y promocionar el trabajo de la Iglesia</p>
                                        {{--<a href="#" class="button">Unirte</a>--}}
                                        <a href="/contactos" class="button secondary">Haz una pregunta</a>
                                   
                                    </li>
                                    <li>
                                        <h3 class="event-title"><a href="#">Semana de pasiones</a></h3>
                                        <span class="event-meta">
                                            <span><i class="fa fa-calendar"></i> 25 de Marzo al 1 de Abril 2018</span>
                                            <span><i class="fa fa-map-marker"></i> Templo</span>
                                        </span>
                                        <p>Tiempo de recordatorio y celebración de la muerte y resurrección de Jesucristo. 
                                            <br>
                                        
                                                <p>Domingo 25. &nbsp&nbsp Domingo de Ramos. Escuela Dominical especial por la entrada triunfal de Jesús en Jerusalén. </p>
                                                <p>Viernes 23.  &nbsp&nbsp  Sermón de las 7 palabras. </p>
                                                <p>Domingo 1.   &nbsp&nbsp      Escuela Dominical especial por el día de resurrección. </p>
                                            
                                        </p>
                                        {{--<a href="#" class="button">Unirte</a>--}}
                                        <a href="/contactos" class="button secondary">Haz una pregunta</a>
                                   
                                    </li>
                                    <li>
                                        <h3 class="event-title"><a href="#">Domingo de resurrección</a></h3>
                                        <span class="event-meta">
                                            <span><i class="fa fa-calendar"></i> 1 de Abril 2018</span>
                                            <span><i class="fa fa-map-marker"></i> Templo</span>
                                        </span>
                                        <p>Programa especial. </p>
                                        {{--<a href="#" class="button">Unirte</a>--}}
                                        <a href="/contactos" class="button secondary">Haz una pregunta</a>
                                     
                                    </li>
                                    <li>
                                        <h3 class="event-title"><a href="#">Segundo convivio</a></h3>
                                        <span class="event-meta">
                                            <span><i class="fa fa-calendar"></i>  8 de Abril 2018</span>
                                            <span><i class="fa fa-map-marker"></i> Casa de hospedaje de Paulino y Blanca Vadillo</span>
                                        </span>
                                        <p>Tiempo de esparcimiento con todas las perdonas de esa casa a fin de mostrarles confianza, ayudarles en sus necesidades y promocionar el trabajo de la iglesia. </p>
                                    {{--<a href="#" class="button">Unirte</a>--}}
                                        <a href="/contactos" class="button secondary">Haz una pregunta</a>
                                    
                                    </li>
                                    <li>
                                        <h3 class="event-title"><a href="#">Ciclo de edificación del Hogar y la Familia.</a></h3>
                                        <span class="event-meta">
                                            <span><i class="fa fa-calendar"></i> 8 de Mayo al 17 de Junio 2018</span>
                                            <span><i class="fa fa-map-marker"></i></span>
                                        </span>
                                        <p></p>
                                        {{--<a href="#" class="button">Unirte</a>--}}
                                        <a href="/contactos" class="button secondary">Haz una pregunta</a>
                                     
                                    </li>
                                    <li>
                                        <h3 class="event-title"><a href="#">Día de las madres</a></h3>
                                        <span class="event-meta">
                                            <span><i class="fa fa-calendar"></i> 8 de Mayo 2018</span>
                                            <span><i class="fa fa-map-marker"></i> Templo</span>
                                        </span>
                                        <p>Celebración especial para homenajear a nuestras madres. </p>
                                        {{--<a href="#" class="button">Unirte</a>--}}
                                        <a href="/contactos" class="button secondary">Haz una pregunta</a>
                                     
                                    </li>
                                    <li>
                                        <h3 class="event-title"><a href="#">Segunda reunión en la Iglesia Bautista de Tallowood</a></h3>
                                        <span class="event-meta">
                                            <span><i class="fa fa-calendar"></i> 13 de Junio 2018</span>
                                            <span><i class="fa fa-map-marker"></i> Iglesia Bautista de Tallowood</span>
                                        </span>
                                        <p>Balance del trabajo de la iglesia en los primeros 9 meses. </p>
                                        {{--<a href="#" class="button">Unirte</a>--}}
                                        <a href="/contactos" class="button secondary">Haz una pregunta</a>
                                      
                                    </li>
                                    <li>
                                        <h3 class="event-title"><a href="#">Día de los Padres</a></h3>
                                        <span class="event-meta">
                                            <span><i class="fa fa-calendar"></i> 17 de Junio 2018</span>
                                            <span><i class="fa fa-map-marker"></i> Templo</span>
                                        </span>
                                        <p>Celebración especial para homenajear a nuestros padres. </p>
                                        {{--<a href="#" class="button">Unirte</a>--}}
                                        <a href="/contactos" class="button secondary">Haz una pregunta</a>
                                      
                                    </li>                                   
                                    <li>
                                        <h3 class="event-title"><a href="#">Escuela de Verano. </a></h3>
                                        <span class="event-meta">
                                            <span><i class="fa fa-calendar"></i> 9 al 15 de Julio 2018</span>
                                            <span><i class="fa fa-map-marker"></i> Templo</span>
                                        </span>
                                        <p>Programa especial con nuestros niños con la participación de toda la iglesia. </p>
                                        {{--<a href="#" class="button">Unirte</a>--}}
                                        <a href="/contactos" class="button secondary">Haz una pregunta</a>
                                       
                                    </li>                               
                                    <li>
                                        <h3 class="event-title"><a href="#">Programa de Verano. </a></h3>
                                        <span class="event-meta">
                                            <span><i class="fa fa-calendar"></i> Agosto 2018</span>
                                            <span><i class="fa fa-map-marker"></i> Templo</span>
                                        </span>
                                        <p> Diferentes actividades variadas que incluyen celebración de escuelas dominical en lugares fuera del santuario. </p>
                                        {{--<a href="#" class="button">Unirte</a>--}}
                                        <a href="/contactos" class="button secondary">Haz una pregunta</a>
                                      
                                    </li>
                                    <li>
                                        <h3 class="event-title"><a href="#">Primer aniversario</a></h3>
                                        <span class="event-meta">
                                            <span><i class="fa fa-calendar"></i> 16 de Septiembre 2018</span>
                                            <span><i class="fa fa-map-marker"></i> Templo</span>
                                        </span>
                                        <p> Escuela dominical especial por un año de trabajo de la iglesia. </p>
                                        {{--<a href="#" class="button">Unirte</a>--}}
                                        <a href="/contactos" class="button secondary">Haz una pregunta</a>
                                    
                                    </li>



                                        <li>
                                        <h3 class="event-title"><a href="#">Día de la Biblia</a></h3>
                                        <span class="event-meta">
                                            <span><i class="fa fa-calendar"></i> 2 de Diciembre 2018</span>
                                            <span><i class="fa fa-map-marker"></i> Templo</span>
                                        </span>
                                        <p> Escuela Dominical especial. </p>
                                        {{--<a href="#" class="button">Unirte</a>--}}
                                        <a href="/contactos" class="button secondary">Haz una pregunta</a>
                                      
                                    </li>

                                        <li>
                                        <h3 class="event-title"><a href="#">Actividad especial por la apertura de la Navidad. </a></h3>
                                        <span class="event-meta">
                                            <span><i class="fa fa-calendar"></i> 2 de Diciembre 2018</span>
                                            <span><i class="fa fa-map-marker"></i> Templo</span>
                                        </span>
                                        <p></p>
                                        {{--<a href="#" class="button">Unirte</a>--}}
                                        <a href="/contactos" class="button secondary">Haz una pregunta</a>
                                     
                                    </li>

                                        <li>
                                        <h3 class="event-title"><a href="#">Noche buena</a></h3>
                                        <span class="event-meta">
                                            <span><i class="fa fa-calendar"></i> 24 de Diciembre 2018</span>
                                            <span><i class="fa fa-map-marker"></i> Templo</span>
                                        </span>
                                        <p>Convivio conjunto con toda la Iglesia</p>
                                        {{--<a href="#" class="button">Unirte</a>--}}
                                        <a href="/contactos" class="button secondary">Haz una pregunta</a>
                                       
                                    </li>

                                        <li>
                                        <h3 class="event-title"><a href="#">Celebración de la Navidad.</a></h3>
                                        <span class="event-meta">
                                            <span><i class="fa fa-calendar"></i> 25 de Diciembre 2018</span>
                                            <span><i class="fa fa-map-marker"></i> Templo</span>
                                        </span>
                                        <p></p>
                                        {{--<a href="#" class="button">Unirte</a>--}}
                                        <a href="/contactos" class="button secondary">Haz una pregunta</a>
                                
                                    </li>

                                        <li>
                                        <h3 class="event-title"><a href="#">Celebración de fin de año. </a></h3>
                                        <span class="event-meta">
                                            <span><i class="fa fa-calendar"></i> 31 de Diciembre 2018</span>
                                            <span><i class="fa fa-map-marker"></i> Templo</span>
                                        </span>
                                        <p></p>
                                        {{--<a href="#" class="button">Unirte</a>--}}
                                        <a href="/contactos" class="button secondary">Haz una pregunta</a>
                                    
                                    </li>
                                </ul>



                                                    <!-- List Header -->
                                                    <div id="tribe-events-header" data-title="Upcoming Events &#8211; Events &#8211; New Life Church" data-startofweek="1" data-view="list" data-baseurl="#">
                                                        <!-- Header Navigation -->
                                                        <ul class="tribe-events-sub-nav">
                                                            <!-- Left Navigation -->
                                                            <li class="tribe-events-nav-previous tribe-events-nav-left tribe-events-past" aria-label="previous events link">
                                                                <a href="#" rel="prev">
                                                                    <span>&laquo;</span> Eventos pasados
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                        <!-- Events Loop -->
                                                        <div class="tribe-events-loop">
                                                            
                                                           
                                                          
                                                        <!-- List Footer -->
                                                                <div id="tribe-events-footer">
                                                                    <!-- Footer Navigation -->
                                                                    <ul class="tribe-events-sub-nav">
                                                                        <!-- Left Navigation -->
                                                                        <li class="tribe-events-nav-previous tribe-events-nav-left tribe-events-past" aria-label="previous events link">
                                                                            <a href="#" rel="prev">
                                                                                <span>&laquo;</span> Eventos pasados
                                                                            </a>
                                                                        </li>
                                                                        <!-- Subir un evento nuevo si eres admin
                                                                        <li class="tribe-events-nav-previous tribe-events-nav-left tribe-events-past" aria-label="previous events link">
                                                                            <a href="#" rel="prev">
                                                                                <span>&laquo;</span> Subir un evento
                                                                            </a>
                                                                        </li>-->
                                                                        <!-- Right Navigation -->
                                                                        <li class="tribe-events-nav-previous tribe-events-nav-right" aria-label="next events link">
                                                                            <a href="#" rel="next">  Próximos eventos
                                                                                <span>&raquo;</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                               
                                                         </div>
                                                    <div class="tribe-clear"></div>
                                                </div>
                                        </div>
                                    </div>
                                </article>
                            </section>
                        </div>
                        <!-- /Content -->
                    </div>
                 </div>
@endsection