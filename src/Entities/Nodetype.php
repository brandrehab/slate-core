<?php

namespace Slate\Entities;

use Illuminate\Database\Eloquent\Model;

class Nodetype extends Model
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
        return $this->hasMany('App\Entities\Node');
    }

    /**
     * Get the groups for the nodetype.
     */
    public function groups()
    {
        return $this->belongsToMany('Slate\Entities\Group');
    }
}
