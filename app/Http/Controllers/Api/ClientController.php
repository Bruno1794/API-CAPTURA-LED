<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function store(Request $request): JsonResponse
    {
        $client = Client::create([
            'email' => $request->get('email'),
            'fone' => $request->get('fonet'),
        ]);

        return response()->json([
            'success' => true,
            'client' => $client,
            'message' => 'Led capturada com sucesso',
        ]);
    }
}
