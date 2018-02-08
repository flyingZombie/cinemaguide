<?php

namespace App\Http\Controllers\Api;

use App\Models\Cinema;
use Illuminate\Http\Request;
use App\Transformers\CinemaTransformer;



class CinemasController extends Controller
{
    public function index()
    {
        return $this->response->collection(Cinema::all(), new CinemaTransformer());
    }
}
