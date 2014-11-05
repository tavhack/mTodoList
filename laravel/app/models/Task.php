<?php

class Task extends Eloquent
{

//     protected $fillable = array('title', 'description');
    protected $table = 'tasks';

    public function listtasks()
    {
        return $this->belongsTo('ListTask','listtasks','idList');
    }
}