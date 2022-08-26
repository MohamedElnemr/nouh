<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class PageTree extends Model
{
    use HasFactory;
    use HasApiTokens, HasFactory, Notifiable;


    protected $fillable = [
        'area',
        'room',
        'bathroom',
        'nots'

    ];
}
