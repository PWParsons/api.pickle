<?php

use App\Models\Collection;

test('it can get a specified collection', function () {
    $collection = Collection::factory()->create();

    $this
        ->getJson(route('collections.show', $collection))
        ->assertOk()
        ->assertJson([
            'data' => [
                'name' => $collection->name,
                'created_at' => $collection->created_at->setMilliseconds(0)->toJson(),
                'updated_at' => $collection->updated_at->setMilliseconds(0)->toJson(),
            ],
        ]);
});
