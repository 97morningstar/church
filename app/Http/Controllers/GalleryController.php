<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{

	// Pass the $fb and $response variable

     public function index(){


  $fb = new \Facebook\Facebook([
  'app_id' => '619067895505251',           //Replace {your-app-id} with your app ID
  'app_secret' => '2f737d5ec405b3c40554172900555a05',   //Replace {your-app-secret} with your app secret
  'graph_api_version' => 'v5.0',
]);

   $response = $fb->get('/ibhconroe/?fields=albums{photos.limit(500){source,name}}', 'EAAIzCfoA4WMBAOBfnYgUub4wpOQpwgiaQmGdXuyrIWGZA2uvQe7DUiRjFxEFMvgRmx3Ayzz8wemG5mmyWR3i4XzeZAbAVrsjYAdovyV0odvgvXVumALUhfsAZCQEw2BJuXDervcZCJ2RwuUiLQo3LnnhihsThupnh8dNhhuSaoEoyI8qZAdwd');





try {
   
// Get your UserNode object, replace {access-token} with your token
 

} catch(\Facebook\Exceptions\FacebookResponseException $e) {
        // Returns Graph API errors when they occur
  echo 'Graph returned an error: ' . $e->getMessage();
  
} catch(\Facebook\Exceptions\FacebookSDKException $e) {
        // Returns SDK errors when validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
 
}


   $me = $response->getGraphUser();



$fbPhotoObj = json_decode($me, true, 512, JSON_BIGINT_AS_STRING);

$albums =  $fbPhotoObj['albums'];

// Album #1

$album_1 = $albums[0];

$photos_1 = $album_1['photos'];

$source_1 = $photos_1[0];



  	return view('templates.galeria')->with('photos_1',$photos_1);
  }


}
