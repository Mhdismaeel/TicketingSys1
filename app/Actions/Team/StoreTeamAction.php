<?php
namespace App\Actions\Team;

use App\Models\Team;

class StoreTeamAction
{
    public static function execute($inputs)
    {
        return Team::create([
            'name'=>$inputs->name,
            'description'=>$inputs->description
        ]);

    }

}
