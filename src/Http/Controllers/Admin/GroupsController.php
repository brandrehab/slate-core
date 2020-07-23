<?php

namespace Slate\Http\Controllers\Admin;

use Slate\Entities\Group;
use Slate\Http\Controllers\Controller;
use Illuminate\Http\Response;

class GroupsController extends Controller
{
    /**
     * @todo currently broken due to the inclusion of App\Views.
     */
    public function show()
    {
        $groups = Group::all();

        $template = $this->twig->load('admin.html.twig');

        return new Response($template->render([
            'groups' => $this->block->create('adminGroups', ['groups' => $groups]),
        ]));
    }
}
