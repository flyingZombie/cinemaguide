<?php

namespace App\Transformers;

use App\Models\Movie;
use League\Fractal\TransformerAbstract;

class MovieTransformer extends TransformerAbstract
{
    public function transform(Movie $movie)
    {
        return [
            'id' => $movie->mov_id,
            'title' => $movie->mov_title,
            'summary' => $movie->mov_summary,
        ];
    }
}
