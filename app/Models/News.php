<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'photos';

    public $timestamps = 'false';

    protected $filable = [

                'title',
                'text',
                'date',
                'author',
    ];
}
