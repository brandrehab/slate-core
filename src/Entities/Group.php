<?php

namespace Slate\Entities;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'minimum',
        'maximum',
        'weight',
    ];

    /**
     * Get the nodetypes for the group.
     */
    public function nodetypes()
    {
        return $this->belongsToMany('Slate\Entities\Nodetype');
    }

    /**
     * Get the fields associated with this group.
     */
    public function fields()
    {
        return $this->hasMany('Slate\Entities\Field');
    }
}
