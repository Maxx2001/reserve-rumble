<?php

namespace App\Http\Controllers;

use JsonException;
use Inertia\Inertia;
use Inertia\Response;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Exceptions\Request\FatalRequestException;
use App\Http\Intergrations\MoviesDatabase\Requests\GetGenres;
use App\Http\Intergrations\MoviesDatabase\MoviesDatabaseConnector;
use App\Http\Intergrations\MoviesDatabase\Requests\GetTopBoxofficeBasedOnGenre;

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
                'genres' => $genres,
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
        $topBoxofficeBasedOnGenre = new GetTopBoxofficeBasedOnGenre($genre);

        $media = $this->moviesDatabaseConnector->send($topBoxofficeBasedOnGenre)->object();

        return Inertia::render('Media/MediaCollectionPage',
            [
                'pageTitle'       => $genre,
                'mediaCollection' => $media,
            ]
        );
    }
}
