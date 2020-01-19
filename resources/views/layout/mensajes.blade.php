


  @extends('layout.app')

 @section('title')
 - Mensajes
 @endsection

  @section('top_style')
  <header class="top_panel_wrap top_panel_style_3 scheme_original">
                    <div class="top_panel_wrap_inner top_panel_inner_style_3 top_panel_position_above">
 @endsection

 @section('body_class')
 archive body_style_wide body_filled article_style_stretch scheme_original top_panel_show top_panel_above sidebar_hide events-list events-archive tribe-events-page-template
 @endsection

 @section('pop')

                <div  class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
                    <div style="background-image: url(/images/o/mensajes.jpg);" class="top_panel_title_inner top_panel_inner_style_3 breadcrumbs_block_bg3">
                        <div class="content_wrap">
                            <h1 class="page_title">Mensajes</h1>
                            <div class="breadcrumbs">
                                <a class="breadcrumbs_item home" href="/">Menú</a>
                                <span class="breadcrumbs_delimiter"></span>
                                 <span class="breadcrumbs_item current">Recursos</span>
                                <span class="breadcrumbs_delimiter"></span>
                                <span class="breadcrumbs_item current">Mensajes</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Breadcrumbs -->
                <!-- Page Content Wrap -->
               <div class="page_content_wrap" style="background-color: #f7fbfc; ">
                    <div class="content_wrap">

                        <!-- Content -->
                        <p style="font-size: 21px;">Si estás interesado a unirse a nosotros entonces eche un vistazo a los últimos mensajes de inspiración que obtendrá cada semana en IBHC.
                          <br><br>
                          Pero usted no tiene que perderse un solo mensaje. Venga cada domingo y disfrute de la Palabra de Dios hablando a su corazón. Oramos para que Dios hable a su vida a través de estos impactantes mensajes.
                          <br><br>
                        Has click en uno de los mensajes para leerlos</p>

                <div class="sc_columns columns_wrap" style="font-size: 21px;">
                       
                   <?php
                    foreach (glob("mensajes_pdf/*.pdf") as $filename) {
                        echo '<div class="column-1_2 column_padding_bottom">';
                        
                        echo '<a target=_blank href="'. $filename .'">';
                        echo substr($filename, 13);
                        echo '</a>';
                       
                     
                        echo '</div>';
                    }
                    ?>
                 

                </div>

                      <br>










</div>
                                                 



                        <!-- /Content -->
                    </div>
                 </div>
@endsection