<?php

use App\Http\Requests\CreateCollectionRequest;

use function PHPUnit\Framework\assertSame;

test('it has the correct validation rules', function () {
    $request = new CreateCollectionRequest();

    $rules = [
        'name' => ['required', 'string', 'max:50'],
    ];

    assertSame($rules, $request->rules());
});
