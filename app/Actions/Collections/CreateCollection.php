<?php

namespace App\Actions\Collections;

use App\Http\Requests\CreateCollectionRequest;
use App\Http\Resources\CollectionResource;
use App\Models\Collection;

class CreateCollection
{
    public function __invoke(CreateCollectionRequest $request): CollectionResource
    {
        $collection = Collection::create($request->validated());

        return CollectionResource::make($collection);
    }
}
