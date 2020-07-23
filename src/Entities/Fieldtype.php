<?php

namespace Slate\Entities;

use Illuminate\Database\Eloquent\Model;

class Fieldtype extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Get the fields associated with this fieldtype.
     */
    public function fields()
    {
        return $this->hasMany('Slate\Entities\Field');
    }
}
