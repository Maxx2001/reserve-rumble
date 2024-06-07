<?php

namespace App\Http\Controllers;

use JsonException;
use Inertia\Inertia;
use Inertia\Response;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Exceptions\Request\FatalRequestException;
use App\Http\Intergrations\MoviesDatabase\Requests\GetMedia;
use App\Http\Intergrations\MoviesDatabase\MoviesDatabaseConnector;

class MediaController extends Controller
{
    /**
     * @throws FatalRequestException
     * @throws RequestException
     * @throws JsonException
     */
    public function show(string $mediaId): Response
    {
        $moviesDatabaseConnector = new MoviesDatabaseConnector();
        $getMedia                = new GetMedia($mediaId);

        $media = $moviesDatabaseConnector->send($getMedia)->object();

        return Inertia::render('Media/MediaShow',
            [
                'media' => $media,
            ]
        );
    }
}
