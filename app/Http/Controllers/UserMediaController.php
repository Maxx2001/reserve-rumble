<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\User;
use Inertia\Response;
use App\Models\Media;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreMediaUserRequest;
use App\Http\Resources\UserMediaCollectionResource;

class UserMediaController extends Controller
{
    public function index(): Response
    {
        /**
         * @var User $user
         * */
        $user = Auth::user();

        $watchList = $user->watchList()->get();

        return Inertia::render('Media/MediaIndex',
            [
                'pageTitle'       => 'Watchlist',
                'mediaCollection' => UserMediaCollectionResource::collection($watchList),
            ]
        );
    }

    public function store(StoreMediaUserRequest $request): RedirectResponse
    {
        $media = Media::updateOrCreate(
            [
                'media_id' => $request['mediaId'],
            ],
            [
                'title'        => $request['title'],
                'caption_text' => $request['captionText'],
                'image_url'    => $request['imageUrl'],
            ]
        );

        Auth::user()->media()->attach($media->id);

        return redirect()->back();
    }

    public function destroy(string $mediaId): RedirectResponse
    {
        Auth::user()->media()->detach($mediaId);

        return redirect()->back();
    }
}
