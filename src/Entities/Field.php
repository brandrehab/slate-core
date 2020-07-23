<?php

namespace Slate\Entities;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'group_id',
        'fieldtype_id',
        'minimum',
        'maximum',
        'weight',
    ];

    /**
     * Get the group associated with this field.
     */
    public function group()
    {
        return $this->belongsTo('Slate\Entities\Group');
    }

    /**
     * Get the fieldtype associated with this field.
     */
    public function fieldtype()
    {
        return $this->belongsTo('Slate\Entities\Fieldtype');
    }

    /**
     * Get text values associated with this field.
     */
    public function texts()
    {
        return $this->hasMany('Slate\Entities\Text');
    }
}
