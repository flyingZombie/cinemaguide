<?php

namespace App\Http\Controllers\Api;

use App\Models\Session;
use Illuminate\Http\Request;
use App\Transformers\SessionTransformer;
use App\Http\Requests\Api\SessionRequest;

class SessionsController extends Controller
{
    public function store(SessionRequest $request, Session $session)
    {
        $session->fill($request->all());
        $session->save();

        return $this->response->item($session, new SessionTransformer())
            ->setStatusCode(201);
    }

        public function update(SessionRequest $request, Session $session)
    {
        //$this->authorize('update', $session);

        $session->update($request->all());
        return $this->response->item($session, new SessionTransformer());
    }
}
