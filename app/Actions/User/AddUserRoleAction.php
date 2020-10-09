<?php
namespace App\Actions\User;
use App\Models\Role;
use App\User;
use App\Http\Requests\UserRole\UpdateUserRoleRequest;
use Illuminate\Support\Facades\Gate;

class AddUserRoleAction
{
    public static function execute(UpdateUserRoleRequest $requset)
    {
        if(Gate::denies('edit-users'))
        {
            return "Not have Admin permission.";
        }
        else
        {


        $users=User::FindOrFail($requset->userid);

        $users->roles()->sync($requset->roleid);

        return $users->roles()->get();
        }

    }
}
