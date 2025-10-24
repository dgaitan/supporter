<?php

namespace App\Observers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CategoryObserver
{

    public function creating(Category $category): void
    {
        $category->created_by = $this->getUser()?->id;
    }

    public function updating(Category $category): void
    {
        $category->updated_by = $this->getUser()?->id;
    }

    public function deleting(Category $category): void
    {
        $category->deleted_by = $this->getUser()?->id;
    }

    /**
     * Handle the Category "created" event.
     */
    public function created(Category $category): void
    {
        //
    }

    /**
     * Handle the Category "updated" event.
     */
    public function updated(Category $category): void
    {
        //
    }

    /**
     * Handle the Category "deleted" event.
     */
    public function deleted(Category $category): void
    {
        //
    }

    /**
     * Handle the Category "restored" event.
     */
    public function restored(Category $category): void
    {
        //
    }

    /**
     * Handle the Category "force deleted" event.
     */
    public function forceDeleted(Category $category): void
    {
        //
    }

    /**
     * Get the current user
     *
     * @return User|null
     */
    public function getUser(): ?User
    {
        return Auth::user();
    }
}
