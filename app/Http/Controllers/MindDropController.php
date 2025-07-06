<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MindDrop;
use App\Models\UserToken;
use App\Models\Mood;

class MindDropController extends Controller
{
    public function token(Request $request)
    {
        // Generate anonymous token or return existing
        return response()->json(['token' => 'demo-token']);
    }

    public function index(Request $request)
    {
        // List drops near coordinates
        return response()->json(MindDrop::latest()->take(50)->get());
    }

    public function store(Request $request)
    {
        // Store a new drop
        $drop = MindDrop::create($request->all());
        return response()->json($drop, 201);
    }

    public function show(MindDrop $drop)
    {
        return response()->json($drop);
    }

    public function support(MindDrop $drop)
    {
        // Add support to drop
        return response()->json(['supported' => true]);
    }

    public function report(MindDrop $drop)
    {
        // Report drop to moderators
        return response()->json(['reported' => true]);
    }
}
