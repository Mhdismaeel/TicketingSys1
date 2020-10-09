<?php
namespace App\Actions\Team;
use App\Models\Team;

class UpdateTeamAction
{
    public static function execute($inputs,$slug)
    {
        $team=Team::where('slug',$slug)->FirstOrFail();

        $team->update([
            'name'=>$inputs->name,
            'description'=>$inputs->description
        ]);

        return $team;


    }


}
