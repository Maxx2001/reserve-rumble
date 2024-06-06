<?php

namespace App\Http\Intergrations\MoviesDatabase;

use Saloon\Http\Connector;
use Saloon\Http\Auth\MultiAuthenticator;
use Saloon\Http\Auth\HeaderAuthenticator;

class MoviesDatabaseConnector extends Connector
{
    public function resolveBaseUrl(): string
    {
        return config('services.movies_database.base_url');
    }

    protected function defaultHeaders(): array
    {
        return [
            'Content-Type' => 'application/json',
            'Accept'       => 'application/json',
        ];
    }

    protected function defaultAuth(): MultiAuthenticator
    {
        return new MultiAuthenticator(
            new HeaderAuthenticator(config('services.movies_database.x_api_host'), 'x-rapidapi-host'),
            new HeaderAuthenticator(config('services.movies_database.x_api_key'), 'x-rapidapi-key'),

        );
    }
}

