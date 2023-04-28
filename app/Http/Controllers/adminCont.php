<?php
namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Models\User;

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Notifications\AcceptanceNotification;


class adminCont extends Controller
{
    public function show(){
        $users=User::all();
        return view('showusers',compact('users'));
    }
    public function acceptUser(Request $request)
    {
        $userId = $request->input('userId');
        $user = User::find($userId);

        if ($user !== null) {
            $user->is_accepted = true;
            $user->save();
        } else {
            // handle the case where the user was not found
            // for example, show an error message or redirect to a different page
            return 'User not found';
        }
        return redirect('/admin/users');
    }
    public function Delete(Request $request,$id){
        $users=User::findOrFail($id);
        $users->delete();
        return redirect('admin/users');
    }
}
