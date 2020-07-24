<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'photos';

    public $timestamps = 'false';
    
    protected $fillable = ['title', 
                            'date', 
                            'file', 
                        ];
}
