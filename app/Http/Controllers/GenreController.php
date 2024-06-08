<?php

namespace App\Http\Controllers;

use JsonException;
use Inertia\Inertia;
use Inertia\Response;
use App\Http\Resources\GenreResource;
use Saloon\Exceptions\Request\RequestException;
use App\Http\Resources\MediaCollectionResource;
use Saloon\Exceptions\Request\FatalRequestException;
use App\Http\Intergrations\MoviesDatabase\Requests\GetGenres;
use App\Http\Intergrations\MoviesDatabase\MoviesDatabaseConnector;
use App\Http\Intergrations\MoviesDatabase\Requests\GetTopBoxOfficeBasedOnGenre;

class GenreController extends Controller
{
    public MoviesDatabaseConnector $moviesDatabaseConnector;

    public function __construct()
    {
        $this->moviesDatabaseConnector = new MoviesDatabaseConnector();
    }

    /**
     * @throws FatalRequestException
     * @throws RequestException
     * @throws JsonException
     */
    public function index(): Response
    {
        $getGenres = new GetGenres();

        $genres = $this->moviesDatabaseConnector->send($getGenres)->object();

        // The first genre result is just 'null'
        unset($genres->results[0]);

        return Inertia::render('Genres/GenresIndex',
            [
                'genres' => $genres->results,
            ]
        );
    }

    /**
     * @throws FatalRequestException
     * @throws RequestException
     * @throws JsonException
     */
    public function show(string $genre): Response
    {
        $topBoxOfficeBasedOnGenre = new GetTopBoxOfficeBasedOnGenre($genre);

        $media = $this->moviesDatabaseConnector->send($topBoxOfficeBasedOnGenre)->object();

        return Inertia::render('Media/MediaIndex',
            [
                'pageTitle'       => $genre,
                'mediaCollection' => MediaCollectionResource::collection($media->results),
            ]
        );
    }
}
