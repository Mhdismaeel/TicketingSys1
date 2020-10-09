<?php
namespace App\Actions\User;
use App\Models\Role;
use App\User;
use Illuminate\Support\Facades\Gate;

class DeleteUserRoleAction
{
    public static function execute($userid)
    {
        $user=User::FindOrFail($userid);

        if(Gate::denies('delete-users'))
        {
            return false;
        }
        else
        {
        $user->roles()->detach();
        $user->delete();

        return true;
        }

    }


}
