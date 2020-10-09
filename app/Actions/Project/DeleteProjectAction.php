<?php
namespace App\Actions\Project;

use App\Models\Project;

class DeleteProjectAction
{
    public static function execute($id)
    {
        $project=Project::FindOrFail($id);

        $project->delete();

        return true;


    }
}
