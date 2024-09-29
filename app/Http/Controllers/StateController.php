<?php

namespace App\Http\Controllers;

use App\Http\Resources\StateResource;
use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $states = State::paginate($request->per_page ?? 10);

        return $this->responseSucceed([
            'total' => $states->total(),
            'states' => StateResource::collection($states),
            'next' => $states->nextPageUrl() ?? null,
        ]);
    }
}
