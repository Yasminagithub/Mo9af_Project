<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Nourriture;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Nourriture extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;
    protected $table = 'nourritures';

    protected $guarded=[];
}
