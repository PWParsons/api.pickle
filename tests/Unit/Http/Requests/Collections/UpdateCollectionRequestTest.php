<?php

use App\Http\Requests\UpdateCollectionRequest;
use function PHPUnit\Framework\assertSame;

test('it has the correct validation rules', function () {
    $request = new UpdateCollectionRequest();

    $rules = [
        'name' => ['sometimes', 'string', 'max:50'],
    ];

    assertSame($rules, $request->rules());
});
