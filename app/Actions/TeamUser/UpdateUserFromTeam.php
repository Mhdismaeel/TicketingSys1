<?php
namespace App\Actions\TeamUser;

use App\Models\Team;
use App\Models\Team_User;

class  UpdateUserFromTeam
{
    public static function execute($input,$teamid)
    {
        $team=Team::FindOrFail($teamid);

       // $team->delete();
       $team->users()->detach();


        $team->users()->sync($input->userid);

        return $team->users()->get();

    }


}
