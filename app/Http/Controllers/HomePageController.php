<?php

namespace App\Http\Controllers;

use JsonException;
use Inertia\Inertia;
use Inertia\Response;
use Saloon\Exceptions\Request\RequestException;
use App\Http\Resources\MediaCollectionResource;
use Saloon\Exceptions\Request\FatalRequestException;
use App\Http\Intergrations\MoviesDatabase\MoviesDatabaseConnector;
use App\Http\Intergrations\MoviesDatabase\Requests\GetUpcomingMedia;

class HomePageController extends Controller
{
    /**
     * @throws FatalRequestException
     * @throws RequestException|JsonException
     */
    public function __invoke(): Response
    {
        $moviesDatabaseConnector = new MoviesDatabaseConnector();
        $getUpcomingMedia        = new GetUpcomingMedia();

        $upcomingMedia = $moviesDatabaseConnector->send($getUpcomingMedia)->object();

        return Inertia::render('Welcome',
            [
                'upcomingMedia' => MediaCollectionResource::collection($upcomingMedia->results),
            ]
        );
    }
}
