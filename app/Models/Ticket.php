<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model
{
    use HasFactory , SoftDeletes;

    protected $fillable = [
        'name',
        'price',
        'quantity',
        'max_buy',
        'event_id',
    ];

    //relation to event
    public function event()
    {
      return $this->belongsTo(Event::class);
    }
}
