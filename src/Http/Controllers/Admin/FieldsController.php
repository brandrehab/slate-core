<?php

declare(strict_types=1);

namespace Slate\Http\Controllers\Admin;

use Slate\Managers\FieldManager;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;

/**
 * Fields controller.
 */
class FieldsController extends Controller
{
    /**
     * Fields reorder.
     */
    public function reorder(Request $request): JsonResponse
    {
        foreach ($request->ids as $weight => $field_id) {
            $field = FieldManager::find($field_id);
            $field->update(['weight' => $weight]);
        }

        return new JsonResponse(['status' => 'ok'], 200);
    }
}
