<?php

declare(strict_types=1);

namespace Slate\Blocks;

/**
 * Groups block data.
 */
class GroupsBlock extends Block
{
    /**
     * {@inheritdoc}
     */
    public function build(): array
    {
        return [
          'items' => $this->config('groups'),
          'name' => 'Groups block',
        ];
    }
}
