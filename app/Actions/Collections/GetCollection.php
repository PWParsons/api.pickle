<?php

namespace App\Actions\Collections;

use App\Http\Resources\CollectionResource;
use App\Models\Collection;

class GetCollection
{
    public function __invoke(Collection $collection): CollectionResource
    {
        return CollectionResource::make($collection);
    }
}
