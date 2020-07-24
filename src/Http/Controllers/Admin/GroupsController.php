<?php

declare(strict_types=1);

namespace Slate\Http\Controllers\Admin;

use Slate\Managers\GroupManager;
use Illuminate\Http\Response;

/**
 * Groups controller.
 */
class GroupsController extends Controller
{
    public function show(): Response
    {
        $view = $this->view->create('groups');
        return $view->render(GroupManager::all());
    }
}
