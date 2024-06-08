<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class User
 *
 * @property int         $id
 * @property string      $name
 * @property string      $email
 * @property string|null $email_verified_at
 * @property string      $password
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 */
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guarded = [];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password'          => 'hashed',
        ];
    }

    public function media(): belongsToMany
    {
        return $this->belongsToMany(Media::class)->withPivot('status')->withTimestamps();
    }

    public function watchList(): belongsToMany
    {
        return $this->media()->wherePivot('status', 'watchlist');
    }

    public function getMediaStatus(string $mediaId): ?Pivot
    {
        $media = $this->belongsToMany(Media::class)
            ->where('media.media_id', '=', $mediaId)
            ->withPivot('status')
            ->first(); // Get only the first matching record

        return $media?->pivot ?? null;
    }
}
