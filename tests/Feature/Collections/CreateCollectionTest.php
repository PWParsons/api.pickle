<?php

use function Pest\Laravel\assertDatabaseHas;

test('it can create a collection', function () {
    $this
        ->postJson(route('collections.store'), [
            'name' => 'skateboards',
        ])
        ->assertCreated()
        ->assertJson([
            'data' => [
                'name' => 'skateboards',
                'created_at' => now()->setMilliseconds(0)->toJson(),
                'updated_at' => now()->setMilliseconds(0)->toJson(),
            ],
        ]);

    assertDatabaseHas('collections', [
        'name' => 'skateboards',
    ]);
});

test('the name is required', function () {
    $this
        ->postJson(route('collections.store'))
        ->assertUnprocessable()
        ->assertInvalid(['name' => 'The name field is required.']);
});

test('the name must be a string', function () {
    $this
        ->postJson(route('collections.store'), [
            'name' => 1,
        ])
        ->assertUnprocessable()
        ->assertInvalid(['name' => 'The name must be a string.']);
});

test('the name must not exceed 50 chars', function () {
    $this
        ->postJson(route('collections.store'), [
            'name' => str_repeat('x', 51),
        ])
        ->assertUnprocessable()
        ->assertInvalid([
            'name' => 'The name must not be greater than 50 characters.',
        ]);
});
