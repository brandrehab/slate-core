<?php

declare(strict_types=1);

namespace Slate\Views;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Response;

/**
 * Renders the nodes view.
 */
class NodesView extends View
{
    /**
     * Twig template.
     *
     * @var string
     */
    const TEMPLATE = 'admin.html.twig';

    /**
     * Render a twig template.
     */
    public function render(Collection $nodes): Response
    {
        return new Response($this->wrapper->render([
            'head' => $this->block->create('head'),
            'nodes' => $this->block->create('nodes', ['nodes' => $nodes]),
        ]));
    }
}
