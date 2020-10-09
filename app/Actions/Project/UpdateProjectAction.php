<?php
namespace App\Actions\Project;

use App\Models\Project;

class UpdateProjectAction
{
    public static function execute($inputs,$id)
    {
        $project=Project::FindOrFail($id);

        $project->update([
            'title'=>$inputs->title,
            'description'=>$inputs->description,
            'team_id'=>$inputs->teamid
        ]);

        return $project;


    }
}
