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
     * Attempt to retrieve all nodes (optionally of a given node type).
     */
    public static function all(?string $node_type = null): Collection
    {
        return Group::all();
    }
}
