<?php


use App\Models\Collection;

test('it can get a listing of collections', function () {
    $collections = Collection::factory()
        ->count(3)
        ->create();

    $this
        ->getJson(route('collections.index'))
        ->assertOk()
        ->assertJson([
            'data' => [
                [
                    'name' => $collections->get(0)->name,
                    'created_at' => $collections->get(0)->created_at->setMilliseconds(0)->toJson(),
                    'updated_at' => $collections->get(0)->updated_at->setMilliseconds(0)->toJson(),
                ],
                [
                    'name' => $collections->get(1)->name,
                    'created_at' => $collections->get(1)->created_at->setMilliseconds(0)->toJson(),
                    'updated_at' => $collections->get(1)->updated_at->setMilliseconds(0)->toJson(),
                ],
                [
                    'name' => $collections->get(2)->name,
                    'created_at' => $collections->get(2)->created_at->setMilliseconds(0)->toJson(),
                    'updated_at' => $collections->get(2)->updated_at->setMilliseconds(0)->toJson(),
                ],
            ],
        ]);
});
