<?php

declare(strict_types=1);

namespace Slate\Blocks;

/**
 * Nodes block data.
 */
class NodesBlock extends Block
{
    /**
     * {@inheritdoc}
     */
    public function build(): array
    {
        return [
          'items' => $this->config('nodes'),
          'name' => 'Nodes block',
        ];
    }
}
