<?php

namespace Slate\Entities;

use Slate\Traits\GroupTrait;
//use App\Traits\SeoGroupTrait;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

abstract class Node extends Model
{
    use GroupTrait;
    //use SeoGroupTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'heading',
        'slug',
        'nodetype_id',
    ];

    /**
     * Get the nodetype that owns this node.
     */
    public function nodetype()
    {
        return $this->belongsTo('Slate\Entities\NodeType');
    }

    /**
     * Set the slug for this node.
     */
    public function setSlugAttribute($value)
    {
        return Str::slug($value, '-');
    }
}
