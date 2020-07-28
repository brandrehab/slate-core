<?php

declare(strict_types=1);

namespace Slate\Managers;

use Slate\Entities\Field;
use Illuminate\Database\Eloquent\Collection;

/**
 * Manage retrieval of one or more field entities.
 */
class FieldManager
{
    /**
     * Attempt to retrieve a field by the id.
     */
    public static function find(int $id): Field
    {
        return Field::findOrFail($id);
    }
}
