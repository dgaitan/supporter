<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Ticket Model
 * 
 * Represents a support ticket in the system.
 * Tickets can be assigned to users, have different priorities and types,
 * and can be resolved with resolution descriptions.
 * 
 * @property int $id
 * @property string $title
 * @property string $ticket_number
 * @property string|null $description
 * @property int|null $status_id
 * @property bool $is_resolved
 * @property \Carbon\Carbon|null $resolved_at
 * @property int|null $resolved_by
 * @property string|null $resolution_description
 * @property int $priority
 * @property string|null $type
 * @property int|null $assigned_to
 * @property array|null $custom_data
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $deleted_by
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * 
 * @property-read Status|null $status
 * @property-read User|null $creator
 * @property-read User|null $updater
 * @property-read User|null $deleter
 * @property-read User|null $resolver
 * @property-read User|null $assignedUser
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Comment> $comments
 */
class Ticket extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'ticket_number',
        'description',
        'status_id',
        'is_resolved',
        'resolved_at',
        'resolved_by',
        'resolution_description',
        'priority',
        'type',
        'assigned_to',
        'custom_data',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'is_resolved' => 'boolean',
        'resolved_at' => 'datetime',
        'priority' => 'integer',
        'status_id' => 'integer',
        'resolved_by' => 'integer',
        'assigned_to' => 'integer',
        'created_by' => 'integer',
        'updated_by' => 'integer',
        'deleted_by' => 'integer',
        'custom_data' => 'array',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    /**
     * Get the status of this ticket.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }

    /**
     * Get the user who created this ticket.
     */
    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * Get the user who last updated this ticket.
     */
    public function updater(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    /**
     * Get the user who deleted this ticket.
     */
    public function deleter(): BelongsTo
    {
        return $this->belongsTo(User::class, 'deleted_by');
    }

    /**
     * Get the user who resolved this ticket.
     */
    public function resolver(): BelongsTo
    {
        return $this->belongsTo(User::class, 'resolved_by');
    }

    /**
     * Get the user assigned to this ticket.
     */
    public function assignedUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }

    /**
     * Get all comments for this ticket.
     */
    public function comments(): MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
