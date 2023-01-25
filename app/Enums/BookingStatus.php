<?php

namespace App\Enums;

use PhpParser\Node\Expr\Cast\String_;

enum BookingStatus: String
{
    case Pending = 'pending';
    case Approved = 'approved';
    case Rejected = 'rejected';
}