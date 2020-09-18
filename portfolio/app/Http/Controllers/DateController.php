<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DateController extends Controller
{
    public function index (Request $request)
    {
        $owner = new \App\Owner();

        $owner->name = $request['name'];
        $owner->tel = $request['tel'];
        $owner->car_name = $request['car_name'];
        $owner->menutype = $request['menutype'];
        $owner->car_number = $request['car_number'];

        $owner->save();

        return view('date', compact('owner'));
    }
}
