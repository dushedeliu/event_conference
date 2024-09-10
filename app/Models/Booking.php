<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static create(array $array)
 * @method static where(string $string, $id)
 */
class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'event_id', 'booking_date', 'ticket_id', 'ticket_quantities', 'total_price',
    ];

    protected $casts = [
        'booking_date'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}
