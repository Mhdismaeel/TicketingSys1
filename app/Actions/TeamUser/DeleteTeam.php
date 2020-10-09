<?php
namespace App\Actions\TeamUser;

use App\Models\Team;
use App\Models\Team_User;

class  DeleteTeam
{
    public static function execute($teamid)
    {
        $team=Team::FindOrFail($teamid);

        $team->users()->detach();
        $team->delete();

        return true;





    }


}
