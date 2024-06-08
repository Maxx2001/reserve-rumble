<?php

namespace Database\Seeders;

use App\Models\Media;
use App\Enums\MediaStatus;
use Illuminate\Database\Seeder;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mediaItems = [
            [
                'media_id' => 'tt0076759',
                'title' => 'Star Wars: Episode IV - A New Hope',
                'caption_text' => 'Alec Guinness, Harrison Ford, Anthony Daniels, Carrie Fisher, Mark Hamill, James Earl Jones, Peter Cushing, David Prowse, Kenny Baker, and Peter Mayhew in Star Wars (1977)',
                'image_url' => 'https://m.media-amazon.com/images/M/MV5BNzVlY2MwMjktM2E4OS00Y2Y3LWE3ZjctYzhkZGM3YzA1ZWM2XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg'
            ],
            [
                'media_id' => 'tt0121766',
                'title' => 'Star Wars: Episode III - Revenge of the Sith',
                'caption_text' => 'Samuel L. Jackson, Ewan McGregor, Natalie Portman, Frank Oz, Ian McDiarmid, and Hayden Christensen in Star Wars: Episode III - Revenge of the Sith (2005)',
                'image_url' => 'https://m.media-amazon.com/images/M/MV5BNTc4MTc3NTQ5OF5BMl5BanBnXkFtZTcwOTg0NjI4NA@@._V1_.jpg'
            ],
            [
                'media_id' => 'tt0121765',
                'title' => 'Star Wars: Episode II - Attack of the Clones',
                'caption_text' => 'Samuel L. Jackson, Ewan McGregor, Natalie Portman, Anthony Daniels, Frank Oz, Kenny Baker, Hayden Christensen, and Temuera Morrison in Star Wars: Episode II - Attack of the Clones (2002)',
                'image_url' => 'https://m.media-amazon.com/images/M/MV5BMDAzM2M0Y2UtZjRmZi00MzVlLTg4MjEtOTE3NzU5ZDVlMTU5XkEyXkFqcGdeQXVyNDUyOTg3Njg@._V1_.jpg'
            ],
            [
                'media_id' => 'tt0120915',
                'title' => 'Star Wars: Episode I - The Phantom Menace',
                'caption_text' => 'Ewan McGregor, Natalie Portman, Anthony Daniels, Liam Neeson, Jake Lloyd, Kenny Baker, Ahmed Best, and Ray Park in Star Wars: Episode I - The Phantom Menace (1999)',
                'image_url' => 'https://m.media-amazon.com/images/M/MV5BYTRhNjcwNWQtMGJmMi00NmQyLWE2YzItODVmMTdjNWI0ZDA2XkEyXkFqcGdeQXVyNTAyODkwOQ@@._V1_.jpg'
            ],
            [
                'media_id' => 'tt0120737',
                'title' => 'The Lord of the Rings: The Fellowship of the Ring',
                'caption_text' => 'Liv Tyler, Sean Astin, Sean Bean, Elijah Wood, Cate Blanchett, Viggo Mortensen, Ian McKellen, Orlando Bloom, Billy Boyd, Dominic Monaghan, and John Rhys-Davies in The Lord of the Rings: The Fellowship of the Ring (2001)',
                'image_url' => 'https://m.media-amazon.com/images/M/MV5BN2EyZjM3NzUtNWUzMi00MTgxLWI0NTctMzY4M2VlOTdjZWRiXkEyXkFqcGdeQXVyNDUzOTQ5MjY@._V1_.jpg'
            ],
            [
                'media_id' => 'tt0167260',
                'title' => 'The Lord of the Rings: The Return of the King',
                'caption_text' => 'Liv Tyler, Sean Astin, Elijah Wood, Viggo Mortensen, Ian McKellen, and Andy Serkis in The Lord of the Rings: The Return of the King (2003)',
                'image_url' => 'https://m.media-amazon.com/images/M/MV5BNzA5ZDNlZWMtM2NhNS00NDJjLTk4NDItYTRmY2EwMWZlMTY3XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg'
            ],
            [
                'media_id' => 'tt0167261',
                'title' => 'The Lord of the Rings: The Two Towers',
                'caption_text' => 'Liv Tyler, Sean Astin, Christopher Lee, Elijah Wood, Viggo Mortensen, Miranda Otto, Ian McKellen, Orlando Bloom, John Rhys-Davies, and Andy Serkis in The Lord of the Rings: The Two Towers (2002)',
                'image_url' => 'https://m.media-amazon.com/images/M/MV5BZGMxZTdjZmYtMmE2Ni00ZTdkLWI5NTgtNjlmMjBiNzU2MmI5XkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_.jpg'
            ],
            [
                'media_id' => 'tt0198781',
                'title' => 'Monsters, Inc.',
                'caption_text' => 'Billy Crystal and John Goodman in Monsters, Inc. (2001)',
                'image_url' => 'https://m.media-amazon.com/images/M/MV5BMTY1NTI0ODUyOF5BMl5BanBnXkFtZTgwNTEyNjQ0MDE@._V1_.jpg'
            ],
            [
                'media_id' => 'tt0241527',
                'title' => 'Harry Potter and the Sorcerer\'s Stone',
                'caption_text' => 'Robbie Coltrane, Warwick Davis, Richard Harris, Rupert Grint, Daniel Radcliffe, Harry Taylor, and Emma Watson in Harry Potter and the Sorcerer\'s Stone (2001)',
                'image_url' => 'https://m.media-amazon.com/images/M/MV5BNjQ3NWNlNmQtMTE5ZS00MDdmLTlkZjUtZTBlM2UxMGFiMTU3XkEyXkFqcGdeQXVyNjUwNzk3NDc@._V1_.jpg'
            ],
            [
                'media_id' => 'tt0295297',
                'title' => 'Harry Potter and the Chamber of Secrets',
                'caption_text' => 'Rupert Grint, Daniel Radcliffe, and Emma Watson in Harry Potter and the Chamber of Secrets (2002)',
                'image_url' => 'https://m.media-amazon.com/images/M/MV5BMTcxODgwMDkxNV5BMl5BanBnXkFtZTYwMDk2MDg3._V1_.jpg'
            ]
        ];

        foreach ($mediaItems as $item) {
            Media::updateOrCreate(
                [
                    'media_id' => $item['media_id'],
                ],
                [
                    'title'        => $item['title'],
                    'caption_text' => $item['caption_text'],
                    'image_url'    => $item['image_url'],
                ]
            );
        }
    }
}
