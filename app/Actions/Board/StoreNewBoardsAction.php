<?php
namespace App\Actions\Board;
use App\Models\Board;

class StoreNewBoardsAction
{
    public static function execute($inputs)
    {
        $board=Board::create([
            'title'=>$inputs->title,
            'description'=>$inputs->description,
            'project_id'=>$inputs->project_id
        ]);

        return $board;

    }

}
