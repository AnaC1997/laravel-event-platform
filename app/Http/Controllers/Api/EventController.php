<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){

        $results = Event::with("user")->get();

        $data=[
            "success" => true,
            "payload" => $results,
        ];

        return response()->json($data);
    }

    


    public function show($eventId){

        $event = Event::with(['user', 'tags'])->find($eventId);
        if ($event) {
            $data = [
                "success" => true,
                "payload" => $event,
            ];
        } else {
            $data = [
                "success" => false,
                "payload" => "Nessun evento corrisponde all'id: $eventId",
            ];
        }
        return response()->json($data);
    }

    }
   
   
