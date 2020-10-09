<?php
namespace App\Actions\Column;

use App\Models\Column;

class DeleteColumnAction
{
    public static function execute($slug)
    {
        $Column=Column::where('slug',$slug)->FirstOrFail();

        $Column->delete();
        return true;

    }
}
