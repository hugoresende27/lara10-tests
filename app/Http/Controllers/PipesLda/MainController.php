<?php

namespace App\Http\Controllers\PipesLda;

use App\Http\Controllers\Controller;
use App\Models\Farm;
use App\Models\Group;
use App\Models\GroupUser;
use App\Models\PipesLda\Plumber;
use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
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

    public function manyToMany(): JsonResponse
    {
        $groups = Group::with('users')->get();

        return response()->json([
            'groups' => $groups
        ]);
    }
    public function manyToMany2(): View
    {
        $groups = Group::with('users')->get();

        return view('pages.index', compact('groups'));
    }

    public function storeGroup(Request $request)
    {
        $group = Group::create(['name'=>'groupAAA']);

        $users = 1;
        $group->attach($users);
    }

    public function destroyGroup(Group $group)
    {
        $users = 1;
        $group->detach($users);

        $group->delete();
    }
}
