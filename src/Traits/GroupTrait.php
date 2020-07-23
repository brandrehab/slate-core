<?php

declare(strict_types=1);

namespace Slate\Traits;

use Slate\Entities\Text;
use Slate\Entities\Group;
use Slate\Entities\Field;
use Illuminate\Database\Eloquent\Collection;

/**
 * Trait for the retrieval of values associated with group fields.
 */
trait GroupTrait
{
    /**
     * Attempt to get a specific group if associated with the current node.
     */
    protected function getGroup(string $group_name): ?Group
    {
        return $this->nodetype->groups->firstWhere('name', $group_name);
    }

    /**
     * Get the field definitions associated with a specific group.
     */
    protected function getFields(Group $group): Collection
    {
        return $group->fields->sortBy('weight');
    }

    /**
     * Iterate over the field definitions of a specified group.
     */
    protected function getValues(Group $group): array
    {
        $fields = $this->getFields($group);

        foreach ($fields as $field) {
            $values[$field->name] = $this->getValue($group, $field);
        }

        return $values;
    }

    /**
     * Get values associated with a specified group and field.
     */
    protected function getValue(Group $group, Field $field): ?Collection
    {
        switch ($field->fieldtype->name) {
            case 'text':
                return $this->getText($group->id, $field->id, $this->id);
            default:
                return null;
        }
    }

    /**
     * Get values from a text field.
     */
    protected function getText(int $group_id, int $field_id, int $node_id): ?Collection
    {
        return Text::select('value')->where([
            ['group_id', $group_id],
            ['field_id', $field_id],
            ['node_id', $node_id],
        ])->orderBy('weight', 'asc')->get();
    }
}
