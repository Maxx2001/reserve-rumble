<?php

namespace App\Http\Intergrations\MoviesDatabase\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetMedia extends Request
{
    protected Method $method = Method::GET;

    public function __construct(protected readonly string $id)
    {
    }

    public function resolveEndpoint(): string
    {
        return '/titles/' . $this->id;
    }

    protected function defaultQuery(): array
    {
        return [
            'info' => 'base_info',
        ];
    }
}
