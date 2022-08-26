<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Unit extends Model
{
    use HasFactory;
    use HasApiTokens, HasFactory, Notifiable;




    protected $table = 'units';
    public $timestamps = true;

    protected $fillable = [
     "email" ,
     "phone" ,
     "name",
     "unit_type" ,
     "location",
     "compound",
     "compound_name",
     "area",
     "room",
     "bathroom",
     "nots" ,
     'economical',
     'average',
     'vip',
     'ultra_vip',
     'super_ultra_vip',
     'red_bricks',
     'semi_finished',
     'Semi_finished_alumetal',
     'Personal',
     'rent',
     'Sale',
     'amount'
    ];
}
