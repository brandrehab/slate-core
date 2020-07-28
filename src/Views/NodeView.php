<?php

declare(strict_types=1);

namespace Slate\Views;

use App\Entities\Node;
use Illuminate\Http\Response;

/**
 * Renders the node view.
 */
class NodeView extends View
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
    public function render(Node $node): Response
    {
        return new Response($this->wrapper->render([
            'head' => $this->block->create('head'),
            'node' => $this->block->create('node', ['node' => $node]),
        ]));
    }
}
