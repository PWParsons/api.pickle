<?php

namespace App\Actions\Collections;

use App\Http\Resources\CollectionResource;
use App\Models\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class GetAllCollections
{
    public function __invoke(Request $request): AnonymousResourceCollection
    {
        $collections = Collection::fastPaginate();

        return CollectionResource::collection($collections);
    }
}
