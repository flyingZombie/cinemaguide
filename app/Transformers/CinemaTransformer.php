<?php

namespace App\Transformers;

use App\Models\Cinema;
use League\Fractal\TransformerAbstract;

class CinemaTransformer extends TransformerAbstract
{
    public function transform(Cinema $cinema)
    {
        return [
            'id' => $cinema->id,
            'name' => $cinema->name,
            'address' => $cinema->address,
            'lat' => $cinema->lat,
            'lng' => $cinema->lng,
        ];
    }
}
