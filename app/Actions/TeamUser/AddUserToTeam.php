<?php
namespace App\Actions\TeamUser;

use App\Models\Team;
use App\Models\Team_User;

class  AddUserToTeam
{
    public static function execute($input)
    {
        $team=Team::FindOrFail($input->teamid);

        $team->users()->sync($input->userid);

        return $team->users()->get();


    }


}
