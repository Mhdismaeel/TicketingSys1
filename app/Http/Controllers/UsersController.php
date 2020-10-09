<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\HelpersFolder\ApiHelpers;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\Orderbook;
use App\Models\ResultModel;
use App\Actions\User\GetUserProfile;
use App\Actions\User\GetOrderForProfileUser;
use App\Actions\Helper\Fail;
use App\Actions\Helper\Success;
use App\Http\Requests\UserRole\UpdateUserRoleRequest;
use App\Actions\User\AddUserRoleAction;
use App\Actions\User\DeleteUserRoleAction;
use App\Actions\User\VerificationUserAction;
class UsersController extends Controller
{
   public function GetUserProfile()
   {
      $response=GetUserProfile::execute();
      if($response)
      {
          return Success::execute('Record(s) fetched successfully',$response,2000);

      }
      else
      {
        return Fail::execute('Record(s) can not be fetched',$response,3000);

      }

   }




   public function UpdateUserRole(UpdateUserRoleRequest $requset)
   {
       $response=AddUserRoleAction::execute($requset);
       if ($response && $response!="Not have Admin permission.")
       {
           return Success::execute('Record Updated',$response,2002);

       }
       else
       {
        return Fail::execute('Record can not be updated',$response,3002);

       }

   }

   public function DeleteUserRole($userid)
   {
       $response=DeleteUserRoleAction::execute($userid);

       if ($response!=false)
       {
           return Success::execute('Record Deleted',$response,2003);

       }
       else
       {
        return Fail::execute('Record can not be deleted',$response,3003);

       }
    }

    public function VerificationUser($mail)
    {
        $response=VerificationUserAction::execute($mail);
        if($response)
        {
            //return Success::execute('User_Verified',$response);

            return redirect('https://testing.testhis.link/');

        }
        else
        {
            return Fail::execute('User_Verified_error',$response);

        }
    }

}
