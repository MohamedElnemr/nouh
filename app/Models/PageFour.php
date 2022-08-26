<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class PageFour extends Model
{
    use HasFactory;
    use HasApiTokens, HasFactory, Notifiable;



    protected $fillable = [
        'red_bricks',
        'semi_finished',
        'Semi_finished_alumetal',


    ];

}
