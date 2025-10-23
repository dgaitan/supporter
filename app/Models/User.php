<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * User Model
 * 
 * Represents a user in the system with authentication capabilities.
 * Users can create, update, and delete various entities in the system.
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Carbon\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Category> $createdCategories
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Category> $updatedCategories
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Category> $deletedCategories
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Article> $createdArticles
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Article> $updatedArticles
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Article> $deletedArticles
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Status> $createdStatuses
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Status> $updatedStatuses
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Status> $deletedStatuses
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Ticket> $createdTickets
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Ticket> $updatedTickets
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Ticket> $deletedTickets
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Ticket> $resolvedTickets
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Ticket> $assignedTickets
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Comment> $comments
 */
class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Category relationships
    /**
     * Get the categories created by this user.
     */
    public function createdCategories(): HasMany
    {
        return $this->hasMany(Category::class, 'created_by');
    }

    /**
     * Get the categories updated by this user.
     */
    public function updatedCategories(): HasMany
    {
        return $this->hasMany(Category::class, 'updated_by');
    }

    /**
     * Get the categories deleted by this user.
     */
    public function deletedCategories(): HasMany
    {
        return $this->hasMany(Category::class, 'deleted_by');
    }

    // Article relationships
    /**
     * Get the articles created by this user.
     */
    public function createdArticles(): HasMany
    {
        return $this->hasMany(Article::class, 'created_by');
    }

    /**
     * Get the articles updated by this user.
     */
    public function updatedArticles(): HasMany
    {
        return $this->hasMany(Article::class, 'updated_by');
    }

    /**
     * Get the articles deleted by this user.
     */
    public function deletedArticles(): HasMany
    {
        return $this->hasMany(Article::class, 'deleted_by');
    }

    // Status relationships
    /**
     * Get the statuses created by this user.
     */
    public function createdStatuses(): HasMany
    {
        return $this->hasMany(Status::class, 'created_by');
    }

    /**
     * Get the statuses updated by this user.
     */
    public function updatedStatuses(): HasMany
    {
        return $this->hasMany(Status::class, 'updated_by');
    }

    /**
     * Get the statuses deleted by this user.
     */
    public function deletedStatuses(): HasMany
    {
        return $this->hasMany(Status::class, 'deleted_by');
    }

    // Ticket relationships
    /**
     * Get the tickets created by this user.
     */
    public function createdTickets(): HasMany
    {
        return $this->hasMany(Ticket::class, 'created_by');
    }

    /**
     * Get the tickets updated by this user.
     */
    public function updatedTickets(): HasMany
    {
        return $this->hasMany(Ticket::class, 'updated_by');
    }

    /**
     * Get the tickets deleted by this user.
     */
    public function deletedTickets(): HasMany
    {
        return $this->hasMany(Ticket::class, 'deleted_by');
    }

    /**
     * Get the tickets resolved by this user.
     */
    public function resolvedTickets(): HasMany
    {
        return $this->hasMany(Ticket::class, 'resolved_by');
    }

    /**
     * Get the tickets assigned to this user.
     */
    public function assignedTickets(): HasMany
    {
        return $this->hasMany(Ticket::class, 'assigned_to');
    }

    // Comment relationships
    /**
     * Get the comments made by this user.
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
