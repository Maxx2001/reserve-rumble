<?php

namespace App\Http\Intergrations\MoviesDatabase\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetUpcomingMedia extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/titles/x/upcoming';
    }
}
