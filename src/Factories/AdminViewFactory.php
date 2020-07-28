<?php

declare(strict_types=1);

namespace Slate\Factories;

use Slate\Factories\AdminBlockFactory;
use Slate\Views\NodesView;
use Slate\Views\NodeView;
use Slate\Views\GroupsView;
use Slate\Views\GroupView;
use Twig\Environment;

/**
 * Create a new instance of a view.
 */
class AdminViewFactory
{
    /**
     * Twig environment.
     *
     * @var \Twig\Environment
     */
    protected $twig;

    /**
     * Block factory.
     *
     * @var \Slate\Factories\AdminBlockFactory
     */
    protected $block;

    /**
     * Class constructor.
     */
    public function __construct(Environment $twig, AdminBlockFactory $block)
    {
        $this->twig = $twig;
        $this->block = $block;
    }

    /**
     * Attempt to create the requested view.
     *
     * @return mixed
     */
    public function create(string $view)
    {
        return method_exists($this, $view) ? $this->{$view}() : null;
    }

    /**
     * Nodes view.
     */
    private function nodes(): NodesView
    {
        return new NodesView($this->twig, $this->block);
    }

    /**
     * Node view.
     */
    private function node(): NodeView
    {
        return new NodeView($this->twig, $this->block);
    }

    /**
     * Groups view.
     */
    private function groups(): GroupsView
    {
        return new GroupsView($this->twig, $this->block);
    }

    /**
     * Group view.
     */
    private function group(): GroupView
    {
        return new GroupView($this->twig, $this->block);
    }
}
