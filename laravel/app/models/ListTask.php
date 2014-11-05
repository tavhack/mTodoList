<?php

class ListTask extends Eloquent
{

    protected $fillable = array(
        'title',
        'delFlag'
    );

    public function tasks()
    {
       return $this->hasMany('Task');
    }
}