<?php

namespace App\Http\Controllers;

use JsonException;
use Inertia\Inertia;
use Inertia\Response;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Exceptions\Request\FatalRequestException;
use App\Http\Intergrations\MoviesDatabase\Requests\GetMedia;
use App\Http\Intergrations\MoviesDatabase\Requests\GetSeries;
use App\Http\Intergrations\MoviesDatabase\MoviesDatabaseConnector;

class MediaController extends Controller
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
    public function show(string $mediaId): Response
    {
        $getMedia = new GetMedia($mediaId);

        $media = $this->moviesDatabaseConnector->send($getMedia)->object();

        return Inertia::render('Media/MediaShow',
            [
                'media' => $media,
            ]
        );
    }

    /**
     * @throws FatalRequestException
     * @throws RequestException
     * @throws JsonException
     */
    public function series(): Response
    {
        $getSeries = new GetSeries();

        $series = $this->moviesDatabaseConnector->send($getSeries)->object();

        return Inertia::render('MediaCollectionPage',
            [
                'pageTitle'       => 'Series',
                'mediaCollection' => $series,
            ]
        );
    }

    //    The API I was using for this project didn't return any movies.
    //    /**
    //     * @throws FatalRequestException
    //     * @throws RequestException
    //     * @throws JsonException
    //     */
    //    public function movies(): Response
    //    {
    //        $getMovies = new GetMovies();
    //
    //        $movies = $this->moviesDatabaseConnector->send($getMovies)->object();
    //
    //        return Inertia::render('MediaCollectionPage',
    //            [
    //                'pageTitle' => 'Movies',
    //                'mediaCollection' => $movies,
    //            ]
    //        );
    //    }
}
