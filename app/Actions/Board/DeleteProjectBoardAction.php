<?php
namespace App\Actions\Board;
use App\Models\Board;

class DeleteProjectBoardAction
{
    public static function execute($slug)
    {
        $board=Board::where('slug',$slug)->FirstOrFail();

        $board->delete();

        return true;

    }

}
