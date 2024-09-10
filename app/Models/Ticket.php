<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(int[] $array)
 * @method static where(string $string, $eventId)
 */
class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantity',
        'event_id'
    ];

    public function event(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}
