<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    //
    public function index()
    {
        // the logic of your page will be here
        $top_rated = view('/movies/top_rated');

        $weekly_movie = view('/movies/weekly_movie');

        $main = view('/movies/main',[
            'top_rated' => $top_rated,
            'weekly_movie' => $weekly_movie,
        ]);

        $header = view('movies/header');
        $footer = view('movies/footer');

        $html = view('movies/html', [
            'header' => $header,
            'content' => $main,
            'footer' => $footer

        ]);


        return $html;

        
 
        // as response we will return/include the contents of the file /resources/views/index.php

    }

    public function detail()
    {
        $movie_title = 'Venom';

        $info_view = view('movies/detail/info',[
            'title' => $movie_title
        ]);

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
