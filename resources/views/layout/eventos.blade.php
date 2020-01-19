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
                    <div style="background-image: url(/images/o/eventos.jpg);"  class="top_panel_title_inner top_panel_inner_style_3 breadcrumbs_block_bg3">
                        <div class="content_wrap">
                            <h1 class="page_title" >Próximos Eventos</h1>
                            <div class="breadcrumbs" >
                                <a class="breadcrumbs_item home" href="/" >Menú</a>
                                <span class="breadcrumbs_delimiter"></span>
                                <span class="breadcrumbs_item current" >Todos los eventos</span>
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
                           
                              
                               
                                     
                                           
                                         
                                             
                                                <!-- Tribe Bar -->
                                               
                                                    
                                                     

       
                                                              
                                                                   

                                                                    <input style="width: 80%; height: 34px;" type="text" name="tribe-bar-search" id="search" value="" placeholder="Escribe para buscar un evento">


                                                                     
                                                               


                                                                    <input style="height: 34px;" class="tribe-events-button tribe-no-param" value="Buscar Eventos" />


                                                             
                                           
                                                <!-- Main Events Content -->
                                              
                                                    <!-- List Title -->
                                                    <h2 class="tribe-events-page-title">Próximos eventos</h2>
                                                    <!-- Notices -->


                                                    <ul class="" style="list-style: none;" id="result"></ul>



                                                   
                                                            
                                                           
                                                          
                                                        <!-- List Footer -->
                                                            
                                                               
                                            
                                           
                                        
                                    
                             
                           
                        </div>
                        <!-- /Content -->
                    </div>
                 </div>
@endsection