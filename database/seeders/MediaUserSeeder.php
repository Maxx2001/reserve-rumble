<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Media;
use Illuminate\Database\Seeder;

class MediaUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user  = User::first();
        $media = Media::all()->pluck('id')->toArray();

        foreach ($media as $id) {
            $user->media()->attach($id, ['status' => 'watchlist']);
        }
    }
}
