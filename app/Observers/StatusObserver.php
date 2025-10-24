<?php

namespace App\Observers;

use App\Models\Status;

class StatusObserver extends BaseObserver
{

    public function creating(Status $status): void
    {
        $status->created_by = $this->getCurrentUser()?->id;
    }

    public function updating(Status $status): void
    {
        $status->updated_by = $this->getCurrentUser()?->id;
    }

    public function deleting(Status $status): void
    {
        $status->deleted_by = $this->getCurrentUser()?->id;
    }

    /**
     * Handle the Status "created" event.
     */
    public function created(Status $status): void
    {
        //
    }

    /**
     * Handle the Status "updated" event.
     */
    public function updated(Status $status): void
    {
        //
    }

    /**
     * Handle the Status "deleted" event.
     */
    public function deleted(Status $status): void
    {
        //
    }

    /**
     * Handle the Status "restored" event.
     */
    public function restored(Status $status): void
    {
        //
    }

    /**
     * Handle the Status "force deleted" event.
     */
    public function forceDeleted(Status $status): void
    {
        //
    }
}
