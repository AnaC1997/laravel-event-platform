<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {

        $results = Tag::all();

        $data = [
            "success" => true,
            "payload" => $results,
        ];

        return response()->json($data);
    }

    public function show($tagId)
    {
        $tag = Tag::with( 'events')->find($tagId);
        if ($tag) {
            $data = [
                'success' => true,
                'payload' => $tag,

            ];
        } else {
            $data = [
                'success' => false,
                'payload' => "Nessun tag corrisponde all'id: $tagId",
            ];

        }
        return response()->json($data);

    }
}

