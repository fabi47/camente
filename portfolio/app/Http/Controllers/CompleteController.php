<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class CompleteController extends Controller
{
    public function index (Request $request)
    {
        $dateStart = $request['date_start'];

        $owner = new \App\Owner();

        $owner->date_start = \Carbon\Carbon::parse($dateStart);
        $owner->updated_at = now();
        $owner->created_at = now();

        $owner->save();

        return view('complete');
    }
}
