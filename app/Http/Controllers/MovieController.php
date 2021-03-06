<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
    public function detail()
    {
        $info_view = view('movies/detail/info');
        $cast_view = view('movies/detail/cast');
        $trailer_view = view('movies/detail/trailer');

        $main_view = view('movies/detail/main', [
            'info' => $info_view,
            'cast' => $cast_view,
            'trailer' => $trailer_view
        ]);

        $html_wrapper = view('movies/html', [
            'content' => $main_view,
            'header' => view('movies/header'),
            'footer' => view('movies/footer')
        ]);

        return $html_wrapper;

    }
}
