<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Integration extends Model
{
    public $timestamps = true;
    use HasFactory;

    protected $fillable = [
        "name",
        "client_id",
        "client_secret",
        "partner_id",
        "auth_code",
        "auth_token",
        "auth_expires",
        "place_id",
        "user_id",
    ];
}
