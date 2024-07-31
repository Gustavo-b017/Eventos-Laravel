<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventControler extends Controller
{
    public function index(){

        $events = Event::all();
        
        return view('welcome', ['events'=>$events]);
    }

    public function creat(){
        return view('event.creat');
    }
}
