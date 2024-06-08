<?php

namespace App\Http\Intergrations\MoviesDatabase\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetTopBoxOfficeBasedOnGenre extends Request
{
    protected Method $method = Method::GET;

    public function __construct(protected readonly string $genre)
    {
    }

    public function resolveEndpoint(): string
    {
        return '/titles';
    }

    protected function defaultQuery(): array
    {
        return [
            'genre' => $this->genre,
            'list'  => 'top_boxoffice_200',
            'limit' => '24',
        ];
    }
}
