<?php

declare(strict_types=1);

namespace Slate\Http\Controllers\Admin;

use Slate\Managers\GroupManager;
use Slate\Http\Validators\GroupUpdateValidator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;

/**
 * Groups controller.
 */
class GroupsController extends Controller
{
    /**
     * Groups index.
     */
    public function show(): Response
    {
        $view = $this->view->create('groups');
        return $view->render(GroupManager::all());
    }

    /**
     * Group edit.
     */
    public function edit(int $id): Response
    {
        $view = $this->view->create('group');
        return $view->render(GroupManager::find($id));
    }

    /**
     * Group update.
     */
    public function update(Request $request, int $id): RedirectResponse
    {
        if (GroupUpdateValidator::fails($request, $id)) {
            return redirect()->route('admin.group.get', ['id' => $id]);
        }

        $group = GroupManager::find($id);
        $group->update($request->all());

        $request->session()->flash('msg', 'The ' . $group->name . ' Group was successfully updated.');

        return redirect()->route('admin.group.get', ['id' => $id]);
    }

    /**
     * Groups reorder.
     */
    public function reorder(Request $request): JsonResponse
    {
        foreach ($request->ids as $weight => $group_id) {
            $group = GroupManager::find($group_id);
            $group->update(['weight' => $weight]);
        }

        return new JsonResponse(['status' => 'ok'], 200);
    }
}
