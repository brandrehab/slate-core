<?php

declare(strict_types=1);

namespace Slate\Factories;

use Slate\Blocks\NodesBlock;
use Slate\Blocks\GroupsBlock;

/**
 * Create a new instance of a block.
 */
class AdminBlockFactory implements BlockFactoryInterface
{
    /**
     * Attempt to create the requested block.
     *
     * @return mixed
     */
    public function create(string $block, ?array $config = [])
    {
        return method_exists($this, $block) ? $this->{$block}($config)->build() : null;
    }

    /**
     * Nodes block.
     */
    private function nodes(array $config): NodesBlock
    {
        return new NodesBlock($config);
    }

    /**
     * Groups block.
     */
    private function groups(array $config): GroupsBlock
    {
        return new GroupsBlock($config);
    }
}
