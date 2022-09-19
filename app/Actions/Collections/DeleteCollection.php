<?php

namespace App\Actions\Collections;

use App\Models\Collection;
use Illuminate\Http\Response;

class DeleteCollection
{
    public function __invoke(Collection $collection): Response
    {
        $collection->delete();

        return response()->noContent();
    }
}
