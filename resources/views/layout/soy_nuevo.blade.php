
<style type="text/css">
  .btn-custom{
        color: #007bff;
    border-radius: 0 !important;
    font-weight: 400;
        background-color: transparent;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 1rem;
  }
  .btn-custom:hover {
    color: #0056b3;
  }

  .link-custom, .link-custom:hover{
    font-size: 21px;
    text-decoration: none;
  }
</style>

  @extends('layout.app')

 @section('title')
 - Soy Nuevo
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
                    <div style="background-image: url(/images/o/en_que_creemos.jpg);" class="top_panel_title_inner top_panel_inner_style_3 breadcrumbs_block_bg3">
                        <div class="content_wrap">
                            <h1 class="page_title">Soy Nuevo</h1>
                            <div class="breadcrumbs">
                                <a class="breadcrumbs_item home" href="/">Menú</a>
                                <span class="breadcrumbs_delimiter"></span>
                                 <span class="breadcrumbs_item current">Soy Nuevo</span>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Breadcrumbs -->
                <!-- Page Content Wrap -->
               <div class="page_content_wrap" style="background-color: #f7fbfc; ">
                    <div class="content_wrap">

                        <!-- Content -->
                    <br>
                     <div style="text-align: center;">
                        <span style="font-size: 80px;font-family: 'Dancing Script', cursive;">Eres bienvenido</span>
                        </div>
                        <br><br>

                         <p style="font-size: 21px; text-align: center;"> 
                       Quizás sientes la necesidad de volver a congregarte o de visitar una iglesia por primera vez. 
                       <br>Tal vez usted es un miembro activo de alguna iglesia y acaba de mudarse hacia Conroe y sus alrededores y necesita encontrar un nuevo hogar - iglesia. Es probable que simplemente usted necesite una iglesia diferente a donde has estado. 
                      Sea cual sea su situación, queremos ayudarles con respuestas a alguna a sus posibles preguntas antes de visitar la Iglesia Bautista Hispana de Conroe. 
                    </p>

                    <h3>Preguntas comunes</h3>

                   <div class="accordion" id="accordionExample" style="font-size: 21px;">
                      <div class="card">
                        <div class="card-header" id="headingOne">
                          <h2 class="mb-0">
                            <button class="btn-custom " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              ¿Cuál es su horario de servicios?
                            </button>
                          </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                          <div class="card-body">
                            Los servicios de adoración se llevan a cabo los domingos a las 11:00 AM. <br>
                            El culto de Oración y Estudio Bíblico se lleva a cabo los jueves a las 7:30 PM. 

                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingTwo">
                          <h2 class="mb-0">
                            <button class="btn-custom  collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              ¿Cómo debería vestir?
                            </button>
                          </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                          <div class="card-body">
                            Pues debes saber que nuestra preocupación no es como se vista exteriormente sino como está su interior. Por tanto, venga tal como estás. Jesús nos acepta como somos cuando venimos a Él. ¿Por qué no nosotros?
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingThree">
                          <h2 class="mb-0">
                            <button class="btn-custom collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">

                              ¿Dónde parquear?
                            </button>
                          </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                          <div class="card-body">
                            En el estacionamiento disponible frente al edificio que mira hacia la calle Frazier. De no haber capacidad entonces puede dirigirse a los estacionamientos en la parte interior del campus, siguiendo la entrada por la vía izquierda del edificio. 
                          </div>
                        </div>
                      </div>
                          <div class="card">
                        <div class="card-header" id="headingThree">
                          <h2 class="mb-0">
                            <button class="btn-custom  collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              ¿Hay algo para mis hijos?
                            </button>
                          </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                          <div class="card-body">
                            ¡Por supuesto! Tenemos atención especial para todos los niños durante la escuela bíblica dominical. 
                          </div>
                        </div>
                      </div>
                    </div>

                    <br><br>
                    <div class="container">
                      <div class="row">
                        <div class="column-1_3">
                    <span style="font-size: 31px">Sobre Nosotros</span><br><br>
                    
                    <a class="link-custom" href="/quienessomos">Quienes Somos</a><br>
                    <a class="link-custom" href="/en_que_creemos" >En qué creemos</a><br>
                    <a class="link-custom" href="/lideres" >Líderes</a><br>
                    <a class="link-custom" href="/contactos" >Contactos</a><br><br>
                    </div>
                       <div class="column-1_3">
                    <span style="font-size: 31px">Recursos</span><br><br>
                   
                    <a class="link-custom" href="/eventos">Eventos</a><br>
                    <a class="link-custom" href="/mensajes" >Mensajes</a><br>
                    <a class="link-custom" href="/deseo_unirme_a_la_membrecía" >Deseo Unirme a la Membrecía</a><br>
                    <a class="link-custom" href="/nuestras_asociaciones" >Nuestras Asociaciones</a><br><br>
                    </div>
                  <div class="column-1_3">
                    <span style="font-size: 31px">Ministerios</span><br><br>
                   
                    <a class="link-custom" href="/ninos">Niños</a><br>
                    <a class="link-custom" href="/jovenes" >Jóvenes</a><br>
                    <a class="link-custom" href="/femeniles" >Femeniles</a><br>
                    <a class="link-custom" href="/hombres" >Hombres</a><br>
                    <a class="link-custom" href="/adoracion" >Adoración</a><br>
                    <a class="link-custom" href="/evangelismoymisiones" >Evangelismo y Misiones</a><br><br>
                      </div>
                    </div>
                    </div>



                        <!-- /Content -->
                    </div>
                 </div>
@endsection