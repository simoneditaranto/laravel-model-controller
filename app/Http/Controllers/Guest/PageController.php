<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function index() {

        $movies = Movie::all();
        $moviesThumb = config("db.thumb");

        $votes = $this->getStars($movies);

        // dd($votes[3]);

        return view('home', compact('movies', 'moviesThumb', 'votes'));
    }

    private function getStars($movies) {
        $votes = [];
        $vote = 0;
        foreach($movies as $movie) {
            $vote = intval($movie->vote / 2);
            array_push($votes, $vote);
        }

        return $votes;
         
    }

}
