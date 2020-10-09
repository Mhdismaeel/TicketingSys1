<?php
namespace App\Actions\Project;

use App\Models\Project;

class GetAllProjectAction
{
    public static function execute()
    {
        $project=Project::all();

        return $project;


    }
}
