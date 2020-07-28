<?php

declare(strict_types=1);

namespace Slate\Managers;

use Slate\Entities\Group;
use Illuminate\Database\Eloquent\Collection;

/**
 * Manage retrieval of one or more group entities.
 */
class GroupManager
{
    /**
     * Attempt to retrieve all groups.
     */
    public static function all(): Collection
    {
        return Group::all();
    }

    /**
     * Attempt to retrieve a group by the id.
     */
    public static function find(int $id): Group
    {
        return Group::findOrFail($id);
    }
}
