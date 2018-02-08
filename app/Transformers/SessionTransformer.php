<?php

namespace App\Transformers;

use App\Models\Session;
use League\Fractal\TransformerAbstract;

class SessionTransformer extends TransformerAbstract
{
    public function transform(Session $session)
    {

        return [
            'id' => $session->id,
            'cinema_id' => $session->cinema_id,
            'movie_id' => $session->movie_id,
            //'show_time' => $session->show_time->toDateTimeString(), //convert bug
            'created_at' => $session->created_at->toDateTimeString(),
            'updated_at' => $session->updated_at->toDateTimeString(),
        ];
    }
}
