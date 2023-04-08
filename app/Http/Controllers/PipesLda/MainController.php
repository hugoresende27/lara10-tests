<?php

namespace App\Http\Controllers\PipesLda;

use App\Http\Controllers\Controller;
use App\Models\Farm;
use App\Models\PipesLda\Plumber;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $client = 16;
        $referrals = Plumber::find($client)->referrals;//get the clients of plumber_id 16 and the referrals of thoose clients
        $clients = Plumber::find(10)->referrals;//plumber_id 10 has clients (15,16,...) Referrals with clients_id

        return response()->json([
            'refs' => $referrals,
            'client' => $clients
        ]);

    }
}
