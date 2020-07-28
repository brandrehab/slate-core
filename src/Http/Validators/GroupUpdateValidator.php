<?php

declare(strict_types=1);

namespace Slate\Http\Validators;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rule;

class GroupUpdateValidator
{
    public static function passes(Request $request, int $id): bool
    {
        $validator = Validator::make($request->all(), [
            'name' => [
              'required',
              'max:100',
              Rule::unique('groups')->ignore($id),
            ],
            'description' => [
              'required',
              'max:200',
            ],
            'minimum' => [
              'required',
              'integer',
              'min:0',
            ],
            'maximum' => [
              'required',
              'integer',
              'min:0',
            ],
        ]);

        if ($validator->fails()) {
            $request->request->set('errors', $validator->errors()->messages());
            $request->flash();
            return false;
        }

        return true;
    }

    public static function fails(Request $request, int $id): bool
    {
        return !self::passes($request, $id);
    }
}
