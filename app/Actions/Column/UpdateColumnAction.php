<?php
namespace App\Actions\Column;

use App\Models\Column;

class UpdateColumnAction
{
    public static function execute($inputs,$slug)
    {
        $column=Column::where('slug',$slug)->FirstOrFail();

        $column->update([
            'title'=>$inputs->title,
            'board_id'=>$inputs->board_id

        ]);

        return $column;


    }
}
