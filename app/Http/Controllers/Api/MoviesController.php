<?php

namespace App\Http\Controllers\Api;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Transformers\MovieTransformer;

class MoviesController extends Controller
{
    public function index()
    {
        return $this->response->collection(Movie::all(), new MovieTransformer());
    }
}
