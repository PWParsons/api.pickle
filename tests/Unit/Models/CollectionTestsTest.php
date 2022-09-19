<?php

use App\Models\Collection;

use App\Models\Concerns\HasUuid;

use function PHPUnit\Framework\assertContains;
use function PHPUnit\Framework\assertSame;

test('it has a uuid', function () {
    assertContains(
        HasUuid::class,
        class_uses(Collection::class)
    );
});

test('it has the correct fillable attributes', function () {
    $attributes = [
        'name',
    ];

    assertSame($attributes, (new Collection())->getFillable());
});
