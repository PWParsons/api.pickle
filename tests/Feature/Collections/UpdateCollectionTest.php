<?php

use App\Models\Collection;
use function Pest\Laravel\assertDatabaseHas;

test('it can update a collection', function () {
    $collection = Collection::factory()->create();

    $this
        ->patchJson(route('collections.update', $collection), [
            'name' => 'skateboards',
        ])
        ->assertNoContent();

    assertDatabaseHas('collections', [
        'id' => $collection->id,
        'name' => 'skateboards',
    ]);
});

test('the name must be a string', function () {
    $collection = Collection::factory()->create();

    $this
        ->patchJson(route('collections.update', $collection), [
            'name' => 1,
        ])
        ->assertUnprocessable()
        ->assertInvalid(['name' => 'The name must be a string.']);
});

test('the name must not exceed 50 chars', function () {
    $collection = Collection::factory()->create();

    $this
        ->patchJson(route('collections.update', $collection), [
            'name' => str_repeat('x', 51),
        ])
        ->assertUnprocessable()
        ->assertInvalid([
            'name' => 'The name must not be greater than 50 characters.',
        ]);
});
