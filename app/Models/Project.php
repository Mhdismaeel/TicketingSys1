<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable=['title','description','team_id'];

    public  function teams()
    {
        return $this->belongsTo('App\Models\Team');
    }

    public function boards()
    {
        return $this->hasMany('App\Models\Board');
    }

}
