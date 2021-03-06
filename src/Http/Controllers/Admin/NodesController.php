<?php

declare(strict_types=1);

namespace Slate\Http\Controllers\Admin;

use Slate\Managers\NodeManager;
use Illuminate\Http\Response;

/**
 * Nodes controller.
 */
class NodesController extends Controller
{
    public function show(): Response
    {
        $view = $this->view->create('nodes');
        return $view->render(NodeManager::all());
    }

    public function edit(int $id): Response
    {
        $view = $this->view->create('node');
        return $view->render(NodeManager::find($id));
    }
}
