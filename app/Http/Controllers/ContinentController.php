<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ContinentController extends Controller
{
    //
    public function Europe()
    {
        $europe_countries = DB::select('SELECT * FROM `country` WHERE `continent` = ?', [
            'europe'
        ]);


        $europe_view = view('continents/europe',[
            'countries' => $europe_countries,
        ]);


        return $europe_view;
}
}
