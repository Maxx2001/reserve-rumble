<?php

namespace App\Http\Intergrations\MoviesDatabase\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetTopBoxoffice extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/titles';
    }

    protected function defaultQuery(): array
    {
        return [
            'list'  => 'top_boxoffice_200',
            'limit' => '24',
        ];
    }
}
