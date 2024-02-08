<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){

        $results = Event::with("user")->get;

        $data=[
            "success" => true,
            "payload" => $results,
        ];

        return response()->json($data);
    }

    


    public function show($event){

        $event = Event::with("user")->find($event);

    $data = [
        "success" => $event ? true : false,
        "payload" => $event ? $event :"Nessun evento corrisponde all'id",
    ];
        return response()->json($data);
    }

    }
   
   
