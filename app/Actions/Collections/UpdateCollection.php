<?php

namespace App\Actions\Collections;

use App\Http\Requests\UpdateCollectionRequest;
use App\Models\Collection;
use Illuminate\Http\Response;

class UpdateCollection
{
    public function __invoke(UpdateCollectionRequest $request, Collection $collection): Response
    {
        $collection->update($request->validated());

        return response()->noContent();
    }
}
