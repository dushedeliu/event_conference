<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static create(mixed $validated)
 * @method static latest()
 * @method static findOrFail(Event $event)
 * @method static whereDate()
 * @method static where(string $string, string $start)
 */
class Event extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'start_date',
        'end_date',
        'location',
        'pending_start_date',
        'pending_end_date',
        'status',
        'approved',
        'user_id'
    ];

    protected $dates = ['start_date', 'end_date'];


    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function attendees(): HasMany
    {
        return $this->hasMany(Attendee::class);
    }

    public function updateStatus(): void
    {
        if ($this->end_date < now()) {
            $this->status = 'ended';
        } else {
            $this->status = 'upcoming';
        }
        $this->save();
    }

    public function needsApprovalForUpdate(array $data): bool
    {
        return $this->start_date->format('Y-m-d') !== $data['start_date'] || $this->end_date->format('Y-m-d') !== $data['end_date'];
    }



}
