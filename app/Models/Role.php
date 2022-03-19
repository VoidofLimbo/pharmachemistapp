<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public const DEFAULT_ROLE = 3;  // GUEST
    public const SUPER_ADMIN = 1;   // DEV
}
