<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Item extends Model
{
    protected $fillable = ['name', 'parent_id'];

    /**
     * Return Parent form child category
     * 
    * @var $id - Child Item ID
    * @return App\Item
    */
    public function parent(){
        return $this->where('id', $this->parent_id)->first();
    }

    /**
     * Return Child Item from Parent Item
     * 
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function childs(){
        return $this->hasMany('App\Item', 'parent_id');
    }

    /**
     * Return Items of a Child Item
     * 
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function childItems(){
        return $this->hasMany('App\Item', 'parent_id')->with('childs');
    }
}
