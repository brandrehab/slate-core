<?php

namespace Slate\Entities;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
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
     * Get the nodes for the nodetype.
     */
    public function nodes()
    {
        return $this->hasMany('Slate\Entities\Link');
    }
}
