<?php
namespace App\Actions\Team;
use App\Models\Team;

class DeleteTeamAction
{
    public static function execute($slug)
    {
        $team=Team::where('slug',$slug)->FirstOrFail();
        $team->delete();
        return true;
    }
}
