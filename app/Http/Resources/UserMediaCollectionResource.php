<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserMediaCollectionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'mediaId'         => $this->media_id,
            'primaryImageUrl' => $this->image_url,
            'title'           => $this->title,
            'captionText'     => $this->caption_text,
        ];
    }
}
