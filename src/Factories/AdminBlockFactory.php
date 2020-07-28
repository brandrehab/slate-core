<?php

declare(strict_types=1);

namespace Slate\Factories;

use Slate\Blocks\HeadBlock;
use Slate\Blocks\NodesBlock;
use Slate\Blocks\NodeBlock;
use Slate\Blocks\GroupsBlock;
use Slate\Blocks\GroupBlock;

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
     * Head block.
     */
    private function head(array $config): HeadBlock
    {
        return new HeadBlock($config);
    }

    /**
     * Nodes block.
     */
    private function nodes(array $config): NodesBlock
    {
        return new NodesBlock($config);
    }

    /**
     * Node block.
     */
    private function node(array $config): NodeBlock
    {
        return new NodeBlock($config);
    }

    /**
     * Groups block.
     */
    private function groups(array $config): GroupsBlock
    {
        return new GroupsBlock($config);
    }

    /**
     * Group block.
     */
    private function group(array $config): GroupBlock
    {
        return new GroupBlock($config);
    }
}
