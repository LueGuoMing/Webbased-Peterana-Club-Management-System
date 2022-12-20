<?php

namespace App\Enums;

use PhpParser\Node\Expr\Cast\String_;

enum RoomStatus: String
{
    case Pending = 'pending';
    case Avaliable = 'avaliable';
    case Unavaliable = 'unavaliable';
}