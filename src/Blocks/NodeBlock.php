<?php

declare(strict_types=1);

namespace Slate\Blocks;

/**
 * Node block data.
 */
class NodeBlock extends Block
{
    /**
     * {@inheritdoc}
     */
    public function build(): array
    {
        return [
          'item' => $this->config('node'),
          'name' => 'Node block',
        ];
    }
}
