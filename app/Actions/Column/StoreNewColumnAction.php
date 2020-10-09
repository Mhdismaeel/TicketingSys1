<?php
namespace App\Actions\Column;

use App\Models\Column;

class StoreNewColumnAction
{
    public static function execute($inputs)
    {
        $column=Column::create([
            'title'=>$inputs->title,
            'board_id'=>$inputs->board_id

        ]);

        return $column;


    }
}
