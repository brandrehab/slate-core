<?php

declare(strict_types=1);

namespace Slate\Views;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Response;

/**
 * Renders the groups view.
 */
class GroupsView extends View
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
    public function render(Collection $groups): Response
    {
        return new Response($this->wrapper->render([
            'groups' => $this->block->create('groups', ['groups' => $groups]),
        ]));
    }
}
