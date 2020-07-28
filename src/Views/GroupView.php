<?php

declare(strict_types=1);

namespace Slate\Views;

use Slate\Entities\Group;
use Illuminate\Http\Response;

/**
 * Renders the group view.
 */
class GroupView extends View
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
    public function render(Group $group): Response
    {
        return new Response($this->wrapper->render([
            'head' => $this->block->create('head'),
            'group' => $this->block->create('group', ['group' => $group]),
        ]));
    }
}
