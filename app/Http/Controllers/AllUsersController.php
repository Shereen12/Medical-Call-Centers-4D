<?php

namespace App\Http\Controllers;

use App\Models\UserInfo;
use Illuminate\Http\Request;

class AllUsersController extends Controller
{
    public function getAllUsers(Request $request)
    {
        $users = UserInfo::all();
        return json_encode($users, true);
    }
}
