<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class CheckController extends Controller
{
    public function index (Request $request)
    {
        $owner = $request['date_start'];

        return view('check', compact('owner'));
    }
}
