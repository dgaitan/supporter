<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Comment Model
 * 
 * Represents a comment that can be attached to various models (polymorphic).
 * Supports nested comments through parent-child relationships.
 * 
 * @property int $id
 * @property int|null $commentable_id
 * @property string|null $commentable_type
 * @property string|null $content
 * @property int|null $user_id
 * @property int|null $parent_id
 * @property bool $is_approved
 * @property bool $is_spam
 * @property bool $is_deleted
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * 
 * @property-read \Illuminate\Database\Eloquent\Model|null $commentable
 * @property-read User|null $user
 * @property-read Comment|null $parent
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Comment> $replies
 */
class Comment extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'commentable_id',
        'commentable_type',
        'content',
        'user_id',
        'parent_id',
        'is_approved',
        'is_spam',
        'is_deleted',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'commentable_id' => 'integer',
        'user_id' => 'integer',
        'parent_id' => 'integer',
        'is_approved' => 'boolean',
        'is_spam' => 'boolean',
        'is_deleted' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    /**
     * Get the commentable model (polymorphic relationship).
     */
    public function commentable(): MorphTo
    {
        return $this->morphTo();
    }

    /**
     * Get the user who made this comment.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the parent comment.
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Comment::class, 'parent_id');
    }

    /**
     * Get the reply comments.
     */
    public function replies(): HasMany
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
}
