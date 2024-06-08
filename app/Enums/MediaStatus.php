<?php

namespace App\Enums;

enum MediaStatus: string
{
    case WATCHLIST = 'watchlist';
    case WATCHING = 'watching';
    case WATCHED = 'watched';
}
