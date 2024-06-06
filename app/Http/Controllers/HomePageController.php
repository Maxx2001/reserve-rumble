<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Exceptions\Request\FatalRequestException;
use App\Http\Intergrations\MoviesDatabase\Requests\GetUpcomingMedia;
use App\Http\Intergrations\MoviesDatabase\MoviesDatabaseConnector;

class HomePageController extends Controller
{
    /**
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function __invoke(): Response
    {
        $moviesDatabaseConnector = new MoviesDatabaseConnector();
        $getUpcomingMedia      = new GetUpcomingMedia();

        $upcomingMedia = $moviesDatabaseConnector->send($getUpcomingMedia)->object();

        return Inertia::render('Welcome',
            [
                'upcomingMedia' => $upcomingMedia,
            ]
        );
    }
}
