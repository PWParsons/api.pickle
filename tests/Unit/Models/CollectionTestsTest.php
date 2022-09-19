<?php

use App\Models\Collection;

use function PHPUnit\Framework\assertSame;

test('it has the correct fillable attributes', function () {
    $attributes = [
        'name',
    ];

    assertSame($attributes, (new Collection())->getFillable());
});
