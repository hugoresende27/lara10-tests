<?php

namespace App\Http\Controllers;

use App\Models\Farm;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class FarmController extends Controller
{
    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $farms = Farm::find(9)->user;//farm 9 belongs to user 5
        $user = User::find(9)->farms;//user 9 has 2 farms

        return response()->json([
           'farms' => $farms,
            'user' => $user
        ]);

    }
}
