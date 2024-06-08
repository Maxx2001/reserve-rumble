<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MediaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'mediaId'         => $this->id,
            'primaryImageUrl' => $this->primaryImage?->url,
            'title'           => $this->titleText->text,
            'captionText'     => $this->primaryImage?->caption->plainText,
            'ratingsSummary'  => $this->ratingsSummary !== null ? [
                'aggregateRating' => $this->ratingsSummary->aggregateRating,
                'voteCount'       => $this->ratingsSummary->voteCount,
            ] : null,
            'plot'            => $this->plot?->plotText->plainText,
            'episodes'        => $this->episodes !== null ? [
                'episodeCount' => $this->episodes->episodes->total,
                'seasonCount'  => count($this->episodes->seasons),
            ] : null,
            'releaseYear'     => $this->releaseYear?->year,
            'genres'          => $this->genres !== null ? collect($this->genres->genres)->pluck('text') : null,
        ];
    }
}
