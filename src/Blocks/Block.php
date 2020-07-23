<?php

declare(strict_types=1);

namespace Slate\Blocks;

/**
 * Base class for template blocks.
 */
abstract class Block
{
    /**
     * Block configuration data.
     *
     * @var array
     */
    protected $config;

    /**
     * Class constructor.
     */
    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    /**
     * Get an array of variables to be passed to the template.
     */
    abstract public function build(): array;

    /**
     * Get a config value.
     *
     * @return mixed
     */
    protected function config(string $key)
    {
        return array_key_exists($key, $this->config) ? $this->config[$key] : null;
    }
}
