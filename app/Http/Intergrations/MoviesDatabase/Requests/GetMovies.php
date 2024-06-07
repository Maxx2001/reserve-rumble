<?php

namespace App\Http\Intergrations\MoviesDatabase\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetMovies extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/titles';
    }

    protected function defaultQuery(): array
    {
        return [
            'list'  => 'most_pop_movies',
            'sort'  => 'year.decr',
            'limit' => '24',
        ];
    }
}
