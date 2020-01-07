<!-- Core CSS file -->


<!-- Skin CSS file (styling of UI - buttons, caption, etc.)
     In the folder of skin CSS file there are also:
     - .png and .svg icons sprite, 
     - preloader.gif (for browsers that do not support CSS animations) -->
<link rel="stylesheet" href="/css/default-skin/default-skin.css"> 


<style type="text/css">
    .my-gallery {
  width: 100%;
  float: left;
}
.my-gallery img {
  width: 100%;
  height: auto;
}
.my-gallery figure {
  display: block;
  float: left;
  margin: 0 5px 5px 0;
  width: 150px;
}
.my-gallery figcaption {
  display: none;
}
</style>


  

  @extends('layout.app')

 @section('title')
 - Galeria
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
                    <div style="background-image: url(/images/o/p.jpg);" class="top_panel_title_inner top_panel_inner_style_3 breadcrumbs_block_bg3">
                        <div class="content_wrap">
                            <h1 class="page_title">Galería</h1>
                            <div class="breadcrumbs">
                                <a class="breadcrumbs_item home" href="index.html">Menú</a>
                                <span class="breadcrumbs_delimiter"></span>
                            
                                <span class="breadcrumbs_item current">Galería</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Breadcrumbs -->
                <!-- Page Content Wrap -->
               <div class="page_content_wrap">
                    <div class="content_wrap">
                        <!-- Content -->
                        <h2>Galería</h2>
                       
                        <div class="content">
                             <article class="post_item post_item_single page">
                                <section class="post_content tpl_gallery_section">
                                    <!-- THE ESSENTIAL GRID -->
                                    <!-- GRID WRAPPER FOR CONTAINER SIZING - HERE YOU CAN SET THE CONTAINER SIZE AND CONTAINER SKIN -->
                                    <article class="myportfolio-container" id="esg-grid-2-1-wrap">
                                        <!-- THE GRID ITSELF WITH FILTERS, PAGINATION, SORTING ETC... -->
                                        <div id="esg-grid-2-1" class="esg-grid">
                                     {{--       <article class="esg-filters esg-singlefilters grid-filters margin_bottom_20">
                                                <!-- THE FILTERING, SORTING AND WOOCOMMERCE BUTTONS -->
                                                <!-- THE FILTER BUTTONS -->
                                                <div class="esg-filter-wrapper esg-fgc-2 margin_right_3 margin_left_3">
                                                    <div class="esg-filterbutton selected esg-allfilter" data-filter="filterall" data-fid="-1">
                                                        <span>Todas</span>
                                                    </div>
                                                    <div class="esg-filterbutton" data-fid="123" data-filter="filter-conferences">
                                                        <span>Servicios</span>
                                                        <span class="esg-filter-checked">
                                                            <i class="eg-icon-ok-1"></i>
                                                        </span>
                                                    </div>
                                                    <div class="esg-filterbutton" data-fid="121" data-filter="filter-events">
                                                        <span>Eventos</span>
                                                        <span class="esg-filter-checked">
                                                            <i class="eg-icon-ok-1"></i>
                                                        </span>
                                                    </div>
                                             
                                                    <div class="eg-clearfix"></div>
                                                </div>
                                            </article> --}}
                                            <div class="esg-clear-no-height"></div>
                                            <!-- ############################ -->
                                            <!-- THE GRID ITSELF WITH ENTRIES -->
                                            <!-- ############################ -->

<iframe scrolling="no" marginheight="0" frameborder="0" width="551" style="height: 582px;" src="https://www.facebook.com/pg/ibhconroe/photos/?tab=album&album_id=2514142065519865"></iframe>


                                          <div class="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                                            
                                            <?php
                                                $con = 1;
                                                $yes = false;

                                      // dd(file_exists ('/images/nav-gallery/'.$con.'.jpg'));

                                                $path = $_SERVER['DOCUMENT_ROOT'].'/images/nav-gallery/'.$con.'.jpg';

                     

                                                    while($con<=100 && file_exists ($_SERVER['DOCUMENT_ROOT'].'/images/nav-gallery/'.$con.'.jpg')){

                                                    try {

                                                  echo(  '<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                                      <a href="/images/nav-gallery/'.$con.'.jpg" itemprop="contentUrl" data-size="1024x1024">
                                                          <img src="/images/nav-gallery/'.$con.'.jpg" itemprop="thumbnail" alt="Image description" />
                                                      </a>
                                                   <figcaption itemprop="caption description">Image caption  1</figcaption>
                                                                                          
                                                    </figure>' );
                                                                                        
                                                         } catch (Exception $e) {
                                                             break;                            
                                                     }                                      

                                                        $con++;
                                                 }
                                              ?>
                                          </div>
                                              
                                     
                                            <!-- ############################ -->
                                            <!--      END OF THE GRID         -->
                                            <!-- ############################ -->
                                            
                                                <!-- THE PAGINATION CONTAINER. PAGE BUTTONS WILL BE ADDED ON DEMAND AUTOMATICALLY !! -->
                                               
                                                <!-- END OF THE PAGINATION -->
                                            </article>
                                          
                                        </div>
                                        <!-- END OF THE GRID -->
                                    </article>
                                    <!-- END OF THE GRID WRAPPER -->
                                    <div class="clear"></div>
                                </section>
                            </article>
                        </div>
                        <!-- /Content -->
                    </div>
                 </div>





<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe. 
         It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides. 
            PhotoSwipe keeps only 3 of them in the DOM to save memory.
            Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                <button class="pswp__button pswp__button--share" title="Share"></button>

                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div> 
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

        </div>

    </div>

</div>

<script type="text/javascript">
var openPhotoSwipe = function() {
    var pswpElement = document.querySelectorAll('.pswp')[0];

    // build items array
    var items = [
        {
            src: 'https://farm2.staticflickr.com/1043/5186867718_06b2e9e551_b.jpg',
            w: 964,
            h: 1024
        },
        {
            src: 'https://farm7.staticflickr.com/6175/6176698785_7dee72237e_b.jpg',
            w: 1024,
            h: 683
        }
    ];
    
    // define options (if needed)
    var options = {
             // history & focus options are disabled on CodePen        
        history: false,
        focus: false,

        showAnimationDuration: 0,
        hideAnimationDuration: 0
        
    };
    
    var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
    gallery.init();
};

//openPhotoSwipe();


</script>




@endsection


   
        <script type="text/javascript" src="js/jquery/jquery.js"></script>

