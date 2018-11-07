<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public $primaryKey = 'user_id';

    public $table = 'user_profiles';
}
