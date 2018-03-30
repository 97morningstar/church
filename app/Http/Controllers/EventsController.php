<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventsController extends Controller
{
     function __construct(){
        $this->middleware('auth' , ['only' => ['index', 'create', 'store', 'showAll', 'edit', 'update', 'destroy']]);
      }


    public function index(){

      	return view('cms.main');
      }

    public function create(){
    	return view('cms.eventos.create');
    }

    public function store(Request $request){

    	$this->validate($request, [
    		'name' => 'required',
    		'date' => 'required',
    		'time' => 'required',
    	]);

    	  // Get filename with extension
      $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
//dd($filenameWithExt);
      // Get just the filename
      $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

      // Get extension
      $extension = $request->file('cover_image')->getClientOriginalExtension();

      // Create new filename
      $filenameToStore = $filename.'_'.time().'.'.$extension;

      // Uplaod image
      $path = $request->file('cover_image')->storeAs('storage/album_covers/', $filenameToStore);

    	$event = new Event;
    	$event->name = $request->input('name');
    	$event->date = $request->input('date');
    	$event->time = $request->input('time');
    	$event->place = $request->input('place');
    	$event->description = $request->input('description');
    	$event->image = $filenameToStore;
    	$event->save();
    	return view('cms.main');
    }

    public function showall(){

    	    $events = Event::All();
    	  //dd($events);

    	return view('cms.eventos.show', compact('events'));
    } 

    public function edit(){

    }

    public function update(){

    }

    public function destroy(){

    }

}
