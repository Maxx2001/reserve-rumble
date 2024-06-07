<?php

namespace App\Http\Intergrations\MoviesDatabase\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetGenres extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/titles/utils/genres';
    }

    protected function defaultQuery(): array
    {
        return [
            'list'  => 'most_pop_movies',
        ];
    }
}
