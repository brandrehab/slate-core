<?php

declare(strict_types=1);

namespace Slate\Factories;

/**
 * Block factory interface.
 */
interface BlockFactoryInterface
{
    /**
    * Attempt to create the requested block.
    *
    * @return mixed
    */
    public function create(string $block, ?array $config = []);
}
