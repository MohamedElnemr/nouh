<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class PagSix extends Model
{
    use HasFactory;
    use HasApiTokens, HasFactory, Notifiable;



    protected $fillable = [
        'economical',
        'average',
        'vip',
        'ultra_vip',
        'super_ultra_vip',
        'electricity',
        'sewer',
        'paints',
        'bishop',
        'ceramic',
        'alumetal',
        'decoration',
        'doors',
        'sound_system',
        'freon_pipes',




    ];





}
