<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    /**
     * Table associée au modèle
     * 
     * @var string
     */
    protected $table = 'shows';
    
    /**
     * Attributs assignables en masse
     * 
     * @var array
     */
    protected $fillable = [
      'title',
      'poster_url',
      'location_id',
      'bookable',
      'price',
    ];
    
}
