<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCollectionRequest extends FormRequest
{
	public function rules(): array
	{
		return [
			'name' => ['sometimes', 'string', 'max:50'],
		];
	}
}
