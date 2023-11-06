<?php

namespace App\JsonApi\V1\Urls;

use Illuminate\Validation\Rule;
use LaravelJsonApi\Laravel\Http\Requests\ResourceRequest;
use LaravelJsonApi\Validation\Rule as JsonApiRule;

class UrlRequest extends ResourceRequest
{

    /**
     * Get the validation rules for the resource.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'url' => ['required', 'string', 'url', Rule::unique('urls', 'url')]
        ];
    }

}
