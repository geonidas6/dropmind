<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IAController extends Controller
{
    public function respond(Request $request)
    {
        // Call OpenAI to generate empathic response
        return response()->json(['reply' => 'Réponse empathique']);
    }

    public function summary(Request $request)
    {
        // Summarize emotions in an area
        return response()->json(['summary' => 'Résumé émotionnel']);
    }
}
