<?php
namespace App\Actions\Team;
use App\Models\Team;

class GetAllTeamAction
{
    public static function execute()
    {
        $team=Team::all();
        return $team;
    }
}
