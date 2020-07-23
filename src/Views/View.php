<?php

declare(strict_types=1);

namespace Slate\Views;

use App\Factories\BlockFactory;
use Twig\Environment;
use Twig\TemplateWrapper;

/**
 * Base class for rendering views.
 */
abstract class View
{
    /**
     * Twig environment.
     *
     * @var \Twig\TemplateWrapper
     */
    protected $wrapper;

    /**
     * Block factory.
     *
     * @var \App\Factories\BlockFactory
     */
    protected $block;

    /**
     * Class constructor.
     */
    public function __construct(Environment $twig, BlockFactory $block)
    {
        $this->wrapper = $twig->load(static::TEMPLATE);
        $this->block = $block;
    }
}
