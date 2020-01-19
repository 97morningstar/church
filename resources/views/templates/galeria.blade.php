<!-- Core CSS file -->


<!-- Skin CSS file (styling of UI - buttons, caption, etc.)
     In the folder of skin CSS file there are also:
     - .png and .svg icons sprite, 
     - preloader.gif (for browsers that do not support CSS animations) -->
<link rel="stylesheet" href="/css/default-skin/default-skin.css"> 
<link rel="stylesheet" type="text/css" href="/css/gallery/lightgallery.min.css">
<link rel="stylesheet" type="text/css" href="/css/gallery/lg-transitions.min.css">
<link rel="stylesheet" type="text/css" href="/css/gallery/lg-fb-comment-box.min.css">


<style type="text/css">
 
  .lg-prev, .lg-next{
  background-image: none !important;
background-color: rgba(0,0,0,.45) !important;
 }

.demo-gallery > ul {
  margin-bottom: 0;
  padding-left: 15px;
}

.demo-gallery > ul > li {
  margin-bottom: 15px;
      height: 130px;
  width: 180px;
  display: inline-block;
  margin-right: 15px;
  list-style: outside none none;
}

.demo-gallery > ul > li a {
  border: 3px solid #FFF;
  border-radius: 3px;
  display: block;
  overflow: hidden;
  position: relative;
  float: left;
}

.demo-gallery > ul > li a > img {
  -webkit-transition: -webkit-transform 0.15s ease 0s;
  -moz-transition: -moz-transform 0.15s ease 0s;
  -o-transition: -o-transform 0.15s ease 0s;
  transition: transform 0.15s ease 0s;
  -webkit-transform: scale3d(1, 1, 1);
  transform: scale3d(1, 1, 1);
  height: 100%;
  width: 100%;
}

.demo-gallery > ul > li a:hover > img {
  -webkit-transform: scale3d(1.1, 1.1, 1.1);
  transform: scale3d(1.1, 1.1, 1.1);
}

.demo-gallery > ul > li a:hover .demo-gallery-poster > img {
  opacity: 1;
}

.demo-gallery > ul > li a .demo-gallery-poster {
  background-color: rgba(0, 0, 0, 0.1);
  bottom: 0;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  -webkit-transition: background-color 0.15s ease 0s;
  -o-transition: background-color 0.15s ease 0s;
  transition: background-color 0.15s ease 0s;
}

.demo-gallery > ul > li a .demo-gallery-poster > img {
  left: 50%;
  margin-left: -10px;
  margin-top: -10px;
  opacity: 0;
  position: absolute;
  top: 50%;
  -webkit-transition: opacity 0.3s ease 0s;
  -o-transition: opacity 0.3s ease 0s;
  transition: opacity 0.3s ease 0s;
}

.demo-gallery > ul > li a:hover .demo-gallery-poster {
  background-color: rgba(0, 0, 0, 0.5);
}

.demo-gallery .justified-gallery > a > img {
  -webkit-transition: -webkit-transform 0.15s ease 0s;
  -moz-transition: -moz-transform 0.15s ease 0s;
  -o-transition: -o-transform 0.15s ease 0s;
  transition: transform 0.15s ease 0s;
  -webkit-transform: scale3d(1, 1, 1);
  transform: scale3d(1, 1, 1);
  height: 100%;
  width: 100%;
}

.demo-gallery .justified-gallery > a:hover > img {
  -webkit-transform: scale3d(1.1, 1.1, 1.1);
  transform: scale3d(1.1, 1.1, 1.1);
}

.demo-gallery .justified-gallery > a:hover .demo-gallery-poster > img {
  opacity: 1;
}

.demo-gallery .justified-gallery > a .demo-gallery-poster {
   height: 48px;
  background-color: rgba(0, 0, 0, 0.1);
  bottom: 0;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  -webkit-transition: background-color 0.15s ease 0s;
  -o-transition: background-color 0.15s ease 0s;
  transition: background-color 0.15s ease 0s;
}

.demo-gallery .justified-gallery > a .demo-gallery-poster > img {
  left: 50%;
  margin-left: -10px;
  margin-top: -10px;
  opacity: 0;
  position: absolute;
  top: 50%;
  -webkit-transition: opacity 0.3s ease 0s;
  -o-transition: opacity 0.3s ease 0s;
  transition: opacity 0.3s ease 0s;
}

.demo-gallery .justified-gallery > a:hover .demo-gallery-poster {
  background-color: rgba(0, 0, 0, 0.5);
}

.demo-gallery .video .demo-gallery-poster img {
  height: 48px;
  margin-left: -24px;
  margin-top: -24px;
  opacity: 0.8;
  width: 48px;
}

.demo-gallery.dark > ul > li a {
  border: 3px solid #04070a;
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




<div class='demo-gallery' >
<ul id='lightgallery'>

@foreach (  $photos_1  as  $source ) 

    @if(!isset($source['name']))
     {{ $source['name']=" " }} 
    @endif

    <li data-src='{{ $source["source"] }}' data-sub-html='{{ $source["name"] }}'>
    <a href=''>
    <img class='img-responsive' src='{{ $source["source"] }}' alt=''>
    <div class='demo-gallery-poster'>
   
    </div>
    </a>

@endforeach

</ul>
</div>




                        </div>
                        <!-- /Content -->
                    </div>
                 </div>



@endsection


   


