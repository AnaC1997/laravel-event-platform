<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Event;
use App\Models\Tag;
use App\Models\User;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        $tags = Tag::all();

        return view("admin.events.index", compact("events", "tags"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

       
        $users = User::all();
        $tags= Tag::all();
        return view("admin.events.create", compact( "users", "tags"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request)
    {
        $validati = $request->validated();
        $newEvent = new Event();
        //i dati devono essere popolati nel model
        $newEvent->fill($validati);
        $newEvent->save();
       

        //Salva i tags in caso di essere presenti nel form
        if ($request->tags) {
            $newEvent->tags()->attach($request->tags);
        }
       
 

        return redirect()->route("admin.events.index");

    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view("admin.events.show", compact("event"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        $users = User::all();
        $tags= Tag::all();

        return view("admin.events.edit", compact("event", "users", "tags"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreEventRequest $request, Event $event)
    {
        $data = $request->all();
        $dati_validati =  new Event();
        $dati_validati->fill($data);
        $event->update($data);
//
       if ($request->filled("tags")) {
            $data["tags"] = array_filter($data["tags"]) ? $data["tags"] : [];  
            $event->tags()->sync($data["tags"]);
        }


        return redirect()->route("admin.events.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route("admin.events.index");
    }
}
