<?php
namespace App\Actions\Board;
use App\Models\Board;

class UpdateBoardsAction
{
    public static function execute($inputs,$slug)
    {
        $board=Board::where('slug',$slug)->FirstOrFail();

        $board->update([
            'title'=>$inputs->title,
            'description'=>$inputs->description,
            'project_id'=>$inputs->project_id
        ]);

        return $board;

    }

}
