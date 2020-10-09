<?php
namespace App\Actions\Project;

use App\Models\Project;

class StoreNewProjectAction
{
    public static function execute($inputs)
    {

        if($inputs->team_id==null)
        {
           $project=Project::create([
            'title'=>$inputs->title,
            'description'=>$inputs->description,
            'team_id'=>'1'
        ]);

        }
        else
        {
            $project=Project::create([
                'title'=>$inputs->title,
                'description'=>$inputs->description,
                'team_id'=>$inputs->team_id
            ]);

        }

        return $project;


    }
}
