<?php

use App\Http\Resources\CollectionResource;
use App\Models\Collection;

use function PHPUnit\Framework\assertSame;

test('it has the correct format', function () {
    $collection = Collection::factory()->create();

    $resource = (CollectionResource::make($collection))
        ->response()
        ->getData(true);

    assertSame([
        'data' => [
            'uuid' => $collection->uuid->toString(),
            'name' => $collection->name,
            'created_at' => $collection->created_at->toJson(),
            'updated_at' => $collection->updated_at->toJson(),
        ],
    ], $resource);
});
