<?php

declare(strict_types=1);

namespace Slate\Blocks;

/**
 * Group block data.
 */
class GroupBlock extends Block
{
    /**
     * {@inheritdoc}
     */
    public function build(): array
    {
        return [
          'item' => $this->config('group'),
          'name' => 'Group block',
        ];
    }
}
