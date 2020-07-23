<?php

namespace Slate\Entities;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'internal',
        'path',
        'link_id',
        'entity',
        'entity_id'
    ];
}
