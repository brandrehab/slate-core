<?php

namespace Slate\Entities;

use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'group_id',
        'field_id',
        'node_id',
        'weight',
        'value',
    ];

    /**
     * Get field associated with this text.
     */
    public function field()
    {
        return $this->belongsTo('Slate\Entities\Field');
    }
}
