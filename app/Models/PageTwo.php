<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class PageTwo extends Model
{
    use HasFactory;
    use HasApiTokens, HasFactory, Notifiable;


    protected $fillable = [
        'unit_type',
        'location',
        'compound',
        'compound_name',
        'page_one_id'

    ];

    public function PageOne()
    {
        return $this->belongsTo(PageOne::class);
    }


}
