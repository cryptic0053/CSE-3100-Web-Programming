<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class QBExercisseController extends Controller
{
    function read(Request $request)
    {
        // Reading data from `users` table
        $users = DB::table('users')->get();
        return $users;
    }
}
