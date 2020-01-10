

  @extends('layout.app')

 @section('title')
 - Contactos
 @endsection

 @section('token')
 <meta name="csrf-token" content="{{ csrf_token() }}">
 @endsection

  @section('top_style')
  <header class="top_panel_wrap top_panel_style_3 scheme_original">
                    <div class="top_panel_wrap_inner top_panel_inner_style_3 top_panel_position_above">
 @endsection

 @section('body_class')
archive body_style_wide body_filled article_style_stretch scheme_original top_panel_show top_panel_above sidebar_hide events-list events-archive tribe-events-page-template
 @endsection

 @section('pop')

            <!-- Page Content Wrap -->
                <div class="page_content_wrap page_paddings_no">
                    <!-- Content -->
                    <div class="content">
                        <article class="post_item post_item_single page">
                            <section class="post_content">
                                <!-- Google Map -->
                                <div id="sc_googlemap_1167161672" class="sc_googlemap" style="width:100%;height:450px;" data-zoom="14" data-style="style2">
                                    <div id="sc_googlemap_1167161672_1" class="sc_googlemap_marker" data-title="" data-description="" data-address="Iglesia+Bautista+Hispana+de+Conroe" data-latlng="" data-point="images/marker.png"></div>
                                </div>
                                <!-- /Google Map -->
                                <div class="content_wrap padding_top_5_2857em padding_bottom_6_1429em">
                                    <div id="sc_form_1_wrap" class="sc_form_wrap ">
                                        <div id="sc_form_1" class="sc_form sc_form_style_form_2 aligncenter">
                                            <h6 class="sc_form_subtitle sc_item_subtitle">¿Cómo encontrarnos? </h6>
                                            <h2 class="sc_form_title sc_item_title">Ponte en contacto con nosotros</h2>
                                            <div class="sc_form_descr sc_item_descr">Si tienes alguna pregunta, no dudes en dejar tu información de contacto y una nota. </div>
                                            <div class="sc_columns columns_wrap">
                                                <div class="sc_form_address column-1_3">
                                                    <div class="sc_form_address_field sc_form_address_field_icon_address">
                                                        <span class="sc_form_address_label">Dirección:</span>
                                                        <span class="sc_form_address_data">600 Frazier St. Conroe 77301</span>
                                                    </div>
                                                    <div class="sc_form_address_field sc_form_address_field_icon_phone">
                                                        <span class="sc_form_address_label">Número de teléfono:</span>
                                                        <span class="sc_form_address_data">281-854-7133</span>
                                                    </div>
                                                    <div class="sc_form_address_field sc_form_address_field_icon_email">
                                                        <span class="sc_form_address_label">¿Tienes preguntas?</span>
                                                        <span class="sc_form_address_data">contacto@ibhconroe.org</span>
                                                          <span class="sc_form_address_data">ibhconroe@gmail.com</span>
                                                    </div>
                                                    <div class="sc_form_address_field sc_form_address_field_hours">
                                                        <span class="sc_form_address_label">Servicios:</span>
                                                        <span class="sc_form_address_data">Domingo 11:00 AM </span> 
                                                        <span> Escuela Bíblica Dominical. </span>
                                                        <br>
                                                        <span>Jueves 7:30 PM </span> 
                                                        <br>
                                                        <span>Estudio Bíblico y Oración.</span>
                                                    </div>
                                                      <div class="sc_form_address_field sc_form_address_field_hours">
                                                        <span class="sc_form_address_label">Horario de Oficina:</span>
                                                        <span class="sc_form_address_data">Lunes a Jueves <br>8:00 – 5:00 PM </span> 
                                                    </div>
                                                </div><div class="sc_form_fields column-2_3">



                                                    <form  method="POST" action="{{ route('contacto.store') }}"  enctype="multipart/form-data" >

                                  
                                                 <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

                                                        <div class="sc_form_info">
                                                            <div class="sc_form_item sc_form_field label_over">
                                                                <label class="required" for="sc_form_username">¿Cómo te llamass?</label>
                                                                <input id="sc_form_username" type="text" name="nombre" value="{{ old('nombre') }}"  placeholder="¿Cómo te llamas?">
                                                            </div>
                                                            {!! $errors->first('nombre', '<span class="error">:message</span>') !!}

                                                            <div class="sc_form_item sc_form_field label_over">
                                                                <label class="required" for="sc_form_email">Tu correo</label>
                                                                <input id="sc_form_email" type="text" name="email" placeholder="Tu correo" value="{{ old('email') }}" >
                                                            </div>
                                                            {!! $errors->first('email', '<span class="error">:message</span>') !!}

                                                             <div class="sc_form_item sc_form_field label_over">
                                                                <label class="required" for="sc_form_email">¿Podemos visitarte?</label>
                                                                <input  type="text" name="direccion" placeholder="¿Podemos visitarte?  Por favor escribe tu dirección" value="{{ old('direccion') }}"  >
                                                            </div>
                                                            {!! $errors->first('direccion', '<span class="error">:message</span>') !!}



                                                                <div class="sc_form_item sc_form_field label_over">
                                                                <label class="required" for="sc_form_email">Número de teléfono </label>
                                                                <input  type="text" name="telefono" placeholder="Número de teléfono " value="{{ old('telefono') }}"  >
                                                            </div>
                                                              {!! $errors->first('telefono', '<span class="error">:message</span>') !!}


                                                        </div>
                                                        <div class="sc_form_item sc_form_message label_over">
                                                
                                                            <textarea id="sc_form_message" name="mensaje" placeholder="Mensaje">{{ old('mensaje') }}</textarea>
                                                        </div>
                                                        {!! $errors->first('mensaje', '<span class="error">:message</span>') !!}

                                                        <div class="sc_form_item sc_form_button">
                                                            <input type="submit" name="" value="Enviar">
                                                        </div>
                                                    
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </article>
                    </div>
                    <!-- /Content -->
                </div>
@endsection


        <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAzpZaReUPfCNVLW3OpYn7jXaF5uF6XJcw"></script>
        <script type="text/javascript" src="js/core.googlemap.min.js"></script>

