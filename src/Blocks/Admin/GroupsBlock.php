<?php

declare(strict_types=1);

namespace Slate\Blocks\Admin;

use Slate\Blocks\Block;

/**
 * Admin groups block data.
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
          'name' => 'Admin groups block',
        ];
    }
}
