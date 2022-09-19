<?php


use App\Models\Collection;

use function Pest\Laravel\assertDatabaseMissing;

test('it can delete a specified collection', function () {
    $collection = Collection::factory()->create();

    $this
        ->deleteJson(route('collections.destroy', $collection))
        ->assertNoContent();

    assertDatabaseMissing('collections', [
        'id' => $collection->id,
    ]);
});
